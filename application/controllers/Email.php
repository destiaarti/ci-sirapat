<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Email extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Email_model');
        $this->load->library('form_validation');
        chek_session();
    }

    public function index() {
        $email = $this->Email_model->get_all();
 
        $data = array(
            'email_data' => $email
        );

        $this->template->display('email/tb_email_list', $data);
    }

    public function read($id) {
        $row = $this->Email_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id_email' => $row->id_email,
                'penerima' => $row->penerima,
				  'judul' => $row->judul,
                'isi' => $row->isi,
                'lampiran' => $row->lampiran,
            );
            $this->template->display('email/tb_email_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('email'));
        }
    }

    public function create() {
        $data = array(
            'button' => 'Create',
            'action' => site_url('email/create_action'),
            'id_email' => set_value('id_email'),
            'penerima' => set_value('penerima'),
			   'judul' => set_value('judul'),
            'isi' => set_value('isi'),
            'lampiran' => set_value('lampiran'),
			'email' => set_value('email'),
            'uid' => $this->session->userdata('user_id'),
        );
        $this->template->display('email/tb_email_form', $data);
    }

    public function create_action() {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'penerima' => $this->input->post('penerima', TRUE),
  'judul' => $this->input->post('judul', TRUE),              
			  'isi' => $this->input->post('isi', TRUE),
                'lampiran' => $this->input->post('lampiran', TRUE),
				    'email' => $this->input->post('email', TRUE),
         
            );

            $this->Email_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('email'));
        }
    }

    public function update($id) {
        $row = $this->Email_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('email/update_action'),
                'id_email' => set_value('id_email', $row->id_email),
                'penerima' => set_value('penerima', $row->penerima),
				'judul' => set_value('judul', $row->judul),
                'isi' => set_value('isi', $row->isi),
                'lampiran' => set_value('lampiran', $row->lampiran),
			
            );
            $this->template->display('email/tb_email_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('email'));
        }
    }

    public function update_action() {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_email', TRUE));
        } else {
            $data = array(
                'penerima' => $this->input->post('penerima', TRUE),
                'isi' => $this->input->post('isi', TRUE),
                'lampiran' => $this->input->post('lampiran', TRUE),
			
            );

            $this->Email_model->update($this->input->post('id_email', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('email'));
        }
    }

    public function delete($id) {
        $row = $this->Email_model->get_by_id($id);

        if ($row) {
            $this->Email_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('email'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('email'));
        }
    }

    public function _rules() {
        $this->form_validation->set_rules('penerima', 'nama email', 'trim|required');
        $this->form_validation->set_rules('isi', 'isi', 'trim|required');


        $this->form_validation->set_error_delimiters('<span class="text-red">', '</span>');
    }

    public function excel() {
        $this->load->helper('exportexcel');
        $namaFile = "tb_email.xls";
        $judul = "tb_email";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
        xlsWriteLabel($tablehead, $kolomhead++, "Nama email");
		        xlsWriteLabel($tablehead, $kolomhead++, "Jabatan");
        xlsWriteLabel($tablehead, $kolomhead++, "isi");
        xlsWriteLabel($tablehead, $kolomhead++, "No Telp");
	

        foreach ($this->Email_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->penerima);
			       xlsWriteLabel($tablebody, $kolombody++, $data->judul);
            xlsWriteLabel($tablebody, $kolombody++, $data->isi);
            xlsWriteLabel($tablebody, $kolombody++, $data->lampiran);
		


            $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file email.php */
/* Location: ./application/controllers/email.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-14 11:09:25 */
/* http://harviacode.com */
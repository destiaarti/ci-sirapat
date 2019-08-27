<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Status extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Status_model');
        $this->load->model('Log_model');
		  $this->load->library('pdf');
        $this->load->library('form_validation');
        chek_session();
    }

    public function index() {
		$id = $this->session->userdata('user_id');
				      $subi1 = $this->session->userdata('group_id');
					  $get3 =$this->db->get_where("tb_users_groups",array("user_id" =>$id))->row();
					  	$tanggal1 = $get3->group_id;
                if ($tanggal1=="1") {
        $status = $this->Status_model->get_all();

        $data = array(
            'status_data' => $status
        );

        $this->template->display('status/tb_status_list', $data);
				}else{
					  return show_error('Harus Login sebagai admin untuk mengakses halaman ini');
				}
    }
	
	    function cetak() {
			$data1 = array(
              
              
                      'crud' => "mencetak",
                      'menu' => "data status anggota",
            'datetime' => date("Y-m-d H:i:s"),
          

                'user' => 	$this->session->userdata('user_id'),
         
            );
      $this->Log_model->insert($data1);
        $status = $this->Status_model->get_all();

        $data = array(
            'status_data' => $status
        );

        $this->template->display('status/tb_status_cetak', $data);
    }
	 function word3() {
		 	$data1 = array(
              
              
                      'crud' => "mengunduh word",
                      'menu' => "data status anggota",
            'datetime' => date("Y-m-d H:i:s"),
          

                'user' => 	$this->session->userdata('user_id'),
         
            );
			      $this->Log_model->insert($data1);
        $status = $this->Status_model->get_all();

        $data = array(
            'status_data' => $status
        );

           $this->load->view("status/tb_status_word", $data);
    }

    public function read($id) {
        $row = $this->Status_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'status' => $row->status,
				    'deskripsi' => $row->deskripsi,
            );
            $this->template->display('status/tb_status_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('status'));
        }
    }

    public function create() {
		$id = $this->session->userdata('user_id');
				      $subi1 = $this->session->userdata('group_id');
					  $get3 =$this->db->get_where("tb_users_groups",array("user_id" =>$id))->row();
					  	$tanggal1 = $get3->group_id;
                if ($tanggal1=="1") {
        $data = array(
            'button' => 'Simpan',
            'action' => site_url('status/create_action'),
            'id' => set_value('id'),
            'status' => set_value('status'),
                   'deskripsi' => set_value('deskripsi'),
        );
        $this->template->display('status/tb_status_form', $data);
			}else{
					  return show_error('Harus Login sebagai admin untuk mengakses halaman ini');
				}
    }

    public function create_action() {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'status' => $this->input->post('status', TRUE),
                'deskripsi' => $this->input->post('deskripsi', TRUE),            
            );

            $this->Status_model->insert($data);
	
			$data1 = array(
              
              
                      'crud' => "menambah",
                      'menu' => "status anggota",
            'datetime' => date("Y-m-d H:i:s"),
          

                'user' => 	$this->session->userdata('user_id'),
         
            );

            $this->Log_model->insert($data1);
           echo $this->session->set_flashdata('Tambah', ' Berhasil Menambah data....');
            redirect(site_url('status'));
        }
    }

    public function update($id) {
	
        $row = $this->Status_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('status/update_action'),
                'id' => set_value('id', $row->id),
                'status' => set_value('status', $row->status),
				   'deskripsi' => set_value('status', $row->deskripsi),
            );
            $this->template->display('status/tb_status_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('status'));
        }
			
    }

    public function update_action() {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'status' => $this->input->post('status', TRUE),
				    'deskripsi' => $this->input->post('deskripsi', TRUE),
            );

            $this->Status_model->update($this->input->post('id', TRUE), $data);
		
			$data1 = array(
              
              
                      'crud' => "mengedit",
                      'menu' => "status anggota",
            'datetime' => date("Y-m-d H:i:s"),


                'user' =>	$this->session->userdata('user_id'),
          
            );

            $this->Log_model->insert($data1);
             echo $this->session->set_flashdata('Edit', ' Berhasil Mengedit data....');
            redirect(site_url('status'));
        }
    }

    public function _rules() {
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
	 function pdf(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(180,7,'Data Status Anggota Rapat ',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(180,7,'SMPN 1 Ungaran',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'No.',1,0);
        $pdf->Cell(32,6,'Status Pegawai',1,0);
        $pdf->Cell(140,6,'Deskripsi',1,1);
  
        $pdf->SetFont('Arial','',10);
        $status = $this->db->get('status')->result();
			$no=1;
        foreach ($status as $row){
		
            $pdf->Cell(20,6,$no++,1,0);
            $pdf->Cell(32,6,$row->status,1,0);
            $pdf->Cell(140,6,$row->deskripsi,1,1);
         
        }
        $pdf->Output();
			$data1 = array(
              
              
                      'crud' => "mengunduh pdf",
                      'menu' => "data status anggota",
            'datetime' => date("Y-m-d H:i:s"),
          

                'user' => 	$this->session->userdata('user_id'),
         
            );
			      $this->Log_model->insert($data1);
    }

   
	 function excel() {
		 	$data1 = array(
              
              
                      'crud' => "mengunduh excel",
                      'menu' => "data status anggota",
            'datetime' => date("Y-m-d H:i:s"),
          

                'user' => 	$this->session->userdata('user_id'),
         
            );
      $this->Log_model->insert($data1);
        $this->load->helper('exportexcel');
        $namaFile = "status.xls";
        $judul = "Data Status Anggota Rapat SMPN 1 Ungaran";
      $tablehead = 2;
//baris berapa data mulai di tulis
$tablebody = 3;
//no urut data
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
		
xlsWriteLabel(0,0,$judul);  
        $kolomhead = 0;

        xlsWriteLabel($tablehead, $kolomhead++, "No");
        xlsWriteLabel($tablehead, $kolomhead++, "status pegawai");
		        xlsWriteLabel($tablehead, $kolomhead++, "deskripsi");

             foreach ($this->Status_model->get_all() as $data) {
            $kolombody = 0;


            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->status);
			       xlsWriteLabel($tablebody, $kolombody++, $data->deskripsi);



            $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }


}

/* End of file status.php */
/* Location: ./application/controllers/status.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-14 11:06:57 */
/* http://harviacode.com */
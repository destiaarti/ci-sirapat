<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Grouped extends CI_Controller {

    function __construct() {
        parent::__construct();
  
        $this->load->model('Grouped_model');
        $this->load->model('Log_model');
		  $this->load->library('pdf');
        $this->load->library('form_validation');
        chek_session();
    }

    public function index() {   
 $data['ion1'] = $this->Grouped_model->get_transaksi1();	
        $this->template->display('grouped/tb_grouped_list',$data);
    }

  

  

    public function read($id) {
        $row = $this->Member_model->get_by_id($id);
 
        if ($row) {
            $data = array(
                'id' => $row->id,
                'user_id' => $row->user_id,
                'group_id' => $row->group_id,
		
										   	
            );
		  
     
            $data['ion'] = $this->db->get_where('tb_users', array('id' => $row->user_id))->row_array();
         
            $this->template->display('grouped/tb_grouped_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('grouped'));
        }
    }
public function create() {
 
        $data = array(
           'button' => 'Simpan',
            'action' => site_url('grouped/create_action'),
            'id' => set_value('id'),
            'user_id' => set_value('user_id'),
            'group_id' => set_value('group_id'),

            );
			   $data['ion'] = $this->db->get_where('tb_users')->result();
			   $data['ion1'] = $this->db->get_where('tb_groups')->result();

	
        $this->template->display('grouped/tb_grouped_form', $data);
    }

    public function create_action() {
        $this->_rules();
     
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                   'user_id' => $this->input->post('user_id', TRUE),
                'group_id' => $this->input->post('group_id', TRUE),
          
            );

            $this->Grouped_model->insert($data);
			$data1 = array(
              
              
                      'crud' => "menambah",
                      'menu' => "user hak akses",
            'datetime' => date("Y-m-d H:i:s"),
 

                'user' => 	$this->session->userdata('user_id'),
         
            );
      $this->Log_model->insert($data1);	
			
				
           echo $this->session->set_flashdata('Tambah', ' Berhasil Menambah data....');
            redirect(site_url('grouped'));
        }
    }

    public function update($id) {
        $row = $this->Grouped_model->get_by_id($id);

        if ($row) {
            $data = array(
              'button' => 'Update',
                'action' => site_url('grouped/update_action'),
                'id' => set_value('id', $row->id),
                'user_id' => set_value('user_id', $row->user_id),

                'group_id' => set_value('group_id', $row->group_id),
             
            
 
            );

			   $data['ion'] = $this->db->get_where('tb_users')->result();
			   $data['ion1'] = $this->db->get_where('tb_groups')->result();

            $this->template->display('grouped/tb_grouped_edit', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('grouped'));
        }
    }

    public function update_action() {
      $this->_rules1();
        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                 'group_id' => $this->input->post('group_id', TRUE),
                
            );

            $this->Grouped_model->update($this->input->post('id', TRUE), $data);
			$data1 = array(
              
              
                      'crud' => "mengedit",
                      'menu' => "user hak akses",
            'datetime' => date("Y-m-d H:i:s"),
     

                'user' => 	$this->session->userdata('user_id'),
         
            );
      $this->Log_model->insert($data1);	
   echo $this->session->set_flashdata('Edit', ' Berhasil Mengedit data....');
            redirect(site_url('grouped'));
        }
    }

	
    public function delete($id) {
        $row = $this->Member_model->get_by_id($id);

        if ($row) {
            $this->Member_model->delete($id);
			$data1 = array(
              
              
                      'crud' => "menghapus",
                      'menu' => "user hak akses",
            'datetime' => date("Y-m-d H:i:s"),
      

                'user' => 	$this->session->userdata('user_id'),
         
            );
      $this->Log_model->insert($data1);	
               echo $this->session->set_flashdata('Hapus', ' Berhasil Menghapus data....');
            redirect(site_url('grouped'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('grouped'));
        }
    }

    
    
 function _rules() {
   $this->form_validation->set_message('is_unique', '%s Sudah Ada');
        $this->form_validation->set_rules('group_id', 'hak akses', 'trim|required');
        $this->form_validation->set_rules('user_id', 'username', 'trim|required|is_unique[tb_users_groups.user_id]');



        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
	 function _rules1() {

        $this->form_validation->set_rules('group_id', 'hak akses', 'trim|required');
    



        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

  
  

}

/* End of file grouped.php */
/* Location: ./application/controllers/grouped.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-14 11:11:34 */
/* http://harviacode.com */
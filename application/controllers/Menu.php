<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        	    $this->load->model('Log_model');
    }
    
    function index() {     
if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
            return show_error('Harus Login sebagai admin untuk mengakses halaman ini');
        }else{    	
        $data['record']=  $this->db->get('tb_menu')->result();
    
		
        $this->template->display('menu/view',$data);}
    }
    
    function add() {
		if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
            return show_error('Harus Login sebagai admin untuk mengakses halaman ini');
        }else{    	
			   $data['groups'] = $this->db->get_where('tb_groups')->result();
        if(isset($_POST['submit'])) {
		
            $data   =   array(  'nama_menu' =>  $_POST['nama'],
								'role'      =>  $_POST['role'],
                                'link'      =>  $_POST['link'],
                                'icon'      =>  $_POST['icon'],
                                'parent'  =>  $_POST['kat_menu']);
            $this->db->insert('tb_menu',$data);
			$data1 = array(
              
              
                      'crud' => "menambah",
                      'menu' => "menu",
            'datetime' => date("Y-m-d H:i:s"),
          

                'user' => 	$this->session->userdata('user_id'),
         
            );
      $this->Log_model->insert($data1);	
						    echo $this->session->set_flashdata('Tambah', ' Berhasil Menambah data....');	
            redirect('menu');
        }
        else {
            $data['record']=$this->db->get_where('tb_menu', array('parent' =>0))->result();            
            $this->template->display('menu/tambah',$data);
        }}
    }
    
    function edit()
    {			
if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
            return show_error('Harus Login sebagai admin untuk mengakses halaman ini');
        }else{    	
		$data['groups'] = $this->db->get_where('tb_groups')->result();
        if(isset($_POST['submit']))
        {
            $data   =   array(  'nama_menu' =>  $_POST['nama'],
								'role'      =>  $_POST['role'],
								
                                'link'      =>  $_POST['link'],
                                'icon'      =>  $_POST['icon'],
                                'parent'  =>  $_POST['kat_menu']);

            $this->db->where('id_menu',$_POST['id']);
            $this->db->update('tb_menu',$data);
			$data1 = array(
              
              
                      'crud' => "mengedit",
                      'menu' => "menu",
            'datetime' => date("Y-m-d H:i:s"),
          

                'user' => 	$this->session->userdata('user_id'),
         
            );
      $this->Log_model->insert($data1);	
				   echo $this->session->set_flashdata('Edit', ' Berhasil Mengedit data....');
            redirect('menu');
        }
        else {
            $id= $this->uri->segment(3);
            $data['record']=  $this->db->get_where('tb_menu',array('id_menu'=> $id))->row_array();
            $data['katmenu']=$this->db->get_where('tb_menu', array('parent' =>0))->result(); 
            $this->template->display('menu/edit',$data);
        }}
    }
    
    
    function delete($id){
        $this->db->where('id_menu',$id);
        $this->db->delete('tb_menu');
		$data1 = array(
              
              
                      'crud' => "menghapus",
                      'menu' => "menu",
            'datetime' => date("Y-m-d H:i:s"),
          

                'user' => 	$this->session->userdata('user_id'),
         
            );
      $this->Log_model->insert($data1);	
		  echo $this->session->set_flashdata('Hapus', ' Berhasil Menghapus data....');
        redirect('menu');
    }
}
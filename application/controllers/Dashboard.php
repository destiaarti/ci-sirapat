<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array( 'Status_model', 'Member_model', 'Jadwal_model', 'Hasil_model','Download_model','Ion_auth_model'));
        chek_session();
    }

    function index() {
        $data['title'] = "Home";

         $id = $this->session->userdata('user_id');
				      $subi1 = $this->session->userdata('group_id');
					  $get3 =$this->db->get_where("tb_users_groups",array("user_id" =>$id))->row();
					  	$tanggal1 = $get3->group_id;
                if ($tanggal1=="1") {
            $data['user'] = $this->db->get('tb_users')->num_rows();
			   $data['member1'] = $this->Member_model->get_last_transaksi();
			           $data['member'] = $this->db->get('member')->num_rows();
			      
					              $data['status'] = $this->db->get('status')->num_rows();
								             $data['jadwal'] = $this->db->get('jadwal')->num_rows();
											  $data['hasil'] = $this->db->get('hasil')->num_rows();
											  $data['akses'] = $this->db->get('tb_users_groups')->num_rows();
								         
       $data['hasil1'] = $this->Hasil_model->get_hasil1();
            $data['jadwal1'] = $this->Jadwal_model->get_last_transaksi();
            $data['download1'] = $this->Download_model->get_last_transaksi();
			
		
            $this->template->display('dashboard/admin', $data);
			
				}else if ($tanggal1=="2") {
  
            $data['user'] = $this->db->get('tb_users')->num_rows();
			   $data['member1'] = $this->Member_model->get_last_transaksi();
			           $data['member'] = $this->db->get('member')->num_rows();
					              $data['status'] = $this->db->get('status')->num_rows();
								             $data['jadwal'] = $this->db->get('jadwal')->num_rows();
											     $data['files'] = $this->db->get('tbl_files')->num_rows();
											     $data['hasil'] = $this->db->get('hasil')->num_rows();
       $data['hasil1'] = $this->Hasil_model->get_hasil1();
            $data['jadwal1'] = $this->Jadwal_model->get_last_transaksi();
            $data['download1'] = $this->Download_model->get_last_transaksi();
            $this->template->display('dashboard/member', $data);
        }
		else  {
  
            $data['user'] = $this->db->get('tb_users')->num_rows();
			   $data['member1'] = $this->Member_model->get_last_transaksi();
			           $data['member'] = $this->db->get('member')->num_rows();
					              $data['status'] = $this->db->get('status')->num_rows();
								             $data['jadwal'] = $this->db->get('jadwal')->num_rows();
											     $data['files'] = $this->db->get('tbl_files')->num_rows();
											     $data['hasil'] = $this->db->get('hasil')->num_rows();
       $data['hasil1'] = $this->Hasil_model->get_hasil1();
            $data['jadwal1'] = $this->Jadwal_model->get_last_transaksi();
            $data['download1'] = $this->Download_model->get_last_transaksi();
            $this->template->display('dashboard/sekretaris', $data);
        }
    }

}

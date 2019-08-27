<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Member extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Member_model');
        $this->load->model('Ion_auth_model');
        $this->load->model('Log_model');
		  $this->load->library('pdf');
        $this->load->library('form_validation');
        chek_session();
    }

    public function index() { 
	if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
            return show_error('Harus Login sebagai admin untuk mengakses halaman ini');
        }else{    
		     $data['ion1'] = $this->Member_model->get_transaksi();	
        $this->template->display('member/tb_member_list',$data);}
    }

    public function liat() {
        $this->template->display('member/tb_member_liat');
    }
	    public function cetak() {
			$data1 = array(
              
              
                      'crud' => "mencetak",
                      'menu' => "data anggota",
            'datetime' => date("Y-m-d H:i:s"),
            

                'user' => 	$this->session->userdata('user_id'),
         
            );

            $this->Log_model->insert($data1);
       $data['ion1'] = $this->Member_model->get_transaksi();	
        $this->template->display('member/tb_member_list1',$data);
    }

    public function word3() {
		$data1 = array(
              
              
                      'crud' => "mengunduh word",
                      'menu' => "data anggota",
            'datetime' => date("Y-m-d H:i:s"),
            

                'user' => 	$this->session->userdata('user_id'),
         
            );

            $this->Log_model->insert($data1);
		     $data['ion1'] = $this->Member_model->get_transaksi();	
      $this->load->view('member/tb_member_word',$data);
    } 	

    function view_data(){ 
        $no=1;               
        $member_data = $this->Member_model->get_transaksi();
            foreach ($member_data as $member) {
                      
               
           $query[] = array(
                'no'=>$no++,
          
                'telepon'=>$member->telepon, 
                'nama_member'=>$member->nama_member, 
                'alamat'=>$member->alamat,         
                      'status'=>$member->status,  
                'tanggal_lahir'=>tgl_indo($member->tanggal_lahir), 
				                'tempat_lahir'=>$member->tempat_lahir,  
       
                'jenis_kelamin'=>$member->jenis_kelamin,    
                'pendidikan_terakhir'=>$member->pendidikan_terakhir,         				
                                'email'=>$member->email,         
			 
               
                'edit'=>anchor('member/update/' . $member->id, '<i class="btn-sm bg-navy glyphicon glyphicon-edit" data-toggle="tooltip" title="Edit Data"></i>'),   
 'hapus'=>anchor('member/delete/' . $member->id, '<i class="btn btn-danger btn-sm fa fa-trash" data-toggle="tooltip" title="Hapus Data"></i>'),				
            );
        }        
        $result=array('data'=>$query);
        echo  json_encode($result);
    }   

 function view_data1(){ 
        $no=1;               
        $member_data = $this->Member_model->get_transaksi();
            foreach ($member_data as $member) {
                      
               
           $query[] = array(
                'no'=>$no++,
          
                'telepon'=>$member->telepon, 
                'nama_member'=>$member->nama_member, 
                'alamat'=>$member->alamat,         
                      'status'=>$member->status,  
                'tanggal_lahir'=>tgl_indo($member->tanggal_lahir), 
				                'tempat_lahir'=>$member->tempat_lahir,  
       
                'jenis_kelamin'=>$member->jenis_kelamin,    
                'pendidikan_terakhir'=>$member->pendidikan_terakhir,         				
                                'email'=>$member->email,         
			 
               
               	
            );
        }        
        $result=array('data'=>$query);
        echo  json_encode($result);
    }   



    public function read($id) {
        $row = $this->Member_model->get_by_id($id);
 
        if ($row) {
            $data = array(
                'id' => $row->id,
                'nama_member' => $row->nama_member,
                'alamat' => $row->alamat,
				      'tempat_lahir' => $row->tempat_lahir,
					   'tanggal_lahir' => $row->tanggal_lahir,
							   	   'jenis_kelamin' => $row->jenis_kelamin,
								   	   'pendidikan_terakhir' => $row->pendidikan_terakhir,
									   	   'id_status' => $row->id_status,
										   	   'email' => $row->email,
                'telepon' => $row->telepon,
            );
		  
     
            $data['status'] = $this->db->get_where('status', array('id' => $row->id_status))->row_array();
         
            $this->template->display('member/tb_member_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('member'));
        }
    }

    public function create() {
 
        $data = array(
           'button' => 'Simpan',
            'action' => site_url('member/create_action'),
            'id' => set_value('id'),
            'nama_member' => set_value('nama_member'),
            'alamat' => set_value('alamat'),
         'tempat_lahir' => set_value('tempat_lahir'),
					   'tanggal_lahir' => set_value('tanggal_lahir'),
			
						   	   
							   	   'jenis_kelamin' => set_value('jenis_kelamin'),
								   	   'pendidikan_terakhir' => set_value('pendidikan_terakhir'),
									   	   'id_status' => set_value('id_status'),
										   	   'email' => set_value('email'),
                'telepon' => set_value('telepon'),
        );
           
			   $data['status'] = $this->db->get_where('status')->result();

	
        $this->template->display('member/tb_member_form', $data);
    }

    public function create_action() {
        $this->_rules();
        $this->form_validation->set_rules('telepon', 'telepon', 'required|regex_match[/^[0-9\-\+]+$/]');
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                   'nama_member' => $this->input->post('nama_member', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
           'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
					   'tanggal_lahir'  => $this->input->post('tanggal_lahir', TRUE),

						   	   
							   	   'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
								   	   'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir', TRUE),
									   	   'id_status' => $this->input->post('id_status', TRUE),
										   	   'email' => $this->input->post('email', TRUE),
                'telepon' => $this->input->post('telepon', TRUE),
            );

            $this->Member_model->insert($data);
			
			$data1 = array(
              
              
                      'username' => $this->input->post('nama_member', TRUE),
            'created_on' => date("Y-m-d H:i:s"),
                'email' => $this->input->post('email', TRUE),
               'active' => 0,
            );

            $this->Ion_auth_model->insert($data1);
			$data2 = array(
              
              
                      'crud' => "menambah",
                      'menu' => "data member",
            'datetime' => date("Y-m-d H:i:s"),
            

                'user' => 	$this->session->userdata('user_id'),
         
            );

            $this->Log_model->insert($data2);
				
           echo $this->session->set_flashdata('Tambah', ' Berhasil Menambah data....');
            redirect(site_url('member/index'));
        }
    }

    public function update($id) {
		if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
            return show_error('Harus Login sebagai admin untuk mengakses halaman ini');
        }else{    
        $row = $this->Member_model->get_by_id($id);

        if ($row) {
            $data = array(
              'button' => 'Update',
                'action' => site_url('member/update_action'),
                'id' => set_value('id', $row->id),
                'nama_member' => set_value('nama_member', $row->nama_member),
                'alamat' => set_value('alamat', $row->alamat),
              'tempat_lahir' => set_value('tempat_lahir', $row->tempat_lahir),
					   'tanggal_lahir' => set_value('tanggal_lahir', $row->tanggal_lahir),
				
						   	   
							   	   'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
								   	   'pendidikan_terakhir' => set_value('pendidikan_terakhir', $row->pendidikan_terakhir),
									   	   'id_status' => set_value('id_status', $row->id_status),
										   	   'email' => set_value('email', $row->email),
                'telepon' => set_value('telepon', $row->telepon),
 
            );

			   $data['status'] = $this->db->get_where('status')->result();

            $this->template->display('member/tb_member_edit', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
           redirect(site_url('member/index'));
        }}
    }

    public function update_action() {
      $this->_rules1();
        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                 'nama_member' => $this->input->post('nama_member', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
					   'tanggal_lahir'  => $this->input->post('tanggal_lahir', TRUE),
		
						   	   
							   	   'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
								   	   'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir', TRUE),
									   	   'id_status' => $this->input->post('id_status', TRUE),
										   	   'email' => $this->input->post('email', TRUE),
                'telepon' => $this->input->post('telepon', TRUE),
            );

            $this->Member_model->update($this->input->post('id', TRUE), $data);
			$data1 = array(
              
              
                      'crud' => "mengedit",
                      'menu' => "data member",
            'datetime' => date("Y-m-d H:i:s"),
            

                'user' => 	$this->session->userdata('user_id'),
         
            );

            $this->Log_model->insert($data1);
   echo $this->session->set_flashdata('Edit', ' Berhasil Mengedit data....');
         redirect(site_url('member/index'));
        }
    }

	
    public function delete($id) {
        $row = $this->Member_model->get_by_id($id);

        if ($row) {
            $this->Member_model->delete($id);
				$data1 = array(
              
              
                      'crud' => "menghapus",
                      'menu' => "data anggota",
            'datetime' => date("Y-m-d H:i:s"),
            

                'user' => 	$this->session->userdata('user_id'),
         
            );
			      $this->Log_model->insert($data1);
               echo $this->session->set_flashdata('Hapus', ' Berhasil Menghapus data....');
           redirect(site_url('member/index'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
         redirect(site_url('member/index'));
        }
    }

    public function _rules() {
  $this->form_validation->set_message('is_unique', '%s Sudah Ada');
        $this->form_validation->set_rules('nama_member', 'Nama Anggota', 'trim|required|is_unique[member.nama_member]');
        $this->form_validation->set_rules('id_status', 'status pegawai', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[member.email]');


        $this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'trim|required');
		     $this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'trim|required');
			         $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
		        $this->form_validation->set_rules('pendidikan_terakhir', 'pendidikan terakhir', 'trim|required');

        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
	public function _rules1() {
  
        $this->form_validation->set_rules('id_status', 'status pegawai', 'trim|required');



        $this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'trim|required');
        $this->form_validation->set_rules('nama_member', 'nama member', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
		     $this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'trim|required');
			         $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
		        $this->form_validation->set_rules('pendidikan_terakhir', 'pendidikan terakhir', 'trim|required');

        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
 function pdf(){
	 $data1 = array(
              
              
                      'crud' => "mengunduh pdf",
                      'menu' => "data anggota",
            'datetime' => date("Y-m-d H:i:s"),
            

                'user' => 	$this->session->userdata('user_id'),
         
            );

            $this->Log_model->insert($data1);
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(180,7,'Data Anggota Rapat ',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(180,7,'SMPN 1 Ungaran',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'No.',1,0);
        $pdf->Cell(32,6,'Nama Anggota',1,0);

        $pdf->Cell(32,6,'Jenis Kelamin',1,0);
        $pdf->Cell(32,6,'Status',1,0);
        $pdf->Cell(40,6,'Email',1,0);
        $pdf->Cell(32,6,'Telepon',1,1);
  
        $pdf->SetFont('Arial','',10);
		    $ion1 = $this->Member_model->get_transaksi();	

			$no=1;
        foreach ($ion1 as $row){
		
            $pdf->Cell(20,6,$no++,1,0);
            $pdf->Cell(32,6,$row->nama_member,1,0);
  
            $pdf->Cell(32,6,$row->jenis_kelamin,1,0);
            $pdf->Cell(32,6,$row->status,1,0);
            $pdf->Cell(40,6,$row->email,1,0);
            $pdf->Cell(32,6,$row->telepon,1,1);
         
        }
        $pdf->Output();
		
    }

  
    function excel() {
		$data1 = array(
              
              
                      'crud' => "mengunduh excel",
                      'menu' => "data anggota",
            'datetime' => date("Y-m-d H:i:s"),
            

                'user' => 	$this->session->userdata('user_id'),
         
            );

            $this->Log_model->insert($data1);
    
         $this->load->helper('exportexcel');
        $namaFile = "member.xls";
        $judul = "data anggota rapat";
        $tablehead = 2;
        $tablebody = 3;
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
        xlsWriteLabel($tablehead, $kolomhead++, "Nama Anggota");

        xlsWriteLabel($tablehead, $kolomhead++, "Jenis Kelamin");
        xlsWriteLabel($tablehead, $kolomhead++, "Status");
        xlsWriteLabel($tablehead, $kolomhead++, "Email");
        xlsWriteLabel($tablehead, $kolomhead++, "Telepon");

        foreach ($this->Member_model->get_transaksi() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
             xlsWriteNumber($tablebody, $kolombody++, $nourut);


        
            xlsWriteLabel ($tablebody, $kolombody++, $data->nama_member);
			    xlsWriteLabel ($tablebody, $kolombody++, $data->jenis_kelamin);
       
         
            xlsWriteLabel($tablebody, $kolombody++, $data->status);
            xlsWriteLabel($tablebody, $kolombody++, $data->email);
            xlsWriteLabel($tablebody, $kolombody++, $data->telepon);


            $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }
function delete_mutiple() {
	$data1 = array(
              
              
                      'crud' => "menghapus",
                      'menu' => "anggota",
            'datetime' => date("Y-m-d H:i:s"),
            

                'user' => 	$this->session->userdata('user_id'),
         
            );

            $this->Log_model->insert($data1);
		$delete = $this->input->post('msg');
	if($delete>0){
			$this->Member_model->remove_checked();
		 echo $this->session->set_flashdata('Hapus', ' Berhasil Menghapus data....');
            redirect(site_url('member'));
		}
   
   else{
	    echo $this->session->set_flashdata('Hapus1', ' Tidak ada data yang diceklis....');
	       redirect(site_url('member'));
   }
}

}

/* End of file member.php */
/* Location: ./application/controllers/member.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-14 11:11:34 */
/* http://harviacode.com */
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jadwal extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Jadwal_model');
		    $this->load->model('Hasil_model');
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
			$jadwal = $this->Jadwal_model->get_all();

        $data = array(
            'jadwal_data' => $jadwal
        );

        $this->template->display('jadwal/tb_jadwal_list', $data);
    }}
      public function liat() {
        $jadwal = $this->Jadwal_model->get_all();

        $data = array(
            'jadwal_data' => $jadwal
        );

        $this->template->display('jadwal/tb_jadwal_liat', $data);
    }
	  function cetak() {
		  	$data1 = array(
              
              
                      'crud' => "mencetak",
                      'menu' => "data jadwal rapat",
            'datetime' => date("Y-m-d H:i:s"),
           

                'user' => 	$this->session->userdata('user_id'),
         
            );
      $this->Log_model->insert($data1);
       $jadwal = $this->Jadwal_model->get_all();

        $data = array(
            'jadwal_data' => $jadwal
        );

        $this->template->display('jadwal/tb_jadwal_cetak', $data);
    }
	 function word3() {
		 	$data1 = array(
              
              
                      'crud' => "mengunduh word",
                      'menu' => "data jadwal rapat",
            'datetime' => date("Y-m-d H:i:s"),
           

                'user' => 	$this->session->userdata('user_id'),
         
            );
      $this->Log_model->insert($data1);
        $jadwal = $this->Jadwal_model->get_all();

        $data = array(
            'jadwal_data' => $jadwal
        );

           $this->load->view("jadwal/tb_jadwal_word", $data);
    }

    public function read($id) {
        $row = $this->Jadwal_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'nama' => $row->nama,              
				'tempat' => $row->tempat,
				'status' => $row->status,
		
				'jam1' => $row->jam1,
				'tanggal' => $row->tanggal,
				'tanggal1' => $row->tanggal1,
				'deskripsi' => $row->deskripsi,
            );
            $this->template->display('jadwal/tb_jadwal_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwal'));
        }
    }

    public function create() {

        $data = array(
            'button' => 'Simpan',
            'action' => site_url('jadwal/create_action'),
            'id' => set_value('id'),
            'nama' => set_value('nama'),
            'tempat' => set_value('tempat'),
            'status' => set_value('status'),
       
            'tanggal' => set_value('tanggal'),
            'tanggal1' => set_value('tanggal1'),
            'jam1' => set_value('jam1'),
            'deskripsi' => set_value('deskripsi'),

        );
        $this->template->display('jadwal/tb_jadwal_form', $data);
    }

    public function create_action() {
		       
        $this->_rules();
 $this->form_validation->set_rules('jam1', 'waktu acara', 'required|min_length[5]|max_length[5]');
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
			 
            $data = array(
                'nama' => $this->input->post('nama', TRUE),
                'tempat' => $this->input->post('tempat', TRUE),
                'status' => $this->input->post('status', TRUE),
         
                'tanggal' => $this->input->post('tanggal', TRUE),
                'tanggal1' =>$this->input->post('tanggal1', TRUE),
                'jam1' => $this->input->post('jam1', TRUE),
                'deskripsi' => $this->input->post('deskripsi', TRUE),
              
            );

            $this->Jadwal_model->insert($data);
			$data1 = array(
              
              
                      'crud' => "menambah",
                      'menu' => "jadwal rapat",
            'datetime' => date("Y-m-d H:i:s"),
           

                'user' => 	$this->session->userdata('user_id'),
         
            );

            $this->Log_model->insert($data1);
              echo $this->session->set_flashdata('Tambah', ' Berhasil Menambah data....');
            redirect(site_url('jadwal/index'));
        }
    }

    public function update($id) {
		  if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
            return show_error('Harus Login sebagai admin untuk mengakses halaman ini');
        }else{
        $row = $this->Jadwal_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jadwal/update_action'),
                'id' => set_value('id', $row->id),
                'nama' => set_value('nama', $row->nama),
                'tempat' => set_value('tempat', $row->tempat),
                'status' => set_value('status', $row->status),
				           
                'tanggal' => set_value('tanggal', $row->tanggal),
                'tanggal1' => set_value('tanggal1', $row->tanggal1),
                'jam1' => set_value('jam1', $row->jam1),
                'deskripsi' => set_value('deskripsi', $row->deskripsi),
            );
            $this->template->display('jadwal/tb_jadwal_edit', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
                 redirect(site_url('jadwal/index'));
        }}
    }

    public function update_action() {
        $this->_rules1();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
              
              
                'status' => $this->input->post('status', TRUE),
            
            );

            $this->Jadwal_model->update($this->input->post('id', TRUE), $data);
			$status=$this->input->post('status', TRUE);
			if($status== "Sudah Terlaksana"){
			
			 $data1 = array(
              
              
                'nama' => $this->input->post('nama', TRUE),
            
            );

            $this->Hasil_model->insert($data1);
			}
			
			$data2 = array(
              
              
                      'crud' => "mengedit",
                      'menu' => "jadwal rapat",
            'datetime' => date("Y-m-d H:i:s"),
           

                'user' => 	$this->session->userdata('user_id'),
         
            );

            $this->Log_model->insert($data2);
                 echo $this->session->set_flashdata('Edit', ' Berhasil Mengedit data....');
                   redirect(site_url('jadwal/index'));
        }
    }

    public function delete($id) {
        $row = $this->Jadwal_model->get_by_id($id);

        if ($row) {
			



				$data1 = array(
              
              
                      'crud' => "menghapus",
                      'menu' => "jadwal rapat",
            'datetime' => date("Y-m-d H:i:s"),
           

                'user' => 	$this->session->userdata('user_id'),
         
            );
			
      $this->Log_model->insert($data1);
	  // $data = $this->db->get_where('jadwal','db_skripsi',array(
         //   'id'=>$id,
      //  ));
      //  foreach($data->result() as $key){
      ////      $nama = $key->nama;
   //     }
		
	  	  $data['hasil'] = $this->db->get_where('hasil')->result();
 	$get1 = $this->db->get_where("jadwal",array("id" =>$id))->row();
			$nama=$get1->nama;
	  	$get = $this->db->get_where("hasil",array("nama" =>$nama))->row();
	$b = $get->id;
	  $this->Hasil_model->delete($b);      
      $this->Jadwal_model->delete($id);
          echo $this->session->set_flashdata('Hapus', ' Berhasil Menghapus data....');
                 redirect(site_url('jadwal/index'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwal/index'));
        }
    }

    public function _rules1() {
		 

		    $this->form_validation->set_rules('tanggal', 'tanggal acara', 'trim|required');
	
	    $this->form_validation->set_rules('status', 'status acara', 'trim|required');
		    $this->form_validation->set_rules('tempat', 'tempat acara', 'trim|required');
			    $this->form_validation->set_rules('deskripsi', 'deskripsi acara', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
	
    public function _rules() {
		  $this->form_validation->set_message('is_unique', '%s Sudah Ada');
        $this->form_validation->set_rules('nama', 'Nama Acara', 'trim|required|is_unique[jadwal.nama]');

		    $this->form_validation->set_rules('tanggal', 'tanggal acara', 'trim|required');
	
	    $this->form_validation->set_rules('status', 'status acara', 'trim|required');
		    $this->form_validation->set_rules('tempat', 'tempat acara', 'trim|required');
			    $this->form_validation->set_rules('deskripsi', 'deskripsi acara', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
	
function pdf(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(180,7,'Data Jadwal Rapat ',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(180,7,'SMPN 1 Ungaran',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(15,6,'No.',1,0);
        $pdf->Cell(50,6,'Acara',1,0);
        $pdf->Cell(32,6,'Tanggal',1,0);
		        $pdf->Cell(27,6,'Sampai',1,0);
				        $pdf->Cell(32,6,'Tempat',1,0);
				        $pdf->Cell(32,6,'Status',1,1);
	
  
        $pdf->SetFont('Arial','',10);
        $jadwal = $this->db->get('jadwal')->result();
			$no=1;
        foreach ($jadwal as $row){
		$f1=$row->tanggal1;
			$f=$row->tanggal;
		if($f1!=$f){
	 $n= $row->tanggal1;
 }
  else{
	  $n="-";
  }
            $pdf->Cell(15,6,$no++,1,0);
            $pdf->Cell(50,6,$row->nama,1,0);
			            $pdf->Cell(32,6,$row->tanggal,1,0);
						            $pdf->Cell(27,6,$n,1,0);
									       $pdf->Cell(32,6,$row->tempat,1,0);
									       $pdf->Cell(32,6,$row->status,1,1);
									
        
        }
        $pdf->Output();
			$data1 = array(
              
              
                      'crud' => "mengunduh pdf",
                      'menu' => "data jadwal",
            'datetime' => date("Y-m-d H:i:s"),
           

                'user' => 	$this->session->userdata('user_id'),
         
            );
      $this->Log_model->insert($data1);
    }
	

   function delete_mutiple() {
	   $data1 = array(
              
              
                      'crud' => "menghapus",
                      'menu' => "jadwal rapat",
            'datetime' => date("Y-m-d H:i:s"),
           

                'user' => 	$this->session->userdata('user_id'),
         
            );

            $this->Log_model->insert($data1);
	$delete = $this->input->post('msg');
	if($delete>0){
			$this->Jadwal_model->remove_checked();
		 echo $this->session->set_flashdata('Hapus', ' Berhasil Menghapus data....');
            redirect(site_url('jadwal'));
		}
   
   else{
	    echo $this->session->set_flashdata('Hapus1', ' Tidak ada data yang diceklis....');
	       redirect(site_url('jadwal'));
   }

}
}

/* End of file jadwal.php */
/* Location: ./application/controllers/jadwal.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-14 11:06:57 */
/* http://harviacode.com */
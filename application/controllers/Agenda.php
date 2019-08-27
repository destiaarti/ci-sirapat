<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Agenda extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Hasil_model');

        $this->load->model('Log_model');
        $this->load->library('form_validation');
			  $this->load->library('pdf');
        chek_session();
    }

   public function index() {    
    $id = $this->session->userdata('user_id');
				      $subi1 = $this->session->userdata('group_id');
					  $get3 =$this->db->get_where("tb_users_groups",array("user_id" =>$id))->row();
					  	$tanggal1 = $get3->group_id;
                if ($tanggal1=="1") {
				$this->template->display('hasil/tb_hasil_list');}
				else{
					  return show_error('Harus Login sebagai sekretaris untuk mengakses halaman ini');
				}
    }

 public function lihat() {    
        $this->template->display('hasil/tb_hasil_lihat');
    }
	public function word3() {
		     $data['ion1'] = $this->Hasil_model->get_hasil();	
      $this->load->view('hasil/tb_hasil_word',$data);
    } 	

	function view_data(){ 
        $no=1;               
        $hasil_data = $this->Hasil_model->get_hasil();
            foreach ($hasil_data as $hasil) {
				$tgl=$hasil->tanggal;
				$tgl1=$hasil->tanggal1;
				$hsl=$hasil->hasil;
	  $hsl2="Hasil Rapat belum diinput";
				
                if ($tgl == $tgl1 && $hsl==NULL) {
					   $tgl = "-";
			$hsl1 ="<font size='4' color='red'>".$hsl2."</strong>"."</font>";
	
              
			
                }
				 else if ($tgl == $tgl1 && $hsl!=NULL) {
					   $tgl = "-";
		$hsl1=$hasil->hasil;
                }
				 else if ($tgl != $tgl1 && $hsl!=NULL) {
					  $tgl = tgl_indo($hasil->tanggal1);
		$hsl1=$hasil->hasil;
                }
				 else if ($tgl != $tgl1 && $hsl==NULL) {
					  $tgl = tgl_indo($hasil->tanggal1);
					
			$hsl1 ="<font  size='4' color='red'>".$hsl2."</strong>"."</font>";
                }
				
            $query[] = array(
                'no'=>$no++,
         
                'nama'=>$hasil->nama, 
                'hasil'=>$hsl1,         
                 'tempat'=>$hasil->tempat,  
 
          'tanggal'=>$hasil->tanggal,  
                'tanggal1'=>$tgl ,

                'detail'=>anchor('hasil/read/' . $hasil->id, '<i class="btn btn-warning btn-sm fa fa-eye" data-toggle="tooltip" title="View Detail"></i>'),
                'edit'=>anchor('hasil/update/' . $hasil->id, '<i class="btn-sm btn-info glyphicon glyphicon-edit" data-toggle="tooltip" title="edit"></i>'),                
                'delete'=>anchor('hasil/delete/' . $hasil->id, '<i class="btn-sm btn-danger glyphicon glyphicon-trash" data-toggle="tooltip" title="delete"></i>'),
                
            );
        }        
        $result=array('data'=>$query);
        echo  json_encode($result);
    }   

	function view_data1(){ 
        $no=1;               
        $hasil_data = $this->Hasil_model->get_hasil();
            foreach ($hasil_data as $hasil) {
				$tgl=$hasil->tanggal;
				$tgl1=$hasil->tanggal1;
				$hsl=$hasil->hasil;
	  $hsl2="Hasil Rapat belum diinput";
				
                if ($tgl == $tgl1 && $hsl==NULL) {
					   $tgl = "-";
			$hsl1 ="<font size='4' color='red'>".$hsl2."</strong>"."</font>";
	
              
			
                }
				 else if ($tgl == $tgl1 && $hsl!=NULL) {
					   $tgl = "-";
		$hsl1=$hasil->hasil;
                }
				 else if ($tgl != $tgl1 && $hsl!=NULL) {
					  $tgl = tgl_indo($hasil->tanggal1);
		$hsl1=$hasil->hasil;
                }
				 else if ($tgl != $tgl1 && $hsl==NULL) {
					  $tgl = tgl_indo($hasil->tanggal1);
					
			$hsl1 ="<font  size='4' color='red'>".$hsl2."</strong>"."</font>";
                }
            $query[] = array(
                'no'=>$no++,
         
                'nama'=>$hasil->nama,       
                 'tempat'=>$hasil->tempat,  
                'tanggal1'=>$tgl ,
				'tanggal'=>$hasil->tanggal,  
				'hasil'=>$hsl1,
                         'detail'=>anchor('hasil/read/' . $hasil->id, '<i class="btn btn-warning btn-sm fa fa-eye" data-toggle="tooltip" title="View Detail"></i>'),
            );
        }        
        $result=array('data'=>$query);
        echo  json_encode($result);
    }   
    public function read($id) {
        $row = $this->Hasil_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'nama' => $row->nama,
				    'hasil' => $row->hasil,
				    'uraian' => $row->uraian,
				    'susunan' => $row->susunan,
            );
			   $data['jadwal'] = $this->db->get_where('jadwal', array('nama' => $row->nama))->row_array();
            $this->template->display('hasil/tb_hasil_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('hasil'));
        }
    }

    public function create() {
        $data = array(
            'button' => 'Create',
            'action' => site_url('hasil/create_action'),
            'id' => set_value('id'),
            'nama' => set_value('nama'),
                   'hasil' => set_value('hasil'),
        );
        $this->template->display('hasil/tb_hasil_form', $data);
    }

    public function create_action() {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
            
                'hasil' => $this->input->post('hasil', TRUE),            
            );

            $this->Hasil_model->insert($data);
			$data1 = array(
              
              
                      'crud' => "menambah",
                      'menu' => "hasil rapat",
            'datetime' => date("Y-m-d H:i:s"),
            'date1' => date("Y-m-d"),

                'user' => 	$this->session->userdata('user_id'),
         
            );

            $this->Log_model->insert($data1);
             echo $this->session->set_flashdata('Tambah', ' Berhasil Menambah data....');
            redirect(site_url('hasil'));
        }
    }

    public function update($id) {
        $row = $this->Hasil_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('hasil/update_action'),
                'id' => set_value('id', $row->id),
                'nama' => set_value('nama', $row->nama),
				   'hasil' => set_value('hasil', $row->hasil),
				   'susunan' => set_value('susunan', $row->susunan),
				   'uraian' => set_value('uraian', $row->uraian),
            );
            $this->template->display('hasil/tb_hasil_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('hasil'));
        }
    }

    public function update_action() {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(

				    'hasil' => $this->input->post('hasil', TRUE),
				    'susunan' => $this->input->post('susunan', TRUE),
				    'uraian' => $this->input->post('uraian', TRUE),
            );

            $this->Hasil_model->update($this->input->post('id', TRUE), $data);
				$data1 = array(
              
              
                      'crud' => "mengedit",
                      'menu' => "hasil rapat",
            'datetime' => date("Y-m-d H:i:s"),
            'date1' => date("Y-m-d"),

                'user' => 	$this->session->userdata('user_id'),
         
            );

            $this->Log_model->insert($data1);
               echo $this->session->set_flashdata('Edit', ' Berhasil Mengedit data....');
            redirect(site_url('hasil'));
        }
    }

    public function delete($id) {
        $row = $this->Hasil_model->get_by_id($id);

        if ($row) {
            $this->Hasil_model->delete($id);
						$data1 = array(
              
              
                      'crud' => "menghapus",
                      'menu' => "hasil rapat",
            'datetime' => date("Y-m-d H:i:s"),
            'date1' => date("Y-m-d"),

                'user' => 	$this->session->userdata('user_id'),
         
            );
      $this->Log_model->insert($data1);
              echo $this->session->set_flashdata('Hapus', ' Berhasil Menghapus data....');
            redirect(site_url('hasil'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('hasil'));
        }
    }

    public function _rules() {
        $this->form_validation->set_rules('hasil', 'hasil', 'trim|required');
        $this->form_validation->set_rules('hasil', 'hasil', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
function pdf(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(180,7,'Data Hasil Rapat Rapat ',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(180,7,'SMPN 1 Ungaran',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No.',1,0);
        $pdf->Cell(45,6,'Nama Acara',1,0);

        $pdf->Cell(32,6,'Tanggal Acara',1,0);
        $pdf->Cell(32,6,'Sampai Tanggal',1,0);
  
   
        $pdf->Cell(80,6,'Hasil Acara',1,1);
  
        $pdf->SetFont('Arial','',10);
		    $ion1 = $this->Hasil_model->get_hasil();	
				$no=1;
        foreach ($ion1 as $row){
		
		$f1=$row->tanggal1;
			$f=$row->tanggal;
 if($f1!=$f){
	 $n= $row->tanggal1;
 }
  else{
	  $n="-";
  }
	$f2=$row->hasil;
if($f2==null){
	$d="hasil belum diinput";
}	else{
	$d= $row->hasil;
}
            $pdf->Cell(10,6,$no++,1,0);
            $pdf->Cell(45,6,$row->nama,1,0);
  
            $pdf->Cell(32,6,$row->tanggal,1,0);
            $pdf->Cell(32,6,$n,1,0);
        

            $pdf->Cell(80,6,$d,1,1);
         
        }
        $pdf->Output();
					$data1 = array(
              
              
                      'crud' => "mengunduh pdf",
                      'menu' => "data hasil",
            'datetime' => date("Y-m-d H:i:s"),
            'date1' => date("Y-m-d"),

                'user' => 	$this->session->userdata('user_id'),
         
            );
      $this->Log_model->insert($data1);
    }
    public function excel() {
					$data1 = array(
              
              
                      'crud' => "mengunduh excel",
                      'menu' => "data hasil rapat",
            'datetime' => date("Y-m-d H:i:s"),
            'date1' => date("Y-m-d"),

                'user' => 	$this->session->userdata('user_id'),
         
            );
      $this->Log_model->insert($data1);
        $this->load->helper('exportexcel');
        $namaFile = "HasilRapat.xls";
        $judul = "Data Hasil Rapat";
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
        xlsWriteLabel($tablehead, $kolomhead++, "Nama Acara");
        xlsWriteLabel($tablehead, $kolomhead++, "Tanggal");
        xlsWriteLabel($tablehead, $kolomhead++, "Sampai Tanggal");
        xlsWriteLabel($tablehead, $kolomhead++, "Tempat");
		
        xlsWriteLabel($tablehead, $kolomhead++, "hasil");
    

        foreach ($this->Hasil_model->get_hasill() as $data) {
			$f1=$data->tanggal1;
			$f=$data->tanggal;
 if($f1!=$f){
	 $n= $data->tanggal1;
 }
  else{
	  $n="-";
  }


            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->nama);
            xlsWriteLabel($tablebody, $kolombody++, $data->tanggal);
            xlsWriteLabel($tablebody, $kolombody++, $n);
            xlsWriteLabel($tablebody, $kolombody++, $data->tempat);


            $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }


}

/* End of file hasil.php */
/* Location: ./application/controllers/hasil.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-14 11:06:57 */
/* http://harviacode.com */
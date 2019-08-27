<?php
class Files extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		$this->load->model('Download_model');
		$this->load->library('upload');
		$this->load->helper('download');
		    $this->load->model('Log_model');
	}


	function index(){
		$id = $this->session->userdata('user_id');
				      $subi1 = $this->session->userdata('group_id');
					  $get3 =$this->db->get_where("tb_users_groups",array("user_id" =>$id))->row();
					  	$tanggal1 = $get3->group_id;
                if ($tanggal1=="3") {
			
		$data['data']=$this->Download_model->get_all_files();

			
		 $this->template->display('admin/v_files',$data);
				}else{
    return show_error('Harus Login sebagai sekretaris untuk mengakses halaman ini');}
	}

	function download(){
		$id=$this->uri->segment(4);
		$get_db=$this->Download_model->get_file_byid($id);
		$q=$get_db->row_array();
		$file=$q['file_data'];
		$path='./assets/files/'.$file;
		$data =  file_get_contents($path);
		$name = $file;

		force_download($name, $data); 
		redirect('files');
	}
	
	function simpan_file(){

$data1 = array(
              
              
                      'crud' => "upload",
                      'menu' => "file",
            'datetime' => date("Y-m-d H:i:s"),
        

                'user' => 	$this->session->userdata('user_id'),
         
            );
      $this->Log_model->insert($data1);	
				$config['upload_path'] = './assets/files/'; //path folder
	            $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = FALSE; //nama yang terupload nantinya
	
	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
					{
	                        $gbr = $this->upload->data();
	                        $file=$gbr['file_name'];
							$rapat=strip_tags($this->input->post('xrapat'));
							$judul=$this->input->post('xjudul');
							$deskripsi=$this->input->post('xdeskripsi');
					
	
							$this->Download_model->simpan_file($rapat,$judul,$deskripsi,$file);
						
							echo $this->session->set_flashdata('msg','success');
							redirect('files');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('files');
	                }
	                 
	            }else{
					redirect('files');
				}
				
	}
	
	function update_file(){
			
				$data1 = array(
              
              
                      'crud' => "mengedit",
                      'menu' => "upload file",
            'datetime' => date("Y-m-d H:i:s"),
   

                'user' => 	$this->session->userdata('user_id'),
         
            );
      $this->Log_model->insert($data1);	
	            $config['upload_path'] = './assets/files/'; //path folder
	            $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = FALSE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        $file=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
	                        $rapat=strip_tags($this->input->post('xrapat'));
	                        $judul=$this->input->post('xjudul');
							$deskripsi=$this->input->post('xdeskripsi');
						
							$data=$this->input->post('file');
							$path='./assets/files/'.$data;
							unlink($path);
							$this->Download_model->update_file($kode,$rapat,$judul,$deskripsi,$file);
							echo $this->session->set_flashdata('msg','info');
							redirect('files');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('files');
	                }
	                
	            }else{
						$kode=$this->input->post('kode');
	                    $rapat=strip_tags($this->input->post('xrapat'));
	                    $judul=$this->input->post('xjudul');
						$deskripsi=$this->input->post('xdeskripsi');
					
						$this->Download_model->update_file_tanpa_file($kode,$rapat,$judul,$deskripsi);
						echo $this->session->set_flashdata('msg','info');
						redirect('files');
	            }
				} 
				

	

	function hapus_file(){
			
		$data1 = array(
              
              
                      'crud' => "menghapus",
                      'menu' => "upload file",
            'datetime' => date("Y-m-d H:i:s"),
    

                'user' => 	$this->session->userdata('user_id'),
         
            );
      $this->Log_model->insert($data1);	
		$kode=$this->input->post('kode');
		$data=$this->input->post('file');
		$path='./assets/files/'.$data;
		unlink($path);
		$this->Download_model->hapus_file($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('files');
				
	}
function delete_mutiple() {
			$delete = $this->input->post('msg');
	if($delete>0){
			$this->Download_model->remove_checked();
				$data1 = array(
              
              
                      'crud' => "menghapus",
                      'menu' => "upload file",
            'datetime' => date("Y-m-d H:i:s"),
    

                'user' => 	$this->session->userdata('user_id'),
         
            );
      $this->Log_model->insert($data1);	
	echo $this->session->set_flashdata('msg','success-hapus');
            redirect(site_url('files'));
		}
   
   else{
	    echo $this->session->set_flashdata('Hapus1', ' Tidak ada data yang diceklis....');
	       redirect(site_url('files'));
   }

		}
}
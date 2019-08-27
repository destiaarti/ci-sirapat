<?php 
class M_files extends CI_Model{

	function get_all_files(){
		$hsl=$this->db->query("SELECT id,file_rapat,file_deskripsi,DATE_FORMAT(file_tanggal,'%d/%m/%Y') AS tanggal,file_judul,file_data FROM tbl_files ORDER BY id DESC");
		return $hsl;
	}
	function simpan_file($rapat,$judul,$deskripsi,$file){
		$hsl=$this->db->query("INSERT INTO tbl_files(file_rapat,file_deskripsi,file_judul,file_data) VALUES ('$rapat','$judul','$deskripsi','$file')");
		return $hsl;
	}
	function update_file($kode,$rapat,$judul,$deskripsi,$file){
		$hsl=$this->db->query("UPDATE tbl_files SET file_rapat='$rapat', file_judul='$judul',file_deskripsi='$deskripsi',file_data='$file' WHERE id='$kode'");
		return $hsl;
	}
	function update_file_tanpa_file($kode,$rapat,$judul,$deskripsi){
		$hsl=$this->db->query("UPDATE tbl_files SET file_rapat='$rapat',file_judul='$judul',file_deskripsi='$deskripsi' WHERE id='$kode'");
		return $hsl;
	}
	function hapus_file($kode){
		$hsl=$this->db->query("DELETE FROM tbl_files WHERE id='$kode'");
		return $hsl;
	}

	function get_file_byid($id){
		$hsl=$this->db->query("SELECT id,file_rapat,file_deskripsi,DATE_FORMAT(file_tanggal,'%d/%m/%Y') AS tanggal,file_judul,file_data FROM tbl_files WHERE id='$id'");
		return $hsl;
	}

	//Front-end
	function get_files_home(){
		$hsl=$this->db->query("SELECT id,file_rapat,file_deskripsi,DATE_FORMAT(file_tanggal,'%d/%m/%Y') AS tanggal,file_judul,file_data FROM tbl_files ORDER BY id DESC limit 10");
		return $hsl;
	}
	
}

<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jadwal_model extends CI_Model {

    public $table = 'jadwal';
    public $id = 'id';
    public $order = 'DESC';

    function __construct() {
        parent::__construct();
    }
function get_hasil() {

        return $this->db->query("SELECT jadwal.id, jadwal.nama,jadwal.tanggal1,jadwal.jam1, jadwal.tempat
            FROM jadwal ")->result();
			
    }
    // get all
	  function get_last_transaksi() {

        return $this->db->query("SELECT *from jadwal  ORDER BY jadwal.id DESC LIMIT 10")->result();
    }
    function get_all() {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get_where($this->table)->result();
    }

    // get data by id
    function get_by_id($id) {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
        $this->db->or_like('nama', $q);
		        $this->db->or_like('status', $q);
		        $this->db->or_like('tempat', $q);
		        $this->db->or_like('tanggal', $q);
		        $this->db->or_like('tanggal1', $q);
		        $this->db->or_like('jam1', $q);
		        $this->db->or_like('deskripsi', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
        $this->db->or_like('nama', $q);
		        $this->db->or_like('status', $q);
		        $this->db->or_like('tempat', $q);
		        $this->db->or_like('tanggal', $q);
		        $this->db->or_like('tanggal1', $q);
		        $this->db->or_like('jam1', $q);
		        $this->db->or_like('deskripsi', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data) {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data) {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id) {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    } 
	function delete1($id) {
          $table = 'hasil';
     $id = 'nama';
     $order = 'DESC';
	 $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
	
function remove_checked() {
		$delete = $this->input->post('msg');
			for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where($this->id, $delete[$i]);
				$this->db->delete($this->table);
		
		}
	}
}

/* End of file Nominal_model.php */
/* Location: ./application/models/Nominal_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-14 11:06:57 */
/* http://harviacode.com */
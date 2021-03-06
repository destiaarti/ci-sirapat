<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hasil_model extends CI_Model {

    public $table = 'hasil';
    public $id = 'id';
    public $order = 'DESC';

    function __construct() {
        parent::__construct();
    }

    // get all
    function get_all() {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get_where($this->table)->result();
    }
   function get_hasil() {

        return $this->db->query("SELECT hasil.id,hasil.hasil, hasil.nama, jadwal.tanggal,jadwal.tanggal1,jadwal.jam1, jadwal.tempat
            FROM hasil INNER JOIN jadwal ON hasil.nama = jadwal.nama")->result();
			
    }
	function get_hasill() {

        return $this->db->query("SELECT jadwal.id,jadwal.nama,jadwal.jam1, jadwal.tempat, jadwal.tanggal, jadwal.tanggal1, jadwal.status
		FROM jadwal")->result();
			
    }
	   function get_hasil1() {

        return $this->db->query("SELECT hasil.id,hasil.nama,hasil.hasil FROM hasil ORDER BY hasil.id DESC LIMIT 10")->result();
		
			
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

		        $this->db->or_like('hasil', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
        $this->db->or_like('nama', $q);

		        $this->db->or_like('hasil', $q);
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

}

/* End of file Nominal_model.php */
/* Location: ./application/models/Nominal_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-14 11:06:57 */
/* http://harviacode.com */
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Beranda extends CI_Controller {

    function __construct() {
        parent::__construct();
    
     
    }

    public function index() {
		  

        $this->load->view("beranda/beranda.php");
    }
    public function kontak() {
		  

        $this->load->view("beranda/kontak.php");
    }

   
}

/* End of file agenda.php */
/* Location: ./application/controllers/agenda.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-14 11:09:25 */
/* http://harviacode.com */
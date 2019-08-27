<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Logger extends CI_Controller {

     public function __construct ($database) {
      $this->database = database; // koneksi dan query ke database
      $this->table_name = 'activity_log'; // nama tabel
   }
   public function record ($activity_name, $data) { //method untuk merekam aktivitas

      $toRecord = array();
      $toRecord['name'] = $activity_name;
      $toRecord['data'] = json_encode($data);
      $toRecord['datecreated'] = date("Y-m-d h:i:s");

      $result = $this->database->insert($this->table_name, $toRecord); // simpan data ke tabel

       if(!$result):
          return false;
       endif;
       return $result;

   }


}

/* End of file status.php */
/* Location: ./application/controllers/status.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-14 11:06:57 */
/* http://harviacode.com */
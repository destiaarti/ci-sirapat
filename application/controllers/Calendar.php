<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	    $this->load->model('Jadwal_model');
	}

	public function index() 
	{
		   $data['result'] = $this->db->get("jadwal")->result();
   
        foreach ($data['result'] as $key => $value) {
            $data['data'][$key]['title'] = $value->nama;
            $data['data'][$key]['start'] = $value->tanggal;
            $data['data'][$key]['end'] = $value->tanggal1;
            $data['data'][$key]['backgroundColor'] = "#00a65a";
        }

        $this->template->display('calendar/tb_calendar_list', $data);
	}


}

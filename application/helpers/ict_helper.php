<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function chek_session() {
    $ci = & get_instance();
    if ($ci->session->userdata('status_login') !== 'login_successful') {
        redirect('auth');
    }
}
function chek_administrator() {
    $ci = & get_instance();
    if ($ci->session->userdata('role') !== 'Administrator') {
        redirect('dashboard');
    }
}

if(!function_exists('active_link')) {
    function active_menu($controller) {
        $CI = get_instance(); 
        $class = $CI->router->fetch_class();
        return ($class == $controller) ? 'active' : ''; 
    } 

    function active_treeview($controller) {
        $CI = get_instance(); 
        $class = $CI->router->fetch_class();
        return ($class == $controller) ? 'active treeview' : ''; 
    } 
}

function chek_stok($kode_barang) {
    $ci = & get_instance();
    $gid=$ci->session->userdata('gid');
    $masuk=$ci->db->query("SELECT SUM(qty_masuk) AS jumlah_masuk FROM tb_trans_detail WHERE tb_trans_detail.kode_barang = '$kode_barang' 
            AND tb_trans_detail.gid ='$gid' ")->row_array(); 
    $keluar=$ci->db->query("SELECT SUM(qty_keluar) AS jumlah_keluar FROM tb_trans_detail WHERE tb_trans_detail.kode_barang = '$kode_barang' 
            AND tb_trans_detail.gid ='$gid' ")->row_array();
    $jml_stok=$masuk['jumlah_masuk']-$keluar['jumlah_keluar'];        
    return $jml_stok;
}

function tanggal(){
	date_default_timezone_set('Asia/Jakarta');
    return date('Y-m-d');
}

function tanggal_indo() {
	date_default_timezone_set('Asia/Jakarta');


    return  date('d') . ' ' . bulan(date('m')) . ' ' . date('Y') . ' ' .date('H:i');
}

function tanggal_new() {
	date_default_timezone_set('Asia/Jakarta');
    /* script menentukan hari */  
     $array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
     $hr = $array_hr[date('N')];

    /* script menentukan tanggal */    
    $tgl= date('j');
    /* script menentukan bulan */ 
      $array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
      $bln = $array_bln[date('n')];
    /* script menentukan tahun */ 
    $thn = date('Y');
    /* script perintah keluaran*/ 
     return $hr . ", " . $tgl . " " . $bln . " " . $thn . " " . date('H:i');
}

function rupiah($angka) {
    $rupiah = number_format($angka, 0, ',', '.');
    return $rupiah;
}


function tgl_indo($tgl) {
	date_default_timezone_set('Asia/Jakarta');
    $tanggal = substr($tgl, 8, 2);
    $bulan = substr($tgl, 5, 2);
    $tahun = substr($tgl, 0, 4);
    $time = substr($tgl, 11, 5);
    return  $tanggal . ' ' . bulan($bulan) . ' ' . $tahun;
}
 function tgl_ind($date){
	date_default_timezone_set('Asia/Jakarta');
        // array hari dan bulan
        $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
        $Bulan = array("Januari","Februari","Maret","April","Mei","Juni",
                       "Juli","Agustus","September","Oktober","November","Desember");
        
        // pemisahan tahun, bulan, hari, dan waktu
        $tahun = substr($date,0,4);
        $bulan = substr($date,5,2);
        $tgl = substr($date,8,2);
   
		 $jam = substr($date, 11, 2)+6;
 $menit = substr($date, 14, 2);
 
        $hari = date("w",strtotime($date));
        $result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." ".$jam.":".$menit." "."WIB";
        return $result;
    }
	function sql($datetime) {
$hari = substr($datetime, 0, 2);
 $bulan = substr($datetime, 3, 2);
 $tahun = substr($datetime, 6, 4);
 $jam = substr($datetime, 11, 2);
 $menit = substr($datetime, 14, 2);
 $detik = '00';
 return $tahun . '-' . $bulan . '-' . $hari;
	}
 
function tanggal_indo4($tanggal, $cetak_hari = false)
{
	$hari = array ( 1 =>    'Senin',
				'Selasa',
				'Rabu',
				'Kamis',
				'Jumat',
				'Sabtu',
				'Minggu'
			);
			
	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split 	  = explode('-', $tanggal);
	$tgl_indo1 = $split[2] . ' ' . $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
	
	if ($cetak_hari) {
		$num = date('N', strtotime($tanggal));
		return $hari[$num] . ', ' . $tgl_indo1;
	}
	return $tgl_indo1;
}
function tgl_lengkap($tanggals) {
date_default_timezone_set('Asia/Jakarta');
    $tanggal = substr($tanggals, 8, 2);
    $bulan = substr($tanggals, 5, 2);
    $tahun = substr($tanggals, 0, 4);


    return $tanggal . ' ' . bulan($bulan) . ' ' . $tahun;
}

function bulan($bln) {
    switch ($bln) {
        case 1:
            return "Januari";
            break;
        case 2:
            return "Februari";
            break;
        case 3:
            return "Maret";
            break;
        case 4:
            return "April";
            break;
        case 5:
            return "Mei";
            break;
        case 6:
            return "Juni";
            break;
        case 7:
            return "Juli";
            break;
        case 8:
            return "Agustus";
            break;
        case 9:
            return "September";
            break;
        case 10:
            return "Oktober";
            break;
        case 11:
            return "November";
            break;
        case 12:
            return "Desember";
            break;
    }
}

function nama_hari($tanggal) {
    $ubah = gmdate($tanggal, time() + 60 * 60 * 8);
    $pecah = explode("-", $ubah);
    $tgl = $pecah[2];
    $bln = $pecah[1];
    $thn = $pecah[0];

    $nama = date("l", mktime(0, 0, 0, $bln, $tgl, $thn));
    $nama_hari = "";
    if ($nama == "Sunday") {
        $nama_hari = "Minggu";
    } else if ($nama == "Monday") {
        $nama_hari = "Senin";
    } else if ($nama == "Tuesday") {
        $nama_hari = "Selasa";
    } else if ($nama == "Wednesday") {
        $nama_hari = "Rabu";
    } else if ($nama == "Thursday") {
        $nama_hari = "Kamis";
    } else if ($nama == "Friday") {
        $nama_hari = "Jumat";
    } else if ($nama == "Saturday") {
        $nama_hari = "Sabtu";
    }
    return $nama_hari;
}

function xTimeAgo ($oldTime, $newTime, $timeType) {

        $timeCalc = strtotime($newTime) - strtotime($oldTime);        

        if ($timeType == "x") {

            if ($timeCalc = 60) {

                $timeType = "m";

            }

            if ($timeCalc = (60*60)) {

                $timeType = "h";

            }

            if ($timeCalc = (60*60*24)) {

                $timeType = "d";

            }

        }        

        if ($timeType == "s") {

            $timeCalc .= " seconds ago";

        }

        if ($timeType == "m") {

            $timeCalc = round($timeCalc/60) . " menit yang lalu";

        }        

        if ($timeType == "h") {

            $timeCalc = round($timeCalc/60/60) . " jam yang lalu";

        }

        if ($timeType == "d") {

            $timeCalc = round($timeCalc/60/60/24) . " hari yang lalu";

        }        

        return $timeCalc;

}

function timeAgo($timestamp){

    date_default_timezone_set('Asia/Jakarta');

    $skrg=date("Y-m-d H:i:s");

    $isi= str_replace("-","",xTimeAgo($skrg,$timestamp,"m"));

    $isi2= str_replace("-","",xTimeAgo($skrg,$timestamp,"h"));

    $isi3= str_replace("-","",xTimeAgo($skrg,$timestamp,"d"));

    $go="";

    if($isi > 60)

    {

        $go=$isi2;

    }elseif($isi2 > 24)

    {

        $go=$isi3;

    }elseif($isi < 61)

    {

        $go=$isi;

    }

    return $go;

} 
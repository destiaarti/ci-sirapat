<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<link href="<?php echo base_url();?>assets/srt3/base.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/srt3/fancy.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/srt3/main.css" rel="stylesheet">
		<script src="<?php echo base_url();?>assets/srt3/theViewer.min.js"></script>
			<script src="<?php echo base_url();?>assets/srt3/compatibility.min.js"></script>

<script>
 <?php 
           
$tgl=        $this->session->userdata('tanggal');     
$tgl1=        $this->session->userdata('tanggal1');     

// FUNGSI
function tanggal_indo1($tanggal, $cetak_hari = false)
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
	$tgl_indo1 = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
	
	if ($cetak_hari) {
		$num = date('N', strtotime($tanggal));
		return $hari[$num] . ', ' . $tgl_indo1;
	}
	return $tgl_indo1;
}
function tanggal_indo2($tanggal, $cetak_hari = false)
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
	$tgl_indo2 = $split[0];
	
	if ($cetak_hari) {
		$num = date('N', strtotime($tanggal));
		return $tgl_indo2;
	}
	return $tgl_indo2;
}
function tanggal_indo3($tanggal, $cetak_hari = false)
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
	$tgl_indo3 = $split[0];
	
	if ($cetak_hari) {
		$num = date('N', strtotime($tanggal));
		return $hari[$num];
	}
	return $tgl_indo3;
}

$tang=date(' Y-m-d',strtotime($tgl));
$tang2=date(' Y-m-d',strtotime($tgl1));
$tang1=date(' Y-m-d');
  ?>
try{
theViewer.defaultViewer = new theViewer.Viewer({});
}catch(e){}
</script>
<title></title>
</head>
<body>
<div id="sidebar">
<div id="outline">
</div>
</div>
<div id="page-container">
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="<?php echo base_url();?>assets/srt3/bg1.png"/><div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">PEMERINTAH KABUPATEN SEMARANG</div><div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">DINAS PENDIDIKAN, KEBUDAYAAN, KEPEMUDAAN DAN OLAH RAGA</div><div class="t m0 x3 h3 y3 ff2 fs0 fc0 sc0 ls0 ws0">SMP NEGERI 1  UNGARAN</div><div class="t m0 x4 h4 y4 ff1 fs0 fc0 sc0 ls0 ws0">Alamat : Jalan Diponegoro No. 197 <span class="ff3"></span>/ Fax. (024) 6921083 Ungaran <span class="ff4"></span> 50514</div><div class="t m0 x2 h2 y5 ff1 fs0 fc0 sc0 ls0 ws0">Email : smpn1_ungaran@yahoo.co.id. Website :http://www.smpn1ungaran.sch.id.</div><div class="t m0 x5 h2 y6 ff1 fs0 fc0 sc0 ls0 ws0">Nomor<span class="_ _0"> </span>: <?php echo $this->session->userdata('nosession') ?> /<?php echo $this->session->userdata('no1session') ?> /<?php echo tanggal_indo2($tang,true); ?>                                             Ungaran,  <?php echo tanggal_indo1($tang1); ?></div><div class="t m0 x5 h2 y7 ff1 fs0 fc0 sc0 ls0 ws0">Lampiran<span class="_ _1"> </span>: -</div><div class="t m0 x5 h2 y8 ff1 fs0 fc0 sc0 ls0 ws0">Perihal<span class="_ _0"> </span>:  Undangan </div><div class="t m0 x4 h3 y9 ff2 fs0 fc0 sc0 ls0 ws0">    </div><div class="t m0 x6 h2 ya ff1 fs0 fc0 sc0 ls0 ws0">Kepada</div><div class="t m0 x6 h2 yb ff1 fs0 fc0 sc0 ls0 ws0">Yth. Bapak/Ibu <?php echo $this->session->userdata('membersession') ?></div><div class="t m0 x4 h2 yc ff1 fs0 fc0 sc0 ls0 ws0">  <span class="_ _2"> </span>SMP Negeri 1 Ungaran</div><div class="t m0 x6 h2 yd ff1 fs0 fc0 sc0 ls0 ws0">Di </div><div class="t m0 x4 h2 ye ff2 fs0 fc0 sc0 ls0 ws0">      <span class="ff1"> <span class="_ _3"> </span>Ungaran</span></div><div class="t m0 x4 h2 yf ff1 fs0 fc0 sc0 ls0 ws0">Dengan Hormat,</div><div class="t m0 x4 h2 y10 ff1 fs0 fc0 sc0 ls0 ws0">Mengharap kehadiran Bapak /Ibu Komite SMP Negeri 1  Ungaran besok pada :</div><div class="t m0 x7 h2 y11 ff1 fs0 fc0 sc0 ls0 ws0">Hari<span class="_ _4"> </span>:  <?php echo tanggal_indo3($tang,true); ?><?php if ($tgl ==$tgl1){?><?php echo " "?> <?php } else{?> s/d <?php echo tanggal_indo3($tang2,TRUE) ?><?php } ?></div><div class="t m0 x7 h2 y12 ff1 fs0 fc0 sc0 ls0 ws0">Tanggal<span class="_ _5"> </span>:  <?php echo tanggal_indo1($tang,false); ?><?php if ($tgl ==$tgl1){?><?php echo " "?> <?php } else{?> s/d <?php echo tanggal_indo1($tang2,false) ?><?php } ?></div><div class="t m0 x7 h2 y13 ff1 fs0 fc0 sc0 ls0 ws0">Waktu<span class="_ _6"> </span>:  Pukul <?php echo $this->session->userdata('pukul') ?> s/d selesai</div><div class="t m0 x7 h2 y14 ff1 fs0 fc0 sc0 ls0 ws0">Tempat<span class="_ _7"> </span>:  <?php echo $this->session->userdata('tempat') ?> SMP Negeri 1 Ungaran</div><div class="t m0 x7 h2 y15 ff1 fs0 fc0 sc0 ls0 ws0">Keperluan<span class="_ _8"> </span>:  <?php echo $this->session->userdata('namasession') ?></div><div class="t m0 x7 h2 y16 ff1 fs0 fc0 sc0 ls0 ws0">                                             </div><div class="t m0 x4 h2 y17 ff1 fs0 fc0 sc0 ls0 ws0">Demikian atas perhatian dan kehadiran Bapak/Ibu,  kami sampaikan terima kasih.</div><div class="t m0 x8 h3 y18 ff2 fs0 fc0 sc0 ls0 ws0">                                                                                                                                                                   </div><div class="t m0 x9 h2 y19 ff1 fs0 fc0 sc0 ls0 ws0">                       Hormat kami,</div><div class="t m0 xa h2 y1a ff1 fs0 fc0 sc0 ls0 ws0">     Kepala Sekolah</div><div class="t m0 x9 h2 y1b ff1 fs0 fc0 sc0 ls0 ws0">                       Dra. Tatik Arlinawati, Mpd</div><div class="t m0 x5 h2 y1c ff1 fs0 fc0 sc0 ls0 ws0">                                                                                               NIP. 19660503 199003 2 009</div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<div id="pf2" class="pf w0 h0" data-page-no="2"><div class="pc pc2 w0 h0"></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
</div>
<div class="loading-indicator">
</div>
</body>
</html>

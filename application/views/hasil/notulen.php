<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link href="<?php echo base_url();?>assets/notulen/base.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/notulen/fancy.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/notulen/main.css" rel="stylesheet">
		<script src="<?php echo base_url();?>assets/notulen/theViewer.min.js"></script>
			<script src="<?php echo base_url();?>assets/notulen/compatibility.min.js"></script>
<script>
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
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="<?php echo base_url();?>assets/srt1/bg1.png"/><div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">PEMERINTAH KABUPATEN SEMARANG</div><div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">DINAS PENDIDIKAN, KEBUDAYAAN, KEPEMUDAAN DAN OLAH RAGA</div><div class="t m0 x3 h2 y3 ff1 fs0 fc0 sc0 ls0 ws0">UPTD SATUAN PENDIDIKAN NORMAL SMP NEGERI 1  UNGARAN</div><div class="t m0 x4 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">Alamat : Jalan Diponegoro No. 197 <span class="ff2"></span>/ Fax. (024) 6921083 Ungaran <span class="ff3"></span> 50514</div><div class="t m0 x2 h2 y5 ff1 fs0 fc0 sc0 ls0 ws0">Email : smpn1_ungaran@yahoo.co.id. Website :http://www.smpn1ungaran.sch.id.</div><div class="t m0 x5 h4 y6 ff4 fs1 fc0 sc0 ls0 ws0">NOTULEN</div><div class="t m0 x6 h4 y7 ff4 fs1 fc0 sc0 ls0 ws0">                <?php echo $this->session->userdata('nama') ?></div><div class="t m0 x7 h4 y8 ff4 fs1 fc0 sc0 ls0 ws0">TAHUN  <?php echo tanggal_indo2($tang,true); ?> / <?php echo tanggal_indo2($tang,true)+1; ?></div><div class="t m0 x8 h2 y9 ff1 fs0 fc0 sc0 ls0 ws0">Hari <span class="_ _0"> </span>:    <?php echo tanggal_indo3($tang,true); ?><?php if ($tgl ==$tgl1){?><?php echo " "?> <?php } else{?> - <?php echo tanggal_indo3($tang2,TRUE) ?><?php } ?></div><div class="t m0 x8 h2 ya ff1 fs0 fc0 sc0 ls0 ws0">Tanggal<span class="_ _1"> </span>:   <?php echo tanggal_indo1($tang,false); ?><?php if ($tgl ==$tgl1){?><?php echo " "?> <?php } else{?> - <?php echo tanggal_indo1($tang2,false) ?><?php } ?></div><div class="t m0 x8 h2 yb ff1 fs0 fc0 sc0 ls0 ws0">Waktu<span class="_ _2"> </span>:   Pukul <?php echo $this->session->userdata('pukul') ?> WIB s.d. selesai</div><div class="t m0 x8 h2 yc ff1 fs0 fc0 sc0 ls0 ws0">Tempat<span class="_ _3"> </span>:   <?php echo $this->session->userdata('tempat') ?></div><div class="t m0 x8 h2 yd ff1 fs0 fc0 sc0 ls0 ws0">Acara<span class="_ _4"> </span>:   <?php echo $this->session->userdata('susunan') ?></div><div class="t m0 x8 h2 y11 ff1 fs0 fc0 sc0 ls0 ws0">Uraian:</div><div class="t m0 x8 h2 y12 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $this->session->userdata('uraian') ?></div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<div id="pf2" class="pf w0 h0" data-page-no="2"><div class="pc pc2 w0 h0"><div class="t m0 x8 h2 y2a ff1 fs0 fc0 sc0 ls0 ws0"></div><div class="t m0 x8 h2 y2c ff1 fs0 fc0 sc0 ls0 ws0">                  </div><div class="t m0 xb h2 y2d ff1 fs0 fc0 sc0 ls0 ws0">Demikian atas perhatian dan kehadiran Bapak/Ibu,  kami sampaikan terima kasih.</div><div class="t m0 xc h5 y2e ff4 fs0 fc0 sc0 ls0 ws0">                                                                                                                                                                   </div><div class="t m0 x2 h2 y2f ff1 fs0 fc0 sc0 ls0 ws0">  Mengetahui,</div><div class="t m0 x2 h2 y30 ff1 fs0 fc0 sc0 ls0 ws0">  Kepala Sekolah   <span class="_ _7"> </span>Notulis</div><div class="t m0 x2 h2 y31 ff1 fs0 fc0 sc0 ls0 ws0">  Dra. Tatik Arlinawati, Mpd        <span class="_ _8"> </span>Nitasari Titah Rahayu, S.Kom </div><div class="t m0 x2 h2 y32 ff1 fs0 fc0 sc0 ls0 ws0">  NIP. 19660503 199003 2 009<span class="_ _9"> </span>NIP.<span class="fs2"> </span>19821227 201001 2 017</div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
</div>
<div class="loading-indicator">

</div>
</body>
</html>

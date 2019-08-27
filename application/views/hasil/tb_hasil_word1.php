<?php
 header("Content-Type: application/vnd.ms-word");
        header("Expires: 0");
        header("Cache-Control:  must-revalidate, post-check=0, pre-check=0");
        header("Content-disposition: attachment; filename=hasil.doc");
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
 table{
 border-collapse: collapse;
 }
 tr>th{
 background-color: gray;
 }
 tr>th,tr>td{
 padding: 3px;
 }
</style>
</head>
<body>
    <h1 style="text-align:center;">
   
        <small>Hasil <?php echo $nama?></small>
		</p>
        <small>SMPN 1 Ungaran</small>
    </br>
    </br>
    </br>
	</h1>
  
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box box-success'>  
                <div class='box-header with-border'>
				
                </div><!-- /.box-header -->
                <div  style="text-align:center;" class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable">

                            <tr>
                                <tr><td>Nama Acara</td><td><?php echo $nama; ?></td></tr>
                        <tr><td>Tempat Acara</td><td><?php echo $jadwal['tempat']; ?></td></tr>
                        <tr><td>Tanggal Acara</td><td><?php 
									 $tgl=$jadwal['tanggal'];
									  $tgl1=$jadwal['tanggal1'];
									if ($tgl ==$tgl1){
											?>
			
	      	<?php echo tgl_indo($jadwal['tanggal'])?>
                
                <?php } else{?>
	<?php echo tgl_indo($jadwal['tanggal']) ?></br> s/d </br><?php echo tgl_indo($jadwal['tanggal1']) ?>
            
                
				<?php } ?></td></tr>
				             <tr><td>Waktu Acara</td><td><?php echo $jadwal['jam1']; ?></td></tr>
                        <tr><td>Hasil</td><td>
						<?php 
								  $hsl2="Hasil Rapat belum diinput";
									if ($hasil ==NULL){
											?>
			
	      	<?php 	$hsl1 ="<font size='4' color='red'>".$hsl2."</strong>"."</font>";?><?php
							echo $hsl1;?>
                
                <?php } else{?>
	<?php echo $hasil ?>
            
                
				<?php } ?></td>
						
						</tr>
						 <tr><td>Susunan Acara</td><td><?php echo $susunan; ?></td></tr>
                     
                        <tr><td>Uraian</td><td><?php echo $uraian; ?></td></tr>
							
                            
                                      
                              

                    </table>					
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.grouped -->
</html>
</body>


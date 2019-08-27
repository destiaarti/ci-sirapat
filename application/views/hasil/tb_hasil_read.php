<section class='content-header'>
    <h1>
        Hasil
        <small>Detail Hasil</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Seting</a></li>
        <li class='active'>Detail Hasil</li>
    </ol>
</section>   
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box box-success'>
                <div class='box-header'>
                    <h3 class='box-title'> Detail Hasil</h3>
                    <table class="table table-bordered">
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
                    <div class='box-footer'>
					       
                        <a href="javascript:history.back()" class="btn btn-danger">Kembali</a>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
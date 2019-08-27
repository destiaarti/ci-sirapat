
<section class='content-header'>
	<h1>
		Jadwal
		<small>Detail Jadwal</small>
	</h1>
	<ol class='breadcrumb'>
		<li><a href='#'><i class='fa fa-suitcase'></i>Seting</a></li>
		<li class='active'>Detail Jadwal</li>
	</ol>
</section>   
<section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box box-success'>
                <div class='box-header'>
                <h3 class='box-title'> Detail Jadwal</h3>
        <table class="table table-bordered">
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Tempat</td><td><?php echo $tempat; ?></td></tr>
	    <tr><td>Tanggal</td><td><?php 
									 $tgl=$tanggal;
									  $tgl1=$tanggal1;
									if ($tgl ==$tgl1){
											?>
			
	      	<?php echo tgl_indo($tanggal)?>
                
                <?php } else{?>
	<?php echo tgl_indo($tanggal) ?></br> s/d </br><?php echo tgl_indo($tanggal1) ?>
            
                
				<?php } ?></tr>
	    <tr><td>Pukul</td><td><?php echo $jam1; ?></td></tr>
	    <tr><td>Deskripsi</td><td><?php echo $deskripsi; ?></td></tr>
	    <tr><td>Status</td> <?php
	  $status1=$status;
		 if($status1=="Sudah Terlaksana"){
			 ?>
							
	<td>  <ul class="timeline"><li class="time-label"><span class="bg-maroon"><?php echo $status ?></span></i></ul></td> 
	
									  <?php }   else if($status1=="Batal"){
									  ?> <td>      <ul class="timeline"><li class="time-label"><span class="bg-red"><?php echo $status ?></span></i></ul></td>
                             <?php
							 } else if($status1=="Belum Terlaksana"){
							 ?>
							 <td>  <ul class="timeline"><li class="time-label"><span class="bg-green"><?php echo $status ?></span></i></ul></td>
                             <?php  }        ?></tr>
		
	</table>
        <div class='box-footer'>
        <a href="javascript:history.back()" class="btn btn-primary">Kembali</a>
        </div>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
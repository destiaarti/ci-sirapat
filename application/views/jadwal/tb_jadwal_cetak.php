<section class='content-header'>
   
</section>        
<section class='content'>
 <h1>
   
        <small>Data Jadwal Rapat</small>
		</p>
        <small>SMPN 1 Ungaran</small>
    </h1>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box box-success'>  
                <div class='box-header with-border'>
      
                </div><!-- /.box-header -->
                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable">
                              <thead style="background-color:#222d32;color: white">
                            <tr class="headings">
                                <th width="30px">No</th>
                             <th>Nama Acara</th>
	<th>Tempat</th>          
		
					  <th>Tanggal</th>
			<th>Pukul</th>
	
           <th>Deskripsi</th>
		     <th>Status</th>
          

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                            foreach ($jadwal_data as $jadwal) {
                                ?>
                                <tr>
                                    <td><?php echo ++$start ?></td>
                                    <td><?php echo $jadwal->nama ?></td>
                                    <td><?php echo $jadwal->tempat ?></td>

                                    <td><?php 
									 $tgl=$jadwal->tanggal;
									  $tgl1=$jadwal->tanggal1;
									if ($tgl ==$tgl1){
											?>
			
	      	<?php echo tgl_indo($jadwal->tanggal)?>
                
                <?php } else{?>
	<?php echo tgl_indo($jadwal->tanggal) ?></br> s/d </br><?php echo tgl_indo($jadwal->tanggal1) ?>
            
                
				<?php } ?></td>
					
										
										
										
										
										
									
		 <td><?php echo $jadwal->jam1 ?> </br>s/d selesai</td>
									 <td><?php echo $jadwal->deskripsi ?></td>
	 <?php
	  $status1=$jadwal->status;
		 if($status1=="Sudah Terlaksana"){
			 ?>
							
	<td>  <?php echo $jadwal->status ?></td> 
	
									  <?php }   else if($status1=="Batal"){
									  ?> <td>    <?php echo $jadwal->status ?></td>
                             <?php
							 } else if($status1=="Belum Terlaksana"){
							 ?>
							 <td> <?php echo $jadwal->status ?></td>
                             <?php  }        ?>
									   
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>					
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
  	<script>
		window.print();
	</script>
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#mytable").dataTable();
    });
</script>

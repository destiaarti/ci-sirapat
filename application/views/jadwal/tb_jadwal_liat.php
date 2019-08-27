<section class='content-header'>
    <h1>
        Jadwal
        <small>Data Jadwal</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Data Jadwal</li>
    </ol>
</section>        
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box box-success'>  
                <div class='box-header with-border'>
      
                       <h3> 
  
	      <a href="<?php echo base_url('jadwal/excel');?>"><button type="submit" name="tambah" class="btn btn-success" style="float: right;"><i class="fa fa-arrow-circle-down"></i> Download Excel</button></a>  
		      <a href="<?php echo base_url('jadwal/pdf');?>"><button type="submit" name="tambah" class="btn btn-danger" style="float: right;"><i class="fa fa-arrow-circle-down"></i> Download PDF</button></a> 
   <a href="<?php echo base_url('jadwal/word3');?>"><button type="submit" name="tambah" class="btn btn-primary" style="float: right;"><i class="fa fa-arrow-circle-down"></i> Download Word</button></a> 		
        <a href="<?php echo base_url('jadwal/cetak');?>"><button type="submit" name="tambah" class="btn btn-warning" style="float: right;"><i class="fa fa-plus-square"></i> Cetak</button></a></h3>
		
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
							
	<td>  <ul class="timeline"><li class="time-label"><span class="bg-maroon"><?php echo $jadwal->status ?></span></i></ul></td> 
	
									  <?php }   else if($status1=="Batal"){
									  ?> <td>      <ul class="timeline"><li class="time-label"><span class="bg-red"><?php echo $jadwal->status ?></span></i></ul></td>
                             <?php
							 } else if($status1=="Belum Terlaksana"){
							 ?>
							 <td>  <ul class="timeline"><li class="time-label"><span class="bg-green"><?php echo $jadwal->status ?></span></i></ul></td>
                             <?php  }        ?>
									   
                                    </td>
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
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#mytable").dataTable();
    });
</script>

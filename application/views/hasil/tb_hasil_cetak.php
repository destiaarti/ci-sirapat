
<section class='content-header'>
  
</section>        
<section class='content'>
 <h1>
   
        <small>Data Anggota Rapat</small>
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
                            <tr>
                                <th width="80px">No</th>
 
                              
                                <th>Nama</th>
								<th>Tanggal</th>
                  
                                                    
                                <th>Tempat</th>
								<th>Pukul</th>                               
							   <th>Hasil Rapat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                            foreach ($ion1 as $grouped) {
								$f1=$grouped->tanggal1;
			$f=$grouped->tanggal;
 if($f1!=$f){
	 $n= $grouped->tanggal1;
 }
  else{
	  $n="-";
  }
	$f2=$grouped->hasil;
if($f2==null){
	$d="hasil belum diinput";
}	else{
	$d= $grouped->hasil;
}
                                ?>
                                <tr>
                                    <td><?php echo ++$start ?></td>
                                    <td><?php echo $grouped->nama ?></td>
									
                                    <td><?php echo $n ?></td>
		
									 <td><?php echo $grouped->tempat?></td>
									 <td><?php echo $grouped->jam1 ?></td>
									 <td><?php echo $grouped->hasil ?></td>
							
                            
                                      
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
	<script>
	window.print();
	</script>
</section><!-- /.content -->
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#mytable").dataTable();
    });
</script>

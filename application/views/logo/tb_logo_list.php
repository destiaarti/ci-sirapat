<?php
if ($this->session->flashdata('Edit')) {
   
 echo "<div class='alert alert-info alert-dismissible fade in' role='alert'><span class='glyphicon glyphicon-wrench' aria-hidden='true'></span>";
    echo $this->session->flashdata('Edit');
    echo "</div>";
}elseif($this->session->flashdata('Tambah')){

   echo "<div class='alert alert-warning alert-dismissible fade in' role='alert'><span class='glyphicon glyphicon-arrow-down' aria-hidden='true'></span>";
   echo $this->session->flashdata('Tambah');
    echo "</div>";
}
elseif($this->session->flashdata('Hapus')){

   echo "<div class='alert alert-danger alert-dismissible fade in' role='alert'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span>";
   echo $this->session->flashdata('Hapus');
    echo "</div>";
}elseif($this->session->flashdata('Hapus1')){

   echo "<div class='alert alert-success alert-dismissible fade in' role='alert'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span>";
   echo $this->session->flashdata('Hapus1');
    echo "</div>";
}
?>
<section class='content-header'>
    <h1>
       Log
        <small>Data Login User</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Data Log</li>
    </ol>
</section>       
<section class='content'>
    <div class='row'>
        <!-- left column -->
        <div class='col-md-12'>
		 <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#fa-icons" data-toggle="tab">Semua Log</a></li>
                  <li><a href="#gagal" data-toggle="tab">Log Gagal</a></li>
				                 
                  <li><a href="#berhasil" data-toggle="tab">Log Berhasil</a></li>
              
                </ul>
                <div class="tab-content">
                  <!-- Font Awesome icons -->
                  <div class="tab-pane active" id="fa-icons" >
                    <section id="new">
						<form action="<?php echo site_url('logo/delete_mutiple'); ?>" method="post">
                      <h4 class="page-header">Semua Log Login</h4>

      
           
   <ul class="bs-glyphicons">
                                  <div class='box-header'>
                    <div class='col-xs-12'>
					
                             <div class='box box-success'>  
                <div class='box-header with-border'>
				<h3> 

							  
<a class="btn btn-danger" data-toggle="modal" data-target="#Modaa"><span class="fa fa-trash"> Hapus yang diceklis</span></a> </h3>  
                </div><!-- /.box-header -->
                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable">
                        <thead style="background-color:#222d32;color: white">
                            <tr>
								<th><input type="checkbox" id="checkAll" name="checkAll"></th>
                                <th width="80px">No</th>
                                <th>Email</th>
							
								   <th>Log Login</th>
                                <th>Hapus</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                            foreach ($ion1 as $log) {
                                ?>
                                <tr>
									<td><input type="checkbox" name="msg[]" value="<?php echo $log->id; ?>"></td>
                                    <td><?php echo ++$start ?></td>
                                    <td><?php echo $log->login?></td>
					
									 <td><font color="red"><b><?php echo tgl_indo($log->datetime1) ?></b></font> -- <?php echo $log->login ?> telah <font color="blue"><b><?php echo $log->status ?></b></font>  login </td>
                            
                                       <td> <?php
                                        echo anchor(site_url('logo/delete/' . $log->id), '<i class="fa fa-trash"></i>', array('data-toggle' => 'tooltip', 'title' => 'edit data', 'class' => 'btn btn-danger btn-sm'));  ?></td>
									
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>					
  
  </div><!-- /.box-body -->
   <div class="modal fade" id="Modaa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus File</h4>
                    </div>
                
                    <div class="modal-body">
							          
              
                            <p>Apakah Anda yakin mau menghapus log login <b>yang diceklis</b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
              <a href="<?php echo base_url('logo/delete_mutiple');?>"><button type="submit"  class="btn btn-danger btn-sm" style="float: left;"><i class="fa fa-trash"></i> Hapus yang diceklis</button></a>  
                    </div>
                
                </div>
            </div>
        </div>
            </div><!-- /.box -->
</ul>
                </form>    </section>

                  
                  </div><!-- /#fa-icons -->
                  <!-- glyphicons-->
                  <div class="tab-pane" id="gagal">
				   	<form action="<?php echo site_url('logo/delete_mutiple'); ?>" method="post">
   <h4 class="page-header">Log Gagal Login </h4>

      
           
   <ul class="bs-glyphicons">
                                  <div class='box-header'>
                    <div class='col-xs-12'>
					
                             <div class='box box-success'>  
                <div class='box-header with-border'>
				 <h3> 

							  
<a class="btn btn-danger" data-toggle="modal" data-target="#Modaan"><span class="fa fa-trash"> Hapus yang diceklis</span></a> </h3>  
                </div><!-- /.box-header -->
                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable1">
                        <thead style="background-color:#222d32;color: white">
                            <tr>
							 	<th><input type="checkbox" id="checkAll1" name="checkAll"></th>
                                <th width="80px">No</th>
                                <th>Email</th>
								   
								   <th>Log Login</th>
                                <th>Hapus</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                            foreach ($ion1 as $log) {
								if($log->status=="gagal"){
                                ?>
                                <tr>
									<td><input type="checkbox" name="msg[]" value="<?php echo $log->id; ?>"></td>
                                    <td><?php echo ++$start ?></td>
                         
									 <td><?php echo $log->login?></td>
					
 <td><font color="red"><b><?php echo tgl_indo($log->datetime1) ?></b></font> -- <?php echo $log->login ?> telah <font color="blue"><b><?php echo $log->status ?></b></font>  login </td>
                            
                                       <td> <?php
                                        echo anchor(site_url('logo/delete/' . $log->id), '<i class="fa fa-trash"></i>', array('data-toggle' => 'tooltip', 'title' => 'edit data', 'class' => 'btn btn-danger btn-sm'));  ?></td>
									
                                    </td>
                                </tr>
                                <?php
                            }}
                            ?>
                        </tbody>
                    </table>					
  
  </div><!-- /.box-body -->
  <div class="modal fade" id="Modaan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus File</h4>
                    </div>
                
                    <div class="modal-body">
							          
              
                            <p>Apakah Anda yakin mau menghapus log login gagal <b>yang diceklis</b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
              <a href="<?php echo base_url('logo/delete_mutiple');?>"><button type="submit"  class="btn btn-danger btn-sm" style="float: left;"><i class="fa fa-trash"></i> Hapus yang diceklis</button></a>  
                    </div>
                
                </div>
            </div>
        </div>
            </div><!-- /.box -->
</ul>
</form>
                  </div><!-- /#ion-icons -->
                  <div class="tab-pane" id="berhasil">
 	<form action="<?php echo site_url('logo/delete_mutiple'); ?>" method="post">
                  <h4 class="page-header">Log Berhasil Login</h4>

      
           
   <ul class="bs-glyphicons">
                                  <div class='box-header'>
                    <div class='col-xs-12'>
					
                             <div class='box box-success'>  
                <div class='box-header with-border'>
				 <h3> 

							  
<a class="btn btn-danger" data-toggle="modal" data-target="#Modaab"><span class="fa fa-trash"> Hapus yang diceklis</span></a> </h3>  
                </div><!-- /.box-header -->
                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable2">
                        <thead style="background-color:#222d32;color: white">
                            <tr>	
							<th><input type="checkbox" id="checkAll2" name="checkAll"></th>
                                <th width="80px">No</th>
                                <th>Email</th>
								   
								   <th>Log Login</th>
                                <th>Hapus</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                            foreach ($ion1 as $log) {
								if($log->status=="berhasil"){
                                ?>
                                <tr>
								<td><input type="checkbox" name="msg[]" value="<?php echo $log->id; ?>"></td>
                                    <td><?php echo ++$start ?></td>
                        
									 <td><?php echo $log->login?></td>
					
									 <td><font color="red"><b><?php echo tgl_indo($log->datetime1) ?></b></font> -- <?php echo $log->login ?> telah <font color="blue"><b><?php echo $log->status ?></b></font>  login </td>
                            
                                       <td> <?php
                                        echo anchor(site_url('logo/delete/' . $log->id), '<i class="fa fa-trash"></i>', array('data-toggle' => 'tooltip', 'title' => 'edit data', 'class' => 'btn btn-danger btn-sm'));  ?></td>
									
                                    </td>
                                </tr>
                                <?php
                            }}
                            ?>
                        </tbody>
                    </table>					
  
  </div><!-- /.box-body -->
  <div class="modal fade" id="Modaab" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus File</h4>
                    </div>
                
                    <div class="modal-body">
							          
              
                            <p>Apakah Anda yakin mau menghapus log login berhasil <b>yang diceklis</b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
              <a href="<?php echo base_url('logo/delete_mutiple');?>"><button type="submit"  class="btn btn-danger btn-sm" style="float: left;"><i class="fa fa-trash"></i> Hapus yang diceklis</button></a>  
                    </div>
                
                </div>
            </div>
        </div>
            </div><!-- /.box -->
</ul>
</form>
                  </div><!-- /#ion-icons -->
			
				                         
				
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            <!-- general form elements -->
           
            </div><!-- /.col -->
        </div><!-- /.row -->

	
</section><!-- /.content -->
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#mytable").dataTable();
        $("#mytable1").dataTable();
        $("#mytable2").dataTable();

		$("#checkAll").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});
$("#checkAll1").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});
$("#checkAll2").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});
    });
</script>


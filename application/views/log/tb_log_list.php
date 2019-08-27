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
        <small>Data Aktivitas User</small>
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
                  <li><a href="#admin" data-toggle="tab">Log Admin</a></li>
				                 
                  <li><a href="#sekre" data-toggle="tab">Log Sekretaris</a></li>
                  <li><a href="#member" data-toggle="tab">Log Member</a></li>
                </ul>
                <div class="tab-content">
                  <!-- Font Awesome icons -->
                  <div class="tab-pane active" id="fa-icons" >
                    <section id="new">
						<form action="<?php echo site_url('log/delete_mutiple'); ?>" method="post">
                      <h4 class="page-header">Semua Log Aktivitas</h4>

      
           
   <ul class="bs-glyphicons">
                                  <div class='box-header'>
                    <div class='col-xs-12'>
					
                             <div class='box box-success'>  
							
                <div class='box-header with-border'> 	 <h3> 

							  
<a class="btn btn-danger" data-toggle="modal" data-target="#Modaa"><span class="fa fa-trash"> Hapus yang diceklis</span></a> </h3>  
                </div><!-- /.box-header -->

                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable">
                        <thead style="background-color:#222d32;color: white">
                            <tr>
								<th><input type="checkbox" id="checkAll" name="checkAll"></th>
                                <th width="80px">No</th>
                                
								   <th>Username</th>
								   <th>Hak Akses</th>
								   <th>Log Aktivitas</th>
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
                                
									 <td><?php echo $log->username ?></td>
									 <td><?php echo $log->name ?></td>
									 <td><font color="red"><b><?php echo tgl_indo($log->datetime) ?></b></font> -- <?php echo $log->username ?> telah <font color="brown"><?php echo $log->crud ?></font>  <font color="blue"><?php echo $log->menu ?></font>  </td>
                            
                                       <td> 
									<a class="btn btn-danger" data-toggle="modal" data-target="#ModalHapus<?php echo $log->id;?>"><span class="fa fa-trash"></span></a></td>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>					
  
  </div><!-- /.box-body -->
  

	<?php foreach ($ion1 as $log) {
           $id= $log->id;
            
                $nama=$log->name;
                $user=$log->username;
             
           
            ?>

   
    <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus File</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'log/delete'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							             <input type="hidden" name="id" value="<?php echo $id;?>"/>
              
                            <p>Apakah Anda yakin mau menghapus <b><?php echo $user ?> telah <font color="brown"><?php echo $log->crud ?></font>  <font color="blue"><?php echo $log->menu ?></font>  </b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
                 <?php										
										echo anchor(site_url('log/delete/' . $id), '<i class="fa fa-trash" ></i>', array('data-toggle' => 'tooltip', 'title' => 'hapus data', 'class' => 'btn btn-danger btn-sm'));
										
										                
                                        ?>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php }?>
  <div class="modal fade" id="Modaa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus File</h4>
                    </div>
                
                    <div class="modal-body">
							          
              
                            <p>Apakah Anda yakin mau menghapus log aktivitas <b>yang diceklis</b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
              <a href="<?php echo base_url('log/delete_mutiple');?>"><button type="submit"  class="btn btn-danger btn-sm" style="float: left;"><i class="fa fa-trash"></i> Hapus yang diceklis</button></a>  
                    </div>
                
                </div>
            </div>
        </div>
            </div><!-- /.box -->
			
</ul>
</form>
                    </section>

                  
                  </div><!-- /#fa-icons -->
                  <!-- glyphicons-->
                  <div class="tab-pane" id="admin">
				   	<form action="<?php echo site_url('log/delete_mutiple'); ?>" method="post">
   <h4 class="page-header">Log Aktivitas Admin </h4>

      
           
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
							  	<th><input type="checkbox" id="checkAll2" name="checkAll"></th>
                                <th width="80px">No</th>
                                
								   <th>Username</th>
								   <th>Hak Akses</th>
								   <th>Log Aktivitas</th>
                                <th>Hapus</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                            foreach ($ion1 as $log) {
								if($log->name=="admin"){
                                ?>
                                <tr>
								<td><input type="checkbox" name="msg[]" value="<?php echo $log->id; ?>"></td>
                                    <td><?php echo ++$start ?></td>
                                
									 <td><?php echo $log->username ?></td>
									 <td><?php echo $log->name ?></td>
									 <td><font color="red"><b><?php echo tgl_indo($log->datetime) ?></b></font> -- <?php echo $log->username ?> telah <font color="brown"><?php echo $log->crud ?></font>  <font color="blue"><?php echo $log->menu ?></font>  </td>
                            
                                       <td> <?php
                                        echo anchor(site_url('log/delete/' . $log->id), '<i class="fa fa-trash"></i>', array('data-toggle' => 'tooltip', 'title' => 'edit data', 'class' => 'btn btn-danger btn-sm'));  ?></td>
									
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
							          
              
                            <p>Apakah Anda yakin mau menghapus log aktivitas admin <b>yang diceklis</b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
              <a href="<?php echo base_url('log/delete_mutiple');?>"><button type="submit"  class="btn btn-danger btn-sm" style="float: left;"><i class="fa fa-trash"></i> Hapus yang diceklis</button></a>  
                    </div>
                
                </div>
            </div>
        </div>
            </div><!-- /.box -->
</ul>
                </form>  </div><!-- /#ion-icons -->
                  <div class="tab-pane" id="sekre">

								   	<form action="<?php echo site_url('log/delete_mutiple'); ?>" method="post">
                  <h4 class="page-header">Log Aktivitas Sekretaris</h4>

      
           
   <ul class="bs-glyphicons">
                                  <div class='box-header'>
								 
                    <div class='col-xs-12'>
					
                             <div class='box box-success'>  
                <div class='box-header with-border'>
				  </h3>
								  <a class="btn btn-danger" data-toggle="modal" data-target="#Modaw"><span class="fa fa-trash"> Hapus yang diceklis</span></a> </h3> 
                </div><!-- /.box-header -->
                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable2">
                        <thead style="background-color:#222d32;color: white">
                            <tr>
								<th><input type="checkbox" id="checkAll1" name="checkAll"></th>
                                <th width="80px">No</th>
                                
								   <th>Username</th>
								   <th>Hak Akses</th>
								   <th>Log Aktivitas</th>
                                <th>Hapus</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                            foreach ($ion1 as $logo) {
								if($logo->name=="sekretaris"){
                                ?>
                                <tr>
								<td><input type="checkbox" name="msg[]" value="<?php echo $logo->id; ?>"></td>
                                    <td><?php echo ++$start ?></td>
                      
									 <td><?php echo $logo->username ?></td>
									 <td><?php echo $logo->name ?></td>
									 <td><font color="red"><b><?php echo tgl_indo($logo->datetime) ?></b></font> -- <?php echo $logo->username ?> telah <font color="brown"><?php echo $logo->crud ?></font>  <font color="blue"><?php echo $logo->menu ?></font>  </td>
                            
                                       <td> <?php
                                        echo anchor(site_url('log/delete/' . $log->id), '<i class="fa fa-trash"></i>', array('data-toggle' => 'tooltip', 'title' => 'edit data', 'class' => 'btn btn-danger btn-sm'));  ?></td>
									
                                    </td>
                                </tr>
                                <?php
                            }}
                            ?>
                        </tbody>
                    </table>					
  
  </div><!-- /.box-body -->
    <div class="modal fade" id="Modaw" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus File</h4>
                    </div>
                
                    <div class="modal-body">
							          
              
                            <p>Apakah Anda yakin mau menghapus log aktivitas sekretaris <b>yang diceklis</b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
              <a href="<?php echo base_url('log/delete_mutiple');?>"><button type="submit"  class="btn btn-danger btn-sm" style="float: left;"><i class="fa fa-trash"></i> Hapus yang diceklis</button></a>  
                    </div>
                
                </div>
            </div>
        </div>
            </div><!-- /.box -->
</ul>
  </form>                </div><!-- /#ion-icons -->
			
				                    <div class="tab-pane" id="member">
										<form action="<?php echo site_url('log/delete_mutiple'); ?>" method="post">
 <h4 class="page-header">Log Aktivitas Member</h4>

      
           
   <ul class="bs-glyphicons">
                                  <div class='box-header'>
                    <div class='col-xs-12'>
					
                             <div class='box box-success'>  
                <div class='box-header with-border'>
					 <h3> 

							  
<a class="btn btn-danger" data-toggle="modal" data-target="#Modaas"><span class="fa fa-trash"> Hapus yang diceklis</span></a> </h3>  
                </div><!-- /.box-header -->
                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable3">
                        <thead style="background-color:#222d32;color: white">
                            <tr>
							   	<th><input type="checkbox" id="checkAll3" name="checkAll"></th>
                                <th width="80px">No</th>
                                
								   <th>Username</th>
								   <th>Hak Akses</th>
								   <th>Log Aktivitas</th>
                                <th>Hapus</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                            foreach ($ion1 as $log) {
								if($log->name=="member"){
                                ?>
                                <tr>
								<td><input type="checkbox" name="msg[]" value="<?php echo $log->id; ?>"></td>
									
                                    <td><?php echo ++$start ?></td>
                                
									 <td><?php echo $log->username ?></td>
									 <td><?php echo $log->name ?></td>
									 <td><font color="red"><b><?php echo tgl_indo($log->datetime) ?></b></font> -- <?php echo $log->username ?> telah <font color="brown"><?php echo $log->crud ?></font>  <font color="blue"><?php echo $log->menu ?></font>  </td>
                            
                                       <td> <?php
                                        echo anchor(site_url('log/delete/' . $log->id), '<i class="fa fa-trash"></i>', array('data-toggle' => 'tooltip', 'title' => 'edit data', 'class' => 'btn btn-danger btn-sm'));  ?></td>
									
                                    </td>
                                </tr>
                                <?php
                            }}
                            ?>
                        </tbody>
                    </table>					
  
  </div><!-- /.box-body -->
  <div class="modal fade" id="Modaas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus File</h4>
                    </div>
                
                    <div class="modal-body">
							          
              
                            <p>Apakah Anda yakin mau menghapus log aktivitas member <b>yang diceklis</b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
              <a href="<?php echo base_url('log/delete_mutiple');?>"><button type="submit"  class="btn btn-danger btn-sm" style="float: left;"><i class="fa fa-trash"></i> Hapus yang diceklis</button></a>  
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
        $("#mytable3").dataTable();
		
$("#checkAll").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});
$("#checkAll1").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});
$("#checkAll2").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});
$("#checkAll3").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});
    });
</script>


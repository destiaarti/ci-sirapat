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
       Pesan
        <small>Data Pesan</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Data Pesan</li>
    </ol>
</section>       
<section class='content'>
    <div class='row'>
        <!-- left column -->
        <div class='col-md-12'>
		 <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#fa-icons" data-toggle="tab">Semua Pesan</a></li>
                  <li><a href="#masuk" data-toggle="tab">Pesan Masuk</a></li>
				                 
                  
                  <li><a href="#keluar" data-toggle="tab">Pesan Keluar</a></li>
                </ul>
                <div class="tab-content">
                  <!-- Font Awesome icons -->
                  <div class="tab-pane active" id="fa-icons" >
                    <section id="new">
							   <h4 class="page-header">Semua Pesan</h4>
					<h3 class='box-title'><?php echo anchor('kirim/create/', '<i class="glyphicon glyphicon-plus"></i>Tulis Pesan', array('class' => 'btn bg-purple btn-lg')); ?>     </h3>
						<form action="<?php echo site_url('kirim/delete_mutiple'); ?>" method="post">
			
					
					
					  <?php  $id = $this->session->userdata('user_id');
				      $subi1 = $this->session->userdata('group_id');
					  $get3 =$this->db->get_where("tb_users_groups",array("user_id" =>$id))->row();
					  	$tanggal1 = $get3->group_id;
                if ($tanggal1=="1") { ?>
                    <h3><a class="btn btn-danger" data-toggle="modal" data-target="#Modaa"><span class="fa fa-trash"> Hapus yang diceklis</span></a> </h3>
					
                   
				<?php }else{
					
				}?>
      
       
   <ul class="bs-glyphicons">
                                  <div class='box-header'>
                    <div class='col-xs-12'>
					
                             <div class='box box-success'>  
							
                <div class='box-header with-border'> 	 
                </div><!-- /.box-header -->

                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable">
                        <thead style="background-color:#222d32;color: white">
                            <tr>
								  <th width="50px"><input type="checkbox" id="checkAll1" name="checkAll"></th>
                                
                                     <th width="60px">No</th>
									 
                                  <th width="90px">Pengirim</th>
				
								
                                <th><center>Isi Pesan</center></th>
   <th width="100px">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                           foreach ($kirim_data as $kirim) {
							
                                ?>
                                <tr>
												<td><input type="checkbox" name="msg[]" value="<?php echo $kirim->id; ?>"></td>
							
                                    <td><?php echo ++$start ?></td>
                                           <td><?php echo $kirim->untuk ?></td>
                                 
									 <td><center><?php echo $kirim->isi ?></center></td>
									   <td><?php echo tgl_lengkap($kirim->date2); ?></td>
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
							          
              
                            <p>Apakah Anda yakin mau menghapus pesan <b>yang diceklis</b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
              <a href="<?php echo base_url('kirim/delete_mutiple');?>"><button type="submit"  class="btn btn-danger btn-sm" style="float: left;"><i class="fa fa-trash"></i> Hapus yang diceklis</button></a>  
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
                  <div class="tab-pane" id="masuk">
				   	<form action="<?php echo site_url('kirim/delete_mutiple'); ?>" method="post">
   <h4 class="page-header">Pesan Masuk </h4>

      
           
   <ul class="bs-glyphicons">
                                  <div class='box-header'>
                    <div class='col-xs-12'>
					
                             <div class='box box-success'>  
                <div class='box-header with-border'>
				 <?php  $id = $this->session->userdata('user_id');
				      $subi1 = $this->session->userdata('group_id');
					  $get3 =$this->db->get_where("tb_users_groups",array("user_id" =>$id))->row();
					  	$tanggal1 = $get3->group_id;
                if ($tanggal1=="1") { ?>
				<h3> 

							  
<a class="btn btn-danger" data-toggle="modal" data-target="#Modaan"><span class="fa fa-trash"> Hapus yang diceklis</span></a> </h3>  
	<?php }else{
					
				}?>
                </div><!-- /.box-header -->
                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable1">
                        <thead style="background-color:#222d32;color: white">
                            <tr>
							  	 <th width="50px"><input type="checkbox" id="checkAll2" name="checkAll"></th>
                           <th width="60px">No</th>
                                 <
                                  <th width="90px">Pengirim</th>
	
								 
                                <th><center>Isi Pesan</center></th>
  <th width="100px">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
							  $id = $this->session->userdata('user_id');
				      $subi1 = $this->session->userdata('group_id');
					  $get3 =$this->db->get_where("tb_users_groups",array("user_id" =>$id))->row();
					  	$tanggal1 = $get3->group_id;
              
                            $start = 0;
                           foreach ($kirim_data as $kirim) {
							     if ($tanggal1=="1") {
								if($kirim->status=="masuk"){
                                ?>
                                <tr>
								<td><input type="checkbox" name="msg[]" value="<?php echo $kirim->id; ?>"></td>
                                    <td><?php echo ++$start ?></td>
                                           <td><?php echo $kirim->untuk ?></td>
                                    
									 <td><center><?php echo $kirim->isi ?></center></td>
									   <td><?php echo tgl_lengkap($kirim->date2); ?></td>
                                    </td>
                                </tr>
								 <?php }}  else {
										if($kirim->status=="keluar"){
									?>
									 <tr>
								<td><input type="checkbox" name="msg[]" value="<?php echo $kirim->id; ?>"></td>
                                    <td><?php echo ++$start ?></td>
                                           <td><?php echo $kirim->untuk ?></td>
                                  
									 <td><center><?php echo $kirim->isi ?></center></td>
											   <td><?php echo tgl_lengkap($kirim->date2); ?></td>
                                    </td>
                                </tr>
								 <?php
								 }}
                            ?>
                                <?php
                            }
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
							          
              
                            <p>Apakah Anda yakin mau menghapus Pesan Masuk <b>yang diceklis</b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
              <a href="<?php echo base_url('kirim/delete_mutiple');?>"><button type="submit"  class="btn btn-danger btn-sm" style="float: left;"><i class="fa fa-trash"></i> Hapus yang diceklis</button></a>  
                    </div>
                
                </div>
            </div>
        </div>
            </div><!-- /.box -->
</ul>
                </form>  </div><!-- /#ion-icons -->
                 
			
				                    <div class="tab-pane" id="keluar">
										<form action="<?php echo site_url('kirim/delete_mutiple'); ?>" method="post">
 <h4 class="page-header">Pesan Keluar</h4>

      
           
   <ul class="bs-glyphicons">
                                  <div class='box-header'>
                    <div class='col-xs-12'>
					
                             <div class='box box-success'>  
                <div class='box-header with-border'>
				 <?php  $id = $this->session->userdata('user_id');
				      $subi1 = $this->session->userdata('group_id');
					  $get3 =$this->db->get_where("tb_users_groups",array("user_id" =>$id))->row();
					  	$tanggal1 = $get3->group_id;
                if ($tanggal1=="1") { ?>
					 <h3> 

							  
<a class="btn btn-danger" data-toggle="modal" data-target="#Modaas"><span class="fa fa-trash"> Hapus yang diceklis</span></a> </h3>  
	<?php }else{
					
				}?>
                </div><!-- /.box-header -->
                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable3">
                        <thead style="background-color:#222d32;color: white">
                            <tr>
							   <th width="50px"><input type="checkbox" id="checkAll3" name="checkAll"></th>
                                <th width="60px">No</th>
                                
                                  <th width="90px">Pengirim</th>
				
								   
                                <th><center>Isi Pesan</center</th>
								<th width="100px">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
							
                 $id = $this->session->userdata('user_id');
				      $subi1 = $this->session->userdata('group_id');
					  $get3 =$this->db->get_where("tb_users_groups",array("user_id" =>$id))->row();
					  	$tanggal1 = $get3->group_id;
              
                            $start = 0;
                           foreach ($kirim_data as $kirim) {
							     if ($tanggal1=="1") {
								if($kirim->status=="keluar"){
                                ?>
                                <tr>
								<td><input type="checkbox" name="msg[]" value="<?php echo $kirim->id; ?>"></td>

                                    <td><?php echo ++$start ?></td>
                                    <td><?php echo $kirim->untuk ?></td>
                                    
									 <td><center><?php echo $kirim->isi ?></center></td>
									   <td><?php echo tgl_lengkap($kirim->date2); ?></td>
                            
									
                                    </td>
                                </tr>
                                <?php }}  else {
										if($kirim->status=="masuk"){
									?>
									 <tr>
								<td><input type="checkbox" name="msg[]" value="<?php echo $kirim->id; ?>"></td>
                                    <td><?php echo ++$start ?></td>
                                           <td><?php echo $kirim->untuk ?></td>
										   	 <td><center><?php echo $kirim->isi ?></center></td>
                          		   <td><?php echo tgl_lengkap($kirim->date2); ?></td>
								
									
                                    </td>
                                </tr>
								 <?php
								 }}
                            ?>
                                <?php
                            }
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
							          
              
                            <p>Apakah Anda yakin mau menghapus pesan keluar <b>yang diceklis</b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
              <a href="<?php echo base_url('kirim/delete_mutiple');?>"><button type="submit"  class="btn btn-danger btn-sm" style="float: left;"><i class="fa fa-trash"></i> Hapus yang diceklis</button></a>  
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


<section class='content-header'>
    <h1>
       Upload
        <small>Upload Berkas Rapat</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Upload</li>
    </ol>
</section>        
<section class='content'>

    <!-- Main content -->
    <section class="content">
	<a class="btn btn-danger" data-toggle="modal" data-target="#Modaa"><span class="fa fa-trash"> Hapus yang diceklis</span></a> </h3>  
             <h3> <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah File</a></h3>
	<form action="<?php echo site_url('files/delete_mutiple'); ?>" method="post">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box box-success">
            <div class="box-header">
			
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:12px;">
             <thead style="background-color:#222d32;color: white">
                <tr>
				  <th><input type="checkbox" id="checkAll" name="checkAll" /> Check all</th>
					          <th style="width:70px;">#</th>
                    <th>Acara</th>
					<th>Nama File</th>
                    <th>Tanggal Post</th>
                 
                    <th>Deskripsi</th>
                    <th style="text-align:center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$no=1;
  			 foreach ($data->result() as $key){
									
			 
                                ?>
                                <tr>
                               
	<td><input type="checkbox" name="msg[]" value="<?php echo $key->id; ?>"></td>
                          <td><?php echo $no++;?></td>
                      <td><?php echo $key->file_rapat;?></td>
                      <td><?php echo $key->file_judul;?></td>
                     
					
                      <td><?php echo $key->tanggal;?></td>
               
					    <td><?php echo $key->file_deskripsi;?></td>
                  <td style="text-align:center;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $key->id;?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $key->id;?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
			   <?php
                            }
                            ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
		 <div class="modal fade" id="Modaa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus File</h4>
                    </div>
                
                    <div class="modal-body">
							          
              
                            <p>Apakah Anda yakin mau menghapus file <b>yang diceklis</b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
              <a href="<?php echo base_url('files/delete_mutiple');?>"><button type="submit"  class="btn btn-danger btn-sm" style="float: left;"><i class="fa fa-trash"></i> Hapus yang diceklis</button></a>  
                    </div>
                
                </div>
            </div>
        </div>
		</form>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


<!--Modal Add Pengguna-->
 
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Add File</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'files/simpan_file'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Judul</label>
                                <div class="col-sm-7">
								      <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-tags"></i>
                      </div>
                                  <select name="xrapat" class="form-control" id="inputUserName" required>
								  
                                        <option value="">- Pilih acara -</option>                               
                                             <?php
											 $jadwal =$this->db->get_where('jadwal')->result();
                                        if (!empty($jadwal)) {
                                            foreach ($jadwal as $row) {
                                                echo "<option value='$row->nama'> " . $row->nama .  "</option>";
                                            }
                                        }
                                        ?>
                                    </select> 
                                </div>
                                </div>
                            </div>
							 <div class="form-group">
							      
                                <label for="inputUserName" class="col-sm-4 control-label">Judul File</label>
                                <div class="col-sm-7">
								 <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa  fa-file-o"></i>
                      </div>
                                <input type="text" name="xjudul" class="form-control" id="inputUserName" placeholder="Judul File.." required>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Deskripsi</label>
                                <div class="col-sm-7">
								 <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa  fa-paste"></i>
                      </div>
                                  <textarea class="form-control" rows="3" name="xdeskripsi" placeholder="Deskripsi ..." required></textarea>
                                </div>
                            </div>
                            </div>
                              
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">File</label>
                                <div class="col-sm-7">
                                  <input type="file" name="filefoto" required>
                                  NB: file harus bertype pdf|doc|docx|ppt|pptx|zip. ukuran maksimal 2,7 MB.
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-success btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


		<?php foreach ($data->result() as $key) {
				 
                $id= $key->id;
         
                $rapat=$key->file_rapat;
                $judul=$key->file_judul;
                $deskripsi=$key->file_deskripsi;
          
                $tanggal=$key->tanggal;
               
                $file=$key->file_data;
            ?>
	<!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit File</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'files/update_file'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                             <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Acara</label>
                             
                                  <div class="col-sm-7">
								      <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-tags"></i>
                      </div>
                                  <select name="xrapat" class="form-control" id="inputUserName" >
								  
                                        <option value="">- Pilih acara -</option>                               
                                             <?php
											 $jadwal =$this->db->get_where('jadwal')->result();
                                        if (!empty($jadwal)) {
                                            foreach ($jadwal as $row) {
												echo "<option value='$row->nama'";
                                            echo $rapat == $row->nama ? 'selected' : '';
                                            echo">$row->nama</option>";
                                             
                                            }
                                        }
                                        ?>
                                    </select> 
                                </div>
                                </div>
                            </div>
							<div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Judul File</label>
                       
								 <div class="col-sm-7">
								      <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-file-o"></i>
                      </div>
								 <input type="hidden" name="kode" value="<?php echo $id;?>">
                                  <input type="hidden" name="file" value="<?php echo $file;?>">
                                   <input type="text" name="xjudul" class="form-control" value="<?php echo $judul;?>" id="inputUserName" placeholder="Judul" required>
                                </div>
                            </div>
                            </div>
                           
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Deskripsi</label>
                         
								 <div class="col-sm-7">
								      <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-paste"></i>
                      </div>
                                  <textarea class="form-control" rows="3" name="xdeskripsi" placeholder="Deskripsi ..." required><?php echo $deskripsi;?></textarea>
                                </div>
                            </div>
                            </div>
                           
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">File</label>
                                <div class="col-sm-7">
                                  <input type="file" name="filefoto" <?php echo $file;?>>
								  		 file sebelumnya : <?php echo $file;?><br>
                                  NB: file harus bertype pdf|doc|docx|ppt|pptx|zip. ukuran maksimal 2,7 MB.
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php }?>

	<?php foreach ($data->result() as $key) {
           $id= $key->id;
            
                $rapat=$key->file_rapat;
                $judul=$key->file_judul;
                $deskripsi=$key->file_deskripsi;
          
                $tanggal=$key->tanggal;
               
                $file=$key->file_data;
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus File</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'files/hapus_file'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							             <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                           <input type="hidden" name="file" value="<?php echo $file;?>">
                            <p>Apakah Anda yakin mau menghapus file <b><?php echo $judul;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-danger btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
		
		
	<?php }?>



<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
<!-- jQuery 2.2.3 -->

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datepicker/bootstrap-datepicker.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
$("#checkAll").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});
    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('#datepicker2').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('.datepicker3').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('.datepicker4').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $(".timepicker").timepicker({
      showInputs: true
    });

  });
</script>
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>

    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "File Berhasil disimpan",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00a65a'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "File berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#222d32'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "File Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'warning',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#d74b37'
                });
        </script>
    <?php else:?>

    <?php endif;?>


<?php
if ($this->session->flashdata('Berhasil')) {
    echo "<div class='alert alert-warning'>";
    echo $this->session->flashdata('Berhasil');
    echo "</div>";
}elseif($this->session->flashdata('Hapus')){
    
    echo "<div class='alert alert-danger bg-danger'>";
    echo $this->session->flashdata('Hapus');
    echo "</div>";
}
?>
<script src="assets/dist/js/sweetalert.min.js"></script> <!-- lib js untuk sweet alert -->	
<link rel="stylesheet" href="assets/dist/css/sweetalert.css">
<section class='content-header'>
    <h1>
        agenda
        <small>Daftar agenda</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Daftar agenda</li>
    </ol>
</section>        
<section class='content'>
    
	<div class='row'>
        <div class='col-xs-12'>
		            <div class='box box-success'>              
				<div class='box-header with-border'>
<button type="button" class="btn btn-success btn-md pull-right" data-toggle="modal" data-target="#exampleModal">
    Tambah Agenda
</button>
					 
	<div class="modal fade" id="mymodalupdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								        <h4 class="modal-title" id="myModalLabel">Ubah Data Peserta</h4>
								      </div>
								      <div class="modal-body">
							                <div class="form-group">
							                  <label>Nama Agenda</label>
							                  <input type="hidden" class="form-control" name="update_id">
							                  <input type="text" class="form-control" name="update_nama_agenda" placeholder="Nama Lengkap">
							                </div>
							                <div class="form-group">
							                  <label>waktu</label>
							                  <input type="date" class="form-control" name="update_waktu" placeholder="Nama">
							             
							                </div>
							                <div class="form-group">
							                  <label>Jam</label>
							                  <input type="time" class="form-control" name="update_jam" placeholder="Alamat">
							                </div>
							                <div class="form-group">
							                  <label>tempat</label>
							                    <input type="tempat" class="form-control" name="update_tampat" placeholder="Email">
							                </div>
								      </div>
								      <div class="modal-footer">
									      <button type="submit" class="btn btn-success" data-dismiss="modal" id = "update_action">Update</button>
									      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
								      </div>						      
							    </div>
							  </div>
							</div>
                   <h3 class='box-title'><?php echo anchor('agenda/create/', '<i class="glyphicon glyphicon-plus"></i>Tambah Data', array('class' => 'btn btn-success btn-sm')); ?>
                        <?php echo anchor(site_url('agenda/excel'), ' <i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-success btn-sm"'); ?></h3>
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <?php echo form_open_multipart('Agenda/add'); ?>
        <div class="modal-content">
		 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            <div class="modal-header">
                <b><h1 class="modal-title" id="exampleModalLabel">Tambah Agenda</b></h1>
				<h4><p> Silakan memasukan data yang akan ditambahkan ! </p></h4>
               
            </div>
            <div class="modal-body">
                

                <div class="form-group"><label>Nama</label>
                    <input type="text" name="nama_agenda" required=""  class="form-control" oninvalid="this.setCustomValidity('Silakan diisi nama agenda!')"
 oninput="setCustomValidity('')" >
                </div>
                <div class="form-group"><label>waktu</label>
                    <input type="date" name="tgl" required="" class="form-control" oninvalid="this.setCustomValidity('Silakan diisi dengan benar tanggalnya!')"
 oninput="setCustomValidity('')">
                </div>
                <div class="form-group"><label>jam</label>
                    <input type="time" name="jam" required=""  class="form-control" oninvalid="this.setCustomValidity('Silakan diisi dengan benar waktu jamnya!')"
 oninput="setCustomValidity('')">
                </div>
				     <div class="form-group"><label>tempat</label>
                    <input type="tempat" name="tempat" required="" class="form-control" oninvalid="this.setCustomValidity('Silakan diisi tempatnya!')"
 oninput="setCustomValidity('')">
                </div>
				 
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
			
                                
                    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>

        </div>
    </div>	
	
				</div><!-- /.box-header -->
						                <div class="box-body">
								<table id="tabel_data_agenda" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Agenda</th>
											<th>Tanggal</th>
											<th>Jam</th>
											<th>Tempat</th>
											<th>Action</th>
										</tr>
									</thead>
									      <tbody>
                            <?php
                            $start = 0;
                            foreach ($agenda_data as $agenda) {
                                ?>
                                <tr>
                                    <td><?php echo ++$start ?></td>
							       <td><?php echo $agenda->nama_agenda ?></td>
									<td><?php echo $agenda->tgl ?></td>                                
									<td><?php echo $agenda->jam ?></td>
                                    <td><?php echo $agenda->tempat ?></td>
                                   <td style="text-align:center" width="140px">
								  
                                        <?php
                                        echo anchor(site_url('agenda/update/' . $agenda->id_agenda), '<i class="fa fa-pencil-square-o "></i>', array('data-toggle' => 'tooltip', 'title' => 'edit', 'class' => 'btn btn-success btn-sm'));
                                        echo '  '; 
			echo anchor(site_url('agenda/delete/'.$agenda->id_agenda),'<i class="fa fa-trash-o"></i>','data-toggle="tooltip" title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Apakah anda Yakin akan menghapusnya ?\')"'); 

										?>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
								
								</table>                   
			                </div><!-- /.box-body -->
							<!-- /view data -->
						</div>
						<!-- /box box-primary-->
					</div><!--/.col (right) -->
				</div> <!-- /.row -->
			</section><!-- /.content -->
		</div>
	                
	
	<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <?php echo form_open_multipart('Agenda/hapus'); ?>
        <div class="modal-content">
		 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            <div class="modal-header">
                <center><b><h1 class="modal-title" id="exampleModalLabel">Hapus Agenda</b></h1></center>
			
            </div>
            <div class="modal-body">
                
	<center><h4><p> Data yang sudah dihapus tidak dapat dikembalikann. Lanjutkan untuk menghapus data? </p></h4></center>
               			 
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
			
                                
                    <button type="submit" name="submit" class="btn btn-danger" >Lanjutkan</button>
					
                </div>
            </div>
           
        </div>
    </div>
</section><!-- /.content -->
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script type="text/javascript">
	
    $(document).ready(function () {
        $("#mytable").dataTable();
    });	
			function sweet (){
swal("Good job!", "You clicked the button!", "success");
}
</script>

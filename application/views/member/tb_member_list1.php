
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
								<th>Alamat</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                                    
                                <th>Gender</th>
								<th>Status</th>                               
							   <th>Pendidikan Terakhir</th>
                                <th>Telepon</th>
								      <th>Email</th>

                                <th>Edit</th>
                                <th>Hapus</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                            foreach ($ion1 as $grouped) {
                                ?>
                                <tr>
                                    <td><?php echo ++$start ?></td>
                                    <td><?php echo $grouped->nama_member ?></td>
                                    <td><?php echo $grouped->alamat ?></td>
									 <td><?php echo $grouped->tempat_lahir ?></td>
									 <td><?php echo $grouped->tanggal_lahir ?></td>
									 <td><?php echo $grouped->jenis_kelamin ?></td>
									 <td><?php echo $grouped->status ?></td>
									 <td><?php echo $grouped->pendidikan_terakhir ?></td>
									 <td><?php echo $grouped->telepon ?></td>
									 <td><?php echo $grouped->email ?></td>
                            
                                      
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

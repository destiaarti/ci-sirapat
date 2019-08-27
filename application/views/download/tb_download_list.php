<section class='content-header'>
    <h1>
        Download
        <small>Download Berkas Rapat</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Data Berkas</li>
    </ol>
</section>        
<section class='content'>
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
                                <th>Nama Acara</th>
                           
                                <th>Nama File</th>
                                <th>Tanggal Upload</th>
								   <th>Deskripsi File</th>
                                <th style="text-align:center;">Download</th>

                            </tr>
                        </thead>
                        <tbody >
                            <?php
                            $no = 1;

                       		 foreach ($data1->result() as $key){
									
			 
                                ?>
                                <tr>
                               
                             
                          <td><?php echo $no++;?></td>
                      <td><?php echo $key->file_rapat;?></td>
                     
					         <td><?php echo $key->file_judul;?></td>
                      <td><?php echo $key->tanggal;?></td>
               
					    <td><?php echo $key->file_deskripsi;?></td>
                                       <td style="text-align:center;"><a href="<?php echo site_url('download/get_file/'.$key->id);?>" class="btn btn-success">Download</a></td>
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

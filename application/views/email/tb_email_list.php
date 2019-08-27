<section class='content-header'>
    <h1>
        pegawai
        <small>Daftar pegawai</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Daftar pegawai</li>
    </ol>
</section>        
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box box-success'>  
                <div class='box-header with-border'>
                    <h3 class='box-title'><?php echo anchor('email/create/', '<i class="glyphicon glyphicon-plus"></i>Tambah Data', array('class' => 'btn btn-success btn-sm')); ?>
                        <?php echo anchor(site_url('email/excel'), ' <i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-success btn-sm"'); ?></h3>
                </div><!-- /.box-header -->
                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable">
                        <thead>
                            <tr>
                                <th width="80px">No</th>
							
                                <th>Nama penerima</th>
								 <th>Judul</th>
                                <th>Isi</th>
                              
                                <th>Action</th>
                            </tr>
                        </thead>
                                  <tbody>
                            <?php
                            $start = 0;
                            foreach ($email_data as $email) {
                                ?>
                                <tr>
                                    <td><?php echo ++$start ?></td>
					
                                    <td><?php echo $email->penerima ?></td>
									<td><?php echo $email->judul ?></td>                                
									<td><?php echo $email->isi ?></td>
                                    <td><?php echo $email->lampiran ?></td>
							                                  
								   <td style="text-align:center" width="50px">
                                        <?php
                                        echo anchor(site_url('email/update/' . $email->id_email), '<i class="fa fa-pencil-square-o "></i>', array('data-toggle' => 'tooltip', 'title' => 'edit', 'class' => 'btn btn-success btn-sm'));
                                        ?>
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
<script type="text/javascript">
    $(document).ready(function () {
        $("#mytable").dataTable();
    });
</script>

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
                                  <?php echo anchor(site_url('agenda/excel'), ' <i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-success btn-sm"'); ?></h3>
                </div><!-- /.box-header -->
                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable">
                        <thead>
                            <tr>
                                <th width="80px">No</th>
					              <th>Nama agenda</th>
								 <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Tempat</th>
                                
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

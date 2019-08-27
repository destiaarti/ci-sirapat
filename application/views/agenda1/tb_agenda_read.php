<section class='content-header'>
    <h1>
        agenda
        <small>Daftar agenda</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Seting</a></li>
        <li class='active'>Daftar agenda</li>
    </ol>
</section>   
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box box-success'>
                <div class='box-header'>
                    <h3 class='box-title'> Detail Tb_agenda Read</h3>
                    <table class="table table-bordered">
                        <tr><td>Nama agenda</td><td><?php echo $nama_agenda; ?></td></tr>
                        <tr><td>Tanggal</td><td><?php echo $tgl; ?></td></tr>
                        <tr><td>Jam</td><td><?php echo $jam; ?></td></tr>
						          <tr><td>Tempat</td><td><?php echo $tempat; ?></td></tr>
                        <tr><td>Uid</td><td><?php echo $uid; ?></td></tr>
                    </table>
                    <div class='box-footer'>
                        <a href="<?php echo site_url('agenda') ?>" class="btn btn-success">Back</a>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
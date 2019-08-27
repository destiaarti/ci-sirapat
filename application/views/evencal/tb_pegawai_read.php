<section class='content-header'>
    <h1>
        pegawai
        <small>Daftar pegawai</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Seting</a></li>
        <li class='active'>Daftar pegawai</li>
    </ol>
</section>   
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box box-success'>
                <div class='box-header'>
                    <h3 class='box-title'> Detail Tb_pegawai Read</h3>
                    <table class="table table-bordered">
                        <tr><td>Nama pegawai</td><td><?php echo $nama_pegawai; ?></td></tr>
                        <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
                        <tr><td>No Telp</td><td><?php echo $no_telpn; ?></td></tr>
						    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
                        <tr><td>Uid</td><td><?php echo $uid; ?></td></tr>
                    </table>
                    <div class='box-footer'>
                        <a href="<?php echo site_url('pegawai') ?>" class="btn btn-success">Back</a>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
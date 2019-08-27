<section class='content-header'>
    <h1>
        Member
        <small>Detail Member</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Seting</a></li>
        <li class='active'>Detail Member</li>
    </ol>
</section>   
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box box-success'>
                <div class='box-header'>
                    <h3 class='box-title'> Detail Member</h3>
                    <table class="table table-bordered">
                        <tr><td>Nama member</td><td><?php echo $nama_member; ?></td></tr>
                        <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
                        <tr><td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td></tr>
                        <tr><td>Tanggal Lahir</td><td><?php echo $tanggal_lahir; ?></td></tr>
                        <tr><td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td></tr>
                        <tr><td>Status</td><td><?php echo $status['status']; ?></td></tr>
                        <tr><td>Pendidikan Terakhir</td><td><?php echo $pendidikan_terakhir; ?></td></tr>
                        <tr><td>No Telp</td><td><?php echo $telepon; ?></td></tr>
						    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
     
                    </table>
                    <div class='box-footer'>
                        <a href="javascript:history.back()" class="btn btn-success">Kembali</a>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
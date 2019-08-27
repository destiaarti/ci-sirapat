<section class='content-header'>
    <h1>
        File
        <small>Detail Berkas File</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Seting</a></li>
        <li class='active'>Detail Berkas File</li>
    </ol>
</section>   
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box box-success'>
                <div class='box-header'>
                    <h3 class='box-title'> Detail Berkas File</h3>
                    <table class="table table-bordered">
                        <tr><td>Nama Acara</td><td><?php echo $file_rapat; ?></td></tr>
                        <tr><td>Nama File </td><td><?php echo $file_acara; ?></td></tr>
                        <tr><td>Tanggal Upload </td><td><?php echo $file_tanggal; ?></td></tr>
                        <tr><td>Deskripsi </td><td><?php echo $file_deskripsi; ?></td></tr>
                           <td style="text-align:center;"><a href="<?php echo site_url('download/get_file/'.$id);?>" class="btn btn-success">Download</a></td>
                   
                     
                    </table>
                    <div class='box-footer'>
                        <a href="javascript:history.back()" class="btn btn-success">Back</a>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
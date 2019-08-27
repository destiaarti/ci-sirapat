<section class='content-header'>
    <h1>
        Pegawai
        <small>Form pegawai</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Form pegawai</li>
    </ol>
</section>        
<section class='content'>
    <div class='row'>
        <!-- left column -->
        <div class='col-md-12'>
            <!-- general form elements -->
            <div class='box box-success'>
                <div class='box-header'>
                    <div class='col-md-5'>
                        <form action="<?php echo $action; ?>" method="post">
                            <div class='box-body'>
							 <div class='form-group'>NIP <?php echo form_error('id_pegawai') ?>
                                    <input type="text" class="form-control" name="id_pegawai" id="id_pegawai" placeholder="ID pegawai" value="<?php echo $id_pegawai; ?>" />
                                </div>
                                <div class='form-group'>Nama pegawai <?php echo form_error('nama_pegawai') ?>
                                    <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" placeholder="Nama pegawai" value="<?php echo $nama_pegawai; ?>" />
                                </div>
								 <div class='form-group'>Jabatan <?php echo form_error('pangkat') ?>
                                    <input type="text" class="form-control" name="pangkat" id="pangkat" placeholder="Pangkat" value="<?php echo $pangkat; ?>" />
                                </div>
                                <div class='form-group'>Alamat <?php echo form_error('alamat') ?>
                                    <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" ><?php echo $alamat; ?></textarea>
                                </div>
                                <div class='form-group'>No Telp <?php echo form_error('no_telpn') ?>
                                    <input type="number" class="form-control" name="no_telpn" id="no_telpn" placeholder="No Telp" value="<?php echo $no_telpn; ?>" />
                                </div>                                
                              <div class='form-group'>Email <?php echo form_error('email') ?>
                                    <input type="text" class="form-control" name="email" id="no_telpn" placeholder="Email" value="<?php echo $email; ?>" />
                                </div> 
							</div>
                            <div class='box-footer'>
                                <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>" /> 
                                <button type="submit" class="btn btn-success"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('pegawai') ?>" class="btn btn-default">Cancel</a>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</section><!-- /.content -->
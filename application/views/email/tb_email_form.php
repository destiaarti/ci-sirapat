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
							
                                <div class='form-group'>Nama penerima <?php echo form_error('penerima') ?>
                                    <input type="text" class="form-control" name="penerima" id="penerima" placeholder="Nama penerima" value="<?php echo $penerima; ?>" />
                                </div>
								 <div class='form-group'>Judul <?php echo form_error('judul') ?>
                                    <input type="text" class="form-control" name="judul" id="judul" placeholder="judul" value="<?php echo $judul; ?>" />
                                </div>
                                <div class='form-group'>Isi <?php echo form_error('isi') ?>
                                    <textarea type="text" class="form-control" name="isi" id="isi" placeholder="isi" ><?php echo $isi; ?></textarea>
                                </div>
                                                           
                              <div class='form-group'>lampiran <?php echo form_error('lampiran') ?>
                                    <input type="text" class="form-control" name="lampiran" id="lampiran" placeholder="lampiran" value="<?php echo $lampiran; ?>" />
                                </div> 
							</div>
                            <div class='box-footer'>
                                <input type="hidden" name="id_email" value="<?php echo $id_email; ?>" /> 
                                <button type="submit" class="btn btn-success"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('email') ?>" class="btn btn-default">Cancel</a>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</section><!-- /.content -->
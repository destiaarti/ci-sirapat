<section class='content-header'>
    <h1>
        Hasil Rapat
        <small>Form Hasil</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Form Hasil</li>
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
						
                                <div class='form-group'>Nama Acara <?php echo form_error('nama') ?>
								<div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-tags"></i>
                      </div>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama acara" readonly value="<?php echo $nama; ?>" />
                                </div>
                                </div>
								
								 <div class='form-group'>Hasil secara ringkas<?php echo form_error('hasil') ?>
								 <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-keyboard-o"></i>
                      </div>
                                    <textarea  type="text" class="form-control" name="hasil" id="hasil" placeholder="hasil" ><?php echo $hasil; ?> </textarea>
                                </div>  
                                </div>  
								
                                <div class='form-group'>Susunan Acara <?php echo form_error('susunan') ?>
								 <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-archive"></i>
                      </div>
                                    <textarea  type="text" class="form-control" name="susunan" id="susunan" placeholder="Susunan Acara" ><?php echo $susunan; ?> </textarea>
                                </div>     
                                </div>     
								   <div class='form-group'>Uraian <?php echo form_error('uraian') ?>
								    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-desktop"></i>
                      </div>
                                    <textarea  type="text" class="form-control" name="uraian" id="uraian" placeholder="Uraian Acara" ><?php echo $uraian; ?> </textarea>
                                </div>   
                                </div>   
    								
                            </div>
                            <div class='box-footer'>
                                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                                <button type="submit" class="btn btn-success"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('hasil') ?>" class="btn btn-default">Batal</a>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</section><!-- /.content -->
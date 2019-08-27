<section class='content-header'>
    <h1>
        Data status
        <small>Form Data status</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Data status</li>
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
							
                                <div class='form-group'>Status <?php echo form_error('status') ?>
								  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-tasks"></i>
                      </div>
                                    <input type="text" class="form-control" name="status" id="status" placeholder="status member" value="<?php echo $status; ?>" />
                                </div>     
								</div>
							
  <div class='form-group'>Deskripsi <?php echo form_error('deskripsi') ?>
  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-edit"></i>
                      </div>                                 
								 <textarea type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="deskripsi member" ><?php echo $deskripsi; ?></textarea>
                                </div>								
                            </div>
                            <div class='box-footer'>
                                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                                <button type="submit" class="btn btn-success"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('status') ?>" class="btn btn-default">Batal</a>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</section><!-- /.content -->
<section class='content-header'>
    <h1>
        Data Hak Akses 
        <small>Form Data Hak Akses</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Data Hak Akses</li>
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
							
                                <div class='form-group'>Username<?php echo form_error('user_id') ?>
								  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-tasks"></i>
                      </div>
                                    <select name="user_id" id="user_id" class="form-control" > 
                                        <option value="">- Pilih username -</option>                               
                                             <?php
                                        if (!empty($ion)) {
                                            foreach ($ion as $row) {
                                                echo "<option value='$row->id'> " . $row->username .  "</option>";
                                            }
                                        }
                                        ?>
                                    </select> 
                                </div>     
								</div>
							
  <div class='form-group'>Hak Akses <?php echo form_error('group_id') ?>
  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-edit"></i>
                      </div>                                 
								  <select name="group_id" id="group_id" class="form-control" > 
                                        <option value="">- Pilih Hak Akses -</option>                               
                                             <?php
                                        if (!empty($ion1)) {
                                            foreach ($ion1 as $row) {
                                                echo "<option value='$row->id'> " . $row->name .  "</option>";
                                            }
                                        }
                                        ?>
                                    </select> 
                                </div>								
                            </div>
                            <div class='box-footer'>
                                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                                <button type="submit" class="btn btn-success"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('grouped') ?>" class="btn btn-default">Batal</a>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</section><!-- /.content -->
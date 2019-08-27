<section class="content-header">
    <h1>
        <?php echo strtoupper(lang('edit_user_heading'));?>
        <small><?php echo lang('edit_user_subheading');?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-suitcase"></i>Seting</a></li>
        <li class="active"><?php echo lang('edit_user_heading');?></li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-success">
                <div class="box-header">
                <div class="col-md-5">
                <?php echo form_open(uri_string()); ?> 
                  <div class="text-red"><?php echo $message;?></div>                   
                    <div class="box-body">
                        
                
                            
						     <div class="form-group">
                            <label for="example">Email</label>
							                                  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </div>   
                            <?php echo form_input($email);?>
                        </div> 
                        </div> 
						 <div class="form-group">
						                                  
						 
                            <label for="example">Username</label>
							 <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                      </div>   
                            <?php echo form_input($username); ?>
                        </div> 
                        </div> 
						
                       
                        <div class="form-group">
                            <?php echo lang('edit_user_password_label', 'password');?> <br />
							                                  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-key"></i>
                      </div>   
                            <?php echo form_input($password);?>
                        </div> 
                        </div> 
                        <div class="form-group">
                            <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
							                                  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-flag"></i>
                      </div>   
                            <?php echo form_input($password_confirm);?>
                        </div> 
                        </div> 
						
                                                              
                    </div>
                    <?php echo form_hidden('id', $user->id);?>
                    <?php echo form_hidden($csrf); ?>
                    <div class="box-footer">
                        <button type="submit" name="submit" class="btn btn-success"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
                        <a href="javascript:history.back()" class="btn btn-danger">Kembali</a>
                    </div>
                <?php echo form_close();?>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
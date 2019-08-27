
<section class='content-header'>
	<h1>
		 Grup Hak Akses
		<small> Edit Grup Hak Aksess</small>
	</h1>
	<ol class='breadcrumb'>
		<li><a href='#'><i class='fa fa-suitcase'></i>Seting</a></li>
		<li class='active'>Edit Grup Hak Akses</li>
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
        <form action="<?php echo $action; ?>" method="post"><div class='box-body'>
	    <div class='form-group'>Name <?php echo form_error('name') ?>
		 <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-crop"></i>      </div> 	
            <input type="text" class="form-control" name="name" id="name" placeholder="Name"  readonly  value="<?php echo $name;?>" />
        </div>
        </div>
	    <div class='form-group'>Description <?php echo form_error('description') ?>
		 <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-bookmark"></i>      </div> 	
            <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="<?php echo $description; ?>" />
        </div>
        </div>
		
		</div><div class='box-footer'>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-success"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('groups') ?>" class="btn btn-danger">Batal</a>
	 </div>
            </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>
</section><!-- /.content -->
<section class='content-header'>
    <h1>
        pegawai
        <small>Daftar pegawai</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Daftar pegawai</li>
    </ol>
   <link href='<?php echo base_url();?>assets/css/fullcalendar.css' rel='stylesheet' />
        <link href="<?php echo base_url();?>assets/css/bootstrapValidator.min.css" rel="stylesheet" />        
        <link href="<?php echo base_url();?>assets/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
        <!-- Custom css  -->
        <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />

        <script src='<?php echo base_url();?>assets/js/moment.min.js'></script>
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrapValidator.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/fullcalendar.min.js"></script>
        <script src='<?php echo base_url();?>assets/js/bootstrap-colorpicker.min.js'></script>
		
</section>        
<section class='content'>
    
        <div class='col-xs-12'>
            <div class='box box-success'>  
                <div class='box-header with-border'>
                    <h3 class='box-title'><?php echo anchor('pegawai/create/', '<i class="glyphicon glyphicon-plus"></i>Tambah Data', array('class' => 'btn btn-success btn-sm')); ?>
                        <?php echo anchor(site_url('pegawai/excel'), ' <i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-success btn-sm"'); ?></h3>
                </div><!-- /.box-header -->
        	<div class="container">
                <!-- Notification -->
                <div class="alert"></div>
            <div class="row clearfix">
                <div class="col-md-12 column">
                        <div id='calendar'></div>
                </div>
            </div>
        </div>	
              
		
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="error"></div>
                        <form class="form-horizontal" id="crud-form">
                        <input type="hidden" id="start">
                        <input type="hidden" id="end">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Title</label>
                                <div class="col-md-4">
                                    <input id="title" name="title" type="text" class="form-control input-md" />
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="description">Description</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" id="description" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="color">Color</label>
                                <div class="col-md-4">
                                    <input id="color" name="color" type="text" class="form-control input-md" readonly="readonly" />
                                    <span class="help-block">Click to pick a color</span>
                                </div>
                            </div>
                        </form>
</div>						
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
 
	
</section><!-- /.content -->

<script type="text/javascript">
    $(document).ready(function () {
        $("#mytable").dataTable();
    });
</script>

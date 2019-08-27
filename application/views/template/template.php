<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> SI Rapat SMPN 1 Ungaran</title>
        <link href='<?php echo base_url("assets/img/pew.ico"); ?>' rel='shortcut icon' type='image/x-icon'/>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.3.2 -->        
	
	   <link href="<?php echo base_url('assets/css/bootstrap3.min.css'); ?>" rel="stylesheet" >
        <!-- font Awesome -->
        <link href="<?php echo base_url('assets/font-awesome-4.4.0/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <!-- Ionicons -->		       
  
        <link href="<?php echo base_url('assets/css/ionicons.min.css'); ?>" rel="stylesheet">
        <!-- DATA TABLES -->    
        <link href="<?php echo base_url('assets/js/plugins/datatables/dataTables.bootstrap.css'); ?>" rel="stylesheet">        
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/css/AdminLTE2.min.css'); ?>" rel="stylesheet">
        <!-- AdminLTE Skins. Choose a skin from the css/skins -->
        <link href="<?php echo base_url('assets/css/skins/_all-skins.min.css'); ?>" rel="stylesheet">
        <!--datepicker -->
        <link href="<?php echo base_url('assets/js/plugins/datepicker/bootstrap-datetimepicker.min.css'); ?>" rel="stylesheet" type="text/css">
        <!-- iCheck -->
		          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		
					   <link href="<?php echo base_url('assets/gantella/css/animate.min.css'); ?>" rel="stylesheet">
			
    <!-- Theme style -->
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>

        <link href="<?php echo base_url('assets/plugins/iCheck/flat/_all.css'); ?>" rel="stylesheet" type="text/css">
        <!-- Morris chart -->
        <link href="<?php echo base_url('assets/js/plugins/morris/morris.css'); ?>" rel="stylesheet" type="text/css" >
        <!-- jvectormap -->
        <link href="<?php echo base_url('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>" rel="stylesheet" type="text/css" >

        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url('assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>" rel="stylesheet" type="text/css" >

        <link href="<?php echo base_url('assets/css/bootstrap-combobox.css'); ?>" rel="stylesheet" type="text/css" >
        <!-- css untuk export datatable -->
        <link href="<?php echo base_url('assets/css/buttons.dataTables.min.css'); ?>" rel="stylesheet" type="text/css" >
		   <link href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker-bs3.css'); ?>" rel="stylesheet" type="text/css" >
		   


		 
	
    </head>
    <body class="hold-transition skin-green sidebar-mini">
        <div class="wrapper">
            <?php echo $_header; ?>
            <!-- Left side column. contains the logo and sidebar -->
            <?php echo $_sidebar; ?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <?php echo $_content; ?> 
            </div><!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.0
                </div>
              <strong>Copyright &copy; 2018-2019 <a href="http://smpn1ungaran.sch.id/">  <font color = green>SMPN 1 Ungaran</a></font> - </strong> All rights reserved
            </footer>

            <div class="control-sidebar-bg"></div>
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.3 -->
        <script src="<?php echo base_url('assets/js/plugins/jQuery/jQuery-2.1.3.min.js'); ?>"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="<?php echo base_url('assets/js/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>

        <script src="<?php echo base_url('assets/js/plugins/datatables/dataTables.bootstrap.js'); ?>"></script>
        <!-- SlimScroll -->
        <script src="<?php echo base_url('assets/js/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
        <!-- InputMask -->
        <script src="<?php echo base_url('assets/js/plugins/input-mask/jquery.inputmask.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/plugins/input-mask/jquery.inputmask.date.extensions.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>
        <!-- Datepicker -->
        <script src="<?php echo base_url('assets/js/plugins/datepicker/bootstrap-datetimepicker.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/plugins/datepicker/locales/bootstrap-datetimepicker.id.js'); ?>"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url('assets/js/plugins/fastclick/fastclick.min.js'); ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('assets/js/AdminLTE/app.min.js'); ?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url('assets/js/AdminLTE/demo.js'); ?>"></script>
        <!-- treeview -->
        <script src="<?php echo base_url('assets/js/plugins/tree-view/jquery.cookie.js'); ?>"></script>  
        <script src="<?php echo base_url('assets/js/plugins/tree-view/jquery.treeview.js'); ?>"></script>  
        <script src="<?php echo base_url('assets/js/plugins/tree-view/demo.js'); ?>" type="text/javascript" ></script>    
        <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-combobox.js'); ?>"></script>
	        <script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js'); ?>" type="text/javascript" ></script>   
			        <script src="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker4.js'); ?>" type="text/javascript" ></script>   
	
		 <!-- fullCalendar -->

  
    <script type="text/javascript">
      $(function () {
       
          //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

      });
    </script>

    </body>
</html>

<script>
    $(function () {
        $('.datepicker').datetimepicker({
            language: 'id',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
    });
    $(function () {
        $('#datetimepicker').datetimepicker();
        $('#datetimepicker1').datetimepicker();
    });
</script>



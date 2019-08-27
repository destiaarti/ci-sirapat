<!DOCTYPE html>
<html lang="en">
  <head>
   

 
   <title>Sistem Informasi Rapat SPENSA | Login</title>
  <link href='<?php echo base_url("assets/img/4.png"); ?>' rel='shortcut icon' type='image/x-icon'/>
  <script language='JavaScript'>
var tulisan="Sistem Informasi Rapat SPENSA | Login                   ";
var kecepatan=170;var fress=null;function jalan() { document.title=tulisan;
tulisan=tulisan.substring(1,tulisan.length)+tulisan.charAt(0);
fress=setTimeout("jalan()",kecepatan);}jalan();
</script>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/dashgum/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/dashgum/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/dashgum/css/style7.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/dashgum/css/style-responsive.css" rel="stylesheet">

      <!-- Bootstrap core CSS -->

	<link href="<?php echo base_url();?>assets/gantella/css/bootstrap1.min.css" rel="stylesheet">

  	<link href="<?php echo base_url();?>assets/gantella/fonts/css/font-awesome.min.css" rel="stylesheet">
 	<link href="<?php echo base_url();?>assets/gantella/css/animate.min.css" rel="stylesheet">

  	<!-- Custom styling plus plugins -->
  	<link href="<?php echo base_url();?>assets/gantella/css/custom.css" rel="stylesheet">
  	<link href="<?php echo base_url();?>assets/gantella/css/icheck/flat/green.css" rel="stylesheet">

  	<!-- select2 -->
  	<link href="<?php echo base_url();?>assets/gantella/css/select/select2.min.css" rel="stylesheet">

  	<script src="<?php echo base_url();?>assets/gantella/js/jquery.min.js"></script>

<!-- animasi -->
  	<link href="<?php echo base_url();?>assets/animate.css" rel="stylesheet">
			<link href="<?php echo base_url('assets/css/main_style.css'); ?>" rel="stylesheet" >

	        <link href="<?php echo base_url('assets/js/plugins/iCheck/square/blue.css'); ?>" rel="stylesheet"> 
			
		     
        <!-- iCheck -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style>
		body{
			background-image:url(assets/dashgum/img/smp.jpg);
			background-size:cover;
			background-attachment: fixed;
		}
		p{
			color:white;
		}
	</style>
  </head>

  <body>


      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
 
	  <div id="login-page">
	  	<div class="container">
          	  	

		  <form class="form-login" action="<?php echo base_url();?>auth/login" method="post" style="height:550px" >
			   
		        <h2 class="form-login-heading" ><font color="white"><b>Silahkan Login</b></font></h2>
			
			
		        <div class="login-wrap">
		        <center>
					 
		        </center>
				
		                      <input type="text" name="identity" id="identity" class="form-control" placeholder="Email Address"/>
                        <span class="glyphicon  glyphicon-envelope form-control-feedback"></span>
		            <br>
					
		            <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
					 
		            <label class="checkbox">
		                <span class="pull-right">
		                    <label>
                                    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>  Remember Me
                                </label>
		                </span>
		            </label>

		            <button data-loading-text="Please wait..." class="btn btn-theme btn-block" type="submit"><h2 class="animated infinite tada"><i class="fa fa-lock"></i> <font color="white">LOGIN</font></button></h2>
		          
		         <div id="infoMessage"> <h2 class="form-login-heading" ><b><?php echo $message;?></b></h2></div>
		                     
                <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
             

         <br>
		 </br>
		     
					
				
					
		  <marquee bgcolor="yellow" style="font-family: impact; font-size:24px; color:#cc0000;" >Sistem Informasi Rapat SMPN 1 Ungaran</marquee>
		        </div>
		
		               </div>

                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

                      </div>

                    </div>
                  </div>
                </div>
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->

       <script src="<?php echo base_url('assets/js/plugins/jQuery/jQuery-2.1.4.min.js'); ?>"></script> 
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script> 
        <!-- iCheck -->
        <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js'); ?>"></script>       
        <script>
            $(function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>

  </body>
</html>

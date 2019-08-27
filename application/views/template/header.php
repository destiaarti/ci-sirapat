<header class="main-header">
    <a href="<?php echo site_url('dashboard'); ?> " class="logo">
        <span class="logo-mini"><i class="fa fa-caret-square-o-right"></i></span>
        <span class="logo-lg"><b><p>SI Rapat SPENSA</p></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
		
            <ul class="nav navbar-nav">
			<?php
		    $id = $this->session->userdata('user_id');
			 $get3 =$this->db->get_where("tb_users_groups",array("user_id" =>$id))->row();
					  	$tanggal1 = $get3->group_id;
						  if ($tanggal1=="1") {?>
			 <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bookmark-o"></i>
                  <?php
           		  
         $m = $this->db->get_where('tb_login_attempts')->result();
		  $start = 0;
						 	if (!empty($m)){
                       foreach ($m as $m1) {
					    $id = $this->session->userdata('user_id');
				
				
					  	$tanggal1 = $this->session->userdata('old_last_login');
					
								
										  
												if ($m1->datetime1 >= $tanggal1){
										 ++$start;
									
							}}}
						     
				
					 
						  	   //  $log = $this->db->get_where('tb_login_attempts', array('datetime1' => $get1 > $tanggal1))->num_rows();
						  ?>
               
             
				<?php if($start>0){ ?>
				<span class="label label-danger"><?php echo $start; ?></span>
				   </a>
				      <ul class="dropdown-menu">
					     <li class="header">Kamu mendapat <font color ="white"><b><?php echo $start; ?></b></font> notifikasi baru !</li>
				<?php } else { ?>
				<span class="label label-info">0</span>
				   </a>
				      <ul class="dropdown-menu">
                  <li class="header">Kamu tidak mendapat notifikasi baru !</li>
				<?php } ?>

                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
									
					<!--->
					  <?php
					  $this->db->order_by('id','desc');
                          $m = $this->db->get_where('tb_login_attempts')->result();
						  $start = 0;
						 	if (!empty($m)){
                       foreach ($m as $m1) {
					   
                                ?>
                      <!-- start message -->
					  <?php 
					    $id = $this->session->userdata('user_id');
				
				
					  	$tanggal1 = $this->session->userdata('old_last_login');
				
								
										  
												if ($m1->datetime1 >= $tanggal1){?>
												<li style="background-color:#edf3a2;color: white">
						<a href="<?php echo site_url('logo'); ?>">
                          <div class="pull-left" >
                        <img src="ltes/dist/img/avatar04.png" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
				  <?php echo ++$start ?> 
                           <?php  echo $m1->status;?>  Login!
                            <small><i class="fa fa-clock-o"></i> <b><font color="black"><?php 	echo tgl_ind($m1->datetime1); ?></font></b> </small>
                          </h4>
                          <p><b><font color="black"><?php echo $m1->login ?></br></font> <font color="red"><?php echo $m1->status?> login </font></b></p>
						
							
                        </a>
                      </li>
												<?php } else{ ?>
												<li>
											
                                              <a href="<?php echo site_url('logo'); ?>">
                          <div class="pull-left">
                            <img src="ltes/dist/img/avatar3.png" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
				
                           <?php  echo $m1->status;?>  Login!
                            <small><i class="fa fa-clock-o"></i> <b><font color="black"><?php 	echo tgl_ind($m1->datetime1);?></font></b> </small>
                          </h4>
       <p><b><font color="black"><?php echo $m1->login ?></font> <font color="red"><?php echo $m1->status?> login </font></b></p>						
							
                        </a>
                      </li>
					  
							<?php } } } else{?>
					   
						 <center>  <h4><font color="red"><b>tidak ada</br> pemberitahuan </br>user login</b></font></h4></center>
					
        
			     <?php
					   }
                            ?>
                      <li>
										
			
                      
                    </ul>
                  </li>
    <li class="footer"><a href="<?php echo site_url('logo'); ?>"><b>Lihat semua notifikasi</b></a></li>
                </ul>
         
			 <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                <?php
           		  
         $m3 = $this->db->get_where('log')->result();
		  $start = 0;
						 	if (!empty($m3)){
                       foreach ($m3 as $m2) {
				
				
				
					  	$tanggal1 =  $this->session->userdata('old_last_login');
					
								
										  
												if ($m2->datetime >= $tanggal1){
										 ++$start;
									
							}}}
						     
				
					 
						  	   //  $log = $this->db->get_where('tb_login_attempts', array('datetime1' => $get1 > $tanggal1))->num_rows();
						  ?>
               
             
				<?php if($start>0){ ?>
				<span class="label label-danger"><?php echo $start; ?></span>
				   </a>
				      <ul class="dropdown-menu">
					     <li class="header">Kamu mendapat <font color ="white"><b><?php echo $start; ?></b></font> notifikasi baru !</li>
				<?php } else { ?>
				<span class="label label-info">0</span>
				   </a>
				      <ul class="dropdown-menu">
                  <li class="header">Kamu tidak mendapat notifikasi baru!</li>
				<?php } ?>

                  <li>
                    <!-- inner menu: contains the actual data -->
					
                    <ul class="menu">
					<?php
										  $this->db->order_by('id','desc');
                          $m3 = $this->db->get_where('log')->result();
						   $start = 0;

						  	if (!empty($m3)){
                       foreach ($m3 as $m2) {
                                ?>
								

                                  <?php 
					   
					    $id1 = $m2->user;
				
					  	$tanggal1 =  $this->session->userdata('old_last_login');
$get3 =$this->db->get_where("tb_users",array("id" =>$id1))->row();
					  
					  	$p = $get3->username;
                           			
									if ($m2->datetime > $tanggal1){
											?>
		 <li style="background-color:#edf3a2";>
		 
                           <a href="<?php echo site_url('log'); ?>">
           	  <?php echo ++$start ?>                <i class="fa fa-users text-aqua"></i>
    <i class="fa fa-clock-o"></i> <?php 	echo tgl_ind($m2->datetime); ?> </br>

                                    <?php 	echo $p; ?> <?php 	echo $m2->crud; ?> <?php 	echo $m2->menu; ?> 
	
                        </a>
                      </li>
			 <?php }
			 else { ?>
 <li>
		 
                        <a href="<?php echo site_url('log'); ?>">
                       <i class="fa fa-users text-aqua"></i>
    <i class="fa fa-clock-o"></i> <?php 	echo tgl_ind($m2->datetime, true); ?> </br>
	
                                    <?php 	echo $p; ?> <?php 	echo $m2->crud; ?> <?php 	echo $m2->menu; ?> 
	
                        </a>
                      </li>
			 <?php			  }} }else{?>
                      <center>  <h4><font color="red"><b>tidak ada</br> pemberitahuan </br>aktifitas user</b></font></h4></center>
					
        
			     <?php
					   }
                            ?>
                 
                     
                      
                    </ul>
                  </li>

        <li class="footer"><a href="<?php echo site_url('log'); ?>"><b>Lihat semua notifikasi</b></a></li>
                </ul>
              </li>
               </li>
			<?php 
						  }
						  ?>
						  <?php
				
		  if ($tanggal1=="2") {
		  } else { ?>
			 <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <?php
           		  
         $m = $this->db->get_where('pesan')->result();
		  $start = 0;
						 	if (!empty($m)){
                       foreach ($m as $m1) {
					    $id = $this->session->userdata('user_id');
				  $subi1 = $this->session->userdata('group_id');
					  $get3 =$this->db->get_where("tb_users_groups",array("user_id" =>$id))->row();
					  	$tanggal3 = $get3->group_id;
				
					  	$tanggal1 = $this->session->userdata('old_last_login');
					
								
										  
												if ($m1->date2 >= $tanggal1){
												if ($tanggal3 == "1"){
												if ($m1->status == "masuk"){
												 ++$start;
												} }
else if($tanggal3="3"){
	if($m1->status=="keluar"){
		 ++$start;
	}
}												
													
										
									
							}}}
						     
				
					 
						  	   //  $log = $this->db->get_where('tb_login_attempts', array('datetime1' => $get1 > $tanggal1))->num_rows();
						  ?>
               
             
				<?php if($start>0){ ?>
				<span class="label label-danger"><?php echo $start; ?></span>
				   </a>
				      <ul class="dropdown-menu">
					     <li class="header">Kamu mendapat <font color ="white"><b><?php echo $start; ?></b></font> notifikasi baru !</li>
				<?php } else { ?>
				<span class="label label-info">0</span>
				   </a>
				      <ul class="dropdown-menu">
                  <li class="header">Kamu tidak mendapat notifikasi baru !</li>
				<?php } ?>

                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
									
					<!--->
					  <?php
					  $this->db->order_by('id','desc');
                          $m = $this->db->get_where('pesan')->result();
						  $start = 0;
						 	if (!empty($m)){
                       foreach ($m as $m1) {
					   
                                ?>
                      <!-- start message -->
					  <?php 

					  	$tanggal1 = $this->session->userdata('old_last_login');
				
								
										  
												if ($m1->date2 >= $tanggal1){
																		    $id = $this->session->userdata('user_id');
				      $subi1 = $this->session->userdata('group_id');
					  $get3 =$this->db->get_where("tb_users_groups",array("user_id" =>$id))->row();
					  	$tanggal3 = $get3->group_id;
												if($tanggal3=="1"){
												if($m1->status=="masuk"){?>
											<li style="background-color:#edf3a2;color: white">
											
                                              <a href="<?php echo site_url('kirim'); ?>">
                          <div class="pull-left">
                            <img src="ltes/dist/img/avatar2.png" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
				
                            <font color="red"><b><?php  echo $m1->untuk;?></b></font>
                            <small><i class="fa fa-clock-o"></i> <b><font color="black"><?php 	echo tgl_ind($m1->date2);?></font></b> </small>
                          </h4>
       <p><b><font color="black"><?php echo $m1->isi ?></font></b></p>						
							
                        </a>
                      </li>
					  
												<?php } }
						else if($tanggal3=="3"){
												if($m1->status=="keluar"){?>
											<a href="<?php echo site_url('kirim'); ?>">
												<li style="background-color:#edf3a2;color: white">
                          <div class="pull-left">
                            <img src="ltes/dist/img/avatar2.png" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
				
                            <font color="red"><b><?php  echo $m1->untuk;?></b></font>
                            <small><i class="fa fa-clock-o"></i> <b><font color="black"><?php 	echo tgl_ind($m1->date2);?></font></b> </small>
                          </h4>
       <p><b><font color="black"><?php echo $m1->isi ?></font></b></p>						
							
                        </a>
                      </li>	
												
			
						
									
						
												<?php }  } } else{ 
												    $id = $this->session->userdata('user_id');
				      $subi1 = $this->session->userdata('group_id');
					  $get3 =$this->db->get_where("tb_users_groups",array("user_id" =>$id))->row();
					  	$tanggal3 = $get3->group_id;
												if($tanggal3=="1"){
												if($m1->status=="masuk"){?>
												<li>
											
                                              <a href="<?php echo site_url('kirim'); ?>">
                          <div class="pull-left">
                            <img src="ltes/dist/img/avatar2.png" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
				
                            <font color="red"><b><?php  echo $m1->untuk;?></b></font>
                            <small><i class="fa fa-clock-o"></i> <b><font color="black"><?php 	echo tgl_ind($m1->date2);?></font></b> </small>
                          </h4>
       <p><b><font color="black"><?php echo $m1->isi ?></font></b></p>						
							
                        </a>
                      </li>
					  
												<?php } }
else if($tanggal3=="3"){
												if($m1->status=="keluar"){?>
											<a href="<?php echo site_url('kirim'); ?>">
											<li>
                          <div class="pull-left">
                            <img src="ltes/dist/img/avatar2.png" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
				
                            <font color="red"><b><?php  echo $m1->untuk;?></b></font>
                            <small><i class="fa fa-clock-o"></i> <b><font color="black"><?php 	echo tgl_ind($m1->date2);?></font></b> </small>
                          </h4>
       <p><b><font color="black"><?php echo $m1->isi ?></font></b></p>						
							
                        </a>
                      </li>	
												
												<?php }  } } } } else{?>
					   
						 <center>  <h4><font color="red"><b>tidak ada</br> pemberitahuan </br>terbaru </br>user login</b></font></h4></center>
					
        
			     <?php
					   }
                            ?>
                      <li>
										
			
                      
                    </ul>
                  </li>
    <li class="footer"><a href="<?php echo site_url('kirim'); ?>"><b>Lihat semua notifikasi</b></a></li>
                </ul>
         
			   <?php 
						  }
						  ?>
			      <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-calendar"></i>
                        <span> <?php echo tanggal_new(); ?></span>
                    </a>                    
                </li>
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url('assets/img/avatar5.png'); ?>" class="user-image" alt="User Image"/>
						<?php $get3 =$this->db->get_where("tb_users",array("id" =>$id))->row();
					 
					  	$tanggal = $get3->username;?>
                        <span class="hidden-xs"><?php echo $tanggal; ?> </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo base_url('assets/img/avatar5.png'); ?>" class="img-circle" alt="User Image" />
                            <p><p><b><font color="white">"
                                <?php
								$get3 =$this->db->get_where("tb_users",array("id" =>$id))->row();
					  
					  	$p = $get3->email;
                              	$get4 =$this->db->get_where("member",array("email" =>$p))->row();
                           	$p1 = $get4->nama_member;
                                echo $p1
                                ?>" </b></font>
                                <small>Terakhir Login , <?php echo tgl_lengkap($this->session->userdata('old_last_login')); ?></small>
                            </p>
                        </li>
                        <!-- Menu Body -->                                    
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?php echo site_url('auth/profile/' . $this->session->userdata('user_id')); ?>" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo site_url('auth/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>                        
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>

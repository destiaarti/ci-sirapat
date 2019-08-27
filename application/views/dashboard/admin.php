<section class="content-header">
    <h1>
        Dashboard
        <small>beranda</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
  
	<div class="row">
    <div class="col-md-12">
              <div class="box box-default">
                <div class="box-header with-border">
              
                 
				   <marquee bgcolor="#ddc67b" style="font-arial-bold: impact; font-size:20px; color:black;" ><i class="fa fa-bullhorn"></i>  Selamat Datang di Sistem Informasi Rapat SMPN 1 Ungaran</strong></marquee>
                </div><!-- /.box-header -->
                <div class="box-body">
              
				   <div class="animated flipInY ">
    
              <div class="box-body">
			     <div class="tile-stats6">
			
                 <h1> <img src="<?php echo base_url()?>assets/img/logo.png" alt=""> <font color="black"><strong>SI RAPAT SMPN 1 UNGARAN</strong></font></h1>
                           <h3> <font color="black">Alamat :Jalan Diponegoro no.197 || Fax(024)6921083 Ungaran </strong></font>  </h3>
						    <h3> <font color="black" size="4">Email : smpn1_ungaran@yahoo.co.id || Website: <a href="http:/www.smnp1ungaran.sch.id"><font color="red">http:/www.smnp1ungaran.sch.id </font></a></strong></font>  </h3>
				   </div>
                </div>
                </div>
					        <div class="animated flipInY ">
              <div class="tile-stats1">
              <div class="icon"><i class="fa fa-cog" color="#c3dff7"></i>
                </div>
   <p>&nbsp;</p>  
   		<?php 
		    $id = $this->session->userdata('user_id');
		$get3 =$this->db->get_where("tb_users",array("id" =>$id))->row();
					 
					  	$tanggal11 = $get3->username;?>
                        <h1> <font color="yellow">Selamat Datang </font><font color="red"><em><?php echo $tanggal11; ?> ,</em></font></h1>
                     
                           
							      <h3> <font color="white">Anda login sebagai  <strong>Administrator</strong>,</font>  </h3> 
                          <h3> <font color="white" size="4">   Anda dapat menambahkan data member dan jadwal rapat.  </font>                            </h3>  
                        </p>
   <p>&nbsp;</p>
 
				   </div>
                </div>
				
				
				<!-- /.box-body -->
              </div><!-- /.box -->
			  <div class="row top_tiles">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="<?php echo base_url('member/index')?>">
              <div class="tile-stats5">
                <div class="icon"><i class="fa fa-user"></i>
                </div>
             
  <div class="count"><font color ="yellow"> <?php echo $member; ?></font></div>
<br>    
	<h3><font color ="white">Member</font></h3>
                <p>&nbsp;</p>
              </a></div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="<?php echo base_url('status')?>">
              <div class="tile-stats2">
                <div class="icon"><i class="fa fa-users"></i>
                </div>
             
                 
                
              <div class="count"><font color ="yellow"> <?php echo $status; ?></font></div>
<br>
                <h3><font color ="white">Status Member</font></h3>
                <p>&nbsp;</p>
                <!-- <p>Lorem ipsum psdea itgum rixt.</p> -->
              </div></a>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <a href="<?php echo base_url('grouped')?>"><div class="tile-stats3">
                <div class="icon"><i class="fa fa-question-circle"></i>
                </div>
              
              
                           
                <div class="count"><font color ="yellow"> <?php echo $akses; ?></font></div>
<br>
                <h3><font color ="white">Hak Akses</font></h3>
                <p>&nbsp;</p>
              </div></a>
            </div>
   
		
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <a href="<?php echo base_url('hasil/lihat')?>"><div class="tile-stats4">
                <div class="icon"><i class="fa fa-check-square-o"></i>
                </div>
           
                 
                           
                <div class="count"><font color ="yellow"> <?php echo $hasil; ?></font></div>
<br>
                <h3><font color ="white">Hasil Rapat</font></h3>
                <p>&nbsp;</p>
              </div></a>
            </div>
          </div>
			  </div>
            </div><!-- /.col -->
          </div> <!-- /.row -->
          <!-- END ALERTS AND CALLOUTS -->
    <!-- Left col -->
          <div class="row">
            <div class="col-md-6">
			
              <div class="box box-success">
			

                <div class="box-header">
				  
                  <h3 class="box-title">Data Anggota</h3>
				             
             
				            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
				    </div>
                    <ul class="pagination pagination-sm no-margin pull-right">
					</br>
					</br>
                      <li>   <li><a href="<?php echo site_url('member/index'); ?>" class="btn btn-sm btn-default btn-flat pull-right">Lihat Semua Data Anggota</a></li>
                    </ul></li>
                    </ul>
              
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table no-margin">
                    <thead>
                        <tr>
                            <th>Nama Anggota</th>
                            <th>Status</th>
                      
                            <th>No.Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						
                        foreach ($member1 as $member1) {
						
                            ?>
                            <tr>
                       
                    
                                <td><?php echo anchor('member/read/' . $member1->id, $member1->nama_member) ?></td>
								 <td><?php echo $member1->status ?></td>
								 <td><?php echo $member1->telepon ?></td>
                                                   
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
				</br>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

	   </div>
	   <!-- hasil -->
	     <div class="col-md-6">
			
              <div class="box box-success">
			

                <div class="box-header">
				  
                  <h3 class="box-title">Data Hasil</h3>
				             
             
				            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
				    </div>
                    <ul class="pagination pagination-sm no-margin pull-right">
					</br>
					</br>
                      <li>   <li><a href="<?php echo site_url('hasil/lihat'); ?>" class="btn btn-sm btn-default btn-flat pull-right">Lihat Semua Data Hasil</a></li>
                    </ul></li>
                    </ul>
              
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table no-margin">
                    <thead>
                        <tr>
                            <th>Nama Acara</th>
                            <th>Hasil Rapat</th>
                      
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						
						
						
                        foreach ($hasil1 as $hasil1) {
						
                            ?>
                            <tr>
                       
                    
                                <td><?php echo anchor('hasil/read/' . $hasil1->id, $hasil1->nama) ?></td>
					
								 <?php
$hasil=$hasil1->hasil;
		 if($hasil==NULL){
			 ?>
							
	<td>    <font color="red">Hasil Belum diinput</font> </td> 
	
									  <?php }   else {
									  ?> <td>  <?php echo  $hasil1->hasil?></td> 
                             <?php
							 }        ?>
								              
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
					
                </table>
				</br>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

	   </div>
	    <!-- download -->
	     	   <!--jadwal-->
	     <div class="col-md-6">
			
              <div class="box box-success">
			

                <div class="box-header">
				  
                  <h3 class="box-title">Jadwal Rapat</h3>
				             
             
				            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
				    </div>
                    <ul class="pagination pagination-sm no-margin pull-right">
					</br>
					</br>
                      <li><a href="<?php echo site_url('jadwal/index'); ?>" class="btn btn-sm btn-default btn-flat pull-right">Lihat Semua Jadwal Rapat</a></li>
                    </ul>
              
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table no-margin">
                    <thead>
                        <tr>
                            <th>Nama Acara</th>
                            <th>Tempat</th>
                            <th>Tanggal</th>
                            <th>Sampai Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($jadwal1 as $jadwal1) {
							
                           
                            ?>
                            <tr>
           
                    
                               <td><?php echo anchor('jadwal/read/' . $jadwal1->id, $jadwal1->nama) ?></td>
								     <td><?php echo $jadwal1->tempat ?></td>
									      <td><?php echo $jadwal1->tanggal ?></td>
										   <?php
	  $jad=$jadwal1->tanggal;
	   $jad1=$jadwal1->tanggal1;
		 if($jad==$jad1){
			 ?>
							
	<td>   <strong>  - </strong></td> 
	
									  <?php }   else {
									  ?> <td>  <?php echo  $jadwal1->tanggal1?></td> 
                             <?php
							 }        ?>
								 <?php
	  $status1=$jadwal1->status;
		 if($status1=="Sudah Terlaksana"){
			 ?>
							
	<td>      <font color="blue">Sudah Terlaksana</font></td> 
	
									  <?php }   else if($status1=="Batal"){
									  ?> <td>       <font color="red">Batal</font></td> 
                             <?php
							 } else if($status1=="Belum Terlaksana"){
							 ?>
							<td>      <font color="green">Belum Terlaksana</font></td> 
                             <?php  }        ?>
                                                           
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
				</br>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

	   </div>
</div>
   </br>
	
    <div style="padding: 10px 0px; text-align: center;">
            <div class="text">Excuse the ads! We need some help to keep our site up.</div>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- iklan_pulsaqu -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-5746089618495474"
                     data-ad-slot="6145123342"
                     data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
        </div>
</section>
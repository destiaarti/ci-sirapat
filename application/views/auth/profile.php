<section class="content">

    <div class="row">
        <div class="col-md-4">

            <!-- Profile Image -->
            <div class="box box-success">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/img/avatar5.png'); ?>" alt="User profile picture">
                    <h3 class="profile-username text-center"><?php echo $username ;?></h3>
                    
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Nama Pengguna</b> <a class="pull-right"><?php echo $username ;?></a>
                        </li>
                        
                        <li class="list-group-item">
                            <b>Alamat Email </b> <a class="pull-right"><?php echo $email ;?></a>
                        </li>
                        <li class="list-group-item">
						 <?php $id = $this->session->userdata('user_id');
				      $subi1 = $this->session->userdata('group_id');
					  $get3 =$this->db->get_where("tb_users_groups",array("user_id" =>$id))->row();
					  	$tanggal1 = $get3->group_id;
						if($tanggal1=="1"){
							$n= "admin";
						}else if($tanggal1=="3"){
						$n="sekretaris";
						}else{
							$n="member";
						}
						
						?>
                            <b>Hak Akses</b> <a class="pull-right"><?php echo $n ;?></a>
                        </li>
                    </ul>

                    <a href="<?php echo base_url('auth/edit_user/'.$id) ?>" class="btn btn-success btn-block"><b>Edit</b></a>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <!-- About Me Box -->
            
        
    </div><!-- /.row -->

</section>
<section class="content-header">
    <h1>
        <?php echo strtoupper(lang('index_heading'));?>
        <small><?php echo lang('index_subheading');?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-suitcase"></i>Seting</a></li>
        <li class="active"><?php echo lang('index_heading');?></li>
    </ol>
</section>
<section class="content">   

    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class='box-header with-border'>
      
                            <label calss='control-label' ></label>
                </div>
                <div class="box-body table-responsive">
                    <table id="mytable" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                      <thead style="background-color:#222d32;color: white">
                            <tr>
                                <th>No.</th>
                                <th>Username</th>
                
                                <th>Alamat Email</th>
                               
                                <th>Status</th>                                                           
                                <th>Edit</th>  
                                                   
                            </tr>
                        </thead>
                       <?php
                       $no=1;                  
                       foreach ($tb_users as $user){ 
                           echo"
                               <tr>
                               <td>$no</td>
							     <td>".$user->username."</td>
				
                             
                             
                               <td>".$user->email."</td>
                             
                    
                               ";?>                             
                               <td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
                               <?php echo"
                               <td>" . anchor('auth/edit_user/'.$user->id, '<i class="btn bg-navy btn-sm glyphicon glyphicon-edit" data-toggle="tooltip" title="Edit"></i>') . "</td>
                              

                               </tr>";
                           $no++;
                       }
                       ?>
                    </Table> 
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section><!-- /.content -->
<script src="<?php echo base_url('assets/js/jquery-1.12.0.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#mytable").dataTable();
    });
</script>
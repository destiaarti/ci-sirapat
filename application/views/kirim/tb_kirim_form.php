<section class='content-header'>
    <h1>
        Data Pesan
        <small>Kirim Pesan</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Data pesan</li>
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
							
                  <div class='form-group'>Untuk 
  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                      </div>                                 
 <?php
					  $id = $this->session->userdata('user_id');
				      $subi1 = $this->session->userdata('group_id');
					  $get3 =$this->db->get_where("tb_users_groups",array("user_id" =>$id))->row();
					  	$tanggal1 = $get3->group_id;
                if ($tanggal1=="1") {
					?>
								 <input type="text" class="form-control"  name="untuk" id="untuk" readonly value="<?php echo "sekretaris"; ?>" />
				<?php } else{?>
					 <input type="text" class="form-control"  name="untuk" id="untuk" readonly value="<?php echo "admin"; ?>" />
				<?php } ?>
			
                                </div>								
                            </div>               
							
  <div class='form-group'>Isi Pesan <?php echo form_error('isi') ?>
  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-edit"></i>
                      </div>                                 
								 <textarea type="text" class="form-control" name="isi" id="isi" placeholder="isi pesan" ><?php echo $isi; ?></textarea>
                                </div>								
                            </div>
                            <div class='box-footer'>
                                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                                <button type="submit" class="btn btn-success"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('kirim') ?>" class="btn btn-default">Batal</a>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</section><!-- /.content -->
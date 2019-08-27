<section class='content-header'>
    <h1>
        Data Jadwal Rapat
        <small>Form Data Jadwal Rapat</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Data Jadwal Rapat</li>
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
                                <div class='form-group'>Nama Acara <?php echo form_error('nama') ?>
								 <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-tags"></i>
                      </div>
                                    <input type="text" class="form-control" name="nama" id="nama" readonly placeholder="nama acara" value="<?php echo $nama; ?>" />
                                </div>    
                                </div>    
      <div class='form-group'>Tempat <?php echo form_error('tempat') ?>
	     <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-home"></i>
                      </div>
                                    <input type="text" class="form-control" name="tempat" id="tempat" readonly placeholder="tempat acara" value="<?php echo $tempat; ?>" />
                                </div>  
                                </div>  
     
							   
								<div class='col-md-6'>
  <div class='form-group'>Tanggal Acara <?php echo form_error('tanggal') ?>
    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
     
                                       <input type="text" class="form-control" name="tanggal" readonly value="<?php echo $tanggal ?>" />
 </div>  		
								</div>									   s/d
									     <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
									     <input type="text" class="form-control"  name="tanggal1" readonly value="<?php echo $tanggal1 ?>" />
                                </div>  		
								</div>
								</div>
							
								  <div class='form-group'>Pukul <?php echo form_error('jam1') ?>
                              <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                      </div>
									<input   id="jam1" class="form-control name="jam1" type="text" readonly placeholder="Contoh : 16.00" value="<?php echo $jam1; ?>"/>
                                </div>
                                </div>
  <div class='form-group'>Deskripsi <?php echo form_error('deskripsi') ?>
    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-square"></i>
                      </div>
                                    <textarea type="text" class="form-control" name="deskripsi" readonly id="deskripsi" placeholder="deskripsi acara" ><?php echo $deskripsi; ?></textarea>
                                </div>								
                                </div>								
                            
							    <div class='form-group has-error'>Status <?php echo form_error('status') ?>
								<div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-spinner"></i>
                      </div>
                                    <select name="status" id="status" class="form-control" >
									                                        <option value="">- Pilih Status Rapat -</option>                               

                                
									<option value="Batal">Batal</option> 
                                 <option value="Sudah Terlaksana">Sudah Terlaksana</option>              
                                    </select>
                                </div>   
                                </div>   
                            <div class='box-footer'>
                                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                                <button type="submit" class="btn btn-success"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('jadwal') ?>" class="btn btn-default">Batal</a>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</section><!-- /.content -->
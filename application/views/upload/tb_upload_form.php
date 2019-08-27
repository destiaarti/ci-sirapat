<section class='content-header'>
    <h1>
        Data status
        <small>Form Data status</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Data status</li>
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
							   <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Acara <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
          		     
              <select name="xrapat" id="xrapat" class="form-control" > 
                                        <option value="">- Pilih status -</option>                               
                                             <?php
                                        if (!empty($nama)) {
                                            foreach ($nama as $row) {
                                                echo "<option value='$row->nama'> " . $row->nama .  "</option>";
                                            }
                                        }
                                        ?>
                                    </select> 
            </div>
          </div>

		       <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Nama File<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
             <input type="text" name="xjudul" class="form-control" id="xjudul" placeholder="Nama File.." required value=<?php echo $row['file_judul']?>>
            </div>
          </div>
		  
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Deskripsi<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea class="form-control" rows="3" name="xdeskripsi" id="xdeskripsi" placeholder="Deskripsi ..." required ><?php echo $row['file_deskripsi']?></textarea>
            </div>
          </div>

  <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" label for="inputUserName"> Dokumen <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="file" name="filefoto" required> 
					 file sebelumnya : <?php echo $row['file_data']?><br>
                                  NB: file harus bertype pdf|doc|docx|ppt|pptx|zip. ukuran maksimal 2,7 MB.
          </div>
        </div>
		
		
                                <div class='form-group'>Status <?php echo form_error('status') ?>
								  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-tasks"></i>
                      </div>
                                    <input type="text" class="form-control" name="status" id="status" placeholder="status member" value="<?php echo $status; ?>" />
                                </div>     
								</div>
							
  <div class='form-group'>Deskripsi <?php echo form_error('deskripsi') ?>
  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-edit"></i>
                      </div>                                 
								 <textarea type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="deskripsi member" ><?php echo $deskripsi; ?></textarea>
                                </div>								
                            </div>
                            <div class='box-footer'>
                                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                                <button type="submit" class="btn btn-success"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('status') ?>" class="btn btn-default">Cancel</a>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</section><!-- /.content -->
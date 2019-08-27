<section class='content-header'>
    <h1>
        Data  Jadwal Rapat
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
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="nama acara" value="<?php echo $nama; ?>" />
                                </div>    
                                </div>    
      <div class='form-group'>Tempat <?php echo form_error('tempat') ?>
	   <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-home"></i>
                      </div>
                                    <input type="text" class="form-control" name="tempat" id="tempat" placeholder="tempat acara" value="<?php echo $tempat; ?>" />
                                </div>  
                                </div>  
     
							   
													        								<div class="form-group">
                    <label>Tanggal Rapat</label><?php echo form_error('tanggal') ?>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                    
					     <input type="text" class="form-control pull-right"  id="daterange-btn"/>
				
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->


		     <script src="<?php echo base_url('assets/js/plugins/jQuery/jQuery-2.1.3.min.js'); ?>"></script>
     
				<script type="text/javascript">
		  
                         $(document).ready(function() {
							 
				   $('#birthday').daterangepicker();

	  
        $('#daterange-btn').daterangepicker(
                {
                  ranges: {
                    'Hari ini': [moment(), moment()],
                    'Kemarin': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    '7 Hari Sebelumnya': [moment().subtract('days', 6), moment()],
					             '7 Hari Kedepan': [moment(), moment().add('days', 6)],
                    '30 Hari Sebelumnya': [moment().subtract('days', 29), moment()],
					          '30 Hari Kedepan': [moment(), moment().add('days', 29)],
                    '1 Bulan Kedepan': [moment().startOf('month'), moment().endOf('month')],
                    '1 Bulan Sebelumnya': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                  },
                  startDate: moment(),
                  endDate: moment()
                },
	function (start, end) {
		

          
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' hingga ' + end.format('MMMM D, YYYY'));
        var tanggal = $("#tanggal").val(start.format('YYYY-M-D'));
		        var tanggal1 = $("#tanggal1").val(end.format('YYYY-M-D'));
			        
        }
        );
            

			  });
			            		   
          </script>
		   <div class='hidden' >Tanggal <?php echo form_error('tanggal') ?>
                          
									<input   id="tanggal"  class="form-control" name="tanggal" type="text" value="<?php echo $tanggal; ?>"/> 
									<input   id="tanggal1" class="form-control" name="tanggal1" type="text"  value="<?php echo $tanggal1; ?>"/> 
                                </div>
		
                           
								  
								  <div class='form-group'>Pukul <?php echo form_error('jam1') ?>
                           <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                      </div>
									<input   id="jam1" class="form-control" name="jam1" type="text" placeholder="Contoh : 16.00" value="<?php echo $jam1; ?>"/> 
                                </div>
                                </div>
  <div class='form-group'>Deskripsi <?php echo form_error('deskripsi') ?>
   <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-square"></i>
                      </div>
                                    <textarea type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="deskripsi acara" ><?php echo $deskripsi; ?></textarea>
                                </div>								
                                </div>								
                            
							    <div class='form-group'>Status <?php echo form_error('status') ?>
								 <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-spinner"></i>
                      </div>
                                    <select name="status" id="status" class="form-control" >
                                        <option value="Belum Terlaksana">Belum Terlaksana</option> 
                                      
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
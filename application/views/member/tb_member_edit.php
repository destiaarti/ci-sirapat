<section class='content-header'>
    <h1>
       Data Member
        <small>Edit data Member</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Data Member</li>
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
							    
                                <div class='form-group'>Nama member <?php echo form_error('nama_member') ?>
                                  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-pencil"></i>
                      </div>   <input type="text" class="form-control" name="nama_member" readonly id="nama_member" placeholder="Nama member" value="<?php echo $nama_member; ?>" />
                                </div>
							</div>
                                <div class='form-group'>Alamat <?php echo form_error('alamat') ?>
								  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-home"></i>
                      </div>
                                    <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" ><?php echo $alamat; ?></textarea>
                                </div>
								</div>
									<div class='form-group'>Tempat Lahir  <?php echo form_error('tempat_lahir') ?>
    <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-road"></i>
                      </div>                                   
								   <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" />
                                </div>
								</div>
								  <div class='form-group'>Tanggal Lahir <?php echo form_error('tanggal_lahir') ?>
								       <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                                    <input type="datetime" class="form-control datepicker" name="tanggal_lahir" data-date-format="yyyy-mm-dd" id="datetimepicker" placeholder="yyyy-mm-dd" value="<?php echo $tanggal_lahir ?>" />
                                </div>
								</div>
                                <div class='form-group'>No Telp <?php echo form_error('telepon') ?>
								    <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                                    <input type="number" class="form-control" name="telepon" id="telepon" placeholder="telepon" value="<?php echo $telepon; ?>" />
                                </div>  
</div>					
					<div class='form-group'>Jenis Kelamin  <?php echo form_error('jenis_kelamin') ?></br>
                                      <label>
                    
									 <p style="margin-top: 10px">
								
               <input type="radio" class="flat" name="jenis_kelamin" id="genderL" value="Laki-Laki" <?php 
              if($jenis_kelamin == "Laki-Laki")
              {
                echo "checked";
              }
              ?> />
              Laki-Laki &nbsp;
             <input type="radio" class="flat" name="jenis_kelamin" id="genderP" value="Perempuan" 
             <?php 
              if($jenis_kelamin == "Perempuan")
              {
                echo "checked";
              }
              ?> />
             Perempuan     
       </p>
                                 
                                </div>		
								<div class='form-group'>Status  <?php echo form_error('id_status') ?>
								    <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-puzzle-piece"></i>
                      </div>
                                     <select name="id_status" id="id_status" class="form-control" > 
                                        <option value="">- Pilih status -</option>                               
                                             <?php
                                                                          if (!empty($status)) {
                                        foreach ($status as $row) {
                                            echo "<option value='$row->id'";
                                            echo $id_status == $row->id ? 'selected' : '';
                                            echo">$row->status</option>";
                                        }
                                    }
                                        ?>
                                    </select> 
									      </div>	
										  </div>
                                 	<div class='form-group'>Pendidikan Terakhir  <?php echo form_error('pendidikan_terakhir') ?>
									    <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-briefcase"></i>
                      </div>
                                     <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control" > 
                                                                 
       <?php
                                    if ($pendidikan_terakhir =="SD"){
										
                                        echo' <option value="SD" selected>SD ke bawah</option>';
                                        echo'<option value="SMP">SMP</option>';
									    echo'<option value="SLTA">SLTA</option>';
										echo'<option value="D1-D3-D4">D1-D3-D4</option>';
									    echo'<option value="S1">S1</option>';	
										echo'<option value="S2">S2 ke atas</option>';										
		
                                    }  if ($pendidikan_terakhir =="SMP"){
                                        echo' <option value="SD"> SD ke bawah</option>';
                                        echo'<option value="SMP" selected>SMP</option>';
									    echo'<option value="SLTA">SLTA</option>';
										echo'<option value="D1-D3-D4">D1-D3-D4</option>';
									    echo'<option value="S1">S1</option>';	
									echo'<option value="S2">S2 ke atas</option>';	}	
									if ($pendidikan_terakhir =="SLTA"){
                                        echo' <option value="SD"> SD ke bawah</option>';
                                        echo'<option value="SMP">SMP</option>';
									    echo'<option value="SLTA" selected>SLTA</option>';
										echo'<option value="D1-D3-D4">D1-D3-D4</option>';
									    echo'<option value="S1">S1</option>';	
									echo'<option value="S2">S2 ke atas</option>';	}
									if ($pendidikan_terakhir =="D1-D3-D4"){
                                        echo' <option value="SD"> SD ke bawah</option>';
                                        echo'<option value="SMP" SMP</option>';
									    echo'<option value="SLTA">SLTA</option>';
										echo'<option value="D1-D3-D4" selected>D1-D3-D4</option>';
									    echo'<option value="S1">S1</option>';	
									echo'<option value="S2">S2 ke atas</option>';	}		
									if ($pendidikan_terakhir =="S1"){
                                        echo' <option value="SD"> SD ke bawah</option>';
                                        echo'<option value="SMP">SMP</option>';
									    echo'<option value="SLTA">SLTA</option>';
										echo'<option value="D1-D3-D4">D1-D3-D4</option>';
									    echo'<option value="S1" selected>S1</option>';	
									echo'<option value="S2">S2 ke atas</option>';	}									
if ($pendidikan_terakhir =="S2"){
                                        echo' <option value="SD"> SD ke bawah</option>';
                                        echo'<option value="SMP">SMP</option>';
									    echo'<option value="SLTA">SLTA</option>';
										echo'<option value="D1-D3-D4">D1-D3-D4</option>';
									    echo'<option value="S1">S1</option>';	
									echo'<option value="S2" selected>S2 ke atas</option>';	}	
                                    ?>       
										
                                    </select> 
                                 
                          	
                                </div>		
								</div>
								 <div class='form-group'>Email <?php echo form_error('email') ?>
								     <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </div>
                                    <input type="text" class="form-control" readonly name="email" id="email" placeholder="Email" value ="<?php echo $email; ?>"/>
                                </div>
                            	</div>
							</div>
                            <div class='box-footer'>
                                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                                <button type="submit" class="btn btn-success"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('member') ?>" class="btn btn-default">Batal</a>
                            </div>
							
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
	
</section><!-- /.content -->

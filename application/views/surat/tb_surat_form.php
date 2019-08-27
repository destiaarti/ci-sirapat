<?php
if ($this->session->flashdata('Edit')) {
   
 echo "<div class='alert alert-info alert-dismissible fade in' role='alert'><span class='glyphicon glyphicon-wrench' aria-hidden='true'></span>";
    echo $this->session->flashdata('Edit');
    echo "</div>";
}elseif($this->session->flashdata('Tambah')){

   echo "<div class='alert alert-warning alert-dismissible fade in' role='alert'><span class='glyphicon glyphicon-arrow-down' aria-hidden='true'></span>";
   echo $this->session->flashdata('Tambah');
    echo "</div>";
}
elseif($this->session->flashdata('Hapus')){

   echo "<div class='alert alert-danger alert-dismissible fade in' role='alert'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span>";
   echo $this->session->flashdata('Hapus');
    echo "</div>";
}
?>
<section class='content-header'>
    <h1>
       Cetak
        <small>Cetak Undangan Rapat</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Cetak Surat</li>
    </ol>
</section>        
<section class='content'>
    <div class='row'>
        <!-- left column -->
        <div class='col-md-12'>
		 <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#fa-icons" data-toggle="tab">Rapat Pleno</a></li>
                  <li><a href="#karyawan" data-toggle="tab">Rapat Karyawan</a></li>
				                 
                  <li><a href="#adrt" data-toggle="tab">Rapat Komite</a></li>
                  <li><a href="#sendiri" data-toggle="tab">Edit Sendiri</a></li>
                </ul>
                <div class="tab-content">
                  <!-- Font Awesome icons -->
                  <div class="tab-pane active" id="fa-icons" >
                    <section id="new">
					
                      <h4 class="page-header">Rapat Pleno</h4>

      
           
   <ul class="bs-glyphicons">
                                  <div class='box-header'>
                    <div class='col-md-5'>
					 <form action="<?php echo $action; ?>" method="post" target="_blank">
                            <div class='box-body'>
							    
                                <div class='form-group'>No. Surat (Isi dengan 3 digit angka)<?php echo form_error('no') ?>
                                  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-tags"></i>
                      </div>   <input type="number" class="form-control" name="no" id="no" placeholder="Contoh = 003" value="<?php echo $no; ?>" />
                                </div>
							</div>
                            <div class='form-group'>No. Surat Selanjutnya (Isi dengan 3 digit angka)<?php echo form_error('no1') ?>
								  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-tags"></i>
                      </div>
                                 <input type="number" class="form-control" name="no1" id="no1" placeholder="Contoh = 003" value="<?php echo $no1; ?>" />
                                </div>
								</div>
								
           			
					
								<div class='form-group'>Nama Acara  <?php echo form_error('id_jadwal') ?>
								    <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-puzzle-piece"></i>
                      </div>
                                    <select name="id_jadwal" id="id_jadwal" class="form-control" > 
                                        <option value="">- Pilih acara -</option>                               
                                             <?php
                                        if (!empty($jadwal)) {
                                            foreach ($jadwal as $row) {
												  $tanggal_now = date("Y-m-d");
													   if ($row->status=="Belum Terlaksana"&& $row->tanggal1 > $tanggal_now ) {
                                                echo "<option value='$row->id'> " . $row->nama .  "</option>";
                                            }}
                                        }
                                        ?>
                                    </select> 
									      </div>	
										  </div>
                                 <div class='form-group'>Wali Murid <?php echo form_error('id_member') ?>
								    <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                                    <select name="id_member" id="id_member" class="form-control" > 
                                        <option value="">- Pilih wali murid -</option>     
										<option value="Kelas VII">Orang Tua / Wali Peserta Didik Kelas VII</option>										
										<option value="Kelas VIII">Orang Tua / Wali Peserta Didik Kelas VIII</option>										
										<option value="Kelas IX">Orang Tua / Wali Peserta Didik Kelas IX</option>	
										<option value="Kelas VII dan VIII">Orang Tua / Wali Peserta Didik Kelas VII dan VIII</option>											
                                             <?php
                                        if (!empty($member)) {
								
											
                                            foreach ($member as $row) {
												   if ($row->id_status=="2") {
													   
                                                echo "<option value='$row->id'> " . $row->nama_member .  "</option>";
                                            }
											   }
                                        }
                                        ?>
                                    </select> 
									      </div>	
										  </div>
										  <div class='hidden' >Tanggal 
                          <?php $tanda=1;?>
									<input   id="tanda"  class="form-control" name="tanda" type="text" value="<?php echo $tanda; ?>"/> 
								
                                </div>  	  
                            <div class='box-footer'>
                                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                                <button type="submit" class="btn btn-success"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('surat/create') ?>"  class="btn btn-default">Batal</a>
                            </div>
							
                        </form>
                    </div><!-- /.box-body -->
</ul>
                    </section>

                  
                  </div><!-- /#fa-icons -->
                  <!-- glyphicons-->
                  <div class="tab-pane" id="karyawan">
   <h4 class="page-header">Rapat Karyawan</h4>
                    <ul class="bs-glyphicons">
                     <div class='box-header'>
                    <div class='col-md-5'>
					 <form action="<?php echo $action; ?>" method="post" target="_blank">
                            <div class='box-body'>
							    
                                <div class='form-group'>No. Surat (Isi dengan 3 digit angka)<?php echo form_error('no') ?>
                                  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-tags"></i>
                      </div>   <input type="number" class="form-control" name="no" id="no" placeholder="Contoh = 003" value="<?php echo $no; ?>" />
                                </div>
							</div>
                            <div class='form-group'>No. Surat Selanjutnya (Isi dengan 3 digit angka)<?php echo form_error('no1') ?>
								  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-tags"></i>
                      </div>
                                 <input type="number" class="form-control" name="no1" id="no1" placeholder="Contoh = 003" value="<?php echo $no1; ?>" />
                                </div>
								</div>
								
                              
					
								<div class='form-group'>Nama Acara  <?php echo form_error('id_acara') ?>
								    <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-puzzle-piece"></i>
                      </div>
                                    <select name="id_jadwal" id="id_jadwal" class="form-control" > 
                                        <option value="">- Pilih acara -</option>                               
                                             <?php
                                        if (!empty($jadwal)) {
                                            foreach ($jadwal as $row) {
												  $tanggal_now = date("Y-m-d");
													   if ($row->status=="Belum Terlaksana"&& $row->tanggal1 > $tanggal_now) {
                                                echo "<option value='$row->id'> " . $row->nama .  "</option>";
                                            }}
                                        }
                                        ?>
                                    </select> 
									      </div>	
										  </div>
                                 <div class='form-group'>Karyawan/Guru <?php echo form_error('id_member') ?>
								    <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                                    <select name="id_member" id="id_member" class="form-control" > 
                                        <option value="">- Pilih Karyawan/Guru -</option>     
										<option value="Guru/Karyawan">Bapak / Ibu Guru/Karyawan</option>										
										<option value="Guru">Bapak / Ibu Guru</option>										
																				
                                             <?php
                                        if (!empty($member)) {
								
											
                                            foreach ($member as $row) {
												   if ($row->id_status=="1" || $row->id_status=="3" ) {
													   
                                                echo "<option value='$row->id'> " . $row->nama_member .  "</option>";
                                            }
											   }
                                        }
                                        ?>
                                    </select> 
									      </div>	
										  </div>
										  <div class='hidden' >Tanggal 
                          <?php $tanda=2;?>
									<input   id="tanda"  class="form-control" name="tanda" type="text" value="<?php echo $tanda; ?>"/> 
								
                                </div>
                            <div class='box-footer'>
                                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                                <button type="submit" class="btn btn-success"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('surat/create') ?>" class="btn btn-default">Batal</a>
                            </div>
							
                        </form>
                    </div><!-- /.box-body -->
                      </div>
                    </ul>
                  </div><!-- /#ion-icons -->
                  <div class="tab-pane" id="adrt">

                     <h4 class="page-header">Rapat Komite</h4>

      
           
   <ul class="bs-glyphicons">
                                  <div class='box-header'>
                    <div class='col-md-5'>
					 <form action="<?php echo $action; ?>" method="post" target="_blank">
                            <div class='box-body'>
							    
                                <div class='form-group'>No. Surat (Isi dengan 3 digit angka)<?php echo form_error('no') ?>
                                  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-tags"></i>
                      </div>   <input type="number" class="form-control" name="no" id="no" placeholder="Contoh = 003" value="<?php echo $no; ?>" />
                                </div>
							</div>
                            <div class='form-group'>No. Surat Selanjutnya (Isi dengan 3 digit angka)<?php echo form_error('no1') ?>
								  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-tags"></i>
                      </div>
                                 <input type="number" class="form-control" name="no1" id="no1" placeholder="Contoh = 003" value="<?php echo $no1; ?>" />
                                </div>
								</div>
								
                                
					
								<div class='form-group'>Nama Acara  <?php echo form_error('id_jadwal') ?>
								    <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-puzzle-piece"></i>
                      </div>
                                    <select name="id_jadwal" id="id_jadwal" class="form-control" > 
                                        <option value="">- Pilih acara -</option>                               
                                             <?php
                                        if (!empty($jadwal)) {
                                            foreach ($jadwal as $row) {
												  $tanggal_now = date("Y-m-d");
													   if ($row->status=="Belum Terlaksana"&& $row->tanggal1 > $tanggal_now) {
                                                echo "<option value='$row->id'> " . $row->nama .  "</option>";
                                            }}
                                        }
                                        ?>
                                    </select> 
									      </div>	
										  </div>
                                 <div class='form-group'>Nama Komite <?php echo form_error('id_member') ?>
								    <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                                    <select name="id_member" id="id_member" class="form-control" > 
                                        <option value="">- Pilih Komite -</option>     
										<option value="Ketua Komite">Ketua Komite</option>										
										<option value="Anggota Komite">Anggota Komite</option>										
																			
                                             <?php
                                        if (!empty($member)) {
								
											
                                            foreach ($member as $row) {
												   if ($row->id_status=="6") {
													   
                                                echo "<option value='$row->id'> " . $row->nama_member .  "</option>";
                                            }
											   }
                                        }
                                        ?>
                                    </select> 
									      </div>	
										  </div>
										  <div class='hidden' >Tanggal 
                          <?php $tanda=3;?>
									<input   id="tanda"  class="form-control" name="tanda" type="text" value="<?php echo $tanda; ?>"/> 
								
                                </div>
                            <div class='box-footer'>
                                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                                <button type="submit" class="btn btn-success"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('surat/create') ?>" class="btn btn-default">Batal</a>
                            </div>
							
                        </form>
                    </div><!-- /.box-body -->
</ul>
                  </div><!-- /#ion-icons -->
			
				                    <div class="tab-pane" id="sendiri">

                                  <h4 class="page-header">Edit Sendiri</h4>

      
           
   <ul class="bs-glyphicons">
                                  <div class='box-header'>
                    <div class='col-md-5'>
					 <form action="<?php echo $action; ?>" method="post" target="_blank">
                            <div class='box-body'>
							    
                                <div class='form-group'>No. Surat (Isi dengan 3 digit angka)<?php echo form_error('no') ?>
                                  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-tags"></i>
                      </div>   <input type="number" class="form-control" name="no" id="no" placeholder="Contoh = 003" value="<?php echo $no; ?>" />
                                </div>
							</div>
                            <div class='form-group'>No. Surat Selanjutnya (Isi dengan 3 digit angka)<?php echo form_error('no1') ?>
								  <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-tags"></i>
                      </div>
                                 <input type="number" class="form-control" name="no1" id="no1" placeholder="Contoh = 003" value="<?php echo $no1; ?>" />
                                </div>
								</div>
								
                                
					
								<div class='form-group'>Nama Acara  <?php echo form_error('id_jadwal') ?>
								    <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-puzzle-piece"></i>
                      </div>
                                    <select name="id_jadwal" id="id_jadwal" class="form-control" > 
                                        <option value="">- Pilih acara -</option>                               
                                             <?php
                                        if (!empty($jadwal)) {
                                            foreach ($jadwal as $row) {
												  $tanggal_now = date("Y-m-d");
													   if ($row->status=="Belum Terlaksana"&& $row->tanggal1 > $tanggal_now) {
                                                echo "<option value='$row->id'> " . $row->nama .  "</option>";
                                            }}
                                        }
                                        ?>
                                    </select> 
									      </div>	
										  </div>
                                 <div class='form-group'>Nama Penerima Surat <?php echo form_error('id_member') ?>
								    <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                                    <select name="id_member" id="id_member" class="form-control" > 
                                        <option value="">- Pilih Penerima Surat-</option>     
																		
																			
                                             <?php
                                        if (!empty($member)) {
								
											
                                            foreach ($member as $row) {
											
													   
                                                echo "<option value='$row->id'> " . $row->nama_member .  "</option>";
                                            
											   }
                                        }
                                        ?>
                                    </select> 
									      </div>	
										  </div>
										  <div class='hidden' >Tanggal 
                          <?php $tanda=4;?>
									<input   id="tanda"  class="form-control" name="tanda" type="text" value="<?php echo $tanda; ?>"/> 
								
                                </div>
                            <div class='box-footer'>
                                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                                <button type="submit" class="btn btn-success"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('surat/create') ?>" class="btn btn-default">Batal</a>
                            </div>
							
                        </form>
                    </div><!-- /.box-body -->
</ul>
                  </div><!-- /#ion-icons -->	           
				
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            <!-- general form elements -->
           
            </div><!-- /.col -->
        </div><!-- /.row -->

	
</section><!-- /.content -->

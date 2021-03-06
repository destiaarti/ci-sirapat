<section class="content-header">
    <h1>
        Edit
        <small>Menu Dinamis</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-suitcase"></i>Seting</a></li>
        <li class="active">Menu Dinamis</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-success">
                <div class="box-header">
                <div class="col-md-5">
                <?php
                    echo form_open('menu/edit');
                ?>
                    
                    <div class="box-body">
                        <div class="form-group">
                            <label for="example">Nama Menu</label>
							 <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-tags"></i>      </div> 
                            <input type="hidden"  name="id" value="<?php echo $record['id_menu'] ?>" >
                            <input type="tex" name="nama" class="form-control" id="inputError" required oninvalid="setCustomValidity('Nama Menu Harus di Isi !')"
                                   oninput="setCustomValidity('')" placeholder="Masukan Nama menu" value="<?php echo $record['nama_menu']; ?>" >
								         </div>
							</div>
                  
                   <div class='form-group'><b>Hak Akses
					 <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-sitemap"></i>      </div> 	
                                <select name="role" id="role" class="form-control" >
                                    <option value="">- Pilih Hak Akses -</option>                               
                                             <?php
                                                                          if (!empty($groups)) {
                                        foreach ($groups as $row) {
                                            echo "<option value='$row->id'";
                                            echo $record['role'] == $row->id ? 'selected' : '';
                                            echo">$row->name</option>";
                                        }
                                    }
                                        ?>
                                                              
                                </select>
								
                          			</div>
                          			</div>
									
				  <div class="form-group">
                            <label for="example">Icon</label>  
 <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-globe"></i>      </div> 							
                            <input type="tex" name="icon" class="form-control" id="inputError" required oninvalid="setCustomValidity('Icon Harus di Isi !')"
                                   oninput="setCustomValidity('')" placeholder="ex : fa fa-dashboard" value="<?php echo $record['icon']; ?>" >
                        </div> 
                        </div> 
                        <div class="form-group">
                            <label for="example">Link</label>     
 <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-link"></i>      </div> 							
                            <input type="tex" name="link" class="form-control" id="inputError" required oninvalid="setCustomValidity('Link Harus di Isi !')"
                                   oninput="setCustomValidity('')" placeholder="ex : menu/edit" value="<?php echo $record['link']; ?>" >
                        </div>                       
                        </div>                       
                        <div class="form-group">
                                <label>Kat. Menu</label>
								 <div class="input-group">
								   <div class="input-group-addon">
                        <i class="fa fa-folder-open"></i>      </div> 		
                                <select name="kat_menu" class="form-control">
                                    <option value='0'>Menu Utama</option>
                                    <?php
                                    foreach ($katmenu as $k) {
                                        echo "<option value='$k->id_menu'";
                                        echo $record['parent'] == $k->id_menu ? 'selected' : '';
                                        echo">$k->nama_menu</option>";
                                    }
                                    ?>
                                </select>
                        </div>                      
                        </div>                      
                                           
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" name="submit" class="btn btn-success"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
                        <a href="<?php echo site_url('menu'); ?>" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
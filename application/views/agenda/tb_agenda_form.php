<section class='content-header'>
    <h1>
        Agenda
        <small>Form agenda</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Form Agenda</li>
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
						
                                <div class='form-group'>Nama Event <?php echo form_error('nama_agenda') ?>
                                    <input type="text" class="form-control" name="nama_agenda" id="nama_agenda" placeholder="Nama event" value="<?php echo $nama_agenda; ?>" />
                                </div>
								 <div class='form-group'>Tanggal <?php echo form_error('time') ?>
                                    <input type="date" class="form-control" name="tgl" id="tgl" placeholder="dd-mm-yy" value="<?php echo $tgl; ?>" />
                                </div>
                                <div class='form-group'>Jam <?php echo form_error('jam') ?>
                                    <input type="time" class="form-control" name="jam" id="jam" placeholder="Jam" value="<?php echo $jam; ?>" />
                                </div>
                                <div class='form-group'>Tempat <?php echo form_error('tempat') ?>
                                    <textarea  type="text" class="form-control" name="tempat" id="tempat" placeholder="Tempat" ><?php echo $tempat; ?> </textarea>
                                </div>                                
                            </div>
                            <div class='box-footer'>
                                <input type="hidden" name="id_agenda" value="<?php echo $id_agenda; ?>" /> 
                                <button type="submit" class="btn btn-success"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('agenda') ?>" class="btn btn-default">Cancel</a>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</section><!-- /.content -->
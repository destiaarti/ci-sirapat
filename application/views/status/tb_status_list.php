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
        Status
        <small>Daftar status member</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Data Status</li>
    </ol>
</section>        
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box box-success'>  
                <div class='box-header with-border'>
				  <h3> 
  
	      <a href="<?php echo base_url('status/excel');?>"><button type="submit" name="tambah" class="btn btn-success" style="float: right;"><i class="fa fa-arrow-circle-down"></i> Download Excel</button></a>  
		      <a href="<?php echo base_url('status/pdf');?>"><button type="submit" name="tambah" class="btn btn-danger" style="float: right;"><i class="fa fa-arrow-circle-down"></i> Download PDF</button></a> 
   <a href="<?php echo base_url('status/word3');?>"><button type="submit" name="tambah" class="btn btn-primary" style="float: right;"><i class="fa fa-arrow-circle-down"></i> Download Word</button></a> 		
        <a href="<?php echo base_url('status/cetak');?>"><button type="submit" name="tambah" class="btn btn-warning" style="float: right;"><i class="fa fa-plus-square"></i> Cetak</button></a></h3>
          <h3 class='box-title'><?php echo anchor('status/create/', '<i class="glyphicon glyphicon-plus"></i>Tambah Data', array('class' => 'btn bg-purple btn-lg')); ?>
                      </h3>
					  
                </div><!-- /.box-header -->
                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable">
                        <thead style="background-color:#222d32;color: white">
                            <tr>
                                <th width="80px">No</th>
                                <th>Status Member</th>
								   <th>Deskripsi</th>
                                <th>Edit</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                            foreach ($status_data as $status) {
                                ?>
                                <tr>
								
                                    <td><?php echo ++$start ?></td>
                                    <td><?php echo $status->status ?></td>
									 <td><?php echo $status->deskripsi ?></td>
                            
                                       <td> <?php
                                        echo anchor(site_url('status/update/' . $status->id), '<i class="fa fa-pencil-square-o"></i>', array('data-toggle' => 'tooltip', 'title' => 'edit data', 'class' => 'btn bg-navy btn-sm'));  ?></td>
									
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>					
  
  </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#mytable").dataTable();
    });
</script>

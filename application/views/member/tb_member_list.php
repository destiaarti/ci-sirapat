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
}elseif($this->session->flashdata('Hapus1')){

   echo "<div class='alert alert-success alert-dismissible fade in' role='alert'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span>";
   echo $this->session->flashdata('Hapus1');
    echo "</div>";
}
?>
<section class='content-header'>
    <h1>
        Anggota Rapat
        <small>Data Anggota Rapat</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Data Anggota Rapat</li>
    </ol>
</section>               
<section class='content'>
 <h3> 

							  
<a class="btn btn-danger" data-toggle="modal" data-target="#Modaa"><span class="fa fa-trash"> Hapus yang diceklis</span></a> </h3>  
            <h3> 
  
	      <a href="<?php echo base_url('member/excel');?>"><button type="submit" name="tambah" class="btn btn-success" style="float: right;"><i class="fa fa-arrow-circle-down"></i> Download Excel</button></a>  
		      <a href="<?php echo base_url('member/pdf');?>"><button type="submit" name="tambah" class="btn btn-danger" style="float: right;"><i class="fa fa-arrow-circle-down"></i> Download PDF</button></a> 
   <a href="<?php echo base_url('member/word3');?>"><button type="submit" name="tambah" class="btn btn-primary" style="float: right;"><i class="fa fa-arrow-circle-down"></i> Download Word</button></a> 		
        <a href="<?php echo base_url('member/cetak');?>"><button type="submit" name="tambah" class="btn btn-warning" style="float: right;"><i class="fa fa-plus-square"></i> Cetak</button></a></h3>
                    <h3 class='box-title'><?php echo anchor('member/create/', '<i class="glyphicon glyphicon-plus"></i>Tambah Data', array('class' => 'btn bg-purple btn-lg')); ?>
                       </h3>
	<form action="<?php echo site_url('member/delete_mutiple'); ?>" method="post">
    <div class='row'>
	
        <div class='col-xs-12'>
            <div class='box box-success'>  
                <div class='box-header with-border'>
				
                </div><!-- /.box-header -->
                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable">
                              <thead style="background-color:#222d32;color: white">
                            <tr class="headings">
							 <th ><input type="checkbox" id="checkAll" name="checkAll" /> Check all</th>
                                <th width="30px">No</th>
                            
                                <th>Nama</th>
								<th>Alamat</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                                    
                                <th>Gender</th>
								<th>Status</th>                               
							   <th>Pendidikan Terakhir</th>
                                <th>Telepon</th>
								      <th>Email</th>

                                <th>Edit</th>
                                <th>Hapus</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                            foreach ($ion1 as $grouped) {
                                ?>
                                <tr>
										<td><input type="checkbox" name="msg[]" value="<?php echo $grouped->id; ?>"></td>
                                    <td><?php echo ++$start ?></td>
                                    <td><?php echo $grouped->nama_member ?></td>
                                    <td><?php echo $grouped->alamat ?></td>
									 <td><?php echo $grouped->tempat_lahir ?></td>
									 <td><?php echo $grouped->tanggal_lahir ?></td>
									 <td><?php echo $grouped->jenis_kelamin ?></td>
									 <td><?php echo $grouped->status ?></td>
									 <td><?php echo $grouped->pendidikan_terakhir ?></td>
									 <td><?php echo $grouped->telepon ?></td>
									 <td><?php echo $grouped->email ?></td>
									   <td> <?php
									   
	   echo anchor(site_url('member/update/' . $grouped->id), '<i class="fa fa-pencil-square-o">Edit </i>', array('data-toggle' => 'tooltip', 'title' => 'edit data', 'class' => 'btn bg-navy btn-normal')); 
  ?></td><td>

											     <a class="btn btn-danger" data-toggle="modal" data-target="#ModalHapus<?php echo $grouped->id;?>"><span class="fa fa-trash"></span></a>
                            
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
		
  

	<?php foreach ($ion1 as $jadwal) {
           $id= $jadwal->id;
            
                $nama=$jadwal->nama_member;
             
           
            ?>

   
    <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus File</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'member/delete'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							             <input type="hidden" name="id" value="<?php echo $id;?>"/>
              
                            <p>Apakah Anda yakin mau menghapus member <b><?php echo $nama;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
                 <?php										
										echo anchor(site_url('member/delete/' . $id), '<i class="fa fa-trash" ></i>', array('data-toggle' => 'tooltip', 'title' => 'hapus data', 'class' => 'btn btn-danger btn-sm'));
										
										                
                                        ?>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php }?>

	 <div class="modal fade" id="Modaa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus File</h4>
                    </div>
                
                    <div class="modal-body">
							          
              
                            <p>Apakah Anda yakin mau menghapus member <b>yang diceklis</b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
              <a href="<?php echo base_url('member/delete_mutiple');?>"><button type="submit"  class="btn btn-danger btn-sm" style="float: left;"><i class="fa fa-trash"></i> Hapus yang diceklis</button></a>  
                    </div>
                
                </div>
            </div>
        </div>
  </div>
    </form>
</section><!-- /.content -->



	
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#mytable").dataTable();
			$("#checkAll").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});
    });
</script>

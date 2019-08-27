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
        Menu
        <small>Data Menu</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Data Menu</li>
    </ol>
</section>             
<section class='content'>
    <div class='row'>
	
        <div class='col-xs-12'>
            <div class='box box-success'>  
                <div class='box-header with-border'>

                    <h3 class='box-title'><?php echo anchor('menu/add/', '<i class="glyphicon glyphicon-plus"></i>Tambah Data', array('class' => 'btn bg-purple btn-lg')); ?>
                       </h3>
                </div><!-- /.box-header -->
                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable">
                              <thead style="background-color:#222d32;color: white">
                            <tr class="headings">
                                <th width="30px">No</th>
                            
                      
                                <th>Nama Menu</th>
								  <th>Hak Akses</th>
                                <th>Icon</th>
                                <th>Link</th>
                                <th>Kat. Menu</th>                                                              
                                <th>Edit</th>   
                                <th>Delete</th>        

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
							  function chek($id) {
                            $CI = get_instance();
                            $result = $CI->db->get_where('tb_menu', array('id_menu' => $id))->row_array();
                            return $result['nama_menu'];
							  }
                       foreach ($record as $r){  
// $role1 =  $this->db->get('tb_groups')->result();					   
   // $data['role1']=  $this->db->get('tb_groups');	
   if($r->role=="1"){
	   $r1="admin";
   }else if($r->role=="2"){
	   $r1="member";
   }else{
	    $r1="sekretaris";
   }
	
					
                        $katmenu = $r->parent == 0 ? 'Menu Utama' : chek($r->parent);
                                ?>
                                <tr>
                                    <td><?php echo ++$start ?></td>
                                    <td><?php echo $r->nama_menu ?></td>
                                    <td><?php echo $r1 ?></td>
									 <td><?php echo $r->icon?></td>
									 <td><?php echo $r->link ?></td>
									 <td><?php echo $katmenu ?></td>
							
									   <td> <?php
									   
	   echo anchor(site_url('menu/edit/' . $r->id_menu), '<i class="fa fa-pencil-square-o">Edit </i>', array('data-toggle' => 'tooltip', 'title' => 'edit data', 'class' => 'btn bg-navy btn-normal')); 
  ?></td><td>

											     <a class="btn btn-danger" data-toggle="modal" data-target="#ModalHapus<?php echo $r->id_menu;?>"><span class="fa fa-trash"></span></a>
                            
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
		


	<?php foreach ($record as $jadwal) {
           $id= $jadwal->id_menu;
            
                $nama=$jadwal->nama_menu;
             
           
            ?>

   
    <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus File</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'menu/delete'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							             <input type="hidden" name="id" value="<?php echo $id;?>"/>
              
                            <p>Apakah Anda yakin mau menghapus menu <b><?php echo $nama;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
                 <?php										
										echo anchor(site_url('menu/delete/' . $id), '<i class="fa fa-trash" ></i>', array('data-toggle' => 'tooltip', 'title' => 'hapus data', 'class' => 'btn btn-danger btn-sm'));
										
										                
                                        ?>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php }?>

	
  </div>
</section><!-- /.content -->



	
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#mytable").dataTable();
    });
</script>

<?php
 header("Content-Type: application/vnd.ms-word");
        header("Expires: 0");
        header("Cache-Control:  must-revalidate, post-check=0, pre-check=0");
        header("Content-disposition: attachment; filename=status.doc");
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
 table{
 border-collapse: collapse;
 }
 tr>th{
 background-color: gray;
 }
 tr>th,tr>td{
 padding: 5px;
 }
</style>
</head>
<body>
    <h1 style="text-align:center;">
   
        <small>Data Status Anggota Rapat</small>
		</p>
        <small>SMPN 1 Ungaran</small>
    </br>
    </br>
    </br>
	</h1>
  
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box box-success'>  
                <div class='box-header with-border'>
				
                </div><!-- /.box-header -->
                <div  style="text-align:center;" class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable">
                        <thead style="background-color:#222d32;color: white">
                            <tr>
                                <th width="80px">No</th>
                                <th>Status Member</th>
								   <th>Deskripsi</th>
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
</html>
</body>


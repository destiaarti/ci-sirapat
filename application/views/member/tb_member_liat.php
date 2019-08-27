<section class='content-header'>
    <h1>
        MEMBER
        <small>Daftar Semua Member</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Master</a></li>
        <li class='active'>Data Member</li>
    </ol>
</section>     
<script src="<?php echo base_url('assets/js/plugins/datatables/jquery-1.11.3.min.js'); ?>"></script>
<script>    
    $(document).ready(function(){ 
        $.fn.dataTable.ext.errMode = 'throw';                    
        $('#mytable').dataTable( {                  
        "Processing": true, 
        "ServerSide": true,
        "iDisplayLength": 25,
        "oLanguage": {
                    "sSearch": "Search Data :  ",
                    "sZeroRecords": "Data Masih Kosong",
                    "sEmptyTable": "No data available in table"
                    },
        "ajax": "<?php echo base_url('member/view_data');?>",
        "columns": [
               { "mData": "no" },
                  { "mData": "nama_member" },
				     { "mData": "alamat" },  
				             { "mData": "tempat_lahir" },     
                { "mData": "tanggal_lahir" }, 	
      
				   { "mData": "jenis_kelamin" },
				    { "mData": "status" }, 
                     
             
           
           
              { "mData": "pendidikan_terakhir" },
          		   { "mData": "telepon" },
              { "mData": "email" }, 			  
        
                              
        
                ],
				            
        "footerCallback": function (row, data, start, end, display) {
                var api = this.api(), data;
                // Remove the formatting to get integer data for summation
                var intVal = function (i) {
                    return typeof i === 'string' ?
                            i.replace(/,.*|\D/g, '') * 1 :
                            typeof i === 'number' ?
                            i : 0;
                };
                // Total over all pages
                total = api
                        .column(5)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);
                // Total over this page
                pageTotal = api
                        .column(5, {page: 'current'})
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);                
                // Update footer
                $(api.column(5).footer()).html(
                        'Rp ' + pageTotal + ' '
                        );
                $(api.column(6).footer()).html(
                        ' ( Total : Rp ' + total + ')'
                        );
            }
        } );
    });
</script>   
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box box-success'>  
                <div class='box-header with-border'>
                    <h3> 
  
	      <a href="<?php echo base_url('member/excel');?>"><button type="submit" name="tambah" class="btn btn-success" style="float: right;"><i class="fa fa-arrow-circle-down"></i> Download Excel</button></a>  
		      <a href="<?php echo base_url('member/pdf');?>"><button type="submit" name="tambah" class="btn btn-danger" style="float: right;"><i class="fa fa-arrow-circle-down"></i> Download PDF</button></a> 
   <a href="<?php echo base_url('member/word3');?>"><button type="submit" name="tambah" class="btn btn-primary" style="float: right;"><i class="fa fa-arrow-circle-down"></i> Download Word</button></a> 		
        <a href="<?php echo base_url('member/cetak');?>"><button type="submit" name="tambah" class="btn btn-warning" style="float: right;"><i class="fa fa-plus-square"></i> Cetak</button></a></h3>
                </div><!-- /.box-header -->
                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable">
               <thead style="background-color:#222d32;color: white">
                            <tr>
                                <th>No</th>
                              
                                <th>Nama</th>
								<th>Alamat</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                                    
                                <th>Gender</th>
								<th>Status</th>                               
							   <th>Pendidikan Terakhir</th>
                                <th>Telepon</th>
								      <th>Email</th>

                      
                            </tr>
                        </thead>
						
				      
                        <tfoot>
                         
                        </tfoot>
                        <tbody>
                           
                        </tbody>
                    </table>					
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->


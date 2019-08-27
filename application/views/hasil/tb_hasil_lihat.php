<section class='content-header'>
    <h1>
        Hasil Rapat
        <small>Daftar Semua Hasil Rapat</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Hasil</a></li>
        <li class='active'>Daftar Semua Hasil Rapat</li>
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
        "ajax": "<?php echo base_url('hasil/view_data');?>",
        "columns": [
                { "mData": "no" },
                { "mData": "nama" },
                { "mData": "tempat" },

                { "mData": "tanggal"  },
				 { "mData": "tanggal1"  },
                    { "mData": "hasil" },                     
                    { "mData": "detail" },                     
                    { "mData": "prints" },                     
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
  
	      <a href="<?php echo base_url('hasil/excel');?>"><button type="submit" name="tambah" class="btn btn-success" style="float: right;"><i class="fa fa-arrow-circle-down"></i> Download Excel</button></a>  
		      <a href="<?php echo base_url('hasil/pdf');?>"><button type="submit" name="tambah" class="btn btn-danger" style="float: right;"><i class="fa fa-arrow-circle-down"></i> Download PDF</button></a> 
   <a href="<?php echo base_url('hasil/word3');?>"><button type="submit" name="tambah" class="btn btn-primary" style="float: right;"><i class="fa fa-arrow-circle-down"></i> Download Word</button></a> 		
        <a href="<?php echo base_url('hasil/cetak');?>"><button type="submit" name="tambah" class="btn btn-warning" style="float: right;"><i class="fa fa-plus-square"></i> Cetak</button></a></h3>
                </div><!-- /.box-header -->
                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable">
                       <thead style="background-color:#222d32;color: white">
                            <tr>
                                <th>No</th>
                                <th>Nama Acara</th>
                                <th>Tempat</th>
                       
                                <th>Tanggal</th>
                                <th>Sampai Tanggal</th>
                                <th>Hasil Rapat</th>
                                <th>Detail</th>
                                <th>Print</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                        
                                <th></th>
                                <th colspan="3"></th>
                            </tr>
                        </tfoot>
                        <tbody>
                           
                        </tbody>
                    </table>					
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->


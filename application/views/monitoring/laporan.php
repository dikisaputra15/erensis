

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Laporan Monitoring Proyek</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan monitoring proyek</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Laporan Monitoring Proyek</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
            
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="text-align: center;">
                      <th>Unit</th>
            					<th>Nama Pekerjaan</th>
            					<th>Jenis Pekerjaan</th>
            					<th>Nilai Investasi</th>
                      <th>Manfaat</th>
            					<th>Kajian Finansial</th>
            					<th>Dokumen</th>
                      <th>PIC</th>
                      <th>Status</th>
            					<th>Action</th>
                  </tr>
                  </thead>
                  <tbody id="show_data">
                  
                 </tbody>
                </table>
              </div>
              <!-- /.card-body -->
      </div>
</div>

<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Detail</h4>  
                </div>  
                <div class="modal-body" id="detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  

<script type="text/javascript" src="<?= base_url('assets/js/jquery3.js'); ?>"></script>

 <script type="text/javascript">
  $(document).ready(function(){
    tampil_data_barang(); //pemanggilan fungsi tampil barang.
    
    $('#example1').dataTable();
     
    //fungsi tampil barang
    function tampil_data_barang(){
        $.ajax({
            type  : 'ajax',
            url   : '<?php echo base_url()?>dashboard/view',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i; 
                for(i=0; i<data.length; i++){

                 var bilangan = parseFloat(data[i].nilai_investasi);
                 var bilangan2 = bilangan.toFixed(0);
                 var bilangan3 = bilangan2.toString();

                 var bilanganinv = bilangan3;
  
                 var number_string = bilanganinv.toString(),
                  sisa  = number_string.length % 3,
                  rupiah  = number_string.substr(0, sisa),
                  ribuan  = number_string.substr(sisa).match(/\d{3}/g);
                    
                  if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                  }

                 var bilangan2 = parseFloat(data[i].npv);
                 var bilangan3 = bilangan2.toFixed(0);
                 var bilangan4 = bilangan3.toString();

                 var npv = bilangan4;
  
                 var number_string = npv.toString(),
                  sisa2  = number_string.length % 3,
                  rupiah2  = number_string.substr(0, sisa),
                  ribuan2  = number_string.substr(sisa).match(/\d{3}/g);
                    
                if (ribuan2) {
                  separator = sisa2 ? '.' : '';
                  rupiah2 += separator + ribuan2.join('.');
                }

                 var pbp = parseFloat(data[i].payback);
                 var pbp2 = pbp.toFixed(2);
                 var pbp3 = pbp2.toString();
                   
                    html += '<tr>'+
                              '<td>'+data[i].nama_unit+'</td>'+
                                '<td>'+data[i].nama_pekerjaan+'</td>'+
                                '<td>'+data[i].nama_program+'</td>'+
                                '<td>'+'Rp'+' '+rupiah+'</td>'+
                                '<td>'+'SAIDI :'+data[i].saidi+'<br>'+'SAIFI :'+data[i].saifi+'<br>'+'ENS :'+data[i].ens+'<br>'+'LOSSES :'+data[i].losses+'</td>'+
                                '<td>'+'NPV :'+'Rp'+' '+rupiah2+'<br>'+'IRR :'+data[i].irr+'<br>'+'PBP :'+pbp3+'</td>'+
                                '<td>'+'<a href="<?= base_url('rab/rab/file_rab/'); ?>'+data[i].id_utama+'" target="__blank">File RAB</a>'+'<br>'+'<a href="<?= base_url('rab/rab/file_kkp/'); ?>'+data[i].id_utama+'" target="__blank">File KKP</a>'+'</td>'+
                                '<td>'+data[i].nama_unit_layanan+'</td>'+
                                '<td>'+data[i].uraian_status+'</td>'+
                                '<td>'+
                                        '<input type="button" name="view" value="view" id="'+data[i].id_utama+'" class="btn btn-info btn-xs view_data" />'
                                '</td>'+
                            '</tr>';
                }
                $('#show_data').html(html);
            }

        });
    }

  });

</script>

<script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var id = $(this).attr("id");  
           $.ajax({  
                url:"<?= base_url() ?>monitoring/monitoring/fetch_detail",  
                method:"post",  
                data:{id:id},  
                success:function(data){  
                     $('#detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>

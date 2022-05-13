 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Monitoring Proyek</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">monitoring proyek</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Monitoring Proyek</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <a href="<?= base_url('monitoring/monitoring/form_monitoring'); ?>" class="btn btn-primary">Tambah Monitoring</a><br><br>
            
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="text-align: center;">
                      <th>Unit</th>
                      <th>Nama Pekerjaan</th>
                      <th>Jenis Program Kerja</th>
                      <th>Nilai Investasi</th>
                      <th>Manfaat</th>
                      <th>Kajian Finansial</th>
                      <th>Dokumen</th>
                      <th>PIC</th>
                      <th>status</th>
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

<script type="text/javascript" src="<?= base_url('assets/js/jquery3.js'); ?>"></script>

 <script type="text/javascript">
  $(document).ready(function(){
    tampil_data_barang(); //pemanggilan fungsi tampil barang.
    
    $('#example1').dataTable();
     
    //fungsi tampil barang
    function tampil_data_barang(){
        $.ajax({
            type  : 'ajax',
            url   : '<?php echo base_url()?>monitoring/monitoring/view',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i; 
                for(i=0; i<data.length; i++){
                 
                 var status = data[i].status;

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

if(status != 1){
                    html += '<tr>'+
                              '<td>'+data[i].nama_unit+'</td>'+
                                '<td>'+data[i].nama_pekerjaan+'</td>'+
                                '<td>'+data[i].nama_program+'</td>'+
                                '<td>'+'Rp'+' '+rupiah+'</td>'+
                                '<td>'+'SAIDI :'+data[i].saidi+'<br>'+'SAIFI :'+data[i].saifi+'<br>'+'ENS :'+data[i].ens+'<br>'+'LOSSES :'+data[i].losses+'</td>'+
                                '<td>'+'RWACC :'+data[i].rwacc+'<br>'+'NPV :'+'Rp'+' '+rupiah2+'<br>'+'IRR :'+data[i].irr+'<br>'+'PBP :'+pbp3+'</td>'+
                                '<td>'+'<a href="<?= base_url('rab/rab/file_rab/'); ?>'+data[i].id_utama+'" target="__blank">File RAB</a>'+'<br>'+'<a href="<?= base_url('rab/rab/file_kkp/'); ?>'+data[i].id_utama+'" target="__blank">File KKP</a>'+'</td>'+
                                '<td>'+data[i].nama_unit_layanan+'</td>'+
                                '<td>'+data[i].uraian_status+'</td>'+
                                '<td>'+'<a href="<?= base_url('monitoring/laporan/edit_laporan/'); ?>'+data[i].id_utama+'" class="btn btn-info btn-xs">Update</a>'+' '+'<a href="<?= base_url('monitoring/laporan/kirim/'); ?>'+data[i].id_utama+'" class="btn btn-info btn-xs">Kirim</a>'+' '+'<a href="<?= base_url('monitoring/laporan/hapus_laporan/'); ?>'+data[i].id_utama+'" class="btn btn-danger btn-xs">Hapus</a>'+
                                '</td>'+
                            '</tr>';
                          }else{
                            html += '<tr>'+
                              '<td>'+data[i].nama_unit+'</td>'+
                                '<td>'+data[i].nama_pekerjaan+'</td>'+
                                '<td>'+data[i].nama_program+'</td>'+
                                '<td>'+'Rp'+' '+rupiah2+'</td>'+
                                '<td>'+'SAIDI :'+data[i].saidi+'<br>'+'SAIFI :'+data[i].saifi+'<br>'+'ENS :'+data[i].ens+'<br>'+'LOSSES :'+data[i].losses+'</td>'+
                                '<td>'+'NPV :'+'Rp'+' '+rupiah+'<br>'+'IRR :'+data[i].irr+'<br>'+'PBP :'+data[i].payback+'</td>'+
                                '<td>'+'<a href="<?= base_url('rab/rab/file_rab/'); ?>'+data[i].id_utama+'" target="__blank">File RAB</a>'+'<br>'+'<a href="<?= base_url('rab/rab/file_kkp/'); ?>'+data[i].id_utama+'" target="__blank">File KKP</a>'+'</td>'+
                                '<td>'+data[i].nama_unit_layanan+'</td>'+
                                '<td>'+data[i].uraian_status+'</td>'+
                                '<td>'+'<a href="<?= base_url('monitoring/laporan/hapus_laporan/'); ?>'+data[i].id_utama+'" class="btn btn-danger btn-xs">Hapus</a>'+
                                '</td>'+
                            '</tr>';
                          }
                }
                $('#show_data').html(html);
            }

        });
    }

  });

</script>


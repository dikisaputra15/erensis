 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Item</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Item</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

<section class="content">

        <div class="row">
          <div class="col-12">
          
              <div class="card-header">
                <h3 class="card-title">Item</h3>
              </div>
              <!-- /.card-header -->
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Item</button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Uraian Item</th>
                    <th>Jenis</th>
                    <th>Satuan</th>
                    <th>Harga Satuan</th>
                    <th>Kategori</th>
                    <th>Jenis Pengadaan</th>
                    <th>Unit Induk</th>
                    <th>Unit</th>
                    <th>Sumber HS</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody id="show_data">
                 
                 </tbody>
                </table>
              <!-- /.card-body -->
      
      </div>
      </div>
      
  </section>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Tambah Item</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('item/item/tambahitem') ?>" method="POST">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Uraian Item" name="uraian_item" id="uraian_item" required>
                  </div>
                  <div class="form-group">
                    <label>Jenis</label>
                     <select class="form-control" name="jenis">
                      <?php foreach ($jenis as $dat) { ?>
                        <option value="<?= $dat['id_jenis']; ?>"><?= $dat['jenis']; ?></option>
                      <?php } ?>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Satuan</label>
                     <select class="form-control" name="satuan">
                      <?php foreach ($satuan as $dat) { ?>
                        <option value="<?= $dat['id_satuan']; ?>"><?= $dat['nama_satuan']; ?></option>
                      <?php } ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Harga Satuan" name="harga_satuan" id="harga_satuan" required>
                  </div>
                  <div class="form-group">
                    <label>Kategori</label>
                     <select class="form-control" name="kategori" id="kategori">
                      <option>-Kategori-</option>
                      <?php foreach ($viewkategori as $dat) { ?>
                         <option value="<?php echo $dat->id_kategori;?>"><?php echo $dat->kategori; ?></option>
                      <?php } ?>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Pilih Jenis Pekerjaan Item Yang Ditambahkan </label>
                     <select class="form-control" name="jenis_pekerjaan" id="jenis_pekerjaan">
                        <option>-select jenis pekerjaan-</option>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Pilih Subjenis Pekerjaan Item Yang Ditambahkan</label>
                     <select class="form-control" name="subjenis" id="subjenis">
                         <option>-Select Subjenis Pekerjaan-</option>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Jenis Pengadaan</label>
                     <select class="form-control" name="jenis_pengadaan" id="jenis_pengadaan">
                        <option>-jenis pengadaan-</option>
                      <?php foreach ($pengadaan as $row) { ?>
                        <option value="<?php echo $row['id_jenis_pengadaan'];?>"><?php echo $row['jenis_pengadaan']; ?></option>
                      <?php } ?>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Unit Induk</label>
                     <select class="form-control" name="unit_induk" id="unit_induk">
                        <option>-Select Unit Induk-</option>
                      <?php foreach ($unitinduk as $row) { ?>
                        <option value="<?php echo $row->id_unit_induk;?>"><?php echo $row->nama_unit_induk; ?></option>
                      <?php } ?>
                     </select>
                  </div>
                  
                 <div class="form-group">
                    <label>Unit Pelaksana</label>
                     <select class="form-control" name="unit" id="unit">
                         <option>-Select Unit Pelaksana-</option>
                     </select>
                  </div>

                  <div class="form-group">
                    <label>Sumber HS</label>
                     <select class="form-control" name="sumberhs">
                      <?php foreach ($sumberhs as $dat) { ?>
                        <option value="<?= $dat['id_sumber_hs']; ?>"><?= $dat['uraian_sumber_hs']; ?></option>
                      <?php } ?>
                     </select>
                  </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
               <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>

<script type="text/javascript" src="<?= base_url('assets/js/jquery3.js'); ?>"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#kategori').change(function(){
    var id_kategori = $('#kategori').val();
    if(id_kategori != '')
    {
     $.ajax({
      url:"<?php echo base_url(); ?>layanan/list_template/fetch_jp",
      method:"POST",
      data:{id_kategori:id_kategori},
      success:function(data)
      {
       $('#jenis_pekerjaan').html(data);
       $('#subjenis').html('<option value="">Select subjenis pekerjaan</option>');
       $('#item').html('<option value="">Select Item</option>');
      }
     });
    }
    else
    {
     $('#jenis_pekerjaan').html('<option value="">Select jenis pekerjaan</option>');
     $('#subjenis').html('<option value="">Select subjenis pekerjaan</option>');
     $('#item').html('<option value="">Select item</option>');
    }
   });

   $('#jenis_pekerjaan').change(function(){
    var id_jp = $('#jenis_pekerjaan').val();
    if(id_jp != '')
    {
     $.ajax({
      url:"<?php echo base_url(); ?>layanan/list_template/fetch_subjenis",
      method:"POST",
      data:{id_jp:id_jp},
      success:function(data)
      {
       $('#subjenis').html(data);
      }
     });
    }
    else
    {
     $('#subjenis').html('<option value="">Select Subjenis Pekerjaan</option>');
    }
   });
           
          });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
           $('#unit_induk').change(function(){
            var id_unit_induk = $('#unit_induk').val();
            if(id_unit_induk != '')
            {
             $.ajax({
              url:"<?php echo base_url(); ?>unit/layanan/fetch_unit",
              method:"POST",
              data:{id_unit_induk:id_unit_induk},
              success:function(data)
              {
               $('#unit').html(data);
               // $('#unit_layanan').html('<option value="">Select Unit Layanan</option>');
              }
             });
            }
            else
            {
             $('#unit').html('<option value="">Select Unit</option>');
             // $('#unit_layanan').html('<option value="">Select Unit Layanan</option>');
            }
           });
           
          });
    </script>

<script type="text/javascript">
  $(document).ready(function(){
    tampil_data_barang(); //pemanggilan fungsi tampil barang.
    
    $('#example1').dataTable();
     
    //fungsi tampil barang
    function tampil_data_barang(){
        $.ajax({
            type  : 'ajax',
            url   : '<?php echo base_url()?>item/item/view',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                              '<td>'+data[i].uraian_item+'</td>'+
                                '<td>'+data[i].jenis+'</td>'+
                                '<td>'+data[i].nama_satuan+'</td>'+
                                '<td>'+data[i].harga_satuan+'</td>'+
                                '<td>'+data[i].kategori+'</td>'+
                                '<td>'+data[i].jenis_pengadaan+'</td>'+
                                '<td>'+data[i].nama_unit_induk+'</td>'+
                                '<td>'+data[i].nama_unit+'</td>'+
                                '<td>'+data[i].uraian_sumber_hs+'</td>'+
                                '<td>'+
                                        '<a href="<?= base_url('item/item/edit_item/'); ?>'+data[i].id_item+'" class="btn btn-info btn-xs">Edit</a>'+' '+
                                        '<a href="<?= base_url('item/item/hapus_item/'); ?>'+data[i].id_item+'" class="btn btn-danger btn-xs">Hapus</a>'+
                                '</td>'+
                            '</tr>';
                }
                $('#show_data').html(html);
            }

        });
    }

  });

</script>
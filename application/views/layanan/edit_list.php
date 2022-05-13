<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>
 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit List template</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit List template</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit List template</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id list</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" id="id_list" name="id_list" value="<?= $list['id_list']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Uraian Template</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="uraian"><?= $list['uraian_template']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">satuan</label>
                    <select class="form-control" name="id_satuan">
                      <?php foreach ($satuan as $dat) : 

                      if ($list['id_satuan']==$dat['id_satuan']) {
                          $select="selected";
                        }else{
                          $select="";
                        }

                      ?>

                    <option <?= $select; ?> value="<?= $dat['id_satuan']; ?>"><?= $dat['nama_satuan']; ?></option>

                  <?php endforeach; ?>

                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">kategori</label>
                    <select class="form-control" name="id_kategori">
                      <?php foreach ($kategori as $dat) : 

                      if ($list['id_kategori']==$dat->id_kategori) {
                          $select="selected";
                        }else{
                          $select="";
                        }

                      ?>

                    <option <?= $select; ?> value="<?= $dat->id_kategori; ?>"><?= $dat->kategori; ?></option>

                  <?php endforeach; ?>

                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" name="update" class="btn btn-primary" value="Update">
                </div>
              </form>
</div>
</div>
</div>
</div>
</div>
</section>

 <div class="content-wrapper">
<section class="content">
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Item template</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Item template</button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Uraian Item</th>
                    <th>Jenis Item</th>
                    <th>Satuan Item</th>
                    <th>Harga Satuan Item</th>
                    <th>Kategori Item</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($listitem as $dat) : ?>

                    <tr>
                      <td><?= $dat['uraian_item']; ?></td>
                      <td><?= $dat['jenis']; ?></td>
                      <td><?= $dat['nama_satuan']; ?></td>
                      <td align="Right"><?= 'Rp. '.number_format($dat['harga_satuan_item'],2,',','.'); ?></td>
                      <td><?= $dat['kategori']; ?></td>
                      <td>
                        <a href="<?= base_url('layanan/list_template/hapus_listtemplate/') . $dat['id_item_template']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                            <a href="<?= base_url('layanan/list_template/edit_listtemplate/') . $dat['id_item_template']; ?>" class="btn btn-primary">Edit</a>
                      </td>
                    </tr>

                <?php endforeach; ?> 
                 </tbody>
                </table>
              </div>
              <!-- /.card-body -->
      </div>
      </div>
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
               <form action="<?= base_url('item/item/tambahitemtemplates') ?>" method="POST">

               <div class="form-group">
                    <label>Uraian Template</label><br>
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Uraian Template" name="id_list" value="<?= $list['id_list']; ?>" hidden>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly><?= $list['uraian_template']; ?></textarea>
                  </div>

                   <div class="form-group" hidden>
                    <label>Satuan Template</label>
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Satuan Template" name="satuan_template" id="satuan_template" value="<?= $list['id_satuan']; ?>">
                  </div>
                  
                  <div class="form-group">
                    <label>Pilih Kategori Item Yang Ditambahkan</label>
                     <select class="form-control" name="kategori" id="kategori">
                      <option value="">-Select Kategori-</option>
                      <?php
                      foreach($kategori as $row)
                      {
                       echo '<option value="'.$row->id_kategori.'">'.$row->kategori.'</option>';
                      }
                      ?>
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
                    <label>Pilih Item Yang Ditambahkan</label>
                     <select class="form-control" name="item" id="item">
                        <option value="">-Select item-</option>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Satuan Item</label>
                     <select class="form-control" name="satuan_item" id="satuan_item" readonly>
                        <option value=""></option>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Harga Satuan</label>
                     <select class="form-control" name="harga_satuan" id="harga_satuan" readonly>
                        <option value=""></option>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Jenis Item</label>
                     <select class="form-control" name="jenis_item" id="jenis_item" readonly>
                        <option value=""></option>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Jenis Pengadaan</label>
                     <select class="form-control" name="jenis_pengadaan" id="jenis_pengadaan" readonly>
                        <option value=""></option>
                     </select>
                  </div>

                  <div class="form-group">
                    <label>Unit Induk</label>
                     <select class="form-control" name="unit_induk" id="unit_induk" readonly>
                        <option value=""></option>
                     </select>
                  </div>
                  
                 <div class="form-group">
                    <label>Unit</label>
                     <select class="form-control" name="unit" id="unit" readonly>
                        <option value=""></option>
                     </select>
                  </div>

                  <div class="form-group">
                    <label>Sumber Referensi Harga Satuan</label>
                     <select class="form-control" name="sumber_hs" id="sumber_hs" readonly>
                        <option value=""></option>
                     </select>
                  </div>
                  <div class="form-group">
                    <TEXT>Item template tersebut di atas akan ditambahkan ke item RAB ketika USER membuat RAB dengan metode tambah item RAB by template dengan perhitungan volume itemnya tersebut adalah sbb : </TEXT><br></br>
                    
                    <label>Volume_Item_di_RAB = (koef_kali*vol_variabel_pengali) + 
                    round(vol_variable_bagi/koef_pembagi) +
                    (koef_tambah*berapa_dipilih_variable_penambah) - 
                    (koef_kurang*berapa_dipilih_variable_pengurang)</label>
                  </div>
                  <TEXT>Contoh : </TEXT><br></br>
                  <TEXT>Nilai Koefisien Kali = 10, Variabel Pengali = Volume Template</TEXT><br></br>
                  <TEXT>Nilai Koefisien Bagi = 0, Variabel Pembagi = Volume Template</TEXT><br></br>
                  <TEXT>Nilai Koefisien Tambah = 0, Variabel Penambah = Volume Template</TEXT><br></br>
                  <TEXT>Nilai Koefisien Kurang = 0, Variabel Pengurang = Volume Template</TEXT><br></br>
                  <TEXT>Dimisalkan User Mengisi Volume Template Saat Tambah Item RAB By Template = 100</TEXT><br></br>
                  <TEXT>Maka, Volume Item Yang ditambahkan Pada RAB = (koef_kali*vol_variabel_pengali) + 
                    round(vol_variable_bagi/koef_pembagi) +
                    (koef_tambah*berapa_dipilih_variable_penambah) - 
                    (koef_kurang*berapa_dipilih_variable_pengurang)</TEXT><br></br>
                    <TEXT>Volume Item = (10*100) + round(100/0) + (0*1) - (0*1)</TEXT><br></br>
                    <TEXT>Volume Item = 1000</TEXT><br></br>
                  <div class="form-group">
                    <label>Silakan Lengkapi Nilai Koefisien dan Variabel Tersebut Sesuai Item Yang Sudah Terpilih Diatas Pada Isian Dibawah Ini :</label>
                  </div>
                  <div class="form-group">
                    <label>Nilai Koefisien Kali</label>
                     <input class="form-control form-control-sm mb-3" type="number" placeholder="0" name="koef_item_kali" id="koef_item_kali">
                  </div>
                  <div class="form-group">
                     <label>Nilai Koefisien Bagi</label>
                     <input class="form-control form-control-sm mb-3" type="number" placeholder="0" name="koef_item_bagi" id="koef_item_bagi">
                  </div>
                  <div class="form-group">
                     <label>Nilai Koefisien Tambah</label>
                     <input class="form-control form-control-sm mb-3" type="number" placeholder="0" name="koef_item_tambah" id="koef_item_tambah">
                  </div>
                   <div class="form-group">
                     <label>Nilai Koefisien Kurang</label>
                     <input class="form-control form-control-sm mb-3" type="number" placeholder="0" name="koef_item_kurang" id="koef_item_kurang">
                  </div>
                  <div class="form-group">
                    <label>Variabel Pengali Untuk Koefisien Kali</label>
                     <select class="form-control" name="id_pengali" id="id_pengali">
                        <option value="0">Volume Template</option>
                      <?php foreach ($item_pengali as $row) { ?>
                        <option value="<?php echo $row['id_item']; ?>"><?php echo $row['uraian_item']; ?></option>
                      <?php } ?>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Variabel Pembagi Untuk Koefisien Bagi</label>
                     <select class="form-control" name="id_pembagi" id="id_pembagi">
                        <option value="0">Volume Template</option>
                      <?php foreach ($item_pengali as $row) { ?>
                        <option value="<?php echo $row['id_item']; ?>"><?php echo $row['uraian_item']; ?></option>
                      <?php } ?>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Variabel Penambah Untuk Koefisien Tambah</label>
                     <select class="form-control" name="id_penambah" id="id_penambah">
                        <option value="0">Volume Template</option>
                      <?php foreach ($item_pengali as $row) { ?>
                        <option value="<?php echo $row['id_item']; ?>"><?php echo $row['uraian_item']; ?></option>
                      <?php } ?>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Variabel Pengurang Untuk Koefisien Kurang</label>
                     <select class="form-control" name="id_pengurang" id="id_pengurang">
                        <option value="0">Volume Template</option>
                      <?php foreach ($item_pengali as $row) { ?>
                        <option value="<?php echo $row['id_item']; ?>"><?php echo $row['uraian_item']; ?></option>
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
  
<script>
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

   $('#subjenis').change(function(){
    var id_sub = $('#subjenis').val();
    if(id_sub != '')
    {
     $.ajax({
      url:"<?php echo base_url(); ?>layanan/list_template/fetch_item",
      method:"POST",
      data:{id_sub:id_sub},
      success:function(data)
      {
       $('#item').html(data);
      }
     });
    }
    else
    {
     $('#item').html('<option value="">Select Item</option>');
    }
   });

   $('#item').change(function(){
    var id_sat = $('#item').val();
    if(id_sat != '')
    {
     $.ajax({
      url:"<?php echo base_url(); ?>layanan/list_template/fetch_satuan",
      method:"POST",
      data:{id_sat:id_sat},
      success:function(data)
      {
       $('#satuan_item').html(data);
      }
     });
    }
    else
    {
     $('#satuan_item').html('');
    }
   });

   $('#item').change(function(){
    var id_hs = $('#item').val();
    if(id_hs != '')
    {
     $.ajax({
      url:"<?php echo base_url(); ?>layanan/list_template/fetch_hs",
      method:"POST",
      data:{id_hs:id_hs},
      success:function(data)
      {
       $('#harga_satuan').html(data);
      }
     });
    }
    else
    {
     $('#harga_satuan').html('');
    }
   });

   $('#item').change(function(){
    var jenis_item = $('#item').val();
    if(jenis_item != '')
    {
     $.ajax({
      url:"<?php echo base_url(); ?>layanan/list_template/fetch_jenisitem",
      method:"POST",
      data:{jenis_item:jenis_item},
      success:function(data)
      {
       $('#jenis_item').html(data);
      }
     });
    }
    else
    {
     $('#jenis_item').html('');
    }
   });

   $('#item').change(function(){
    var jenis_pengadaan = $('#item').val();
    if(jenis_pengadaan != '')
    {
     $.ajax({
      url:"<?php echo base_url(); ?>layanan/list_template/fetch_jenispengadaan",
      method:"POST",
      data:{jenis_pengadaan:jenis_pengadaan},
      success:function(data)
      {
       $('#jenis_pengadaan').html(data);
      }
     });
    }
    else
    {
     $('#jenis_pengadaan').html('');
    }
   });

   $('#item').change(function(){
    var unit_induk = $('#item').val();
    if(unit_induk != '')
    {
     $.ajax({
      url:"<?php echo base_url(); ?>layanan/list_template/fetch_unitinduk",
      method:"POST",
      data:{unit_induk:unit_induk},
      success:function(data)
      {
       $('#unit_induk').html(data);
      }
     });
    }
    else
    {
     $('#unit_induk').html('');
    }
   });

   $('#item').change(function(){
    var unit = $('#item').val();
    if(unit != '')
    {
     $.ajax({
      url:"<?php echo base_url(); ?>layanan/list_template/fetch_unit",
      method:"POST",
      data:{unit:unit},
      success:function(data)
      {
       $('#unit').html(data);
      }
     });
    }
    else
    {
     $('#unit').html('');
    }
   });

   $('#item').change(function(){
    var sumber_hs = $('#item').val();
    if(sumber_hs != '')
    {
     $.ajax({
      url:"<?php echo base_url(); ?>layanan/list_template/fetch_sumberhs",
      method:"POST",
      data:{sumber_hs:sumber_hs},
      success:function(data)
      {
       $('#sumber_hs').html(data);
      }
     });
    }
    else
    {
     $('#sumber_hs').html('');
    }
   });
   
  });
</script>


<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>
 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Rencana Anggaran Biaya</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Rencana Anggaran Biaya</li>
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
                <h3 class="card-title">Rencana Anggaran Biaya</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id utama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" id="id_utama" name="id_utama" value="<?= $utama['id_utama']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pekerjaan</label>
                     <input type="text" class="form-control" id="exampleInputEmail1" id="nama_pekerjaan" name="nama_pekerjaan" value="<?= $utama['nama_pekerjaan']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Program Kerja</label>
                     <input type="text" class="form-control" id="exampleInputEmail1" id="nama_program" name="nama_program" value="<?= $utama['nama_program']; ?>" readonly>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
</div>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Item RAB Melalui Template</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal2">Tambah Item RAB Melalui Template</button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Uraian Template</th>
                    <th>Volume Rencana</th>
                    <th>Volume Realisasi</th>
                    <th>Satuan Template</th>
                    <th>Kategori</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $dat['id_utama']=0; foreach ($templaterab as $dat) : ?>

                    <tr>
                      <td><?= $dat['uraian_template']; ?></td>
                      <td align="right"><?= number_format($dat['volume_template'],2,',','.'); ?></td>
                      <td align="right"><?= number_format($dat['volume_realisasi'],2,',','.'); ?></td>
                      <td><?= $dat['nama_satuan']; ?></td>
                      <td><?= $dat['kategori']; ?></td>
                      <td>
                        <a href="<?= base_url('rab/rab/hapus_template_rab/') . $dat['id_template_rab']; ?>" class="btn btn-danger btn-xs tombol-hapus">Hapus</a>
                            <a href="<?= base_url('rab/rab/edit_template_rab/') . $dat['id_template_rab']; ?>" class="btn btn-info btn-xs">Edit</a>
                      </td>
                    </tr>

                <?php endforeach; ?> 
                 </tbody>
                </table><br>
                <?php 
              if ($dat['id_utama']!=0) { ?>
                <center><a href="<?= base_url('rab/pdf_kkp/c_templaterab/') .$dat['id_utama']; ?>" class="btn btn-primary" target="_blank">Cetak</a></center>
                <?php } ?>
              </div>
              <!-- /.card-body -->
      </div>
      </div>
      </div>
      </div>
  </section>

<section class="content">
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Item RAB Secara Satuan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Item RAB Secara Satuan</button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Uraian Item</th>
                    <th>Jenis Item</th>
                    <th>Volume Rencana</th>
                    <th>Volume Realisasi</th>
                    <th>Satuan Item</th>
                    <th>Harga Satuan Item</th>
                    <th>Kategori Item</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 


                  $dat['id_utama']=0; 

                  $nomor_jenis = 0;
                  $nomor_kategori = 0;
                  $nomor_jenis_pekerjaan = 0;
                  $nomor_subjenis_pekerjaan = 0;

                  $nilai_jenis = "";
                  $nilai_kategori = "";
                  $nilai_jenis_pekerjaan = "";
                  $nilai_subjenis_pekerjaan = "";

                  $total_uid = 0;
                  $total_unit = 0;
                  $total_errect = 0;
                  $total_jasa = 0;

                  foreach ($rab as $dat) : 
                    $jenis1 = $dat['jenis'];
                    $kategori1 = $dat['kategori'];

                    if($nilai_jenis!=$jenis1){
                      $nilai_jenis = $jenis1;
                      $nomor_jenis++; 
                      $nomor_kategori = 0;
                    ?>
                    <tr>
                      <th style="text-align: left;" colspan="8" bgcolor="#e1e4dd"><?php echo $jenis1; ?></th>
                    </tr>
                    <?php }?>

                    <?php 

                    if($nilai_kategori!=$kategori1){
                      $nilai_kategori = $kategori1;
                      $nomor_kategori++; 
                    ?>
                    <tr>
                      <th style="text-align: left;" colspan="8" bgcolor="#e1e4ee"><?php echo $nomor_kategori.'. '.$kategori1; ?></th>
                    </tr>
                    <?php }

                    ?>

                    <tr>
                      <td><?= $dat['uraian_item']; ?></td>
                      <td><?= $dat['jenis']; ?></td>
                      <td align="right"><?= number_format($dat['volume_item'],2,',','.'); ?></td>
                      <td align="right"><?= number_format($dat['volume_item_terealisasi'],2,',','.'); ?></td>
                      <td><?= $dat['nama_satuan']; ?></td>
                      <td align="right"><?= 'Rp. '.number_format($dat['harga_satuan_item'],2,',','.'); ?></td>
                      <td><?= $dat['kategori']; ?></td>
                      <td>
                        <a href="<?= base_url('rab/rab/hapus_rab/') . $dat['id_rab']; ?>" class="btn btn-danger btn-xs tombol-hapus">Hapus</a>
                            <a href="<?= base_url('rab/rab/edit_rab/') . $dat['id_rab']; ?>" class="btn btn-info btn-xs">Edit</a>
                      </td>
                    </tr>

                <?php endforeach; ?> 
                 </tbody>
                </table>
              </div>
              
              <?php 
              if ($dat['id_utama']!=0) { ?>
                <center><a href="<?= base_url('rab/rab/pracetak/') . $dat['id_utama'].'/'.'Rencana'; ?>" class="btn btn-primary">Cetak Rencana</a>
                <a href="<?= base_url('rab/rab/pracetak/') . $dat['id_utama'].'/'.'Realisasi'; ?>" class="btn btn-primary">Cetak Realisasi</a>
                <a href="<?= base_url('rab/rab/pracetak/') . $dat['id_utama'].'/'.'Amandemen'; ?>" class="btn btn-primary">Cetak Amandemen</a></center>
              <?php } ?>
      </div>
      </div>
      </div>
      </div>
  </section>

</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Tambah Template</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('rab/rab/tambahtemplaterab') ?>" method="POST">

                  <div class="form-group" hidden>
                    <label>Id Utama</label><br>
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Id Utama" name="id_utama" value="<?= $utama['id_utama']; ?>">
                  </div>

                  <div class="form-group">
                    <label>Pilih Kategori Template</label>
                     <select class="form-control" name="kategori2" id="kategori2">
                      <option value="">-Pilih Kategori-</option>
                      <?php
                      foreach($kategori as $row)
                      {
                       echo '<option value="'.$row->id_kategori.'">'.$row->kategori.'</option>';
                      }
                      ?>
                     </select>
                  </div>

                  <div class="form-group">
                    <label>Pilih Template </label>
                     <select class="form-control" name="template" id="template">
                        <option>-Pilih Template-</option>
                     
                     </select>
                  </div>

                  <div class="form-group">
                    <label>Volume Template</label><br>
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Volume Template" name="volume_template">
                  </div>

                   <div class="form-group">
                    <label>Volume Realisasi</label><br>
                     <input class="form-control form-control-sm mb-3" type="text" value="0" name="volume_realisasi" readonly>
                  </div>
                  
                  <div class="form-group">
                    <label>Satuan Template</label>
                     <select class="form-control" name="satuan_item2" id="satuan_item2" readonly>
                        <option value=""></option>
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
               <form action="<?= base_url('rab/rab/tambahrab') ?>" method="POST">

                  <div class="form-group" hidden>
                    <label>Id Utama</label><br>
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Id Utama" name="id_utama" value="<?= $utama['id_utama']; ?>">
                  </div>

                   <div class="form-group">
                    <label>Nomor RAB</label><br>
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nomor RAB" name="nomor_rab">
                  </div>

                  <div class="form-group">
                    <label>Volume Item</label><br>
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Volume Item" name="volume_item">
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
   $('#kategori2').change(function(){
    var id_kategori2 = $('#kategori2').val();
    if(id_kategori2 != '')
    {
     $.ajax({
      url:"<?php echo base_url(); ?>layanan/list_template/fetch_template",
      method:"POST",
      data:{id_kategori2:id_kategori2},
      success:function(data)
      {
       $('#template').html(data);
       $('#satuan_item2').html('<option value=""></option>');
      }
     });
    }
    else
    {
     $('#template').html('<option value="">Pilih Template</option>');
     $('#satuan_item2').html('<option value=""></option>');
    }
   });

   $('#template').change(function(){
    var id_satuan2 = $('#template').val();
    if(id_satuan2 != '')
    {
     $.ajax({
      url:"<?php echo base_url(); ?>layanan/list_template/fetch_satuan2",
      method:"POST",
      data:{id_satuan2:id_satuan2},
      success:function(data)
      {
       $('#satuan_item2').html(data);
      }
     });
    }
    else
    {
     $('#satuan_item2').html('');
    }
   });
 });
</script>
  
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


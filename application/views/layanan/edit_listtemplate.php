 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Item template</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Item template</li>
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
                <h3 class="card-title">Edit Item template</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id item template</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" id="id_item_template" name="id_item_template" value="<?= $listtemplate['id_item_template']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nilai Koefisien Kali</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" id="koefisien_item_kali" name="koefisien_item_kali" value="<?= $listtemplate['koefisien_item_kali']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nilai Koefisien bagi</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" id="koefisien_item_bagi" name="koefisien_item_bagi" value="<?= $listtemplate['koefisien_item_bagi']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nilai Koefisien Tambah</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" id="koefisien_item_tambah" name="koefisien_item_tambah" value="<?= $listtemplate['koefisien_item_tambah']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nilai Koefisien Kurang</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" id="koefisien_item_kurang" name="koefisien_item_kurang" value="<?= $listtemplate['koefisien_item_kurang']; ?>">
                  </div>

                  <div class="form-group">
                    <label>Variabel Pengali Untuk Koefisien Kali</label>
                   <select class="form-control" name="id_pengali" id="id_pengali">
                      <option value="0">Volume Template</option>
                      <?php foreach ($item_pengali as $row) {

                          $id_item = $row['id_item'];

                          if ($listtemplate['item_pengali']==$id_item) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row['id_item']; ?>"><?php echo $row['uraian_item']; ?></option>
                       
                      <?php } ?>

                      </select> 

                  </div>
                  <div class="form-group">
                    <label>Variabel Pembagi Untuk Koefisien Bagi</label>
                     <select class="form-control" name="id_pembagi" id="id_pembagi">
                         <option value="0">Volume Template</option>
                      <?php foreach ($item_pengali as $row) {

                          $id_item = $row['id_item'];

                          if ($listtemplate['item_pembagi']==$id_item) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row['id_item']; ?>"><?php echo $row['uraian_item']; ?></option>
                       
                      <?php } ?>

                     </select>
                  </div>
                  <div class="form-group">
                    <label>Variabel Penambah Untuk Koefisien Tambah</label>
                     <select class="form-control" name="id_penambah" id="id_penambah">
                         <option value="0">Volume Template</option>
                      <?php foreach ($item_pengali as $row) {

                          $id_item = $row['id_item'];

                          if ($listtemplate['item_penambah']==$id_item) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row['id_item']; ?>"><?php echo $row['uraian_item']; ?></option>
                       
                      <?php } ?>

                     </select>
                  </div>
                  <div class="form-group">
                    <label>Variabel Pengurang Untuk Koefisien Kurang</label>
                     <select class="form-control" name="id_pengurang" id="id_pengurang">
                         <option value="0">Volume Template</option>
                      <?php foreach ($item_pengali as $row) {

                          $id_item = $row['id_item'];

                          if ($listtemplate['item_pengurang']==$id_item) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row['id_item']; ?>"><?php echo $row['uraian_item']; ?></option>
                       
                      <?php } ?>

                     </select>
                  </div>

                  <div class="form-group">
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
</div>

<!-- <script type="text/javascript" src="<?= base_url('assets/js/jquery3.js'); ?>"></script>
  
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
</script> -->


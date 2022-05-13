 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Edit Item</h1>
          </div><!-- /.col -->
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Item</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Item</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id item</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="id_item" value="<?= $item['id_item']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">uraian item</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="uraian_item" value="<?= $item['uraian_item']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">jenis</label>
                    <select class="form-control" name="jenis" id="jenis">

                       <?php foreach ($jenis as $row) : 

                          $id_jenis = $row['id_jenis'];

                          if ($item['jenis']==$id_jenis) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row['id_jenis'];?>"><?php echo $row['jenis']; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">satuan</label>
                    <select class="form-control" name="satuan" id="satuan">

                       <?php foreach ($satuan as $row) : 

                          $id_satuan = $row['id_satuan'];

                          if ($item['satuan']==$id_satuan) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row['id_satuan'];?>"><?php echo $row['nama_satuan']; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">harga satuan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="harga_satuan" value="<?= $item['harga_satuan']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">kategori</label>
                    <select class="form-control" name="kategori" id="kategori">

                       <?php foreach ($kategori as $row) : 

                          $id_kategori = $row->id_kategori;

                          if ($subjenis['id_kategori']==$id_kategori) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_kategori;?>"><?php echo $row->kategori; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Pekerjaan</label>
                     <select class="form-control" name="jenis_pekerjaan" id="jenis_pekerjaan">
                     
                      <?php foreach ($jp as $dat) : 

                          if ($subjenis['id_jp']==$dat['id_jp']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_jp']; ?>"><?= $dat['nama']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Subjenis Pekerjaan</label>
                     <select class="form-control" name="subjenis" id="subjenis">
                     
                      <?php foreach ($subjenis as $dat) : 

                          if ($item['subjenis_pekerjaan']==$dat['id_subjenis_pekerjaan']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_subjenis_pekerjaan']; ?>"><?= $dat['subjenis_pekerjaan']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">jenis pengadaan</label>
                    <select class="form-control" name="jenis_pengadaan" id="jenis_pengadaan">

                       <?php foreach ($pengadaan as $row) : 

                          $id_jenis_pengadaan = $row['jenis_pengadaan'];

                          if ($item['jenis_pengadaan']==$id_jenis_pengadaan) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row['id_jenis_pengadaan'];?>"><?php echo $row['jenis_pengadaan']; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Unit Induk</label>
                    <select class="form-control" name="unit_induk" id="unit_induk">

                       <?php foreach ($unitinduk as $row) : 

                          $id_unit_induk = $row->id_unit_induk;

                          if ($item['id_unit_induk']==$id_unit_induk) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_unit_induk;?>"><?php echo $row->nama_unit_induk; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Unit</label>
                    <select class="form-control" name="unit" id="unit">

                       <?php foreach ($unit as $row) : 

                          $id_unit = $row['id_unit'];

                          if ($item['id_unit']==$id_unit) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row['id_unit'];?>"><?php echo $row['nama_unit']; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">sumber HS</label>
                    <select class="form-control" name="sumber_hs" id="sumber_hs">

                       <?php foreach ($sumberhs as $row) : 

                          $id_sumber_hs = $row['id_sumber_hs'];

                          if ($item['sumber_hs']==$id_sumber_hs) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row['id_sumber_hs'];?>"><?php echo $row['uraian_sumber_hs']; ?></option>

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

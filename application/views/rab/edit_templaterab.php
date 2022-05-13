 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Template RAB</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Template RAB</li>
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
                <h3 class="card-title">Edit Template RAB</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id Template rab</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="id_template_rab" value="<?= $templaterab['id_template_rab']; ?>">
                  </div>

                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id list</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="id_list" value="<?= $templaterab['id_list_template']; ?>">
                  </div>

                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id utama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="id_utama" value="<?= $templaterab['id_utama']; ?>">
                  </div>


                  <div class="form-group">
                    <label>Pilih Kategori Template</label>
                     <select class="form-control" name="kategori2" id="kategori2">
                      <?php foreach ($kategori as $row) : 

                          $id_kategori = $row->id_kategori;

                          if ($templaterab['id_kategori']==$id_kategori) {
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
                    <label>Pilih Template </label>
                     <select class="form-control" name="template" id="template">
                        <?php foreach ($list as $dat) : 

                          if ($templaterab['id_list_template']==$dat['id_list']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_list']; ?>"><?= $dat['uraian_template']; ?></option>

                      <?php endforeach; ?>
                     </select>
                  </div>

                  <div class="form-group">
                    <label>Volume Template</label><br>
                     <input class="form-control form-control-sm mb-3" type="text" value="<?= $templaterab['volume_template']; ?>" name="volume_template">
                  </div>

                   <div class="form-group">
                    <label>Volume Realisasi</label><br>
                     <input class="form-control form-control-sm mb-3" type="text" value="<?= $templaterab['volume_realisasi']; ?>" name="volume_realisasi">
                  </div>
                  
                  <div class="form-group">
                    <label>Satuan Template</label>
                     <select class="form-control" name="satuan_item2" id="satuan_item2" readonly>
                        <?php foreach ($satuan as $dat) : 

                          if ($templaterab['id_satuan']==$dat['id_satuan']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_satuan']; ?>"><?= $dat['nama_satuan']; ?></option>

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

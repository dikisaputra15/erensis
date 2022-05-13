 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Gardu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Gardu</li>
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
                <h3 class="card-title">Edit Gardu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">

                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id gardu</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="id_gardu" value="<?= $gardu['id_gardu']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Trafo GI</label>
                    <select class="form-control" name="id_trafo_gi" id="id_trafo_gi">

                       <?php foreach ($trafo as $row) : 

                          $id_trafo_gi = $row->id_trafo_gi;

                          if ($gardu['id_trafo_gi']==$id_trafo_gi) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_trafo_gi;?>"><?php echo $row->nama_trafo_gi; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Penyulang</label>
                     <select class="form-control" name="id_penyulang" id="id_penyulang">
                     
                      <?php foreach ($penyulang as $dat) : 

                          if ($gardu['id_penyulang']==$dat['id_penyulang']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_penyulang']; ?>"><?= $dat['nama_penyulang']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Gardu</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="nama_gardu" value="<?= $gardu['nama_gardu']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Kapasitas</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="kapasitas" value="<?= $gardu['kapasitas']; ?>">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Beban</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="beban" value="<?= $gardu['beban']; ?>">
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
           $('#id_trafo_gi').change(function(){
            var id_trafo_gi = $('#id_trafo_gi').val();
            if(id_trafo_gi != '')
            {
             $.ajax({
              url:"<?php echo base_url(); ?>trafo/trafo/ajax_trafo",
              method:"POST",
              data:{id_trafo_gi:id_trafo_gi},
              success:function(data)
              {
               $('#id_penyulang').html(data);
               // $('#unit_layanan').html('<option value="">Select Unit Layanan</option>');
              }
             });
            }
            else
            {
             $('#id_penyulang').html('<option value="">-Select penyulang-</option>');
             // $('#unit_layanan').html('<option value="">Select Unit Layanan</option>');
            }
           });
           
          });
    </script>

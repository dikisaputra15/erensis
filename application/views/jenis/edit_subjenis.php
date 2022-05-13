 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Subjenis</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Subjenis</li>
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
                <h3 class="card-title">Edit Subjenis</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id subjenis pekerjaan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="id_subjenis_pekerjaan" value="<?= $subjenis['id_subjenis_pekerjaan']; ?>">
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
                     <select class="form-control" name="jp" id="jp">
                     
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
                    <input type="text" class="form-control" id="exampleInputPassword1" name="subjenis_pekerjaan" value="<?= $subjenis['subjenis_pekerjaan']; ?>">
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
            var kategori = $('#kategori').val();
            if(kategori != '')
            {
             $.ajax({
              url:"<?php echo base_url(); ?>jenis/subjenis/fetch_jp",
              method:"POST",
              data:{kategori:kategori},
              success:function(data)
              {
               $('#jp').html(data);
               // $('#unit_layanan').html('<option value="">Select Unit Layanan</option>');
              }
             });
            }
            else
            {
             $('#jp').html('<option value="">Select Jenis Pekerjaan</option>');
             // $('#unit_layanan').html('<option value="">Select Unit Layanan</option>');
            }
           });
           
          });
    </script>

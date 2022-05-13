 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Penyulang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Penyulang</li>
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
                <h3 class="card-title">Edit Penyulang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id penyulang</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="id_penyulang" value="<?= $penyulang['id_penyulang']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Penyulang</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="nama_penyulang" value="<?= $penyulang['nama_penyulang']; ?>">
                  </div>
                
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Trafo GI</label>
                    <select class="form-control" name="id_trafo_gi">
                      <?php foreach ($trafo as $dat) : 

                      if ($penyulang['id_trafo_gi']==$dat['id_trafo_gi']) {
                        $select="selected";
                      }else{
                        $select="";
                      }

                         ?>

                    <option <?= $select; ?> value="<?= $dat['id_trafo_gi']; ?>"><?= $dat['nama_trafo_gi']; ?></option>

                  <?php endforeach; ?>

                    </select>
                  </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Kapasitas</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="kapasitas" value="<?= $penyulang['kapasitas']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Beban</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="beban" value="<?= $penyulang['beban']; ?>">
                  </div>
                  </div>
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

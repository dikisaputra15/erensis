 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit RAB</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit RAB</li>
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
                <h3 class="card-title">Edit RAB</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id rab</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="id_rab" value="<?= $rab['id_rab']; ?>">
                  </div>
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id utama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="id_utama" value="<?= $rab['id_utama']; ?>">
                  </div>
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">harga satuan item</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="harga_satuan" value="<?= $rab['harga_satuan_item']; ?>">
                  </div>

                  <div class="form-group" hidden>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="volume_awal" value="<?= $rab['volume_item']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Volume Item Satuan</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="volume_item_sat" value="<?= $rab['volume_item_sat']; ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Volume Item Template</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="volume_item_temp" value="<?= $rab['volume_item_temp']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Volume Item</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="volume_item" value="<?= $rab['volume_item']; ?>" readonly>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Volume Real Satuan</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="volume_real_sat" value="<?= $rab['volume_realisasi_sat']; ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Volume Real Template</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="volume_real_temp" value="<?= $rab['volume_realisasi_temp']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Volume Terealisasi</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="volume_terealisasi" value="<?= $rab['volume_item_terealisasi']; ?>" readonly>
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

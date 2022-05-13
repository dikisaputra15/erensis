 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Penyambungan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Penyambungan</li>
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
                <h3 class="card-title">Edit Penyambungan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id penyambungan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="id_bp" value="<?= $penyambungan['id_bp']; ?>">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Daya Bawah</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="daya_bawah" value="<?= $penyambungan['daya_bawah']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Daya Atas</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="daya_atas" value="<?= $penyambungan['daya_atas']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Rp Per VA</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="rp_perva" value="<?= $penyambungan['rp_perva']; ?>">
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

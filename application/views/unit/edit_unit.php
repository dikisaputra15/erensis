 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Unit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Unit</li>
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
                <h3 class="card-title">Edit Unit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id unit</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="id_unit" value="<?= $unit['id_unit']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Penyulang</label>
                    <select class="form-control" name="unit_induk">
                      <?php foreach ($unitinduk as $dat) : 

                          if ($unit['unit_induk']==$dat['id_unit_induk']) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                        <option <?= $select; ?> value="<?= $dat['id_unit_induk']; ?>"><?= $dat['nama_unit_induk']; ?></option>

                      <?php endforeach; ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Unit</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="nama_unit" value="<?= $unit['nama_unit']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">BPP Unit</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="bpp_unit" value="<?= $unit['bpp_unit']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">BPP Marginal Cost TMTR</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="bpp_mc_tmtr" value="<?= $unit['bpp_mc_tmtr']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">BPP Marginal Cost TT</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="bpp_mc_tt" value="<?= $unit['bpp_mc_tt']; ?>">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">BPP Subsystem TMTR</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="bpp_ss_tmtr" value="<?= $unit['bpp_ss_tmtr']; ?>">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">BPP Subsystem TT</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="bpp_ss_tt" value="<?= $unit['bpp_ss_tt']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Biaya OM</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="biaya_om" value="<?= $unit['biaya_om']; ?>">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">ROE</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="roe" value="<?= $unit['roe']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Interest Rate</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="interest_rate" value="<?= $unit['interest_rate']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Rata - Rata Harga Jual</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="rata_jual" value="<?= $unit['rata_jual']; ?>">
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

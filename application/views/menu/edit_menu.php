 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Menu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Menu</li>
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
                <h3 class="card-title">Edit Menu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id Menu</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="id_menu" value="<?= $menu['id_menu']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tittle</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="tittle" value="<?= $menu['tittle']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Url</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="url" value="<?= $menu['url']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Icon</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="icon" value="<?= $menu['icon']; ?>">
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

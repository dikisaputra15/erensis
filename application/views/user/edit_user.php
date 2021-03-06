 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit User</li>
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
                <h3 class="card-title">Edit User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id user</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="id_user" value="<?= $user['id_user']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="nama" value="<?= $user['nama']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIP</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="nip" value="<?= $user['nip']; ?>">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?= $user['password']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Role</label>
                    <select class="form-control" name="id_role">
                    	<?php foreach ($role as $dat) : 

    				        	if ($user['role']==$dat['id_role']) {
          								$select="selected";
          							}else{
          								$select="";
          							}

          				     ?>

				          	<option <?= $select; ?> value="<?= $dat['id_role']; ?>"><?= $dat['role']; ?></option>

				          <?php endforeach; ?>

                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Unit Induk</label>
                    <select class="form-control" name="unit_induk" id="unit_induk">

                       <?php foreach ($unitinduk as $row) : 

                          $id_unit_induk = $row->id_unit_induk;

                          if ($user['unit_induk']==$id_unit_induk) {
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
                    <label for="exampleInputPassword1">Unit Pelaksana</label>
                     <select class="form-control" name="unit" id="unit">
                     
                      <?php foreach ($unit as $dat) : 

                          if ($unitlayanan['unit']==$dat['id_unit']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_unit']; ?>"><?= $dat['nama_unit']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Unit Layanan</label>
                     <select class="form-control" name="unit_layanan" id="unit_layanan">
                     
                      <?php foreach ($unitlayanan as $dat) : 

                          if ($user['unit']==$dat['id_unit_layanan']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_unit_layanan']; ?>"><?= $dat['nama_unit_layanan']; ?></option>

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
         $('#unit_layanan').html('<option value="">Select Unit Layanan</option>');
        }
       });
      }
      else
      {
       $('#unit').html('<option value="">Select Unit</option>');
       $('#unit_layanan').html('<option value="">Select Unit Layanan</option>');
      }
     });

     $('#unit').change(function(){
      var id_unit = $('#unit').val();
      if(id_unit != '')
      {
       $.ajax({
        url:"<?php echo base_url(); ?>unit/layanan/fetch_layanan",
        method:"POST",
        data:{id_unit:id_unit},
        success:function(data)
        {
         $('#unit_layanan').html(data);
        }
       });
      }
      else
      {
       $('#unit_layanan').html('<option value="">Select Unit Layanan</option>');
      }
     });
     
    });       
</script>
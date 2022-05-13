 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">user</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah User</button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Unit Induk</th>
                    <th>Unit</th>
                    <th>Unit Layanan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($user as $dat) : ?>

	                  <tr>
	                    <td><?= $dat['nama']; ?></td>
	                    <td><?= $dat['nip']; ?></td>
	                    <td><?= $dat['password']; ?></td>
	                    <td><?= $dat['role']; ?></td>
                      <td><?= $dat['nama_unit_induk']; ?></td>
                      <td><?= $dat['nama_unit']; ?></td>
	                    <td><?= $dat['nama_unit_layanan']; ?></td>
	                    <td>
	                    	<a href="<?= base_url('user/user/hapus_user/') . $dat['id_user']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                            <a href="<?= base_url('user/user/edit_user/') . $dat['id_user']; ?>" class="btn btn-primary">Edit</a>
	                    </td>
	                  </tr>

	              <?php endforeach; ?> 
                 </tbody>
                </table>
              </div>
              <!-- /.card-body -->
      </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('user/user/tambahuser') ?>" method="POST">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nama" name="nama" id="nama" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="NIP" name="nip" id="nip" required>
                  </div> 
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="password" placeholder="Password" name="password" id="password" required>
                  </div>
                  <div class="form-group">
                  	<label>Role</label>
                     <select class="form-control" name="id_role">
                     	<?php foreach ($role as $dat) { ?>
                     		<option value="<?= $dat['id_role']; ?>"><?= $dat['role']; ?></option>
                     	<?php } ?>
                     </select>
                  </div>
                   <div class="form-group">
                    <label>Unit Induk</label>
                     <select class="form-control" name="unit_induk" id="unit_induk">
                        <option>-Select Unit Induk-</option>
                      <?php foreach ($unitinduk as $row) { ?>
                        <option value="<?php echo $row->id_unit_induk;?>"><?php echo $row->nama_unit_induk; ?></option>
                      <?php } ?>
                     </select>
                  </div>
                 <div class="form-group">
                    <label>Unit Pelaksana</label>
                     <select class="form-control" name="unit" id="unit">
                         <option>-Select Unit Pelaksana-</option>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Unit Layanan</label>
                     <select class="form-control" name="unit_layanan" id="unit_layanan">
                        <option>-Select Unit Layanan-</option>
                     </select>
                  </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
               <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>

<script type="text/javascript" src="<?= base_url('assets/js/jquery3.js'); ?>"></script>
<script>
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

<script type="text/javascript" src="<?php echo base_url('datatables/jquery.min.js') ?>"></script>
<script type="text/javascript">
  $(document).ready(function(){
      $('#example1').dataTable();
    });
</script>
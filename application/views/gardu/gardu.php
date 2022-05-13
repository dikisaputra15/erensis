 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Gardu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">gardu</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Gardu</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Gardu</button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>

                    <th>Nama Trafo GI</th>
                    <th>Nama Penyulang</th>
                    <th>Nama Gardu Distribusi</th>
                    <th>Kapasitas</th>
                    <th>Beban</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($gardu as $dat) : ?>

	                  <tr>
                      <td><?= $dat['nama_trafo_gi']; ?></td>
                      <td><?= $dat['nama_penyulang']; ?></td>
                      <td><?= $dat['nama_gardu']; ?></td>
                      <td><?= $dat['kapasitas']; ?></td>
	                    <td><?= $dat['beban']; ?></td>
	                    <td>
	                    	<a href="<?= base_url('gardu/gardu/hapus_gardu/') . $dat['id_gardu']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                            <a href="<?= base_url('gardu/gardu/edit_gardu/') . $dat['id_gardu']; ?>" class="btn btn-primary">Edit</a>
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
               <h5 class="modal-title" id="exampleModalLabel">Tambah Segmen</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('gardu/gardu/tambahgardu') ?>" method="POST">
                  <div class="form-group">
                  	<label>Nama Trafo</label>
                     <select class="form-control" name="id_trafo_gi" id="id_trafo_gi">
                     	<option>-Select Trafo-</option>
                      <?php foreach ($trafo as $row) { ?>
                        <option value="<?php echo $row->id_trafo_gi;?>"><?php echo $row->nama_trafo_gi; ?></option>
                      <?php } ?>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Nama Penyulang</label>
                     <select class="form-control" name="id_penyulang" id="id_penyulang">
                       <option>-Select Penyulang-</option>
                     </select>
                  </div>
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nama Gardu Distribusi" name="nama_gardu" id="nama_gardu" required>
                  </div>
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Kapasitas" name="kapasitas" id="kapasitas" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Beban" name="beban" id="beban" required>
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

<script type="text/javascript">
  $(document).ready(function(){
      $('#example1').dataTable();
    });
</script>


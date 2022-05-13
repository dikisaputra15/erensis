 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Penyambungan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">penyambungan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Penyambungan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Penyambungan</button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Daya Bawah</th>
                    <th>Daya Atas</th>
                    <th>Rp per VA</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($penyambungan as $dat) : ?>

	                  <tr>
                      <td><?= $dat['daya_bawah']; ?></td>
                      <td><?= $dat['daya_atas']; ?></td>
	                    <td><?= $dat['rp_perva']; ?></td>
	                    <td>
	                    	<a href="<?= base_url('penyambungan/penyambungan/hapus_penyambungan/') . $dat['id_bp']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                            <a href="<?= base_url('penyambungan/penyambungan/edit_penyambungan/') . $dat['id_bp']; ?>" class="btn btn-primary">Edit</a>
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
               <h5 class="modal-title" id="exampleModalLabel">Tambah penyambungan</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('penyambungan/penyambungan/tambahpenyambungan') ?>" method="POST">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Daya Bawah" name="daya_bawah" id="daya_bawah" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Daya Atas" name="daya_atas" id="daya_atas" required>
                  </div>
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Rupiah Per VA" name="rp_perva" id="rp_perva" required>
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

<script type="text/javascript" src="<?php echo base_url('datatables/jquery.min.js') ?>"></script>
<script type="text/javascript">
  $(document).ready(function(){
      $('#example1').dataTable();
    });
</script>
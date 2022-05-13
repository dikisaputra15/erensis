 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daya</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">daya</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Daya</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Daya</button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Tarif</th>
                    <th>Daya</th>
                    <th>Rp Tarif</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($daya as $dat) : ?>

	                  <tr>
                      <td><?= $dat['nama_tarif']; ?></td>
                      <td><?= $dat['daya']; ?></td>
	                    <td><?= $dat['rp_tariff']; ?></td>
	                    <td>
	                    	<a href="<?= base_url('pekerjaan/daya/hapus_daya/') . $dat['id_daya']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                            <a href="<?= base_url('pekerjaan/daya/edit_daya/') . $dat['id_daya']; ?>" class="btn btn-primary">Edit</a>
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
               <h5 class="modal-title" id="exampleModalLabel">Tambah Daya</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('pekerjaan/daya/tambahdaya') ?>" method="POST">
                 <div class="form-group">
                    <label>Tarif</label>
                     <select class="form-control" name="id_tarif">
                      <?php foreach ($tarif as $dat) { ?>
                        <option value="<?= $dat['id_tarif']; ?>"><?= $dat['nama_tarif']; ?></option>
                      <?php } ?>
                     </select>
                  </div>

                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Daya" name="daya" id="daya" required>
                  </div>

                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="RP Tarif" name="rp_tarif" id="rp_tarif" required>
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
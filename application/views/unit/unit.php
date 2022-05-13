 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Unit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">unit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Unit</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Unit</button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Unit Induk</th>
                    <th>Nama Unit</th>
                    <th>BPP Unit</th>
                    <th>BPP Marginal Cost TMTR</th>
                    <th>BPP Marginal Cost TT</th>
                    <th>BPP Subsystem TMTR</th>
                    <th>BPP Subsystem TT</th>
                    <th>Biaya OM</th>
                    <th>ROE</th>
                    <th>Interest Rate</th>
                    <th>Rata - Rata Harga Jual</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($unit as $dat) : ?>

	                  <tr>
                      <td><?= $dat['nama_unit_induk']; ?></td>
                      <td><?= $dat['nama_unit']; ?></td>
                      <td><?= $dat['bpp_unit']; ?></td>
                      <td><?= $dat['bpp_mc_tmtr']; ?></td>
                      <td><?= $dat['bpp_mc_tt']; ?></td>
                      <td><?= $dat['bpp_ss_tmtr']; ?></td>
                      <td><?= $dat['bpp_ss_tt']; ?></td>
                      <td><?= $dat['biaya_om']; ?></td>
                      <td><?= $dat['roe']; ?></td>
                      <td><?= $dat['interest_rate']; ?></td>
	                    <td><?= $dat['rata_jual']; ?></td>
	                    <td>
	                    	<a href="<?= base_url('unit/unit/hapus_unit/') . $dat['id_unit']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                            <a href="<?= base_url('unit/unit/edit_unit/') . $dat['id_unit']; ?>" class="btn btn-primary">Edit</a>
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
               <h5 class="modal-title" id="exampleModalLabel">Tambah Unit</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('unit/unit/tambahunit') ?>" method="POST">
                 <div class="form-group">
                    <label>Unit Induk</label>
                     <select class="form-control" name="id_unit_induk">
                      <?php foreach ($unitinduk as $dat) { ?>
                        <option value="<?= $dat['id_unit_induk']; ?>"><?= $dat['nama_unit_induk']; ?></option>
                      <?php } ?>
                     </select>
                  </div>
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Unit" name="unit" id="unit" required>
                  </div>
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="number" placeholder="BPP Unit" name="bpp_unit" id="bpp_unit" required>
                  </div>
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="number" placeholder="BPP Marginal Cost TMTR" name="bpp_mc_tmtr" id="bpp_mc_tmtr" required>
                  </div>
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="number" placeholder="BPP Marginal Cost TT" name="bpp_mc_tt" id="bpp_mc_tt" required>
                  </div>
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="number" placeholder="BPP Subsytem TMTR" name="bpp_ss_tmtr" id="bpp_ss_tmtr" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="number" placeholder="BPP Subsytem TT" name="bpp_ss_tt" id="bpp_ss_tt" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="number" placeholder="Biaya OM" name="biaya_om" id="biaya_om" required>
                  </div>
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="number" placeholder="ROE" name="roe" id="roe" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="number" placeholder="Interest Rate" name="interest_rate" id="interest_rate" required>
                  </div>
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="number" placeholder="Rata - Rata Harga Jual" name="rata_jual" id="rata_jual" required>
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
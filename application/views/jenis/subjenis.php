 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">SubJenis</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Subjenis</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">SubJenis</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah SubJenis</button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Kategori</th>
                    <th>Jenis Pekerjaan</th>
                    <th>Subjenis Pekerjaan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($subjenis as $dat) : ?>

	                  <tr>
                      <td><?= $dat['kategori']; ?></td>
                      <td><?= $dat['nama']; ?></td>
	                    <td><?= $dat['subjenis_pekerjaan']; ?></td>
	                    <td>
	                    	<a href="<?= base_url('jenis/subjenis/hapus_subjenis/') . $dat['id_subjenis_pekerjaan']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                            <a href="<?= base_url('jenis/subjenis/edit_subjenis/') . $dat['id_subjenis_pekerjaan']; ?>" class="btn btn-primary">Edit</a>
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
               <h5 class="modal-title" id="exampleModalLabel">Tambah Subjenispekerjaan</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('jenis/subjenis/tambahsubjenis') ?>" method="POST">
                    <div class="form-group">
                    <label>Kategori</label>
                     <select class="form-control" name="kategori" id="kategori">
                        <option>-Select Kategori-</option>
                      <?php foreach ($kategori as $row) { ?>
                        <option value="<?php echo $row->id_kategori;?>"><?php echo $row->kategori; ?></option>
                      <?php } ?>
                     </select>
                  </div>
                  
                 <div class="form-group">
                    <label>Jenis Pekerjaan</label>
                     <select class="form-control" name="jp" id="jp">
                         <option>-Select Unit Pelaksana-</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Subjenis" name="subjenis" id="subjenis" required>
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
           $('#kategori').change(function(){
            var kategori = $('#kategori').val();
            if(kategori != '')
            {
             $.ajax({
              url:"<?php echo base_url(); ?>jenis/subjenis/fetch_jp",
              method:"POST",
              data:{kategori:kategori},
              success:function(data)
              {
               $('#jp').html(data);
               // $('#unit_layanan').html('<option value="">Select Unit Layanan</option>');
              }
             });
            }
            else
            {
             $('#jp').html('<option value="">Select Jenis Pekerjaan</option>');
             // $('#unit_layanan').html('<option value="">Select Unit Layanan</option>');
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
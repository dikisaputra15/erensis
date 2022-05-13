 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">List Template</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">list Template</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">list template</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah list Template</button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>uraian template</th>
                    <th>satuan</th>
                    <th>Kategori</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody id="show_data">
                 
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
               <h5 class="modal-title" id="exampleModalLabel">Tambah List Template</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('layanan/list_template/tambahlist') ?>" method="POST">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Uraian Template" name="uraian_template" id="uraian" required>
                  </div>
                  <div class="form-group">
                    <label>Satuan</label>
                     <select class="form-control" name="id_satuan">
                      <?php foreach ($satuan as $dat) { ?>
                        <option value="<?= $dat['id_satuan']; ?>"><?= $dat['nama_satuan']; ?></option>
                      <?php } ?>
                     </select>
                  </div>
                   <div class="form-group">
                    <label>Kategori</label>
                     <select class="form-control" name="id_kategori">
                      <?php foreach ($kategori as $dat) { ?>
                        <option value="<?= $dat['id_kategori']; ?>"><?= $dat['kategori']; ?></option>
                      <?php } ?>
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

<script type="text/javascript" src="<?php echo base_url('datatables/jquery.min.js') ?>"></script>
<script type="text/javascript">
  $(document).ready(function(){
    tampil_data_barang(); //pemanggilan fungsi tampil barang.
    
    $('#example1').dataTable();
     
    //fungsi tampil barang
    function tampil_data_barang(){
        $.ajax({
            type  : 'ajax',
            url   : '<?php echo base_url()?>layanan/list_template/view',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                          '<td>'+data[i].uraian_template+'</td>'+
                            '<td>'+data[i].nama_satuan+'</td>'+
                            '<td>'+data[i].kategori+'</td>'+
                            '<td>'+
                                    '<a href="<?= base_url('layanan/list_template/edit_list/'); ?>'+data[i].id_list+'" class="btn btn-info btn-xs">Edit</a>'+' '+
                                    '<a href="<?= base_url('layanan/list_template/hapus_list/'); ?>'+data[i].id_list+'" class="btn btn-danger btn-xs">Hapus</a>'+
                                '</td>'+
                            '</tr>';
                }
                $('#show_data').html(html);
            }

        });
    }

  });

</script>
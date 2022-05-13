
 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Menu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">menu</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Menu</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Menu</button>
             
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Tittle</th>
                    <th>URL</th>
                    <th>Icon</th>
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
               <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('menu/menu/tambahmenu') ?>" method="POST">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Tittle" name="tittle" id="tittle" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Url" name="url" id="url" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Icon" name="icon" id="icon" required>
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
<!-- <script>
    var tabel = null;

    $(document).ready(function() {
        tabel = $('#example1').DataTable({
            "processing": true,
            "serverSide": true,
            "ordering": true, // Set true agar bisa di sorting
            "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
            "ajax":
            {
                "url": "<?php echo base_url('menu/menu/view') ?>", // URL file untuk proses select datanya
                "type": "POST"
            },
            "deferRender": true,
            "aLengthMenu": [[10, 50, 100],[ 10, 50, 100]], // Combobox Limit
            "columns": [
                { "data": "tittle" }, // Tampilkan nis
                { "data": "url" },  // Tampilkan nama
                { "data": "icon" }, // Tampilkan telepon
                { "render": function ( data, type, row ) { // Tampilkan kolom aksi
                        var html  = "<a href='<?= base_url('menu/menu/edit_menu/')  ?>'>EDIT</a> | "
                        html += "<a href=''>DELETE</a>"

                        return html
                    }
                },
            ],
        });
    });
    </script> -->

    <script type="text/javascript">
  $(document).ready(function(){
    tampil_data_barang(); //pemanggilan fungsi tampil barang.
    
    $('#example1').dataTable();
     
    //fungsi tampil barang
    function tampil_data_barang(){
        $.ajax({
            type  : 'ajax',
            url   : '<?php echo base_url()?>menu/menu/view',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                          '<td>'+data[i].tittle+'</td>'+
                            '<td>'+data[i].url+'</td>'+
                            '<td>'+data[i].icon+'</td>'+
                            '<td>'+
                                    '<a href="<?= base_url('menu/menu/edit_menu/'); ?>'+data[i].id_menu+'" class="btn btn-info btn-xs">Edit</a>'+' '+
                                    '<a href="<?= base_url('menu/menu/hapus_menu/'); ?>'+data[i].id_menu+'" class="btn btn-danger btn-xs">Hapus</a>'+
                                '</td>'+
                            '</tr>';
                }
                $('#show_data').html(html);
            }

        });
    }

  });

</script>
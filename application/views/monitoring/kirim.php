<?php 
$uri_id = $this->uri->segment(4);
?>

<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>
 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Kirim</h1>
          </div><!-- /.col -->
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kirim</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kirim</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= base_url('monitoring/laporan/proseskirim'); ?>" method="POST"> 
                <div class="card-body">

                  <div class="form-group" hidden>
                    <label for="exampleInputPassword1">id utama</label>
                    <input type="text" class="form-control" name="id_utama" value="<?= $uri_id; ?>">
                </div>

                  <div class="row">

               <div class="col-md-12">
                  <div class="form-group">
                  <label>Kirim Ke</label>
                </div>
                </div>

                 <div class="col-md-3">
                <div class="form-group">
                    <select class="form-control" name="unit_induk_pic" id="unit_induk_pic">

                       <?php foreach ($unitinduk as $row) : 

                          $id_unit_induk = $row->id_unit_induk;

                          if ($monitoring['id_unit_induk_pic']==$id_unit_induk) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_unit_induk;?>"><?php echo $row->nama_unit_induk; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>

                <div class="col-md-3">
                <div class="form-group">
                     <select class="form-control" name="unit_pic" id="unit_pic">
                     
                      <?php foreach ($unit as $dat) : 

                          if ($monitoring['id_unit_pic']==$dat['id_unit']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_unit']; ?>"><?= $dat['nama_unit']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>

                <div class="col-md-3">
                <div class="form-group">
                     <select class="form-control" name="unit_layanan_pic" id="unit_layanan_pic">
                     
                      <?php foreach ($unitlayanan as $dat) : 

                          if ($monitoring['id_layanan_pic']==$dat['id_unit_layanan']) {
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

               <div class="col-md-3">
                <div class="form-group">
                    <select class="form-control" name="user_pic" id="user_pic">
                     
                      <?php foreach ($user as $dat) : 

                          if ($monitoring['id_user_pic']==$dat['id_user']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_user']; ?>"><?= $dat['nama']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                </div>
                </div>
                
              </div>

              <div class="row">

               <div class="col-md-12">
                  <div class="form-group">
                    <label>Status Selanjutnya</label>
                  </div>
                </div>

                <div class="col-md-3">
                <div class="form-group">
                    <select class="form-control" name="status" id="status">
                     
                      <?php foreach ($status as $dat) : 

                          if ($monitoring['status']==$dat['id_status']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_status']; ?>"><?= $dat['uraian_status']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                </div>
                </div>

                </div>

                </div>
                <div class="card-footer">
                  <input type="submit" name="kirim" class="btn btn-primary" value="Kirim">
                </div>
              </form>
</div>
</div>
</div>
</div>
</div>
</section>

<script type="text/javascript" src="<?= base_url('assets/js/jquery3.js'); ?>"></script>
<script>
  $(document).ready(function(){
 $('#unit_induk_pic').change(function(){
  var id_unit_induk = $('#unit_induk_pic').val();
  if(id_unit_induk != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>unit/layanan/fetch_unit",
    method:"POST",
    data:{id_unit_induk:id_unit_induk},
    success:function(data)
    {
     $('#unit_pic').html(data);
     $('#unit_layanan_pic').html('<option value="">Select Unit Layanan</option>');
    }
   });
  }
  else
  {
   $('#unit_pic').html('<option value="">Select Unit</option>');
   $('#unit_layanan_pic').html('<option value="">Select Unit Layanan</option>');
  }
 });

 $('#unit_pic').change(function(){
  var id_unit = $('#unit_pic').val();
  if(id_unit != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>unit/layanan/fetch_layanan",
    method:"POST",
    data:{id_unit:id_unit},
    success:function(data)
    {
     $('#unit_layanan_pic').html(data);
    }
   });
  }
  else
  {
   $('#unit_layanan_pic').html('<option value="">Select Unit Layanan</option>');
  }
 });

 $('#unit_layanan_pic').change(function(){
  var id_unit_layanan_pic = $('#unit_layanan_pic').val();
  if(id_unit_layanan_pic != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>unit/layanan/fetch_userpic",
    method:"POST",
    data:{id_unit_layanan_pic:id_unit_layanan_pic},
    success:function(data)
    {
     $('#user_pic').html(data);
    }
   });
  }
  else
  {
   $('#user_pic').html('<option value="">Select PIC</option>');
  }
 });
 
});
</script>
  



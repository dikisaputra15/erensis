
 <div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <div class="card card-default">
           <div class="card-header">
            <h3 class="card-title">Edit Monitoring</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>

 <form action="" method="POST" enctype="multipart/form-data">
           <div class="card-body">
            <div class="row">

            <div class="col-md-12">

            <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id utama</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="id_utama" value="<?= $monitoring['id_utama']; ?>">
              </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Unit Induk</label>
                    <select class="form-control" name="unit_induk" id="unit_induk">

                       <?php foreach ($unitinduk as $row) : 

                          $id_unit_induk = $row->id_unit_induk;

                          if ($monitoring['id_unit_induk']==$id_unit_induk) {
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

                          if ($monitoring['id_unit']==$dat['id_unit']) {
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
                    <label for="exampleInputPassword1">Unit Layanan / Bagian</label>
                     <select class="form-control" name="unit_layanan" id="unit_layanan">
                     
                      <?php foreach ($unitlayanan as $dat) : 

                          if ($monitoring['id_unit_layanan']==$dat['id_unit_layanan']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_unit_layanan']; ?>"><?= $dat['nama_unit_layanan']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>

                  <div class="form-group">
                    <label>Nama Trafo</label>
                    <select class="form-control" name="id_trafo_gi" id="id_trafo_gi">

                       <?php foreach ($trafo as $row) : 

                          $id_trafo_gi = $row->id_trafo_gi;

                          if ($monitoring['trafo_gi']==$id_trafo_gi) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_trafo_gi;?>"><?php echo $row->nama_trafo_gi; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Penyulang</label>
                     <select class="form-control" name="id_penyulang" id="id_penyulang">
                     
                      <?php foreach ($penyulang as $dat) : 

                          if ($monitoring['penyulang']==$dat['id_penyulang']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_penyulang']; ?>"><?= $dat['nama_penyulang']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                
                 <div class="form-group">
                    <label for="exampleInputPassword1">Gardu</label>
                     <select class="form-control" name="gardu" id="gardu">
                     
                      <?php foreach ($gardu as $dat) : 

                          if ($monitoring['gardu']==$dat['id_gardu']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_gardu']; ?>"><?= $dat['nama_gardu']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>

                 <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pekerjaan</label>
                    <input type="text" class="form-control" name="nama_pekerjaan" value="<?= $monitoring['nama_pekerjaan']; ?>">
                </div>
                <!-- /.form-group -->
             
                <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Program Kerja</label>
                     <select class="form-control" name="pekerjaan" id="pekerjaan">
                     
                      <?php foreach ($program as $dat) : 

                          if ($monitoring['jenis_program_kerja']==$dat['id_program']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_program']; ?>"><?= $dat['nama_program']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pemohon</label>
                    <input type="text" class="form-control" name="nama_pemohon" value="<?= $monitoring['nama_pemohon']; ?>">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                   <label for="exampleInputPassword1">ID Pelanggan / No Meter</label>
                    <input type="text" class="form-control" name="id_pel" value="<?= $monitoring['id_pel/no_meter']; ?>">
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pelanggan</label>
                    <input type="text" class="form-control" name="nama_perusahaan" value="<?= $monitoring['nama_perusahaan']; ?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">No Telp</label>
                    <input type="text" class="form-control" name="telp" value="<?= $monitoring['telp']; ?>">
                </div>

                 <div class="form-group">
                   <label for="exampleInputPassword1">Lokasi Pekerjaan</label>
                    <input type="text" class="form-control" name="lokasi_pekerjaan" value="<?= $monitoring['lokasi_pekerjaan']; ?>">
                </div>
              
                <div class="form-group">
                    <label for="exampleInputPassword1">Titik Koordinat</label>
                    <input type="text" class="form-control" name="tikor" value="<?= $monitoring['tikor']; ?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Permohonan Pelanggan</label>
                    <input type="date" class="form-control" name="tgl_permohonan_pel" value="<?= $monitoring['tgl_permohonan_pelanggan']; ?>">
                </div>

                <div class="form-group">
                   <label for="exampleInputPassword1">Tanggal Pelanggan Bayar</label>
                    <input type="date" class="form-control" name="tgl_pelanggan_bayar" value="<?= $monitoring['tgl_pelanggan_bayar']; ?>">
                </div>
              
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tanggal Nota Dinas Terbit</label>
                    <input type="date" class="form-control" name="tgl_nodin_terbit" value="<?= $monitoring['tgl_nota_dinas_terbit']; ?>">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                   <label for="exampleInputPassword1">No Surat Nota Dinas Niaga</label>
                    <input type="text" class="form-control" name="nodin_niaga" value="<?= $monitoring['no_surat_nota_dinas_niaga']; ?>">
                </div>
              
                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Pelaksanaan Survey</label>
                    <input type="date" class="form-control" name="tgl_pelaksanaan_survey" value="<?= $monitoring['tgl_pelaksanaan_survey']; ?>">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                   <label for="exampleInputPassword1">Tanggal Pembuatan Gambar</label>
                    <input type="date" class="form-control" name="tgl_pembuatan_gambar" value="<?= $monitoring['tgl_pembuatan_gambar']; ?>">
                </div>
               
                <div class="form-group">
                   <label for="exampleInputPassword1">Upload Gambar <small>(format harus jpg)</small></label>
                    <input type="file" class="form-control" name="gambar">
                </div>

                <!-- /.form-group -->
              <div class="form-group">
                    <label for="exampleInputPassword1">NB (Izin, Kendala, dll)</label><br>
                    <textarea name="nb" style="width: 460px; height: 150px;"><?= $monitoring['nb']; ?></textarea>
                </div>

                <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Rencana Teknik</label><br>
                    <textarea name="rencana_teknik" style="width: 460px; height: 150px;"><?= $monitoring['rencana_teknik']; ?></textarea>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Tarif Tenaga Listrik LWBP</label>
                    <input type="text" class="form-control" name="ttl" value="<?= $monitoring['ttl_lwbp']; ?>">
                </div>

                <div class="form-group">
                   <label for="exampleInputPassword1">Biaya Pokok Produksi</label>
                    <input type="text" class="form-control" name="bpp" value="<?= $monitoring['bpp']; ?>">
                </div>

              <div class="form-group">
                    <label for="exampleInputPassword1">Biaya Penyambungan</label>
                    <input type="text" class="form-control" name="biaya_penyambungan" value="<?= $monitoring['biaya_penyambungan']; ?>">
                </div>-->

                <div class="form-group">
                    <label for="exampleInputPassword1">Nilai Investasi</label>
                    <input type="number" class="form-control" name="nilai_investasi" value="<?= $monitoring['nilai_investasi']; ?>" readonly>
                </div> 
                
                <div class="form-group">
                   <label for="exampleInputPassword1">Total Anggaran UID</label>
                    <input type="number" class="form-control" name="total_anggaran_uid" value="<?= $monitoring['total_anggaran_uid']; ?>" readonly>
                </div>

                <div class="form-group">
                   <label for="exampleInputPassword1">Total Anggaran Unit</label>
                    <input type="number" class="form-control" name="total_anggaran_unit" value="<?= $monitoring['total_anggaran_unit']; ?>" readonly>
                </div>

                <div class="form-group">
                   <label for="exampleInputPassword1">Total Anggaran Jasa & Errect</label>
                    <input type="number" class="form-control" name="total_anggaran_errect" value="<?= $monitoring['total_anggaran_errect']; ?>" readonly>
                </div>

                <div class="form-group">
                     <label for="exampleInputPassword1">Umur Aset</label>
                    <input type="number" class="form-control" name="umur_aset" placeholder="Umur Aset" value="<?= $monitoring['umur_aset']; ?>">
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1">Jam Nyala</label>
                    <input type="number" class="form-control" name="jam_nyala" placeholder="Jam Nyala" value="<?= $monitoring['jam_nyala']; ?>">
                </div>
              
               <div class="form-group">
                    <label for="exampleInputPassword1">SAIFI GAIN</label>
                    <input type="number" class="form-control" name="saifi" placeholder="SAIFI GAIN" value="<?= $monitoring['saifi']; ?>">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="exampleInputPassword1">SAIDI GAIN</label>
                    <input type="number" class="form-control" name="saidi" placeholder="SAIDI GAIN" value="<?= $monitoring['saidi']; ?>">
                </div>
              
                <div class="form-group">
                   <label for="exampleInputPassword1">ENS Saving</label>
                    <input type="number" class="form-control" name="ENS_saving" value="<?= $monitoring['ens']; ?>">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="exampleInputPassword1">Loss Saving</label>
                    <input type="number" class="form-control" name="loss_saving" value="<?= $monitoring['losses']; ?>">
                </div>
               
                <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Biaya O&M</label>
                    <input type="text" class="form-control" name="biaya_om" value="<?= $monitoring['biaya_om']; ?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Required ROE (%)</label>
                    <input type="text" class="form-control" name="roe" value="<?= $monitoring['required_roe']; ?>">
                </div>
               
                <div class="form-group">
                   <label for="exampleInputPassword1">Interest Rate (%)</label>
                    <input type="text" class="form-control" name="interest_rate" value="<?= $monitoring['interest_rate']; ?>">
                </div>
               
                 <div class="form-group">
                   <label for="exampleInputPassword1">NPV</label>
                    <input type="text" class="form-control" name="npv" value="<?= $monitoring['npv']; ?>">
                </div>
                
                <div class="form-group">
                   <label for="exampleInputPassword1">IRR</label>
                    <input type="text" class="form-control" name="irr" value="<?= $monitoring['irr']; ?>">
                </div>

                 <div class="form-group">
                   <label for="exampleInputPassword1">Payback</label>
                    <input type="text" class="form-control" name="payback" value="<?= $monitoring['payback']; ?>">
                </div> -->
              
              <div class="row">
              <div class="col-md-2">
                 <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Awal</label>
                    <select class="form-control" name="tarif_awal1" id="tarif_awal1">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['id_tarif']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Daya Awal</label>
                     <select class="form-control" name="daya_awal1" id="daya_awal1">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
               <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Akhir</label>
                    <select class="form-control" name="tarif_akhir1" id="tarif_akhir1">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['tarif_saat_ini']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                 <div class="form-group">
                    <label for="exampleInputPassword1">Daya Akhir</label>
                     <select class="form-control" name="daya_akhir1" id="daya_akhir1">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya_saat_ini']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan">
                     <?php foreach ($layanan as $dat) : 

                          if ($monitoring['id_layanan_khusus']==$dat['id_layanan_khusus']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>

                      <?php endforeach; ?>
                    </select>
                </div>
                </div>

                  <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan</label>
                    <input type="number" class="form-control" name="jml_pel1" value="<?= $monitoring['jml_pelanggan']; ?>">
                    </div>
                 </div>
          </div>

<center>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1" class="btn btn-danger">+</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="row">
        <div class="col-md-2">
                 <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Awal 2</label>
                    <select class="form-control" name="tarif_awal2" id="tarif_awal2">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['id_tarif2']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>
              
              <div class="col-md-2">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Daya Awal 2</label>
                     <select class="form-control" name="daya_awal2" id="daya_awal2">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya2']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                 <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Akhir 2</label>
                    <select class="form-control" name="tarif_akhir2" id="tarif_akhir2">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['tarif_saat_ini2']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                 <div class="form-group">
                    <label for="exampleInputPassword1">Daya Akhir 2</label>
                     <select class="form-control" name="daya_akhir2" id="daya_akhir2">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya_saat_ini2']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan2">
                     <?php foreach ($layanan as $dat) : 

                          if ($monitoring['id_layanan_khusus2']==$dat['id_layanan_khusus']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>

                      <?php endforeach; ?>
                    </select>
                </div>
                </div>

                  <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan 2</label>
                    <input type="number" class="form-control" name="jml_pel2" value="<?= $monitoring['jml_pelanggan2']; ?>">
                    </div>
                 </div>
            </div>

        <div class="row">
        <div class="col-md-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Awal 3</label>
                    <select class="form-control" name="tarif_awal3" id="tarif_awal3">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['id_tarif3']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>
              
              <div class="col-md-2">
              <div class="form-group">
                    <label for="exampleInputPassword1">Daya Awal 3</label>
                     <select class="form-control" name="daya_awal3" id="daya_awal3">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya3']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Akhir 3</label>
                    <select class="form-control" name="tarif_akhir3" id="tarif_akhir3">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['tarif_saat_ini3']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                 <div class="form-group">
                    <label for="exampleInputPassword1">Daya Akhir 3</label>
                     <select class="form-control" name="daya_akhir3" id="daya_akhir3">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya_saat_ini3']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan3">
                     <?php foreach ($layanan as $dat) : 

                          if ($monitoring['id_layanan_khusus3']==$dat['id_layanan_khusus']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>

                      <?php endforeach; ?>
                    </select>
                </div>
                </div>

                  <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan 3</label>
                    <input type="number" class="form-control" name="jml_pel3" value="<?= $monitoring['jml_pelanggan3']; ?>">
                    </div>
                  </div>
          </div>

        <div class="row">
        <div class="col-md-2">
                 <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Awal 4</label>
                    <select class="form-control" name="tarif_awal4" id="tarif_awal4">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['id_tarif4']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Daya Awal 4</label>
                     <select class="form-control" name="daya_awal4" id="daya_awal4">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya4']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
               <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Akhir 4</label>
                    <select class="form-control" name="tarif_akhir4" id="tarif_akhir4">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['tarif_saat_ini4']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                 <div class="form-group">
                    <label for="exampleInputPassword1">Daya Akhir 4</label>
                     <select class="form-control" name="daya_akhir4" id="daya_akhir4">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya_saat_ini4']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan4">
                     <?php foreach ($layanan as $dat) : 

                          if ($monitoring['id_layanan_khusus4']==$dat['id_layanan_khusus']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>

                      <?php endforeach; ?>
                    </select>
                </div>
                </div>

                  <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan 4</label>
                    <input type="number" class="form-control" name="jml_pel4" value="<?= $monitoring['jml_pelanggan4']; ?>">
                    </div>
                  </div>
          </div>

            <div class="row">
        <div class="col-md-2">
                 <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Awal 5</label>
                    <select class="form-control" name="tarif_awal5" id="tarif_awal5">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['id_tarif5']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Daya Awal 5</label>
                     <select class="form-control" name="daya_awal5" id="daya_awal5">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya5']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                 <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Akhir 5</label>
                    <select class="form-control" name="tarif_akhir5" id="tarif_akhir5">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['tarif_saat_ini5']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Daya Akhir 5</label>
                     <select class="form-control" name="daya_akhir5" id="daya_akhir5">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya_saat_ini5']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan5">
                     <?php foreach ($layanan as $dat) : 

                          if ($monitoring['id_layanan_khusus5']==$dat['id_layanan_khusus']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>

                      <?php endforeach; ?>
                    </select>
                </div>
                </div>

                  <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan 5</label>
                    <input type="number" class="form-control" name="jml_pel5" value="<?= $monitoring['jml_pelanggan5']; ?>">
                    </div>
                  </div>

          </div>
         
          <div class="row">
        <div class="col-md-2">
               <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Awal 6</label>
                    <select class="form-control" name="tarif_awal6" id="tarif_awal6">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['id_tarif6']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Daya Awal 6</label>
                     <select class="form-control" name="daya_awal6" id="daya_awal6">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya6']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>
              
              <div class="col-md-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Akhir 6</label>
                    <select class="form-control" name="tarif_akhir6" id="tarif_akhir6">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['tarif_saat_ini6']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>
             
             <div class="col-md-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Daya Akhir 6</label>
                     <select class="form-control" name="daya_akhir6" id="daya_akhir6">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya_saat_ini6']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan6">
                     <?php foreach ($layanan as $dat) : 

                          if ($monitoring['id_layanan_khusus6']==$dat['id_layanan_khusus']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>

                      <?php endforeach; ?>
                    </select>
                </div>
                </div>

                  <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan 6</label>
                    <input type="number" class="form-control" name="jml_pel6" value="<?= $monitoring['jml_pelanggan6']; ?>">
                    </div>
                  </div>

          </div>
          
           <div class="row">
        <div class="col-md-2">
                 <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Awal 7</label>
                    <select class="form-control" name="tarif_awal7" id="tarif_awal7">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['id_tarif7']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Daya Awal 7</label>
                     <select class="form-control" name="daya_awal7" id="daya_awal7">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya7']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Akhir 7</label>
                    <select class="form-control" name="tarif_akhir7" id="tarif_akhir7">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['tarif_saat_ini7']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
               <div class="form-group">
                    <label for="exampleInputPassword1">Daya Akhir 7</label>
                     <select class="form-control" name="daya_akhir7" id="daya_akhir7">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya_saat_ini7']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan7">
                     <?php foreach ($layanan as $dat) : 

                          if ($monitoring['id_layanan_khusus7']==$dat['id_layanan_khusus']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>

                      <?php endforeach; ?>
                    </select>
                </div>
                </div>

                  <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan 7</label>
                    <input type="number" class="form-control" name="jml_pel7" value="<?= $monitoring['jml_pelanggan7']; ?>">
                    </div>
                  </div>

          </div>

          <div class="row">
        <div class="col-md-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Awal 8</label>
                    <select class="form-control" name="tarif_awal8" id="tarif_awal8">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['id_tarif8']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Daya Awal 8</label>
                     <select class="form-control" name="daya_awal8" id="daya_awal8">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya8']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>
            
            <div class="col-md-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Akhir 8</label>
                    <select class="form-control" name="tarif_akhir8" id="tarif_akhir8">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['tarif_saat_ini8']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>
              
              <div class="col-md-2">
              <div class="form-group">
                    <label for="exampleInputPassword1">Daya Akhir 8</label>
                     <select class="form-control" name="daya_akhir8" id="daya_akhir8">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya_saat_ini8']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan8">
                     <?php foreach ($layanan as $dat) : 

                          if ($monitoring['id_layanan_khusus8']==$dat['id_layanan_khusus']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>

                      <?php endforeach; ?>
                    </select>
                </div>
                </div>

                  <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan 8</label>
                    <input type="number" class="form-control" name="jml_pel8" value="<?= $monitoring['jml_pelanggan8']; ?>">
                    </div>
                  </div>

          </div>

            <div class="row">
        <div class="col-md-2">
                 <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Awal 9</label>
                    <select class="form-control" name="tarif_awal9" id="tarif_awal9">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['id_tarif9']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
               <div class="form-group">
                    <label for="exampleInputPassword1">Daya Awal 9</label>
                     <select class="form-control" name="daya_awal9" id="daya_awal9">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya9']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                 <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Akhir 9</label>
                    <select class="form-control" name="tarif_akhir9" id="tarif_akhir9">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['tarif_saat_ini9']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Daya Akhir 9</label>
                     <select class="form-control" name="daya_akhir9" id="daya_akhir9">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya_saat_ini9']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan9">
                     <?php foreach ($layanan as $dat) : 

                          if ($monitoring['id_layanan_khusus9']==$dat['id_layanan_khusus']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>

                      <?php endforeach; ?>
                    </select>
                </div>
                </div>

                  <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan 9</label>
                    <input type="number" class="form-control" name="jml_pel9" value="<?= $monitoring['jml_pelanggan9']; ?>">
                    </div>
                  </div>

      </div>

          <div class="row">
        <div class="col-md-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Awal 10</label>
                    <select class="form-control" name="tarif_awal10" id="tarif_awal10">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['id_tarif10']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Daya Awal 10</label>
                     <select class="form-control" name="daya_awal10" id="daya_awal10">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya10']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>
              
              <div class="col-md-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Tarif Akhir 10</label>
                    <select class="form-control" name="tarif_akhir10" id="tarif_akhir10">

                       <?php foreach ($tarif as $row) : 

                          $id_tarif = $row->id_tarif;

                          if ($monitoring['tarif_saat_ini10']==$id_tarif) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                       <option <?= $select; ?> value="<?php echo $row->id_tarif;?>"><?php echo $row->nama_tarif; ?></option>

                      <?php endforeach; ?>

                     </select>
                  </div>
                  </div>
           
           <div class="col-md-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Daya Akhir 10</label>
                     <select class="form-control" name="daya_akhir10" id="daya_akhir10">
                     
                      <?php foreach ($daya as $dat) : 

                          if ($monitoring['daya_saat_ini10']==$dat['id_daya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_daya']; ?>"><?= $dat['daya']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  </div>

                  <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan10">
                     <?php foreach ($layanan as $dat) : 

                          if ($monitoring['id_layanan_khusus10']==$dat['id_layanan_khusus']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>

                      <?php endforeach; ?>
                    </select>
                </div>
                </div>

                   <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jml Pel 10</label>
                    <input type="number" class="form-control" name="jml_pel10" value="<?= $monitoring['jml_pelanggan10']; ?>">
                    </div>
                  </div>

        </div>
              </div>
      </div>
    </div>
  </div>
  </center>     

            </div>
            </div>
            </div>
             <div class="card-footer">
                  <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
                </div>
</form>
        </div>
      </div>
</section>
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

 <script type="text/javascript">
        $(document).ready(function(){
 
            $('#tarif').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo base_url(); ?>monitoring/laporan/fetch_daya",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id_daya+'>'+data[i].daya+'</option>';
                        }
                        $('#daya').html(html);
 
                    }
                });
                return false;
            }); 
             
        });
</script>

<script>
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
               $('#gardu').html('<option value="">-Select Gardu-</option>');
              }
             });
            }
            else
            {
             $('#id_penyulang').html('<option value="">-Select penyulang-</option>');
             $('#gardu').html('<option value="">-Select Gardu-</option>');
            }
           });

           $('#id_penyulang').change(function(){
            var id_penyulang = $('#id_penyulang').val();
            if(id_penyulang != '')
            {
             $.ajax({
              url:"<?php echo base_url(); ?>penyulang/penyulang/fetch_penyulang",
              method:"POST",
              data:{id_penyulang:id_penyulang},
              success:function(data)
              {
               $('#gardu').html(data);
              }
             });
            }
            else
            {
             $('#gardu').html('<option value="">-Select Gardu-</option>');
            }
           });
           
          });
</script>

 <script>
$(document).ready(function(){
 $('#tarif_awal1').change(function(){
  var tarif_awal1 = $('#tarif_awal1').val();
  if(tarif_awal1 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif",
    method:"POST",
    data:{tarif_awal1:tarif_awal1},
    success:function(data)
    {
     $('#daya_awal1').html(data);
    }
   });
  }
  else
  {
   $('#daya_awal1').html('<option value="0">Select Daya</option>');
  }
 });

 $('#tarif_akhir1').change(function(){
  var tarif_akhir1 = $('#tarif_akhir1').val();
  if(tarif_akhir1 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif2",
    method:"POST",
    data:{tarif_akhir1:tarif_akhir1},
    success:function(data)
    {
     $('#daya_akhir1').html(data);
    }
   });
  }
  else
  {
   $('#daya_akhir1').html('<option value="0">Select Daya</option>');
  }
 });

 $('#tarif_awal2').change(function(){
  var tarif_awal2 = $('#tarif_awal2').val();
  if(tarif_awal2 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif3",
    method:"POST",
    data:{tarif_awal2:tarif_awal2},
    success:function(data)
    {
     $('#daya_awal2').html(data);
    }
   });
  }
  else
  {
   $('#daya_awal2').html('<option value="0">Select Daya</option>');
  }
 });

 $('#tarif_akhir2').change(function(){
  var tarif_akhir2 = $('#tarif_akhir2').val();
  if(tarif_akhir2 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif4",
    method:"POST",
    data:{tarif_akhir2:tarif_akhir2},
    success:function(data)
    {
     $('#daya_akhir2').html(data);
    }
   });
  }
  else
  {
   $('#daya_akhir2').html('<option value="0">Select Daya</option>');
  }
 });

 $('#tarif_awal3').change(function(){
  var tarif_awal3 = $('#tarif_awal3').val();
  if(tarif_awal3 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif5",
    method:"POST",
    data:{tarif_awal3:tarif_awal3},
    success:function(data)
    {
     $('#daya_awal3').html(data);
    }
   });
  }
  else
  {
   $('#daya_awal3').html('<option value="0">Select Daya</option>');
  }
 });

 $('#tarif_akhir3').change(function(){
  var tarif_akhir3 = $('#tarif_akhir3').val();
  if(tarif_akhir3 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif6",
    method:"POST",
    data:{tarif_akhir3:tarif_akhir3},
    success:function(data)
    {
     $('#daya_akhir3').html(data);
    }
   });
  }
  else
  {
   $('#daya_akhir3').html('<option value="0">Select Daya</option>');
  }
 });

 $('#tarif_awal4').change(function(){
  var tarif_awal4 = $('#tarif_awal4').val();
  if(tarif_awal4 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif7",
    method:"POST",
    data:{tarif_awal4:tarif_awal4},
    success:function(data)
    {
     $('#daya_awal4').html(data);
    }
   });
  }
  else
  {
   $('#daya_awal4').html('<option value="0">Select Daya</option>');
  }
 });

 $('#tarif_akhir4').change(function(){
  var tarif_akhir4 = $('#tarif_akhir4').val();
  if(tarif_akhir4 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif8",
    method:"POST",
    data:{tarif_akhir4:tarif_akhir4},
    success:function(data)
    {
     $('#daya_akhir4').html(data);
    }
   });
  }
  else
  {
   $('#daya_akhir4').html('<option value="0">Select Daya</option>');
  }
 });

 $('#tarif_awal5').change(function(){
  var tarif_awal5 = $('#tarif_awal5').val();
  if(tarif_awal5 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif9",
    method:"POST",
    data:{tarif_awal5:tarif_awal5},
    success:function(data)
    {
     $('#daya_awal5').html(data);
    }
   });
  }
  else
  {
   $('#daya_awal5').html('<option value="0">Select Daya</option>');
  }
 });

  $('#tarif_akhir5').change(function(){
  var tarif_akhir5 = $('#tarif_akhir5').val();
  if(tarif_akhir5 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif10",
    method:"POST",
    data:{tarif_akhir5:tarif_akhir5},
    success:function(data)
    {
     $('#daya_akhir5').html(data);
    }
   });
  }
  else
  {
   $('#daya_akhir5').html('<option value="0">Select Daya</option>');
  }
 });

  $('#tarif_awal6').change(function(){
  var tarif_awal6 = $('#tarif_awal6').val();
  if(tarif_awal6 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif11",
    method:"POST",
    data:{tarif_awal6:tarif_awal6},
    success:function(data)
    {
     $('#daya_awal6').html(data);
    }
   });
  }
  else
  {
   $('#daya_awal6').html('<option value="0">Select Daya</option>');
  }
 });

  $('#tarif_akhir6').change(function(){
  var tarif_akhir6 = $('#tarif_akhir6').val();
  if(tarif_akhir6 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif12",
    method:"POST",
    data:{tarif_akhir6:tarif_akhir6},
    success:function(data)
    {
     $('#daya_akhir6').html(data);
    }
   });
  }
  else
  {
   $('#daya_akhir6').html('<option value="0">Select Daya</option>');
  }
 });

  $('#tarif_awal7').change(function(){
  var tarif_awal7 = $('#tarif_awal7').val();
  if(tarif_awal7 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif13",
    method:"POST",
    data:{tarif_awal7:tarif_awal7},
    success:function(data)
    {
     $('#daya_awal7').html(data);
    }
   });
  }
  else
  {
   $('#daya_awal7').html('<option value="0">Select Daya</option>');
  }
 });

   $('#tarif_akhir7').change(function(){
  var tarif_akhir7 = $('#tarif_akhir7').val();
  if(tarif_akhir7 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif14",
    method:"POST",
    data:{tarif_akhir7:tarif_akhir7},
    success:function(data)
    {
     $('#daya_akhir7').html(data);
    }
   });
  }
  else
  {
   $('#daya_akhir7').html('<option value="0">Select Daya</option>');
  }
 });

   $('#tarif_awal8').change(function(){
  var tarif_awal8 = $('#tarif_awal8').val();
  if(tarif_awal8 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif15",
    method:"POST",
    data:{tarif_awal8:tarif_awal8},
    success:function(data)
    {
     $('#daya_awal8').html(data);
    }
   });
  }
  else
  {
   $('#daya_awal8').html('<option value="0">Select Daya</option>');
  }
 });

   $('#tarif_akhir8').change(function(){
  var tarif_akhir8 = $('#tarif_akhir8').val();
  if(tarif_akhir8 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif16",
    method:"POST",
    data:{tarif_akhir8:tarif_akhir8},
    success:function(data)
    {
     $('#daya_akhir8').html(data);
    }
   });
  }
  else
  {
   $('#daya_akhir8').html('<option value="0">Select Daya</option>');
  }
 });

   $('#tarif_awal9').change(function(){
  var tarif_awal9 = $('#tarif_awal9').val();
  if(tarif_awal9 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif17",
    method:"POST",
    data:{tarif_awal9:tarif_awal9},
    success:function(data)
    {
     $('#daya_awal9').html(data);
    }
   });
  }
  else
  {
   $('#daya_awal9').html('<option value="0">Select Daya</option>');
  }
 });

   $('#tarif_akhir9').change(function(){
  var tarif_akhir9 = $('#tarif_akhir9').val();
  if(tarif_akhir9 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif18",
    method:"POST",
    data:{tarif_akhir9:tarif_akhir9},
    success:function(data)
    {
     $('#daya_akhir9').html(data);
    }
   });
  }
  else
  {
   $('#daya_akhir9').html('<option value="0">Select Daya</option>');
  }
 });

   $('#tarif_awal10').change(function(){
  var tarif_awal10 = $('#tarif_awal10').val();
  if(tarif_awal10 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif19",
    method:"POST",
    data:{tarif_awal10:tarif_awal10},
    success:function(data)
    {
     $('#daya_awal10').html(data);
    }
   });
  }
  else
  {
   $('#daya_awal10').html('<option value="0">Select Daya</option>');
  }
 });

   $('#tarif_akhir10').change(function(){
  var tarif_akhir10 = $('#tarif_akhir10').val();
  if(tarif_akhir10 != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pekerjaan/tarif/ajax_tarif20",
    method:"POST",
    data:{tarif_akhir10:tarif_akhir10},
    success:function(data)
    {
     $('#daya_akhir10').html(data);
    }
   });
  }
  else
  {
   $('#daya_akhir10').html('<option value="0">Select Daya</option>');
  }
 });

});
 </script>



 <div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <div class="card card-default">
           <div class="card-header">
            <h3 class="card-title">Input Monitoring</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>

 <form action="<?= base_url('monitoring/monitoring/tambahmonitoring'); ?>" method="POST" enctype="multipart/form-data">
           <div class="card-body">
            <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                  <label>Unit Induk</label>
                  <select class="form-control select2" style="width: 100%;" name="unit_induk" id="unit_induk">
                    <option>-Select Unit Induk-</option>
                      <?php foreach ($unitinduk as $row) { ?>
                        <option value="<?php echo $row->id_unit_induk;?>"><?php echo $row->nama_unit_induk; ?></option>
                      <?php } ?>
                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Unit Pelaksana</label>
                  <select class="form-control select2" name="unit" id="unit" style="width: 100%;">
                      <option>-Select Unit Pelaksana-</option>
                  </select>
                </div>

                <div class="form-group">
                   <label>Unit Layanan / Bagian</label>
                     <select class="form-control" name="unit_layanan" id="unit_layanan">
                        <option>-Select Unit Layanan / Bagian-</option>
                     </select>
                </div>

                  <div class="form-group">
                    <label>Trafo Gardu Induk</label>
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
                  <label>Gardu</label>
                    <select class="form-control" name="gardu" id="gardu">
                      <option>-Select Gardu-</option>
                    </select>
                </div>

                 <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pekerjaan</label>
                    <input type="text" class="form-control" name="nama_pekerjaan" placeholder="Nama Pekerjaan">
                </div>
                <!-- /.form-group -->
             
                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Program Kerja</label>
                    <select class="form-control" name="pekerjaan">
                      <?php

                        foreach ($program as $dat) {
                        
                      ?>
                      <option value="<?= $dat['id_program']; ?>"><?= $dat['nama_program']; ?></option>
                      <?php 
                        }
                      ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pemohon</label>
                    <input type="text" class="form-control" name="nama_pemohon" placeholder="Nama Pemohon">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                   <label for="exampleInputPassword1">ID Pelanggan / No Meter</label>
                    <input type="text" class="form-control" name="id_pel" placeholder="ID Pelanggan No Meter">
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pelanggan</label>
                    <input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama Pelanggan">
                </div>

                 <div class="form-group">
                    <label for="exampleInputPassword1">No Telp</label>
                    <input type="text" class="form-control" name="telp" placeholder="No Telephone">
                </div>

                 <div class="form-group">
                   <label for="exampleInputPassword1">Lokasi Pekerjaan</label>
                    <input type="text" class="form-control" name="lokasi_pekerjaan" placeholder="Lokasi Pekerjaan">
                </div>
              
                <div class="form-group">
                    <label for="exampleInputPassword1">Titik Koordinat</label>
                    <input type="text" class="form-control" name="tikor" placeholder="Titik Koordinat">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Permohonan</label>
                    <input type="date" class="form-control" name="tgl_permohonan_pel">
                </div>

                <div class="form-group">
                   <label for="exampleInputPassword1">Tanggal Pelanggan Bayar</label>
                    <input type="date" class="form-control" name="tgl_pelanggan_bayar">
                </div>
              
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tanggal Nota Dinas Survay</label>
                    <input type="date" class="form-control" name="tgl_nodin_terbit">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                   <label for="exampleInputPassword1">No Nota Dinas Pengajuan</label>
                    <input type="text" class="form-control" name="nodin_niaga" placeholder="No Surat Nota Dinas Niaga">
                </div>
              
                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Pelaksanaan Survey</label>
                    <input type="date" class="form-control" name="tgl_pelaksanaan_survey">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                   <label for="exampleInputPassword1">Tanggal Pembuatan Gambar dan Rekomendasi Sistem</label>
                    <input type="date" class="form-control" name="tgl_pembuatan_gambar">
                </div>
               
                <div class="form-group">
                   <label for="exampleInputPassword1">Upload Hasil Survay <small>(format harus pdf)</small></label>
                    <input type="file" class="form-control" name="gambar1">
                </div>

                <div class="form-group">
                   <label for="exampleInputPassword1">Upload Teknik <small>(format harus pdf)</small></label>
                    <input type="file" class="form-control" name="gambar2">
                </div>

                <div class="form-group">
                   <label for="exampleInputPassword1">Upload Progress Realisasi <small>(format harus pdf)</small></label>
                    <input type="file" class="form-control" name="gambar3">
                </div>

                <!-- /.form-group -->
              <div class="form-group">
                    <label for="exampleInputPassword1">NB (Izin, Kendala, dll)</label><br>
                    <textarea name="nb" style="width: 460px; height: 150px;"></textarea>
                </div>

                <!-- /.form-group -->
                <div class="form-group">
                    <label for="exampleInputPassword1">Rencana Teknik</label><br>
                    <textarea name="rencana_teknik" style="width: 460px; height: 150px;"></textarea>
                </div>
                
                <!-- <div class="form-group">
                  <label for="exampleInputPassword1">Rata - Rata Tarif Tenaga Listrik</label>
                    <input type="text" class="form-control" name="ttl" placeholder="Tarif Tenaga Listrik" required>
                </div> -->

                  <!-- <div class="form-group">
                   <label for="exampleInputPassword1">Biaya Pokok Produksi</label>
                    <input type="text" class="form-control" name="bpp" placeholder="Biaya Pokok Produksi" required>
                </div> -->

             <!--  <div class="form-group">
                    <label for="exampleInputPassword1">Biaya Penyambungan</label>
                    <input type="text" class="form-control" name="biaya_penyambungan" placeholder="Biaya Penyambungan" required>
                </div> -->

               <!--  <div class="form-group">
                    <label for="exampleInputPassword1">Nilai Investasi</label>
                    <input type="text" class="form-control" name="nilai_investasi" placeholder="Nilai Investasi" required>
                </div> -->

                <!-- <div class="form-group">
                   <label for="exampleInputPassword1">Total Anggaran UID</label>
                    <input type="text" class="form-control" name="total_anggaran_uid" placeholder="Total Anggaran UID" required>
                </div>

                <div class="form-group">
                   <label for="exampleInputPassword1">Total Anggaran Unit</label>
                    <input type="text" class="form-control" name="total_anggaran_unit" placeholder="Total Anggaran Unit" required>
                </div>

                <div class="form-group">
                   <label for="exampleInputPassword1">Total Anggaran Jasa & Errect</label>
                    <input type="text" class="form-control" name="total_anggaran_errect" placeholder="Total Anggaran Errect" required>
                </div> -->

                <div class="form-group">
                     <label for="exampleInputPassword1">Umur Aset (Rata - Rata Umur Aset PLN Adalah 25 Tahun)</label>
                    <input type="text" class="form-control" name="umur_aset" placeholder="Umur Aset" required>
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1">Jam Nyala Perbulan (Rata - Rata Jam Nyala Sesuai Tarif)</label>
                    <input type="text" class="form-control" name="jam_nyala" placeholder="Jam Nyala" required>
                </div>
              
               <div class="form-group">
                    <label for="exampleInputPassword1">SAIFI GAIN Instan (Perhitungan Menggunakan Etap)</label>
                    <input type="text" class="form-control" name="saifi" placeholder="SAIFI GAIN">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="exampleInputPassword1">SAIDI GAIN Instan (Perhitungan Menggunakan Etap)</label>
                    <input type="text" class="form-control" name="saidi" placeholder="SAIDI GAIN">
                </div>
              
                <div class="form-group">
                   <label for="exampleInputPassword1">ENS Saving Instan (Perhitungan Menggunakan Etap)</label>
                    <input type="text" class="form-control" name="ENS_saving" placeholder="ENS Saving">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="exampleInputPassword1">Loss Saving Instan (Perhitungan Menggunakan Etap)</label>
                    <input type="text" class="form-control" name="loss_saving" placeholder="loss saving">
                </div>
               
                <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Biaya O&M Pertahun (Rata - Rata Biaya Pemeliharaan Adalah 2 %)</label>
                    <input type="text" class="form-control" name="biaya_om" placeholder="Biaya O&M" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Required ROE (Standar ROE PLN Adalah 13 %)</label>
                    <input type="text" class="form-control" name="roe" placeholder="ROE" required>
                </div>
                
                <div class="form-group">
                   <label for="exampleInputPassword1">Interest Rate (Standar IR PLN Adalah 12 %)</label>
                    <input type="text" class="form-control" name="interest_rate" placeholder="IR" required>
                </div> -->
               
                <!--  <div class="form-group">
                   <label for="exampleInputPassword1">NPV</label>
                    <input type="text" class="form-control" name="npv" placeholder="NPV" required>
                </div>
                
                <div class="form-group">
                   <label for="exampleInputPassword1">IRR</label>
                    <input type="text" class="form-control" name="irr" placeholder="IRR" required>
                </div>

                 <div class="form-group">
                   <label for="exampleInputPassword1">Payback</label>
                    <input type="text" class="form-control" name="payback" placeholder="Payback" required>
                </div> -->

              <div class="row">

               <div class="col-md-12">
                  <div class="form-group">
                  <label>Kirim Ke</label>
                </div>
                </div>

              <div class="col-md-3">
                  <div class="form-group">
                  <select class="form-control select2" style="width: 100%;" name="unit_induk_pic" id="unit_induk_pic">
                    <option>-Select Unit Induk-</option>
                      <?php foreach ($unitinduk as $row) { ?>
                        <option value="<?php echo $row->id_unit_induk;?>"><?php echo $row->nama_unit_induk; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>
                <!-- /.form-group -->
                <div class="col-md-3">
                <div class="form-group">
                  <select class="form-control select2" name="unit_pic" id="unit_pic" style="width: 100%;">
                      <option>-Select Unit Pelaksana-</option>
                  </select>
                </div>
                </div>

                <div class="col-md-3">
                <div class="form-group">
                     <select class="form-control" name="unit_layanan_pic" id="unit_layanan_pic">
                        <option>-Select Unit Layanan / Bagian-</option>
                     </select>
                </div>
                </div>

                <div class="col-md-3">
                <div class="form-group">
                    <select class="form-control" name="user_pic" id="user_pic">
                      <option>-Select Nama PIC-</option>
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
                    <select class="form-control" name="status">
                      <option value="2">-Status-</option>
                      <?php

                        foreach ($status as $dat) {
                        
                      ?>
                      <option value="<?= $dat['id_status']; ?>"><?= $dat['uraian_status']; ?></option>
                      <?php 
                        }
                      ?>
                    </select>
                </div>
                </div>

                </div>
              
              
             <div class="row">
              <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Awal</label>
                     <select class="form-control" name="tarif_awal1" id="tarif_awal1">
                     <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal</label>
                   <select class="form-control" name="daya_awal1" id="daya_awal1">
                       <option value="0">-Select Daya-</option>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir</label>
                    <select class="form-control" name="tarif_akhir1" id="tarif_akhir1">
                       <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir</label>
                    <select class="form-control" name="daya_akhir1" id="daya_akhir1">
                     <option value="0">-Select Daya-</option>
                  </select>
                </div>
                </div> 

                 <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan">
                      <option value="1">-Pilih Layanan-</option>
                      <?php

                        foreach ($layanan as $dat) {
                        
                      ?>
                      <option value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>
                      <?php 
                        }
                      ?>
                    </select>
                </div>
                </div>

                 <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan</label>
                    <input type="number" class="form-control" name="jml_pel1" value="0">
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
                       <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>                

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal 2</label>
                     <select class="form-control" name="daya_awal2" id="daya_awal2">
                      <option value="0">-Select Daya-</option>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir 2</label>
                    <select class="form-control" name="tarif_akhir2" id="tarif_akhir2">
                       <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div> 
                </div> 

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir 2</label>
                    <select class="form-control" name="daya_akhir2" id="daya_akhir2">
                      <option value="0">-Select Daya-</option>
                  </select>
                </div> 
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan2">
                      <option value="1">-Pilih Layanan-</option>
                      <?php

                        foreach ($layanan as $dat) {
                        
                      ?>
                      <option value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>
                      <?php 
                        }
                      ?>
                    </select>
                </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Jumlah Pelanggan 2</label>
                      <input type="number" class="form-control" name="jml_pel2" value="0">
                    </div>
                 </div>
  </div>

<div class="row">
              <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Awal 3</label>
                    <select class="form-control" name="tarif_awal3" id="tarif_awal3">
                       <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>
              
              <div class="col-md-2">
              <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal 3</label>
                    <select class="form-control" name="daya_awal3" id="daya_awal3">
                      <option value="0">-Select Daya-</option>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir 3</label>
                    <select class="form-control" name="tarif_akhir3" id="tarif_akhir3">
                      <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir 3</label>
                   <select class="form-control" name="daya_akhir3" id="daya_akhir3">
                     <option value="0">-Select Daya-</option>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan3">
                      <option value="1">-Pilih Layanan-</option>
                      <?php

                        foreach ($layanan as $dat) {
                        
                      ?>
                      <option value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>
                      <?php 
                        }
                      ?>
                    </select>
                </div>
                </div>

                 <div class="col-md-2">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Jumlah Pelanggan 3</label>
                      <input type="number" class="form-control" name="jml_pel3" value="0">
                    </div>
                 </div>
</div>

        <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Awal 4</label>
                    <select class="form-control" name="tarif_awal4" id="tarif_awal4">
                       <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>

                 <div class="col-md-2">
                  <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal 4</label>
                    <select class="form-control" name="daya_awal4" id="daya_awal4">
                      <option value="0">-Select Daya-</option>
                  </select>
                </div>
                </div>

                 <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir 4</label>
                   <select class="form-control" name="tarif_akhir4" id="tarif_akhir4">
                      <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>

                 <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir 4</label>
                    <select class="form-control" name="daya_akhir4" id="daya_akhir4">
                      <option value="0">-Select Daya-</option>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan4">
                      <option value="1">-Pilih Layanan-</option>
                      <?php

                        foreach ($layanan as $dat) {
                        
                      ?>
                      <option value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>
                      <?php 
                        }
                      ?>
                    </select>
                </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Jumlah Pelanggan 4</label>
                      <input type="number" class="form-control" name="jml_pel4" value="0">
                    </div>
                 </div>

</div>

<div class="row">
              <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Awal 5</label>
                    <select class="form-control" name="tarif_awal5" id="tarif_awal5">
                      <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal 5</label>
                   <select class="form-control" name="daya_awal5" id="daya_awal5">
                      <option value="0">-Select Daya-</option>
                  </select>
                </div>
                </div>

                 <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir 5</label>
                    <select class="form-control" name="tarif_akhir5" id="tarif_akhir5">
                       <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir 5</label>
                   <select class="form-control" name="daya_akhir5" id="daya_akhir5">
                      <option value="0">-Select Daya-</option>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan5">
                      <option value="1">-Pilih Layanan-</option>
                      <?php

                        foreach ($layanan as $dat) {
                        
                      ?>
                      <option value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>
                      <?php 
                        }
                      ?>
                    </select>
                </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Jumlah Pelanggan 5</label>
                      <input type="number" class="form-control" name="jml_pel5" value="0">
                    </div>
                 </div>

</div>
         
         <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Awal 6</label>
                    <select class="form-control" name="tarif_awal6" id="tarif_awal6">
                       <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal 6</label>
                   <select class="form-control" name="daya_awal6" id="daya_awal6">
                      <option value="0">-Select Daya-</option>
                  </select>
                </div>
                </div>
              
              <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir 6</label>
                    <select class="form-control" name="tarif_akhir6" id="tarif_akhir6">
                       <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>
             
             <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir 6</label>
                    <select class="form-control" name="daya_akhir6" id="daya_akhir6">
                     <option value="0">-Select Daya-</option>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan6">
                      <option value="1">-Pilih Layanan-</option>
                      <?php

                        foreach ($layanan as $dat) {
                        
                      ?>
                      <option value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>
                      <?php 
                        }
                      ?>
                    </select>
                </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Jumlah Pelanggan 6</label>
                      <input type="number" class="form-control" name="jml_pel6" value="0">
                    </div>
                 </div>

</div>
          
<div class="row">
              <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Awal 7</label>
                    <select class="form-control" name="tarif_awal7" id="tarif_awal7">
                      <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal 7</label>
                    <select class="form-control" name="daya_awal7" id="daya_awal7">
                      <option value="0">-Select Daya-</option>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir 7</label>
                    <select class="form-control" name="tarif_akhir7" id="tarif_akhir7">
                      <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir 7</label>
                   <select class="form-control" name="daya_akhir7" id="daya_akhir7">
                      <option value="0">-Select Daya-</option>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan7">
                      <option value="1">-Pilih Layanan-</option>
                      <?php

                        foreach ($layanan as $dat) {
                        
                      ?>
                      <option value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>
                      <?php 
                        }
                      ?>
                    </select>
                </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Jumlah Pelanggan 7</label>
                      <input type="number" class="form-control" name="jml_pel7" value="0">
                    </div>
                 </div>

</div>

<div class="row">
              <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Awal 8</label>
                    <select class="form-control" name="tarif_awal8" id="tarif_awal8">
                      <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>

              <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal 8</label>
                    <select class="form-control" name="daya_awal8" id="daya_awal8">
                      <option value="0">-Select Daya-</option>
                  </select>
                </div>
                </div>
            
            <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir 8</label>
                    <select class="form-control" name="tarif_akhir8" id="tarif_akhir8">
                       <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>
              
              <div class="col-md-2">
              <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir 8</label>
                    <select class="form-control" name="daya_akhir8" id="daya_akhir8">
                     <option value="0">-Select Daya-</option>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan8">
                      <option value="1">-Pilih Layanan-</option>
                      <?php

                        foreach ($layanan as $dat) {
                        
                      ?>
                      <option value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>
                      <?php 
                        }
                      ?>
                    </select>
                </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Jumlah Pelanggan 8</label>
                      <input type="number" class="form-control" name="jml_pel8" value="0">
                    </div>
                 </div>

</div>
           
<div class="row">
              <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Awal 9</label>
                    <select class="form-control" name="tarif_awal9" id="tarif_awal9">
                       <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal 9</label>
                    <select class="form-control" name="daya_awal9" id="daya_awal9">
                      <option value="0">-Select Daya-</option>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir 9</label>
                   <select class="form-control" name="tarif_akhir9" id="tarif_akhir9">
                      <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir 9</label>
                    <select class="form-control" name="daya_akhir9" id="daya_akhir9">
                      <option value="0">-Select Daya-</option>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan9">
                      <option value="1">-Pilih Layanan-</option>
                      <?php

                        foreach ($layanan as $dat) {
                        
                      ?>
                      <option value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>
                      <?php 
                        }
                      ?>
                    </select>
                </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Jumlah Pelanggan 9</label>
                      <input type="number" class="form-control" name="jml_pel9" value="0">
                    </div>
                 </div>
</div>

<div class="row">
              <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Awal 10</label>
                   <select class="form-control" name="tarif_awal10" id="tarif_awal10">
                      <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>

                 <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal 10</label>
                    <select class="form-control" name="daya_awal10" id="daya_awal10">
                      <option value="0">-Select Daya-</option>
                  </select>
                </div>
                </div>
              
               <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir 10</label>
                    <select class="form-control" name="tarif_akhir10" id="tarif_akhir10">
                      <option value="0">-Select Tarif-</option>
                      <?php foreach ($tarif as $row) { ?>
                        <option value="<?php echo $row->id_tarif; ?>"><?php echo $row->nama_tarif; ?></option>
                      <?php } ?>
                  </select>
                </div>
                </div>
           
              <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir 10</label>
                   <select class="form-control" name="daya_akhir10" id="daya_akhir10">
                      <option value="0">-Select Daya-</option>
                  </select>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label>
                    <select class="form-control" name="layanan10">
                      <option value="1">-Pilih Layanan-</option>
                      <?php

                        foreach ($layanan as $dat) {
                        
                      ?>
                      <option value="<?= $dat['id_layanan_khusus']; ?>"><?= $dat['uraian']; ?></option>
                      <?php 
                        }
                      ?>
                    </select>
                </div>
                </div>

                 <div class="col-md-2">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Jumlah pel 10</label>
                      <input type="number" class="form-control" name="jml_pel10" value="0">
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


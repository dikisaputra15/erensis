 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>pdf kkp</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
		.card-title {
			text-align:center;
			} 
		.form-control{
			width: 350px;
		}

		.table{
			border:1;
		}

		#customers {
		  font-family: Arial, Helvetica, sans-serif;
		  font-size: 10px;
		  border-collapse: collapse;
		  width: 100%;
		}

		#customers td, #customers th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: black;
		  color: white;
		}
		
	</style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
 
<div class="content-wrapper">

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">KKP</h3>
              </div>
              <div class="card-body">
              		<div class="form-group">
                    <label for="exampleInputEmail1" class="label">Nama Pekerjaan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $utama['nama_pekerjaan']; ?>" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Program</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $utama['nama_program']; ?>" readonly>
                  </div>

                <?php  if($utama['jml_pelanggan'] > 0){ ?>
                <div class="row">
              <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Awal</label><br>
                     <input type="text" value="<?= $tarif_awal['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal</label><br>
                   <input type="text" value="<?= $daya_awal['daya']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir</label><br>
                    <input type="text" value="<?= $tarif_akhir['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir</label><br>
                    <input type="text" value="<?= $daya_akhir['daya']; ?>" class="form-control" readonly>
                </div>
                </div> 

                 <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label><br>
                    <input type="text" value="<?= $layanan['uraian']; ?>" class="form-control" readonly>
                </div>
                </div>

                 <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan</label><br>
                    <input type="text" class="form-control" value="<?= $utama['jml_pelanggan']; ?>" readonly>
                    </div>
                 </div>

                </div>
                <?php } ?>

                <?php  if($utama['jml_pelanggan2'] > 0){ ?>
                <div class="row">
              <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Awal2</label><br>
                     <input type="text" value="<?= $tarif_awal2['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal2</label><br>
                   <input type="text" value="<?= $daya_awal2['daya']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir2</label><br>
                    <input type="text" value="<?= $tarif_akhir2['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir2</label><br>
                    <input type="text" value="<?= $daya_akhir2['daya']; ?>" class="form-control" readonly>
                </div>
                </div> 

                 <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label><br>
                    <input type="text" value="<?= $layanan2['uraian']; ?>" class="form-control" readonly>
                </div>
                </div>

                 <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan</label><br>
                    <input type="text" class="form-control" value="<?= $utama['jml_pelanggan2']; ?>" readonly>
                    </div>
                 </div>

                </div>
                <?php } ?>

                <?php  if($utama['jml_pelanggan3'] > 0){ ?>
                <div class="row">
              <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Awal3</label><br>
                     <input type="text" value="<?= $tarif_awal3['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal3</label><br>
                   <input type="text" value="<?= $daya_awal3['daya']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir3</label><br>
                    <input type="text" value="<?= $tarif_akhir3['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir3</label><br>
                    <input type="text" value="<?= $daya_akhir3['daya']; ?>" class="form-control" readonly>
                </div>
                </div> 

                 <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label><br>
                    <input type="text" value="<?= $layanan3['uraian']; ?>" class="form-control" readonly>
                </div>
                </div>

                 <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan</label><br>
                    <input type="text" class="form-control" value="<?= $utama['jml_pelanggan3']; ?>" readonly>
                    </div>
                 </div>

                </div>
                <?php } ?>

                <?php  if($utama['jml_pelanggan4'] > 0){ ?>
                <div class="row">
              <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Awa4l</label><br>
                     <input type="text" value="<?= $tarif_awal4['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal</label><br>
                   <input type="text" value="<?= $daya_awal4['daya']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir</label><br>
                    <input type="text" value="<?= $tarif_akhir4['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir</label><br>
                    <input type="text" value="<?= $daya_akhir4['daya']; ?>" class="form-control" readonly>
                </div>
                </div> 

                 <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label><br>
                    <input type="text" value="<?= $layanan4['uraian']; ?>" class="form-control" readonly>
                </div>
                </div>

                 <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan</label><br>
                    <input type="text" class="form-control" value="<?= $utama['jml_pelanggan4']; ?>" readonly>
                    </div>
                 </div>

                </div>
                <?php } ?>

                <?php  if($utama['jml_pelanggan5'] > 0){ ?>
                <div class="row">
              <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Awal</label><br>
                     <input type="text" value="<?= $tarif_awal5['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal</label><br>
                   <input type="text" value="<?= $daya_awal5['daya']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir</label><br>
                    <input type="text" value="<?= $tarif_akhir5['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir</label><br>
                    <input type="text" value="<?= $daya_akhir5['daya']; ?>" class="form-control" readonly>
                </div>
                </div> 

                 <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label><br>
                    <input type="text" value="<?= $layanan5['uraian']; ?>" class="form-control" readonly>
                </div>
                </div>

                 <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan</label><br>
                    <input type="text" class="form-control" value="<?= $utama['jml_pelanggan5']; ?>" readonly>
                    </div>
                 </div>

                </div>
                <?php } ?>

                <?php  if($utama['jml_pelanggan6'] > 0){ ?>
                <div class="row">
              <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Awal</label><br>
                     <input type="text" value="<?= $tarif_awal6['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal</label><br>
                   <input type="text" value="<?= $daya_awal6['daya']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir</label><br>
                    <input type="text" value="<?= $tarif_akhir6['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir</label><br>
                    <input type="text" value="<?= $daya_akhir6['daya']; ?>" class="form-control" readonly>
                </div>
                </div> 

                 <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label><br>
                    <input type="text" value="<?= $layanan6['uraian']; ?>" class="form-control" readonly>
                </div>
                </div>

                 <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan</label><br>
                    <input type="text" class="form-control" value="<?= $utama['jml_pelanggan6']; ?>" readonly>
                    </div>
                 </div>

                </div>
                <?php } ?>

                <?php  if($utama['jml_pelanggan7'] > 0){ ?>
                <div class="row">
              <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Awal</label><br>
                     <input type="text" value="<?= $tarif_awal7['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal</label><br>
                   <input type="text" value="<?= $daya_awal7['daya']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir</label><br>
                    <input type="text" value="<?= $tarif_akhir7['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir</label><br>
                    <input type="text" value="<?= $daya_akhir7['daya']; ?>" class="form-control" readonly>
                </div>
                </div> 

                 <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label><br>
                    <input type="text" value="<?= $layanan7['uraian']; ?>" class="form-control" readonly>
                </div>
                </div>

                 <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan</label><br>
                    <input type="text" class="form-control" value="<?= $utama['jml_pelanggan7']; ?>" readonly>
                    </div>
                 </div>

                </div>
                <?php } ?>

                <?php  if($utama['jml_pelanggan8'] > 0){ ?>
                <div class="row">
              <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Awal</label><br>
                     <input type="text" value="<?= $tarif_awal8['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal</label><br>
                   <input type="text" value="<?= $daya_awal8['daya']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir</label><br>
                    <input type="text" value="<?= $tarif_akhir8['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir</label><br>
                    <input type="text" value="<?= $daya_akhir8['daya']; ?>" class="form-control" readonly>
                </div>
                </div> 

                 <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label><br>
                    <input type="text" value="<?= $layanan8['uraian']; ?>" class="form-control" readonly>
                </div>
                </div>

                 <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan</label><br>
                    <input type="text" class="form-control" value="<?= $utama['jml_pelanggan8']; ?>" readonly>
                    </div>
                 </div>

                </div>
                <?php } ?>

                <?php  if($utama['jml_pelanggan9'] > 0){ ?>
                <div class="row">
              <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Awal</label><br>
                     <input type="text" value="<?= $tarif_awal9['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal</label><br>
                   <input type="text" value="<?= $daya_awal9['daya']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir</label><br>
                    <input type="text" value="<?= $tarif_akhir9['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir</label><br>
                    <input type="text" value="<?= $daya_akhir9['daya']; ?>" class="form-control" readonly>
                </div>
                </div> 

                 <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label><br>
                    <input type="text" value="<?= $layanan9['uraian']; ?>" class="form-control" readonly>
                </div>
                </div>

                 <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan</label><br>
                    <input type="text" class="form-control" value="<?= $utama['jml_pelanggan9']; ?>" readonly>
                    </div>
                 </div>

                </div>
                <?php } ?>

                <?php  if($utama['jml_pelanggan10'] > 0){ ?>
                <div class="row">
              <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Awal</label><br>
                     <input type="text" value="<?= $tarif_awal10['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Daya Awal</label><br>
                   <input type="text" value="<?= $daya_awal10['daya']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Tarif Akhir</label><br>
                    <input type="text" value="<?= $tarif_akhir10['nama_tarif']; ?>" class="form-control" readonly>
                </div>
                </div>

                <div class="col-md-2">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Daya Akhir</label><br>
                    <input type="text" value="<?= $daya_akhir10['daya']; ?>" class="form-control" readonly>
                </div>
                </div> 

                 <div class="col-md-2">
                <div class="form-group">
                   <label for="exampleInputPassword1">Layanan</label><br>
                    <input type="text" value="<?= $layanan10['uraian']; ?>" class="form-control" readonly>
                </div>
                </div>

                 <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Pelanggan</label><br>
                    <input type="text" class="form-control" value="<?= $utama['jml_pelanggan10']; ?>" readonly>
                    </div>
                 </div>

                </div>
                <?php } ?>
                  <?php 
                  $jml = $utama['jml_pelanggan']+$utama['jml_pelanggan2']+$utama['jml_pelanggan3']+$utama['jml_pelanggan4']+$utama['jml_pelanggan5']+$utama['jml_pelanggan6']+$utama['jml_pelanggan7']+$utama['jml_pelanggan8']+$utama['jml_pelanggan9']+$utama['jml_pelanggan10'];
                  if($jml >0 ){?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Biaya Penyambungan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Rp. <?= number_format($utama['biaya_penyambungan'], 2, ",", ".") ?>" readonly>
                  </div>
                  <?php } ?>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Biaya Investasi</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Rp. <?= number_format($utama['nilai_investasi'], 2, ",", ".") ?>" readonly>
                  </div>

                  <?php

                  $rasio = 100;
                  if ($utama['nilai_investasi']==0){$rasio = 100;}else{$rasio=100 * $utama['biaya_penyambungan']/ $utama['nilai_investasi'];}
                  ?>

                  <?php if($jml >0 ){?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Rasio BP / RAB</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= number_format($rasio , 2, ",", "."); ?> %" readonly>
                  </div>
                  <?php } ?>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Payback</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= number_format($utama['payback'], 2, ",", "."); ?> Tahun" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Benefit to Cost Rasio</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $utama['cost_rasio']; ?> %" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">IRR</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $utama['irr']; ?> %" readonly>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">NPV</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Rp. <?= number_format($utama['npv'], 2, ",", ".") ?>" readonly>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">RWACC</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $utama['rwacc']; ?> %" readonly>
                  </div><br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Perhitungan KKF Project : </label>
                  </div>
                 
                   <table id="customers">
                    <thead class="table-dark">
                      <tr>
                          <th>YEAR</th>
                          <th>REVENUE</th>
                          <th>TOTAL REVENUE</th>
                          <th>NPV</th>
                          <th>TOTAL NPV</th>
                          <th>YEAR</th>
                          <th>PAY BACK</th>
                          <th>FACTOR PV</th>
                      </tr>
                    </thead>
                    
                    <?php
                    $x = 1;  
                    $cost3  = 0;

                    $hasildate = $utama['tgl_permohonan_pelanggan'];
                    $explode = explode("-", $hasildate);
                    $tahun = $explode[0]; 

                    $ttllwbp = $utama['ttl_lwbp'];
                    $bpp = $utama['bpp'];

                    $disc_rate = $utama['interest_rate'];
                    $inv = $utama['nilai_investasi'];
                    
                    $revenue = 0;
                    
                    $revenue_kum = 0;
                    
                    $factor_pv = 1/pow((1+$disc_rate),$x-1);
                    
                    $pay_back = $utama['biaya_penyambungan'] - $inv;
                    $pay_back = $pay_back + $cost3;
                    
                    $pv = 0;
                    $pv_total = $cost3 + $utama['biaya_penyambungan'] - $inv;
                    
                    ?>
                    <tr>
                     <td align=center><?php echo $x-1; ?></td>
                     <td align=right><?php echo "Rp. ".number_format($revenue, 0, ",", "."); ?></td>
                     <td align=right><?php echo "Rp. ".number_format($revenue_kum, 0, ",", "."); ?></td>
                     <td align=right><?php echo "Rp. ".number_format($pv, 0, ",", "."); ?></td>
                     <td align=right><?php echo "Rp. ".number_format($pv_total, 0, ",", "."); ?></td>
                     <td align=center><?php echo $tahun; ?></td>
                     <td align=right><?php echo "Rp. ".number_format($pay_back, 0, ",", "."); ?></td>
                     <td align=center><?php echo number_format($factor_pv, 3, ",", "."); ?></td>
                    </tr>
                    <?php

                    while($x <= $utama['umur_aset']) {
                    $cost3 = $cost3 + ((

                      $utama['gain_penyambungan']+

                      (($ttllwbp-$bpp)*8640*$utama['ens'])+
                      (($ttllwbp-$bpp)*8640*$utama['losses'])-$utama['biaya_om'])*(1/pow((1+($disc_rate/100)),$x)));

                    $x++;
                    
                    $revenue = $utama['gain_penyambungan']+

                    (($ttllwbp-$bpp)*8640*$utama['ens'])+
                    (($ttllwbp-$bpp)*8640*$utama['losses'])-$utama['biaya_om'];

                    $revenue_kum = $revenue_kum + $revenue;
                    
                    $factor_pv = 1/pow((1+($disc_rate/100)),$x-1);
                    
                    $pay_back = $pay_back + $revenue;
                    
                    $pv = $revenue * $factor_pv;
                    
                    $pv_total = $cost3 + $utama['biaya_penyambungan'] - $utama['nilai_investasi'];
                    ?>
                    <tr>
                     <td align=center><?php echo $x-1; ?></td>
                     <td align=right><?php echo "Rp. ".number_format($revenue, 0, ",", "."); ?></td>
                     <td align=right><?php echo "Rp. ".number_format($revenue_kum, 0, ",", "."); ?></td>
                     <td align=right><?php echo "Rp. ".number_format($pv, 0, ",", "."); ?></td>
                     <td align=right><?php echo "Rp. ".number_format($pv_total, 0, ",", "."); ?></td>
                     <td align=center><?php echo $tahun+$x-1; ?></td>
                     <td align=right><?php echo "Rp. ".number_format($pay_back, 0, ",", "."); ?></td>
                     <td align=center><?php echo number_format($factor_pv, 3, ",", "."); ?></td>
                    </tr>
                    <?php
                    } 
                    ?>
                   </table>
                    
              </div><br><br>

              <?php  if($jml != 0 && $rasio < 100){ ?>
              <div class="card-body">
              		<div class="form-group">
                    <label for="exampleInputEmail1">Rekomendasi :</label><br>
                  </div>

                  <?php
                    $daya_awal1 = $daya_awal['daya'];
                    $daya_awal2 = $daya_awal2['daya'];
                    $daya_awal3 = $daya_awal3['daya'];
                    $daya_awal4 = $daya_awal4['daya'];
                    $daya_awal5 = $daya_awal5['daya'];
                    $daya_awal6 = $daya_awal6['daya'];
                    $daya_awal7 = $daya_awal7['daya'];
                    $daya_awal8 = $daya_awal8['daya'];
                    $daya_awal9 = $daya_awal9['daya'];
                    $daya_awal10 = $daya_awal10['daya'];

                    $daya_akhir1 = $daya_akhir['daya'];
                    $daya_akhir2 = $daya_akhir2['daya'];
                    $daya_akhir3 = $daya_akhir3['daya'];
                    $daya_akhir4 = $daya_akhir4['daya'];
                    $daya_akhir5 = $daya_akhir5['daya'];
                    $daya_akhir6 = $daya_akhir6['daya'];
                    $daya_akhir7 = $daya_akhir7['daya'];
                    $daya_akhir8 = $daya_akhir8['daya'];
                    $daya_akhir9 = $daya_akhir9['daya'];
                    $daya_akhir10 = $daya_akhir10['daya'];

                    $jumlah_pelanggan1 = $utama['jml_pelanggan'];
                    $jumlah_pelanggan2 = $utama['jml_pelanggan2'];
                    $jumlah_pelanggan3 = $utama['jml_pelanggan3'];
                    $jumlah_pelanggan4 = $utama['jml_pelanggan4'];
                    $jumlah_pelanggan5 = $utama['jml_pelanggan5'];
                    $jumlah_pelanggan6 = $utama['jml_pelanggan6'];
                    $jumlah_pelanggan7 = $utama['jml_pelanggan7'];
                    $jumlah_pelanggan8 = $utama['jml_pelanggan8'];
                    $jumlah_pelanggan9 = $utama['jml_pelanggan9'];
                    $jumlah_pelanggan10 = $utama['jml_pelanggan10'];

                    $rp_tarif1 = $utama['rp_tarif'];
                    $rp_tarif2 = $utama['rp_tarif2'];
                    $rp_tarif3 = $utama['rp_tarif3'];
                    $rp_tarif4 = $utama['rp_tarif4'];
                    $rp_tarif5 = $utama['rp_tarif5'];
                    $rp_tarif6 = $utama['rp_tarif6'];
                    $rp_tarif7 = $utama['rp_tarif7'];
                    $rp_tarif8 = $utama['rp_tarif8'];
                    $rp_tarif9 = $utama['rp_tarif9'];
                    $rp_tarif10 = $utama['rp_tarif10'];

                    $data[1]=250; $data2[1]=60000;
                    $data[2]=450; $data2[2]=421000;
                    $data[3]=900; $data2[3]=843000;
                    $data[4]=1300; $data2[4]=1218000;
                    $data[5]=2200; $data2[5]=2062000;
                    $data[6]=3500; $data2[6]=3391500;
                    $data[7]=4400; $data2[7]=4263600;
                    $data[8]=5500; $data2[8]=5329500;
                    $data[9]=6600; $data2[9]=6395400;
                    $data[10]=7700; $data2[10]=7461300;
                    $data[11]=10600; $data2[11]=10271400;
                    $data[12]=11000; $data2[12]=10659000;
                    $data[13]=13200; $data2[13]=12790800;
                    $data[14]=16500; $data2[14]=15988500;
                    $data[15]=23000; $data2[15]=22287000;
                    $data[16]=33000; $data2[16]=31977000;
                    $data[17]=41500; $data2[17]=40213500;
                    $data[18]=53000; $data2[18]=51357000;
                    $data[19]=66000; $data2[19]=63954000;
                    $data[20]=82500; $data2[20]=79942500;
                    $data[21]=105000; $data2[21]=101745000;
                    $data[22]=131000; $data2[22]=126939000;
                    $data[23]=147000; $data2[23]=142443000;
                    $data[24]=164000; $data2[24]=158916000;
                    $data[25]=197000; $data2[25]=190893000;
                    $data[26]=210000; $data2[26]=132510000;
                    $data[27]=240000; $data2[27]=151440000;
                    $data[28]=345000; $data2[28]=217695000;
                    $data[29]=415000; $data2[29]=261865000;
                    $data[30]=520000; $data2[30]=328120000;
                    $data[31]=555000; $data2[31]=350205000;
                    $data[32]=625000; $data2[32]=394375000;
                    $data[33]=725000; $data2[33]=457475000;
                    $data[34]=865000; $data2[34]=545815000;
                    $data[35]=935000; $data2[35]=589985000;
                    $data[36]=1040000; $data2[36]=656240000;
                    $data[37]=1110000; $data2[37]=700410000;
                    $data[38]=1210000; $data2[38]=763510000;
                    $data[39]=1385000; $data2[39]=873935000;
                    $data[40]=1450000; $data2[40]=914950000;
                    $data[41]=1730000; $data2[41]=1091630000;
                    $data[42]=2075000; $data2[42]=1309325000;
                    $data[43]=2180000; $data2[43]=1375580000;
                    $data[44]=2200000; $data2[44]=1388200000;
                    $data[45]=2258000; $data2[45]=1424798000;
                    $data[46]=2500000; $data2[46]=1577500000;
                    $data[47]=2770000; $data2[47]=1747870000;
                    $data[48]=3000000; $data2[48]=1893000000;
                    $data[49]=3465000; $data2[49]=2186415000;
                    $data[50]=4330000; $data2[50]=2732230000;
                    $data[51]=5190000; $data2[51]=3274890000;
                    $data[52]=5540000; $data2[52]=3495740000;
                    $data[53]=6000000; $data2[53]=3786000000;
                    $data[54]=6055000; $data2[54]=3820705000;
                    $data[55]=6930000; $data2[55]=4372830000;
                    $data[56]=8660000; $data2[56]=5464460000;
                    $data[57]=9690000; $data2[57]=6114390000;
                    $data[58]=10000000; $data2[58]=6310000000;
                    $data[59]=10380000; $data2[59]=6549780000;
                    $data[60]=11000000; $data2[60]=6941000000;
                    $data[61]=12000000; $data2[61]=7572000000;
                    $data[62]=13800000; $data2[62]=8707800000;
                    $data[63]=15000000; $data2[63]=9465000000;
                    $data[64]=15280000; $data2[64]=9641680000;
                    $data[65]=15580000; $data2[65]=9830980000;
                    $data[66]=16000000; $data2[66]=10096000000;
                    $data[67]=16300000; $data2[67]=10285300000;
                    $data[68]=18580000; $data2[68]=11723980000;
                    $data[69]=18705000; $data2[69]=11802855000;
                    $data[70]=20000000; $data2[70]=12620000000;
                    $data[71]=22000000; $data2[71]=13882000000;
                    $data[72]=23000000; $data2[72]=14513000000;
                    $data[73]=23200000; $data2[73]=14639200000;
                    $data[74]=24500000; $data2[74]=15459500000;
                    $data[75]=25000000; $data2[75]=15775000000;
                    $data[76]=27700000; $data2[76]=17478700000;
                    $data[77]=29000000; $data2[77]=18299000000;
                    $data[78]=30000000; $data2[78]=16050000000;
                    $data[79]=31500000; $data2[79]=16852500000;
                    $data[80]=40000000; $data2[80]=21400000000;
                    $data[81]=45000000; $data2[81]=24075000000;
                    $data[82]=50000000; $data2[82]=26750000000;
                    $data[83]=60000000; $data2[83]=32100000000;
                    $data[84]=70000000; $data2[84]=37450000000;
                    $data[85]=80000000; $data2[85]=42800000000;
                    $data[86]=90000000; $data2[86]=48150000000;
                    $data[87]=97000000; $data2[87]=51895000000;
                    $data[88]=100000000; $data2[88]=53500000000;

                    $jml_pb = 0;
                    $jml_pd = 0;

                                        /////1 start
                    if($daya_awal1==0 && $daya_akhir1>0 && $jumlah_pelanggan1>0){
                      $jml_pb++;
                      $daya_awal_pb[$jml_pb]=$daya_awal1;
                      $daya_akhir_pb[$jml_pb]=$daya_akhir1;
                      $jumlah_pelanggan_pb[$jml_pb]=$jumlah_pelanggan1;
                      $rp_tarif_pb[$jml_pb]=$rp_tarif1;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir1==$data[$i]){
                          $bp_perva_pb[$jml_pb]=$data2[$i]/$daya_akhir1;
                        }
                      }
                    }
                    if($daya_awal1>0 && $daya_akhir1>0 && $jumlah_pelanggan1>0){
                      $jml_pd++;
                      $daya_awal_pd[$jml_pd]=$daya_awal1;
                      $daya_akhir_pd[$jml_pd]=$daya_akhir1;
                      $jumlah_pelanggan_pd[$jml_pd]=$jumlah_pelanggan1;
                      $rp_tarif_pd[$jml_pd]=$rp_tarif1;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir1==$data[$i]){
                          $bp_perva_pd[$jml_pd]=$data2[$i]/$daya_akhir1;
                        }
                      }
                    }
                    /////2 start
                    if($daya_awal2==0 && $daya_akhir2>0 && $jumlah_pelanggan2>0){
                      $jml_pb++;
                      $daya_awal_pb[$jml_pb]=$daya_awal2;
                      $daya_akhir_pb[$jml_pb]=$daya_akhir2;
                      $jumlah_pelanggan_pb[$jml_pb]=$jumlah_pelanggan2;
                      $rp_tarif_pb[$jml_pb]=$rp_tarif2;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir2==$data[$i]){
                          $bp_perva_pb[$jml_pb]=$data2[$i]/$daya_akhir2;
                        }
                      }
                    }
                    if($daya_awal2>0 && $daya_akhir2>0 && $jumlah_pelanggan2>0){
                      $jml_pd++;
                      $daya_awal_pd[$jml_pd]=$daya_awal2;
                      $daya_akhir_pd[$jml_pd]=$daya_akhir2;
                      $jumlah_pelanggan_pd[$jml_pd]=$jumlah_pelanggan2;
                      $rp_tarif_pd[$jml_pd]=$rp_tarif2;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir2==$data[$i]){
                          $bp_perva_pd[$jml_pd]=$data2[$i]/$daya_akhir2;
                        }
                      }
                    }
                    /////3 start
                    if($daya_awal3==0 && $daya_akhir3>0 && $jumlah_pelanggan3>0){
                      $jml_pb++;
                      $daya_awal_pb[$jml_pb]=$daya_awal3;
                      $daya_akhir_pb[$jml_pb]=$daya_akhir3;
                      $jumlah_pelanggan_pb[$jml_pb]=$jumlah_pelanggan3;
                      $rp_tarif_pb[$jml_pb]=$rp_tarif3;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir3==$data[$i]){
                          $bp_perva_pb[$jml_pb]=$data2[$i]/$daya_akhir3;
                        }
                      }
                    }
                    if($daya_awal3>0 && $daya_akhir3>0 && $jumlah_pelanggan3>0){
                      $jml_pd++;
                      $daya_awal_pd[$jml_pd]=$daya_awal3;
                      $daya_akhir_pd[$jml_pd]=$daya_akhir3;
                      $jumlah_pelanggan_pd[$jml_pd]=$jumlah_pelanggan3;
                      $rp_tarif_pd[$jml_pd]=$rp_tarif2;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir3==$data[$i]){
                          $bp_perva_pd[$jml_pd]=$data2[$i]/$daya_akhir3;
                        }
                      }
                    }
                    /////4 start
                    if($daya_awal4==0 && $daya_akhir4>0 && $jumlah_pelanggan4>0){
                      $jml_pb++;
                      $daya_awal_pb[$jml_pb]=$daya_awal4;
                      $daya_akhir_pb[$jml_pb]=$daya_akhir4;
                      $jumlah_pelanggan_pb[$jml_pb]=$jumlah_pelanggan4;
                      $rp_tarif_pb[$jml_pb]=$rp_tarif4;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir4==$data[$i]){
                          $bp_perva_pb[$jml_pb]=$data2[$i]/$daya_akhir4;
                        }
                      }
                    }
                    if($daya_awal4>0 && $daya_akhir4>0 && $jumlah_pelanggan4>0){
                      $jml_pd++;
                      $daya_awal_pd[$jml_pd]=$daya_awal4;
                      $daya_akhir_pd[$jml_pd]=$daya_akhir4;
                      $jumlah_pelanggan_pd[$jml_pd]=$jumlah_pelanggan4;
                      $rp_tarif_pd[$jml_pd]=$rp_tarif4;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir4==$data[$i]){
                          $bp_perva_pd[$jml_pd]=$data2[$i]/$daya_akhir4;
                        }
                      }
                    }
                    /////5 start
                    if($daya_awal5==0 && $daya_akhir5>0 && $jumlah_pelanggan5>0){
                      $jml_pb++;
                      $daya_awal_pb[$jml_pb]=$daya_awal5;
                      $daya_akhir_pb[$jml_pb]=$daya_akhir5;
                      $jumlah_pelanggan_pb[$jml_pb]=$jumlah_pelanggan5;
                      $rp_tarif_pb[$jml_pb]=$rp_tarif5;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir5==$data[$i]){
                          $bp_perva_pb[$jml_pb]=$data2[$i]/$daya_akhir5;
                        }
                      }
                    }
                    if($daya_awal5>0 && $daya_akhir5>0 && $jumlah_pelanggan5>0){
                      $jml_pd++;
                      $daya_awal_pd[$jml_pd]=$daya_awal5;
                      $daya_akhir_pd[$jml_pd]=$daya_akhir5;
                      $jumlah_pelanggan_pd[$jml_pd]=$jumlah_pelanggan5;
                      $rp_tarif_pd[$jml_pd]=$rp_tarif5;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir5==$data[$i]){
                          $bp_perva_pd[$jml_pd]=$data2[$i]/$daya_akhir5;
                        }
                      }
                    }
                    /////6 start
                    if($daya_awal6==0 && $daya_akhir6>0 && $jumlah_pelanggan6>0){
                      $jml_pb++;
                      $daya_awal_pb[$jml_pb]=$daya_awal6;
                      $daya_akhir_pb[$jml_pb]=$daya_akhir6;
                      $jumlah_pelanggan_pb[$jml_pb]=$jumlah_pelanggan6;
                      $rp_tarif_pb[$jml_pb]=$rp_tarif6;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir6==$data[$i]){
                          $bp_perva_pb[$jml_pb]=$data2[$i]/$daya_akhir6;
                        }
                      }
                    }
                    if($daya_awal6>0 && $daya_akhir6>0 && $jumlah_pelanggan6>0){
                      $jml_pd++;
                      $daya_awal_pd[$jml_pd]=$daya_awal6;
                      $daya_akhir_pd[$jml_pd]=$daya_akhir6;
                      $jumlah_pelanggan_pd[$jml_pd]=$jumlah_pelanggan6;
                      $rp_tarif_pd[$jml_pd]=$rp_tarif6;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir6==$data[$i]){
                          $bp_perva_pd[$jml_pd]=$data2[$i]/$daya_akhir6;
                        }
                      }
                    }
                    /////7 start
                    if($daya_awal7==0 && $daya_akhir7>0 && $jumlah_pelanggan7>0){
                      $jml_pb++;
                      $daya_awal_pb[$jml_pb]=$daya_awal7;
                      $daya_akhir_pb[$jml_pb]=$daya_akhir7;
                      $jumlah_pelanggan_pb[$jml_pb]=$jumlah_pelanggan7;
                      $rp_tarif_pb[$jml_pb]=$rp_tarif7;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir7==$data[$i]){
                          $bp_perva_pb[$jml_pb]=$data2[$i]/$daya_akhir7;
                        }
                      }
                    }
                    if($daya_awal7>0 && $daya_akhir7>0 && $jumlah_pelanggan7>0){
                      $jml_pd++;
                      $daya_awal_pd[$jml_pd]=$daya_awal7;
                      $daya_akhir_pd[$jml_pd]=$daya_akhir7;
                      $jumlah_pelanggan_pd[$jml_pd]=$jumlah_pelanggan7;
                      $rp_tarif_pd[$jml_pd]=$rp_tarif7;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir7==$data[$i]){
                          $bp_perva_pd[$jml_pd]=$data2[$i]/$daya_akhir7;
                        }
                      }
                    }
                    /////8 start
                    if($daya_awal8==0 && $daya_akhir8>0 && $jumlah_pelanggan8>0){
                      $jml_pb++;
                      $daya_awal_pb[$jml_pb]=$daya_awal8;
                      $daya_akhir_pb[$jml_pb]=$daya_akhir8;
                      $jumlah_pelanggan_pb[$jml_pb]=$jumlah_pelanggan8;
                      $rp_tarif_pb[$jml_pb]=$rp_tarif8;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir8==$data[$i]){
                          $bp_perva_pb[$jml_pb]=$data2[$i]/$daya_akhir8;
                        }
                      }
                    }
                    if($daya_awal8>0 && $daya_akhir8>0 && $jumlah_pelanggan8>0){
                      $jml_pd++;
                      $daya_awal_pd[$jml_pd]=$daya_awal8;
                      $daya_akhir_pd[$jml_pd]=$daya_akhir8;
                      $jumlah_pelanggan_pd[$jml_pd]=$jumlah_pelanggan8;
                      $rp_tarif_pd[$jml_pd]=$rp_tarif8;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir8==$data[$i]){
                          $bp_perva_pd[$jml_pd]=$data2[$i]/$daya_akhir8;
                        }
                      }
                    }
                    /////9 start
                    if($daya_awal9==0 && $daya_akhir9>0 && $jumlah_pelanggan9>0){
                      $jml_pb++;
                      $daya_awal_pb[$jml_pb]=$daya_awal9;
                      $daya_akhir_pb[$jml_pb]=$daya_akhir9;
                      $jumlah_pelanggan_pb[$jml_pb]=$jumlah_pelanggan9;
                      $rp_tarif_pb[$jml_pb]=$rp_tarif9;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir9==$data[$i]){
                          $bp_perva_pb[$jml_pb]=$data2[$i]/$daya_akhir9;
                        }
                      }
                    }
                    if($daya_awal9>0 && $daya_akhir9>0 && $jumlah_pelanggan9>0){
                      $jml_pd++;
                      $daya_awal_pd[$jml_pd]=$daya_awal9;
                      $daya_akhir_pd[$jml_pd]=$daya_akhir9;
                      $jumlah_pelanggan_pd[$jml_pd]=$jumlah_pelanggan9;
                      $rp_tarif_pd[$jml_pd]=$rp_tarif9;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir9==$data[$i]){
                          $bp_perva_pd[$jml_pd]=$data2[$i]/$daya_akhir9;
                        }
                      }
                    }
                    /////10 start
                    if($daya_awal10==0 && $daya_akhir10>0 && $jumlah_pelanggan10>0){
                      $jml_pb++;
                      $daya_awal_pb[$jml_pb]=$daya_awal10;
                      $daya_akhir_pb[$jml_pb]=$daya_akhir10;
                      $jumlah_pelanggan_pb[$jml_pb]=$jumlah_pelanggan10;
                      $rp_tarif_pb[$jml_pb]=$rp_tarif10;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir10==$data[$i]){
                          $bp_perva_pb[$jml_pb]=$data2[$i]/$daya_akhir10;
                        }
                      }
                    }
                    if($daya_awal10>0 && $daya_akhir10>0 && $jumlah_pelanggan10>0){
                      $jml_pd++;
                      $daya_awal_pd[$jml_pd]=$daya_awal10;
                      $daya_akhir_pd[$jml_pd]=$daya_akhir10;
                      $jumlah_pelanggan_pd[$jml_pd]=$jumlah_pelanggan10;
                      $rp_tarif_pd[$jml_pd]=$rp_tarif10;
                      $i=0;
                      for($i=1;$i<=88;$i++){
                        if($daya_akhir10==$data[$i]){
                          $bp_perva_pd[$jml_pd]=$data2[$i]/$daya_akhir10;
                        }
                      }
                    }

                    $nilai_investasi = $utama['nilai_investasi'];
                    $biaya_penyambungan_pb = 0;
                    $biaya_penyambungan_pd = 0;
                    $i=0;
                    for($i=1;$i<=$jml_pb;$i++){
                      $biaya_penyambungan_pb = $biaya_penyambungan_pb +($daya_akhir_pb[$i]*$bp_perva_pb[$i]*$jumlah_pelanggan_pb[$i]);
                    }

                    $i=0;
                    for($i=1;$i<=$jml_pd;$i++){
                      $biaya_penyambungan_pd = $biaya_penyambungan_pd +(($daya_akhir_pd[$i]-$daya_awal_pd[$i])*$bp_perva_pd[$i]*$jumlah_pelanggan_pd[$i]);
                    }

                    $biaya_penyambungan = $biaya_penyambungan_pb + $biaya_penyambungan_pd ;

                    $i=0;
                    for($i=1;$i<=$jml_pb;$i++){ 
                      $i2=0;
                      for($i2=1;$i2<=$jml_pb;$i2++){
                        if($daya_akhir_pb[$i] < $daya_akhir_pb[$i2]){   
                          $daya_awal_dumy = $daya_awal_pb[$i];
                          $daya_akhir_dumy = $daya_akhir_pb[$i];
                          $jml_pb_dumy = $jumlah_pelanggan_pb[$i];
                          $rp_tarif_pb_dumy = $rp_tarif_pb[$i];
                          $bp_perva_dumy = $bp_perva_pb[$i];
                          
                          $daya_awal_pb[$i] = $daya_awal_pb[$i2];
                          $daya_akhir_pb[$i] = $daya_akhir_pb[$i2];
                          $jumlah_pelanggan_pb[$i] = $jumlah_pelanggan_pb[$i2];
                          $rp_tarif_pb[$i] = $rp_tarif_pb[$i2];;
                          $bp_perva_pb[$i] = $bp_perva_pb[$i2];
                          
                          $daya_awal_pb[$i2] = $daya_awal_dumy;
                          $daya_akhir_pb[$i2] = $daya_akhir_dumy;
                          $jumlah_pelanggan_pb[$i2] = $jml_pb_dumy;
                          $rp_tarif_pb[$i2] = $rp_tarif_pb_dumy;
                          $bp_perva_pb[$i2] = $bp_perva_dumy;
                        }
                      }
                    }

                    $i=0;
                    for($i=1;$i<=$jml_pd;$i++){ 
                      $i2=0;
                      for($i2=1;$i2<=$jml_pd;$i2++){
                        if($daya_akhir_pd[$i] < $daya_akhir_pd[$i2]){   
                          $daya_awal_dumy = $daya_awal_pd[$i];
                          $daya_akhir_dumy = $daya_akhir_pd[$i];
                          $jml_pd_dumy = $jumlah_pelanggan_pd[$i];
                          $rp_tarif_pd_dumy = $rp_tarif_pd[$i];
                          $bp_perva_dumy = $bp_perva_pd[$i];
                          
                          $daya_awal_pd[$i] = $daya_awal_pd[$i2];
                          $daya_akhir_pd[$i] = $daya_akhir_pd[$i2];
                          $jumlah_pelanggan_pd[$i] = $jumlah_pelanggan_pd[$i2];
                          $rp_tarif_pd[$i] = $rp_tarif_pd[$i2];;
                          $bp_perva_pd[$i] = $bp_perva_pd[$i2];
                          
                          $daya_awal_pd[$i2] = $daya_awal_dumy;
                          $daya_akhir_pd[$i2] = $daya_akhir_dumy;
                          $jumlah_pelanggan_pd[$i2] = $jml_pd_dumy;
                          $rp_tarif_pd[$i2] = $rp_tarif_pd_dumy;;
                          $bp_perva_pd[$i2] = $bp_perva_dumy;
                        }
                      }
                    }

                    
                    if($biaya_penyambungan < $nilai_investasi){
                      $i=0;
                      for($i=1;$i<=$jml_pb;$i++){
                        $jml_dumy_pb[$i]=$jumlah_pelanggan_pb[$i];
                      }
                      for($i=1;$i<=$jml_pd;$i++){
                        $jml_dumy_pd[$i]=$jumlah_pelanggan_pd[$i];
                      }
                      $bp_ok = 0;
                      if($jml_pb>0 && $jml_pd>0){
                        $i=0;
                        for($i=1;$i<$jml_pd ;$i++){
                          $i2=0;
                          for($i2=0;$i2<=$jumlah_pelanggan_pd[$i];$i2++){
                            $i3=0;
                            $bp_ok = $biaya_penyambungan_pb;
                            for($i3=1;$i3<=$jml_pd;$i3++){
                            if($i3 == $i){$bp_ok = $bp_ok + (($daya_akhir_pd[$i3]-$daya_awal_pd[$i3])*$bp_perva_pd[$i3]*($jumlah_pelanggan_pd[$i3]-$i2));}
                            if($i3 == $i+1){$bp_ok = $bp_ok + (($daya_akhir_pd[$i3]-$daya_awal_pd[$i3])*$bp_perva_pd[$i3]*($i2+$jumlah_pelanggan_pd[$i+1]));}
                            if($i3 != $i && $i3 != $i+1 ){$bp_ok = $bp_ok + (($daya_akhir_pd[$i3]-$daya_awal_pd[$i3])*$bp_perva_pd[$i3]*$jumlah_pelanggan_pd[$i3]);}
                            }
                            if($bp_ok > $nilai_investasi){
                              $jumlah_pelanggan_pd[$i+1]=$i2+$jumlah_pelanggan_pd[$i+1];
                              $jumlah_pelanggan_pd[$i]=$jumlah_pelanggan_pd[$i]-$i2;
                              $i=$jml_pd+1;
                             } 
                          }
                          $jumlah_pelanggan_pd[$i+1]=$i2+$jumlah_pelanggan_pd[$i+1]-1;
                          $jumlah_pelanggan_pd[$i]=0;
                        }
                      }
                      if($bp_ok < $nilai_investasi){
                        $i=0;
                        for($i=1;$i<=$jml_pd;$i++){
                          $jumlah_pelanggan_pd[$i]=$jml_dumy_pd[$i];
                        }
                        $i=0;
                        for($i=1;$i<$jml_pb ;$i++){
                          $i2=0;
                          for($i2=0;$i2<=$jumlah_pelanggan_pb[$i];$i2++){
                            $i3=0;
                            $bp_ok = $biaya_penyambungan_pd;
                            for($i3=1;$i3<=$jml_pb;$i3++){
                            if($i3 == $i){$bp_ok = $bp_ok + (($daya_akhir_pb[$i3]-$daya_awal_pb[$i3])*$bp_perva_pb[$i3]*($jumlah_pelanggan_pb[$i3]-$i2));}
                            if($i3 == $i+1){$bp_ok = $bp_ok + (($daya_akhir_pb[$i3]-$daya_awal_pb[$i3])*$bp_perva_pb[$i3]*($i2+$jumlah_pelanggan_pb[$i+1]));}
                            if($i3 != $i && $i3 != $i+1 ){$bp_ok = $bp_ok + (($daya_akhir_pb[$i3]-$daya_awal_pb[$i3])*$bp_perva_pb[$i3]*$jumlah_pelanggan_pb[$i3]);}
                            }
                            
                            if($bp_ok > $nilai_investasi){
                              $jumlah_pelanggan_pb[$i+1]=$i2+$jumlah_pelanggan_pb[$i+1];
                              $jumlah_pelanggan_pb[$i]=$jumlah_pelanggan_pb[$i]-$i2;
                              $i=$jml_pb+1;
                             } 
                          }
                          $jumlah_pelanggan_pb[$i+1]=$i2+$jumlah_pelanggan_pb[$i+1]-1;
                          $jumlah_pelanggan_pb[$i]=0;
                        }
                        
                      }
                      if($bp_ok < $nilai_investasi){
                        if($jml_pb > 0 || ($jml_pb == 0 && $jml_pd == 0)){
                          $i=0;
                          for($i=1;$i<=$jml_pb;$i++){
                            $jumlah_pelanggan_pb[$i]=$jml_dumy_pb[$i];
                          }
                          $jumlah_pelanggan_pb[$jml_pb] = $jumlah_pelanggan_pb[$jml_pb]-1; 
                          $bp_ok = $biaya_penyambungan;
                          $i=0;
                          for($i=1;$i<=$jml_pd;$i++){
                              $bp_ok = $bp_ok - (($daya_akhir_pd[$i]-$daya_awal_pd[$i])*$bp_perva_pd[$i]*$jumlah_pelanggan_pd[$i]);
                            }
                          $bp_ok = $bp_ok - (($daya_akhir_pb[$jml_pb]-$daya_awal_pb[$jml_pb])*$bp_perva_pb[$jml_pb]);
                          $i=0;
                          for($i=1;$i<=88;$i++){
                            $bp_sip = $bp_ok + $data2[$i];
                            if($bp_sip > $nilai_investasi){
                              $jml_pb++;
                              $daya_awal_pb[$jml_pb] = 0;
                              $daya_akhir_pb[$jml_pb] = $data[$i];
                              $jumlah_pelanggan_pb[$jml_pb] = 1;
                              if($data[$i]>0){$bp_perva_pb[$jml_pb] = $data2[$i]/$data[$i];}
                              $i = 89;
                            }
                          }
                        }
                        else{
                          $jumlah_pelanggan_pd[$jml_pd] = $jumlah_pelanggan_pd[$jml_pd]-1; 
                          $bp_ok = $biaya_penyambungan;
                          $i=0;
                          for($i=1;$i<=$jml_pb;$i++){
                              $bp_ok = $bp_ok - (($daya_akhir_pb[$i]-$daya_awal_pb[$i])*$bp_perva_pb[$i]*$jumlah_pelanggan_pb[$i]);
                            }
                          $bp_ok = $bp_ok - (($daya_akhir_pd[$jml_pd]-$daya_awal_pd[$jml_pd])*$bp_perva_pd[$jml_pd]);
                          $i=0;
                          for($i=1;$i<=88;$i++){
                            $bp_sip = $bp_ok + ( ($data2[$i]/$data[$i]) * ($data[$i]-$daya_awal_pd[$jml_pd]) );
                            if($bp_sip > $nilai_investasi){
                              $jml_pd++;
                              $daya_awal_pd[$jml_pd] = $daya_awal_pd[$jml_pd-1];
                              $daya_akhir_pd[$jml_pd] = $data[$i];
                              $jumlah_pelanggan_pd[$jml_pd] = 1;
                              if($data[$i]>0){$bp_perva_pd[$jml_pd] = $data2[$i]/$data[$i];}
                              $i = 89;
                            }
                          }
                        }
                      } 
                      ?>
              
                  <div class="form-group">
                    <label for="exampleInputEmail1">Direkomendasikan untuk penyesuaian daya dimohon dengan rincian sebagai berikut :</label><br>
                  </div>

                      <?php                  
                    }
                      

                    for($i=1;$i<=$jml_pb;$i++){
                        if($jumlah_pelanggan_pb[$i]>0){
                        ?>
                         <div class="row">
                            <div class="col-md-2">
                            <div class="form-group">
                               <label for="exampleInputPassword1">Daya Awal</label><br>
                               <input type="text" value="<?= number_format($daya_awal_pb[$i], 0, ",", "."); ?>" class="form-control" readonly>
                            </div>
                            </div>

                            <div class="col-md-2">
                             <div class="form-group">
                               <label for="exampleInputPassword1">Daya Akhir</label><br>
                                <input type="text" value="<?= number_format($daya_akhir_pb[$i], 0, ",", "."); ?>" class="form-control" readonly>
                            </div>
                            </div> 

                             <div class="col-md-2">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Jumlah Pelanggan</label><br>
                                <input type="text" class="form-control" value="<?= number_format($jumlah_pelanggan_pb[$i], 0, ",", "."); ?>" readonly>
                                </div>
                             </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Biaya Penyambungan</label><br>
                                <input type="text" class="form-control" value="<?= number_format(($daya_akhir_pb[$i]-$daya_awal_pb[$i])*$bp_perva_pb[$i]*$jumlah_pelanggan_pb[$i], 0, ",", "."); ?>" readonly>
                                </div>
                             </div>
                        </div>

                        <?php
                        }
                      }
                    for($i=1;$i<=$jml_pd;$i++){
                        if($jumlah_pelanggan_pd[$i]>0){
                        ?>
                         <div class="row">
                            <div class="col-md-2">
                            <div class="form-group">
                               <label for="exampleInputPassword1">Daya Awal</label><br>
                               <input type="text" value="<?= number_format($daya_awal_pd[$i], 0, ",", "."); ?>" class="form-control" readonly>
                            </div>
                            </div>

                            <div class="col-md-2">
                             <div class="form-group">
                               <label for="exampleInputPassword1">Daya Akhir</label><br>
                                <input type="text" value="<?= number_format($daya_akhir_pd[$i], 0, ",", "."); ?>" class="form-control" readonly>
                            </div>
                            </div> 

                             <div class="col-md-2">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Jumlah Pelanggan</label><br>
                                <input type="text" class="form-control" value="<?= number_format($jumlah_pelanggan_pd[$i], 0, ",", "."); ?>" readonly>
                                </div>
                             </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Biaya Penyambungan</label><br>
                                <input type="text" class="form-control" value="<?= number_format(($daya_akhir_pd[$i]-$daya_awal_pd[$i])*$bp_perva_pd[$i]*$jumlah_pelanggan_pd[$i], 0, ",", "."); ?>" readonly>
                                </div>
                             </div>
                            </div>

                        <?php
                        }
                      }
                  ?>
                  
                  <?php $prem = $utama['nilai_investasi'] - $utama['biaya_penyambungan']; 
                  if($biaya_penyambungan>0){
                  ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Premium dengan Selisih BP - INV dibebankan pelanggan sebesar</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Rp <?= number_format($prem, 0, ",", "."); ?>" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Sharing investasi minimal sebesar</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Rp <?= number_format($prem, 0, ",", "."); ?>" readonly>
                  </div>
              <?php }

              $bpp = $utama['bpp'];
              
              $reguler = $reguler['penambahan_tarif'];
              $bronze = $bronze['penambahan_tarif'];
              $silver = $silver['penambahan_tarif'];
              $gold = $gold['penambahan_tarif'];
              $platinum = $platinum['penambahan_tarif'];

              $rupiah_bronze = 0;
              $rupiah_silver = 0;
              $rupiah_gold = 0;
              $rupiah_platinum = 0;

              $i=0; 
              for($i=1;$i<$jml_pb;$i++){ 
                $rupiah_bronze = $rupiah_bronze + ( 12*(($daya_akhir_pb[$i]-$daya_awal_pb[$i])/1000)*($jumlah_pelanggan_pb[$i]+$jumlah_pelanggan_pb[$i+1])*0.85*($rp_tarif_pb[$i]+$bronze-$bpp) );
              }
              $i=0;
              for($i=1;$i<$jml_pd;$i++){
                $rupiah_bronze = $rupiah_bronze + ( 12*(($daya_akhir_pd[$i]-$daya_awal_pd[$i])/1000)*($jumlah_pelanggan_pd[$i]+$jumlah_pelanggan_pd[$i+1])*0.85*($rp_tarif_pd[$i]+$bronze-$bpp) );
              }

              $i=0;
              for($i=1;$i<$jml_pb;$i++){
                $rupiah_silver = $rupiah_silver + ( 12*(($daya_akhir_pb[$i]-$daya_awal_pb[$i])/1000)*($jumlah_pelanggan_pb[$i]+$jumlah_pelanggan_pb[$i+1])*0.85*($rp_tarif_pb[$i]+$silver-$bpp) );
              }
              $i=0;
              for($i=1;$i<$jml_pd;$i++){
                $rupiah_silver = $rupiah_silver + ( 12*(($daya_akhir_pd[$i]-$daya_awal_pd[$i])/1000)*($jumlah_pelanggan_pd[$i]+$jumlah_pelanggan_pd[$i+1])*0.85*($rp_tarif_pd[$i]+$silver-$bpp) );
              }
              
              $i=0;
              for($i=1;$i<$jml_pb;$i++){
                $rupiah_gold = $rupiah_gold + ( 12*(($daya_akhir_pb[$i]-$daya_awal_pb[$i])/1000)*($jumlah_pelanggan_pb[$i]+$jumlah_pelanggan_pb[$i+1])*0.85*($rp_tarif_pb[$i]+$gold-$bpp) );
              }
              $i=0;
              for($i=1;$i<$jml_pd;$i++){
                $rupiah_gold = $rupiah_gold + ( 12*(($daya_akhir_pd[$i]-$daya_awal_pd[$i])/1000)*($jumlah_pelanggan_pd[$i]+$jumlah_pelanggan_pd[$i+1])*0.85*($rp_tarif_pd[$i]+$gold-$bpp) );
              }
              
              $i=0;
              for($i=1;$i<$jml_pb;$i++){
                $rupiah_platinum = $rupiah_platinum + ( 12*(($daya_akhir_pb[$i]-$daya_awal_pb[$i])/1000)*($jumlah_pelanggan_pb[$i]+$jumlah_pelanggan_pb[$i+1])*0.85*($rp_tarif_pb[$i]+$platinum-$bpp) );
              }
              $i=0;
              for($i=1;$i<$jml_pd;$i++){
                $rupiah_platinum = $rupiah_platinum + ( 12*(($daya_akhir_pd[$i]-$daya_awal_pd[$i])/1000)*($jumlah_pelanggan_pd[$i]+$jumlah_pelanggan_pd[$i+1])*0.85*($rp_tarif_pd[$i]+$platinum-$bpp) );
              }
              
              if($rupiah_bronze==0){$JN_1tahun_bronze = 0;}else{$JN_1tahun_bronze = ($nilai_investasi-$biaya_penyambungan)/(1*$rupiah_bronze);}
              if($rupiah_bronze==0){$JN_2tahun_bronze = 0;}else{$JN_2tahun_bronze = ($nilai_investasi-$biaya_penyambungan)/(2*$rupiah_bronze);}
              if($rupiah_bronze==0){$JN_3tahun_bronze = 0;}else{$JN_3tahun_bronze = ($nilai_investasi-$biaya_penyambungan)/(3*$rupiah_bronze);}
              if($rupiah_bronze==0){$JN_4tahun_bronze = 0;}else{$JN_4tahun_bronze = ($nilai_investasi-$biaya_penyambungan)/(4*$rupiah_bronze);}
              if($rupiah_bronze==0){$JN_5tahun_bronze = 0;}else{$JN_5tahun_bronze = ($nilai_investasi-$biaya_penyambungan)/(5*$rupiah_bronze);}

              if($rupiah_silver==0){$JN_1tahun_silver = 0;}else{$JN_1tahun_silver = ($nilai_investasi-$biaya_penyambungan)/(1*$rupiah_silver);}
              if($rupiah_silver==0){$JN_2tahun_silver = 0;}else{$JN_2tahun_silver = ($nilai_investasi-$biaya_penyambungan)/(2*$rupiah_silver);}
              if($rupiah_silver==0){$JN_3tahun_silver = 0;}else{$JN_3tahun_silver = ($nilai_investasi-$biaya_penyambungan)/(3*$rupiah_silver);}
              if($rupiah_silver==0){$JN_4tahun_silver = 0;}else{$JN_4tahun_silver = ($nilai_investasi-$biaya_penyambungan)/(4*$rupiah_silver);}
              if($rupiah_silver==0){$JN_5tahun_silver = 0;}else{$JN_5tahun_silver = ($nilai_investasi-$biaya_penyambungan)/(5*$rupiah_silver);}

              if($rupiah_gold==0){$JN_1tahun_gold = 0;}else{$JN_1tahun_gold = ($nilai_investasi-$biaya_penyambungan)/(1*$rupiah_gold);}
              if($rupiah_gold==0){$JN_2tahun_gold = 0;}else{$JN_2tahun_gold = ($nilai_investasi-$biaya_penyambungan)/(2*$rupiah_gold);}
              if($rupiah_gold==0){$JN_3tahun_gold = 0;}else{$JN_3tahun_gold = ($nilai_investasi-$biaya_penyambungan)/(3*$rupiah_gold);}
              if($rupiah_gold==0){$JN_4tahun_gold = 0;}else{$JN_4tahun_gold = ($nilai_investasi-$biaya_penyambungan)/(4*$rupiah_gold);}
              if($rupiah_gold==0){$JN_5tahun_gold = 0;}else{$JN_5tahun_gold = ($nilai_investasi-$biaya_penyambungan)/(5*$rupiah_gold);}
                      
              if($rupiah_platinum==0){$JN_1tahun_platinum = 0;}else{$JN_1tahun_platinum = ($nilai_investasi-$biaya_penyambungan)/(1*$rupiah_platinum);}
              if($rupiah_platinum==0){$JN_2tahun_platinum = 0;}else{$JN_2tahun_platinum = ($nilai_investasi-$biaya_penyambungan)/(2*$rupiah_platinum);}
              if($rupiah_platinum==0){$JN_3tahun_platinum = 0;}else{$JN_3tahun_platinum = ($nilai_investasi-$biaya_penyambungan)/(3*$rupiah_platinum);}
              if($rupiah_platinum==0){$JN_4tahun_platinum = 0;}else{$JN_4tahun_platinum = ($nilai_investasi-$biaya_penyambungan)/(4*$rupiah_platinum);}
              if($rupiah_platinum==0){$JN_5tahun_platinum = 0;}else{$JN_5tahun_platinum = ($nilai_investasi-$biaya_penyambungan)/(5*$rupiah_platinum);}       
              
            ?> 
            
            <?php if ($JN_1tahun_bronze<=720 && $JN_1tahun_bronze>0){?>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= 'Premium Bronze dan SPH 1 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_1tahun_bronze, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div> 
            <?php }else{?>
            
            <?php if ($JN_2tahun_bronze<=720 && $JN_2tahun_bronze>0){?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= 'Premium Bronze dan SPH 2 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_2tahun_bronze, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div>
            <?php }else{?>

            <?php if ($JN_3tahun_bronze<=720 && $JN_3tahun_bronze>0){?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= 'Premium Bronze dan SPH 3 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_3tahun_bronze, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div>
            <?php }else{?>
            
            <?php if ($JN_4tahun_bronze<=720 && $JN_4tahun_bronze>0){?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= 'Premium Bronze dan SPH 4 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_4tahun_bronze, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div>
            <?php }else{?>
            
            <?php if ($JN_5tahun_bronze<=720 && $JN_5tahun_bronze>0){?>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= 'Premium Bronze dan SPH 5 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_5tahun_bronze, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div> 
            <?php }else{?>
            
            <?php if ($JN_1tahun_silver<=720 && $JN_1tahun_silver>0){?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= ' Premium Silver dan SPH 1 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_1tahun_silver, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div> 
            <?php }else{?>
            
            <?php if ($JN_2tahun_silver<=720 && $JN_2tahun_silver>0){?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= 'Premium Silver dan SPH 2 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_2tahun_silver, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div>
            <?php }else{?>

            <?php if ($JN_3tahun_silver<=720 && $JN_3tahun_silver>0){?>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= 'Premium Silver dan SPH 3 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_3tahun_silver, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div>
            <?php }else{?>
            
            <?php if ($JN_4tahun_silver<=720 && $JN_4tahun_silver>0){?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= 'Premium Silver dan SPH 4 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_4tahun_silver, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div>
            <?php }else{?>
            
            <?php if ($JN_5tahun_silver<=720 && $JN_5tahun_silver>0){?>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= 'Premium Silver dan SPH 5 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_5tahun_silver, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div>
            <?php }else{?>
            
            <?php if ($JN_1tahun_gold<=720 && $JN_1tahun_gold>0){?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= 'Premium Gold dan SPH 1 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_1tahun_gold, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div> 
            <?php }else{?>
            
            <?php if ($JN_2tahun_gold<=720 && $JN_2tahun_gold>0){?>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= 'Premium Gold dan SPH 2 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_2tahun_gold, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div>
            <?php }else{?>

            <?php if ($JN_3tahun_gold<=720 && $JN_3tahun_gold>0){?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= 'Premium Gold dan SPH 3 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_3tahun_gold, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div> 
            <?php }else{?>
            
            <?php if ($JN_4tahun_gold<=720 && $JN_4tahun_gold>0){?>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= 'Premium Gold dan SPH 4 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_4tahun_gold, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div>
            <?php }else{?>
            
            <?php if ($JN_5tahun_gold<=720 && $JN_5tahun_gold>0){?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= ' Premium Gold dan SPH 5 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_5tahun_gold, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div> 
            <?php }else{?>

            <?php if ($JN_1tahun_platinum<=720 && $JN_1tahun_platinum>0){?>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= 'Premium Platinum dan SPH 1 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_1tahun_platinum, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div>
            <?php }else{?>
            
            <?php if ($JN_2tahun_platinum<=720 && $JN_2tahun_platinum>0){?>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= 'Premium Platinum dan SPH 2 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_2tahun_platinum, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div> 
            <?php }else{?>

            <?php if ($JN_3tahun_platinum<=720 && $JN_2tahun_platinum>0){?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= 'Premium Platinum dan SPH 3 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_3tahun_platinum, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div>  
            <?php }else{?>
            
            <?php if ($JN_4tahun_platinum<=720 && $JN_4tahun_platinum>0){?>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= 'Premium Platinum dan SPH 4 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_4tahun_platinum, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div>            
                 </div>
            <?php }else{?>
            
            <?php if ($JN_5tahun_platinum<=720 && $JN_5tahun_platinum>0){?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tarif daya sesuai permohonan dengan ketentuan</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= 'Premium Platinum dan SPH 5 tahun dengan Jam Nyala minimal sebesar '.number_format($JN_5tahun_platinum, 0, ",", ".")." Jam Nyala"; ?>" readonly>
                  </div>
            <?php }}}}}}}}}}}}}}}}}}}}
            }?>

</div>
</div>
</div>
</div>
</section>

</div>



</body>
</html>







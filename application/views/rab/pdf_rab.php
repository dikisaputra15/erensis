<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>pdf Rab</title>
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
		  font-size: 9px;
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


<?php

$id_utama = $this->uri->segment(4);

?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Rencana Anggaran Biaya</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             
                <?php

			    $query = $this->db->query("SELECT tb_rab.*, tb_item.*, tb_jenis.*, tb_satuan.*, tb_kategori.*, tb_jenis_pekerjaan.*, tb_subjenis_pekerjaan.*, tb_jenis_pengadaan.*, tb_unit_induk.*, tb_unit.*, tb_sumberhs.* FROM tb_rab JOIN tb_item ON tb_rab.id_item=tb_item.id_item join tb_jenis on tb_rab.jenis_item=tb_jenis.id_jenis join tb_satuan on tb_rab.satuan_item=tb_satuan.id_satuan join tb_kategori on tb_rab.kategori_item=tb_kategori.id_kategori join tb_jenis_pekerjaan on tb_rab.jenis_pekerjaan_item=tb_jenis_pekerjaan.id_jp join tb_subjenis_pekerjaan on tb_rab.subjenis_pekerjaan_item=tb_subjenis_pekerjaan.id_subjenis_pekerjaan join tb_jenis_pengadaan on tb_rab.jenis_pengadaan=tb_jenis_pengadaan.id_jenis_pengadaan join tb_unit_induk on tb_rab.id_unit_induk=tb_unit_induk.id_unit_induk join tb_unit on tb_rab.unit=tb_unit.id_unit join tb_sumberhs on tb_rab.sumber_hs=tb_sumberhs.id_sumber_hs  where tb_rab.id_utama='$id_utama' ORDER BY tb_jenis.jenis ASC, tb_rab.kategori_item, tb_rab.jenis_pekerjaan_item, tb_rab.subjenis_pekerjaan_item, tb_item.uraian_item");

			    ?>
			

				<body>
				<table id="customers">
                    <thead class="table-dark">
                       <tr>
					    <th style="text-align: center;" rowspan="2">No.</th>
						<th style="text-align: center;" rowspan="2">Uraian</th>
						<th style="text-align: center;" rowspan="2">Volume</th>
						<th style="text-align: center;" rowspan="2">Satuan</th>
						<th style="text-align: center;" colspan="2">Material Unit Induk</th>
						<th style="text-align: center;" colspan="2">Material Unit</th>
						<th style="text-align: center;" colspan="2">Supply Errect</th>
						<th style="text-align: center;" colspan="2">Jasa</th>
					  </tr>
					  <tr>
							<th style="text-align: center;">Harga Satuan</th>
							<th style="text-align: center;">Total Harga</th>
							<th style="text-align: center;">Harga Satuan</th>
							<th style="text-align: center;">Total Harga</th>
							<th style="text-align: center;">Harga Satuan</th>
							<th style="text-align: center;">Total Harga</th>
							<th style="text-align: center;">Harga Satuan</th>
							<th style="text-align: center;">Total Harga</th>
					  </tr>
                    </thead>

                 <?php
                 	 $nomor_jenis = 0;
                 	 $nomor_kategori = 0;
                 	 $nomor_jenis_pekerjaan = 0;
                 	 $nomor_subjenis_pekerjaan = 0;

                 	 $nilai_jenis = "";
                 	 $nilai_kategori = "";
                 	 $nilai_jenis_pekerjaan = "";
                 	 $nilai_subjenis_pekerjaan = "";

                 	 $total_uid = 0;
                 	 $total_unit = 0;
                 	 $total_errect = 0;
                 	 $total_jasa = 0;


					 foreach ($query->result() as $row)
				      {	 
						$uraian=$row->uraian_item; // joint
						$jenis=$row->jenis;  // joint 
						$volume=$row->volume_item;
						$satuan=$row->nama_satuan; // joint
						$harga_satuan=$row->harga_satuan_item;
						$jumlah_harga=$row->jumlah_harga;
						$kategori=$row->kategori; // joint
						$jenis_pekerjaan=$row->nama; // joint
						$subjenis_pekerjaan=$row->subjenis_pekerjaan; // joint
						$jenis_pengadaan=$row->jenis_pengadaan;
				?>

					
						<?php 

						if($nilai_jenis!=$jenis){
							$nilai_jenis = $jenis;
							$nomor_jenis++; 
							$nomor_kategori = 0;
						?>
						<tr>
							<th style="text-align: left;" colspan="12" bgcolor="#e1e4dd"><?php echo $jenis; ?></th>
						</tr>
						<?php }?>

						<?php 

						if($nilai_kategori!=$kategori){
							$nilai_kategori = $kategori;
							$nomor_kategori++; 
						?>
						<tr>
							<th style="text-align: right;" bgcolor="#e1e4ee"><?php echo $nomor_kategori; ?></th>
							<th style="text-align: left;" colspan="11" bgcolor="#e1e4ee"><?php echo $kategori; ?></th>
						</tr>
						<?php }?>
					

					<tr>

						<td></td>
						<td style="text-align: left;"><?= $uraian; ?></td>
						<td style="text-align: right;"><?php echo number_format($volume, 0, ",", "."); ?></td>
						<td style="text-align: center;"><?= $satuan; ?></td>
						<?php 

						if($jenis_pengadaan == "Material Unit Induk"){
							$total_uid = $total_uid + $jumlah_harga; 
						?>
						<td style="text-align: right;"><?php echo "Rp. ".number_format($harga_satuan, 0, ",", "."); ?></td>
						<td style="text-align: right;"><?php echo "Rp. ".number_format($jumlah_harga, 0, ",", "."); ?></td>
						<td style="text-align: left;"></td>
						<td style="text-align: left;"></td>
						<td style="text-align: left;"></td>
						<td style="text-align: left;"></td>
						<td style="text-align: left;"></td>
						<td style="text-align: left;"></td>
						<?php }?>

						<?php 

						if($jenis_pengadaan == "Material Unit "){
							$total_unit = $total_unit + $jumlah_harga; 
						?>
						<td style="text-align: left;"></td>
						<td style="text-align: left;"></td>
						<td style="text-align: right;"><?php echo "Rp. ".number_format($harga_satuan, 0, ",", "."); ?></td>
						<td style="text-align: right;"><?php echo "Rp. ".number_format($jumlah_harga, 0, ",", "."); ?></td>
						<td style="text-align: left;"></td>
						<td style="text-align: left;"></td>
						<td style="text-align: left;"></td>
						<td style="text-align: left;"></td>
						<?php }?>

						<?php 

						if($jenis_pengadaan == "Supplay Errect"){
							$total_errect = $total_errect + $jumlah_harga; 
						?>
						<td style="text-align: left;"></td>
						<td style="text-align: left;"></td>
						<td style="text-align: left;"></td>
						<td style="text-align: left;"></td>
						<td style="text-align: right;"><?php echo "Rp. ".number_format($harga_satuan, 0, ",", "."); ?></td>
						<td style="text-align: right;"><?php echo "Rp. ".number_format($jumlah_harga, 0, ",", "."); ?></td>
						<td style="text-align: left;"></td>
						<td style="text-align: left;"></td>
						<?php }?>

						<?php 

						if($jenis_pengadaan == "Jasa"){
							$total_jasa = $total_jasa + $jumlah_harga; 
						?>
						<td style="text-align: left;"></td>
						<td style="text-align: left;"></td>
						<td style="text-align: left;"></td>
						<td style="text-align: left;"></td>
						<td style="text-align: left;"></td>
						<td style="text-align: left;"></td>
						<td style="text-align: right;"><?php echo "Rp. ".number_format($harga_satuan, 0, ",", "."); ?></td>
						<td style="text-align: right;"><?php echo "Rp. ".number_format($jumlah_harga, 0, ",", "."); ?></td>
						<?php }?>
						
					</tr>

				<?php } ?>
                    <tr bgcolor="#e1e4dd" style="color: red;">
					    <td colspan="4">Total</td>
						<td colspan="2" style="text-align: right;"><?php echo "Rp. ".number_format($total_uid, 0, ",", "."); ?></td>
						<td colspan="2"  style="text-align: right;"><?php echo "Rp. ".number_format($total_unit, 0, ",", "."); ?></td>
						<td colspan="2"  style="text-align: right;"><?php echo "Rp. ".number_format($total_errect, 0, ",", "."); ?></td>
						<td colspan="2"  style="text-align: right;"><?php echo "Rp. ".number_format($total_jasa, 0, ",", "."); ?></td>
				 	</tr>
					 <tr bgcolor="#e1e4dd" style="color: red;">
					    <td colspan="4">Total +PPN 10%</td>
						<td colspan="2" style="text-align: right;"><?php echo "Rp. ".number_format($total_uid*1.1, 0, ",", "."); ?></td>
						<td colspan="2"  style="text-align: right;"><?php echo "Rp. ".number_format($total_unit*1.1, 0, ",", "."); ?></td>
						<td colspan="2"  style="text-align: right;"><?php echo "Rp. ".number_format($total_errect*1.1, 0, ",", "."); ?></td>
						<td colspan="2"  style="text-align: right;"><?php echo "Rp. ".number_format($total_jasa*1.1, 0, ",", "."); ?></td>
					 </tr>
					 <tr bgcolor="#e1e4dd" style="color: red;">
					    <td colspan="4">Total Pengadaan Material dan Jasa</td>
						<td colspan="4" style="text-align: right;"><?php echo "Rp. ".number_format(($total_uid*1.1)+($total_unit*1.1), 0, ",", "."); ?></td>
						<td colspan="4"  style="text-align: right;"><?php echo "Rp. ".number_format(($total_errect*1.1)+($total_jasa*1.1), 0, ",", "."); ?></td>
					 </tr>
					  <tr bgcolor="#e1e4dd" style="color: red;">
					    <td colspan="4">Total Investasi</td>
						<td colspan="8" style="text-align: right;"><?php echo "Rp. ".number_format(($total_uid*1.1)+($total_unit*1.1)+($total_errect*1.1)+($total_jasa*1.1), 0, ",", "."); ?></td>
					  </tr>
				</table><br>

				</body>
				
              </div>
      </div>
      </div>
      </div>
      </div>
  </section>

</div>
</body>
</html>







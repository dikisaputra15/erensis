<?php

class rab extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_monitoring');
      $this->load->model('Model_rab');
      $this->load->model('Model_satuan');
      $this->load->model('Model_jenis');
      $this->load->model('Model_item');
      $this->load->model('Model_layanan');
      $this->load->model('Model_tarif');
      $this->load->model('Model_daya');
 
    }

   public function file_rab($id)
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'RAB'
            ];
         $data['utama'] = $this->Model_monitoring->getAllmonitoringbyid($id);
         $data['rab'] = $this->Model_rab->getAllrabid($id);
         $data['templaterab'] = $this->Model_rab->getAlltemplaterabid($id);
         $data['satuan'] = $this->Model_satuan->getAllsatuan();
         $data['jenis'] = $this->Model_jenis->getAlljenis();
         $data['kategori'] = $this->Model_item->fetch_kategori();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('rab/rab', $data);
         $this->load->view('templates/footer');
      }
   }

    public function file_kkp($id)
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'KKP'
            ];
         $data['utama'] = $this->Model_monitoring->getAllmonitoringbyid($id);
         $data['tarif_awal'] = $this->Model_tarif->gettarifawal($id);
         $data['tarif_awal2'] = $this->Model_tarif->gettarifawal2($id);
         $data['tarif_awal3'] = $this->Model_tarif->gettarifawal3($id);
         $data['tarif_awal4'] = $this->Model_tarif->gettarifawal4($id);
         $data['tarif_awal5'] = $this->Model_tarif->gettarifawal5($id);
         $data['tarif_awal6'] = $this->Model_tarif->gettarifawal6($id);
         $data['tarif_awal7'] = $this->Model_tarif->gettarifawal7($id);
         $data['tarif_awal8'] = $this->Model_tarif->gettarifawal8($id);
         $data['tarif_awal9'] = $this->Model_tarif->gettarifawal9($id);
         $data['tarif_awal10'] = $this->Model_tarif->gettarifawal10($id);

         $data['tarif_akhir'] = $this->Model_tarif->gettarifakhir($id);
         $data['tarif_akhir2'] = $this->Model_tarif->gettarifakhir2($id);
         $data['tarif_akhir3'] = $this->Model_tarif->gettarifakhir3($id);
         $data['tarif_akhir4'] = $this->Model_tarif->gettarifakhir4($id);
         $data['tarif_akhir5'] = $this->Model_tarif->gettarifakhir5($id);
         $data['tarif_akhir6'] = $this->Model_tarif->gettarifakhir6($id);
         $data['tarif_akhir7'] = $this->Model_tarif->gettarifakhir7($id);
         $data['tarif_akhir8'] = $this->Model_tarif->gettarifakhir8($id);
         $data['tarif_akhir9'] = $this->Model_tarif->gettarifakhir9($id);
         $data['tarif_akhir10'] = $this->Model_tarif->gettarifakhir10($id);

         $data['daya_awal'] = $this->Model_daya->getdayaawal($id);
         $data['daya_awal2'] = $this->Model_daya->getdayaawal2($id);
         $data['daya_awal3'] = $this->Model_daya->getdayaawal3($id);
         $data['daya_awal4'] = $this->Model_daya->getdayaawal4($id);
         $data['daya_awal5'] = $this->Model_daya->getdayaawal5($id);
         $data['daya_awal6'] = $this->Model_daya->getdayaawal6($id);
         $data['daya_awal7'] = $this->Model_daya->getdayaawal7($id);
         $data['daya_awal8'] = $this->Model_daya->getdayaawal8($id);
         $data['daya_awal9'] = $this->Model_daya->getdayaawal9($id);
         $data['daya_awal10'] = $this->Model_daya->getdayaawal10($id);

         $data['daya_akhir'] = $this->Model_daya->getdayaakhir($id);
         $data['daya_akhir2'] = $this->Model_daya->getdayaakhir2($id);
         $data['daya_akhir3'] = $this->Model_daya->getdayaakhir3($id);
         $data['daya_akhir4'] = $this->Model_daya->getdayaakhir4($id);
         $data['daya_akhir5'] = $this->Model_daya->getdayaakhir5($id);
         $data['daya_akhir6'] = $this->Model_daya->getdayaakhir6($id);
         $data['daya_akhir7'] = $this->Model_daya->getdayaakhir7($id);
         $data['daya_akhir8'] = $this->Model_daya->getdayaakhir8($id);
         $data['daya_akhir9'] = $this->Model_daya->getdayaakhir9($id);
         $data['daya_akhir10'] = $this->Model_daya->getdayaakhir10($id);

         $data['layanan'] = $this->Model_layanan->getlayanan($id);
         $data['layanan2'] = $this->Model_layanan->getlayanan2($id);
         $data['layanan3'] = $this->Model_layanan->getlayanan3($id);
         $data['layanan4'] = $this->Model_layanan->getlayanan4($id);
         $data['layanan5'] = $this->Model_layanan->getlayanan5($id);
         $data['layanan6'] = $this->Model_layanan->getlayanan6($id);
         $data['layanan7'] = $this->Model_layanan->getlayanan7($id);
         $data['layanan8'] = $this->Model_layanan->getlayanan8($id);
         $data['layanan9'] = $this->Model_layanan->getlayanan9($id);
         $data['layanan10'] = $this->Model_layanan->getlayanan10($id);

         $data['reguler'] = $this->Model_layanan->getreguler();
         $data['bronze'] = $this->Model_layanan->getbronze();
         $data['silver'] = $this->Model_layanan->getsilver();
         $data['gold'] = $this->Model_layanan->getgold();
         $data['platinum'] = $this->Model_layanan->getplatinum();

         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('rab/kkp', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahrab() 
   {
      $id_utama = $this->input->post('id_utama'); 
      $nomor_rab = $this->input->post('nomor_rab');

      $kategori = $this->input->post('kategori');
      $jenis_pekerjaan = $this->input->post('jenis_pekerjaan');
      $subjenis = $this->input->post('subjenis');
      $item = $this->input->post('item');
      $satuan_item = $this->input->post('satuan_item');
      $jenis_item = $this->input->post('jenis_item');
      $jenis_pengadaan = $this->input->post('jenis_pengadaan');
      $unit_induk = $this->input->post('unit_induk');
      $unit = $this->input->post('unit');
      $sumber_hs = $this->input->post('sumber_hs'); 
      $harga_satuan = $this->input->post('harga_satuan'); 

      $count = 0; 
      $querab = $this->db->query("select * from tb_rab where id_utama='$id_utama' and id_item='$item'");
      foreach ($querab->result() as $row3)
      { 
         $id_rab = $row3->id_rab;
         $volume_item_sat1 = $row3->volume_item_sat;
         $volume_item1 = $row3->volume_item;
         $count++;
      }

      $this->db->where('id_utama', $id_utama);
      $queryin = $this->db->get('tb_utama');

      foreach ($queryin->result() as $row)
      {
         $ninves = $row->nilai_investasi;
         $bpp = $row->bpp;
         $biaya_penyambungan = $row->biaya_penyambungan;
         $gain_penyambungan = $row->gain_penyambungan;
         $ttl = $row->ttl_lwbp;
         $ENS_saving = $row->ens;
         $loss_saving = $row->losses;
         $interest_rate = $row->interest_rate;
         $roe = $row->required_roe;
         $biaya_om = $row->biaya_om;
         $id_unit = $row->id_unit;
         $umur_aset = $row->umur_aset;
      }

      $this->db->where('id_unit', $id_unit);
      $queryun = $this->db->get('tb_unit');
      foreach ($queryun->result() as $row2)
      {
         $bpp_mc_tmtr = $row2->bpp_mc_tmtr;
      }

      $volume_item_sat = $volume_item_sat1 + $this->input->post('volume_item');
      $volume_item = $volume_item_sat; 
      $jml_harga =  $volume_item * $harga_satuan;
      $jml_harga2 = $this->input->post('volume_item') * $harga_satuan;
      $nilai_investasi = $ninves + ($jml_harga2*1.1);

      if ($count==0) { 
         $data = [
               'id_utama' => $id_utama,
               'nomor_rab' => $nomor_rab,
               'id_item' => $item, 
               'jenis_item' => $jenis_item,
               'volume_item_sat' => $volume_item_sat,            
               'volume_item_temp' => 0,            
               'volume_item' => $volume_item,
               'volume_realisasi_sat' => 0,
               'volume_realisasi_temp' => 0, 
               'volume_item_terealisasi' => 0,
               'satuan_item' => $satuan_item,
               'harga_satuan_item' => $harga_satuan,
               'jumlah_harga' => $jml_harga,
               'jumlah_harga_terealisasi' => 0,
               'kategori_item' => $kategori,
               'jenis_pekerjaan_item' => $jenis_pekerjaan,
               'subjenis_pekerjaan_item' => $subjenis,
               'jenis_pengadaan' => $jenis_pengadaan,
               'id_unit_induk' => $unit_induk,
               'unit' => $unit,
               'sumber_hs' => $sumber_hs
            ];

      $this->Model_rab->insert_rab($data, 'tb_rab');
      }
      else{ 
         $data = [   
               'volume_item_sat' => $volume_item_sat,            
               'volume_item' => $volume_item,
               'jumlah_harga' => $jml_harga
            ]; 

             $this->db->update('tb_rab', $data, ['id_rab' => $id_rab]);
            
      } 

      

      //rwacc
       if ($bpp < $bpp_mc_tmtr || $nilai_investasi == 0 || $biaya_penyambungan == 0) {
                     $rwacc = 7.87;
                     if ($nilai_investasi == 0 || $biaya_penyambungan == 0) {
                        $rwacc = $interest_rate;
                     }
                  }else{
                     $der = ($nilai_investasi - $biaya_penyambungan) / $biaya_penyambungan;
                     $np = $nilai_investasi / 1000000000;
                     if ((1 + $der) == 0) {$debt = 0; $equity = 0;}else{$debt = $np * $der / (1+$der); $equity = $np / (1+$der);}
                     $rwacc = (($equity / $np) * $roe) + ((1 - 0.25) * ($debt / $np ) * $interest_rate);
                  }

         //irr npv
          $x = 1; 
         $cost  = 0;
         while($x <= $umur_aset) {
         $cost = $cost + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640* $loss_saving)-$biaya_om)*(1/pow((1+($interest_rate/100)),$x)));
         $x++;
         if($nilai_investasi==0){$cost_rasio =100;}
         else{$cost_rasio = ($cost+$biaya_penyambungan) / $nilai_investasi;}
         $npv = ($cost+$biaya_penyambungan) - $nilai_investasi;
         } 

         $irr = 0;
         $y = 0;
         while($y < 100) {

         $x = 1;
         $cost2  = 0;
         while($x <= $umur_aset) {
         $cost2 = $cost2 + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640*$loss_saving)-$biaya_om)*(1/pow((1+($irr/100)),$x)));
         $x++;
         } 

         $npv_triger = ($cost2 + $biaya_penyambungan) - $nilai_investasi;
         $irr++;
         $y++;
         if($npv_triger <= 0){$y = 100;}

         }

         $irr = $irr-2;
         $y = 0;
         while($y < 1) {

         $x = 1;
         $cost2  = 0;
         while($x <= $umur_aset) {
         $cost2 = $cost2 + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640*$loss_saving)-$biaya_om)*(1/pow((1+($irr/100)),$x)));
         $x++;
         } 

         $npv_triger = ($cost2 + $biaya_penyambungan) - $nilai_investasi;
         $irr=$irr+0.1;
         $y=$y+0.1;
         if($npv_triger <= 0){$y = 1;}

         }

         $irr = $irr-0.2;
         $y = 0;
         while($y < 0.1) {

         $x = 1;
         $cost2  = 0;
         while($x <= $umur_aset) {
         $cost2 = $cost2 + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640*$loss_saving)-$biaya_om)*(1/pow((1+($irr/100)),$x)));
         $x++;
         } 

         $npv_triger = ($cost2 + $biaya_penyambungan) - $nilai_investasi;
         $irr=$irr+0.01;
         $y=$y+0.01;
         if($npv_triger <= 0){$y = 1;}

         }

         $x = 1; 
         $cost  = 0;
         $cost_rasio =100;
         while($x <= $umur_aset) {
         $cost = $cost + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640*$loss_saving)-$biaya_om)*(1/pow((1+($interest_rate/100)),$x)));
         $x++;
         if($nilai_investasi==0){$cost_rasio =100;}
         else{$cost_rasio = ($cost+$biaya_penyambungan) / $nilai_investasi;}
         
         } 

          $payback = ($nilai_investasi-$biaya_penyambungan)/
                         (
                           (($ttl-$bpp)* ((720*$loss_saving)+(720*$ENS_saving)))+($gain_penyambungan/12)
                         )/12;
         
         if($payback <0){$payback=0;}

      $data2 = [
               'nilai_investasi' => $nilai_investasi, 
               'npv' => $npv,
               'rwacc' => $rwacc,
               'irr' => $irr,
               'payback' => $payback
            ]; 

      $this->db->where('id_utama', $id_utama);
      $this->db->update('tb_utama', $data2);    

      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('rab/rab/file_rab/' .$id_utama); 
      
   }

   public function tambahtemplaterab()
   {
      $id_utama = $this->input->post('id_utama');
      $kategori = $this->input->post('kategori2');
      $template = $this->input->post('template');
      $volume_template = $this->input->post('volume_template');
      $volume_realisasi = $this->input->post('volume_realisasi');
      $satuan = $this->input->post('satuan_item2'); 
      $total_inv = 0;
      $volume = 0;

      $querytemp = $this->db->get_where('tb_template_rab', array('id_list_template' => $template));
      $count = 0;
      $volume_template0 = 0;
      $volume_realisasi0 = 0;
      $volume_template1 = $volume_template;
      $volume_realisasi1 = $volume_realisasi;
      foreach ($querytemp->result() as $row){
         $volume_template0 = $row->volume_template;
         $volume_realisasi0 = $row->volume_realisasi;

         $volume_template1 = $volume_template + $row->volume_template;
         $volume_realisasi1 = $volume_realisasi + $row->volume_realisasi;

         $volume = $row->volume_template;
         $count = 1;
      }

      $query = $this->db->get_where('tb_item_template', array('id_list' => $template));
           $x=0;
           foreach ($query->result() as $row){
            $id_item[$x] = $row->id_item;

            $volume_item_sat[$x] = 0;
            $volume_item_temp[$x] = 0;
            $volume_item[$x] = 0;

            $volume_realisasi_sat[$x] = 0;
            $volume_realisasi_temp[$x] = 0;
            $volume_item_terealisasi[$x] = 0;

            $harga_satuan_item[$x] = $row->harga_satuan_item;
            $jumlah_harga[$x] =  0;
            $jumlah_harga_terealisasi[$x] = 0; 

            $koefisien_item_kali[$x]=$row->koefisien_item_kali;
            $koefisien_item_bagi[$x]=$row->koefisien_item_bagi;
            $koefisien_item_tambah[$x]=$row->koefisien_item_tambah;
            $koefisien_item_kurang[$x]=$row->koefisien_item_kurang;

            $id_pengali[$x]=$row->item_pengali;
            $id_pembagi[$x]=$row->item_pembagi;
            $id_penambah[$x]=$row->item_penambah;
            $id_pengurang[$x]=$row->item_pengurang;

            $jenis_item[$x] = $row->jenis_item;
            $satuan_item[$x] = $row->satuan_item;
            $kategori_item[$x] = $row->kategori_item;
            $jenis_pekerjaan_item[$x] = $row->jenis_pekerjaan_item;
            $subjenis_pekerjaan_item[$x] = $row->subjenis_pekerjaan_item;
            $jenis_pengadaan[$x] = $row->jenis_pengadaan;
            $id_unit_induk[$x] = $row->id_unit_induk;
            $id_unit[$x] = $row->id_unit;
            $sumber_hs[$x] = $row->sumber_hs;
            $x++;
           } 

         for($i=0;$i<$x;$i++){
         $this->db->where('id_utama', $id_utama);
         $this->db->where('id_item', $id_item[$i]);
         $queryrab = $this->db->get('tb_rab');

         $eksekusi[$i] = 1;

         $volume_item_sat0[$i] = 0;
         $volume_item_temp0[$i] = 0;
         $volume_item0[$i] = 0;

         $volume_realisasi_sat0[$i] = 0;
         $volume_realisasi_temp0[$i] = 0;
         $volume_item_terealisasi0[$i] = 0;

         $volume_item_sat[$i] = 0;
         $volume_item_temp[$i] = 0;
         $volume_item[$i] = 0;

         $volume_realisasi_sat[$i] = 0;
         $volume_realisasi_temp[$i] = 0;
         $volume_item_terealisasi[$i] = 0;

         foreach ($queryrab->result() as $rowrab){
               $volume_item_sat0[$i] = $rowrab->volume_item_sat;
               $volume_item_temp0[$i] = $rowrab->volume_item_temp;
               $volume_item0[$i] = $volume_item_sat0[$i]+$volume_item_temp0[$i];

               $volume_realisasi_sat0[$i] = $rowrab->volume_realisasi_sat;
               $volume_realisasi_temp0[$i] = $rowrab->volume_realisasi_temp;
               $volume_item_terealisasi0[$i] = $volume_realisasi_sat0[$i]+$volume_realisasi_temp0[$i];

               $volume_item_sat[$i] = $rowrab->volume_item_sat;
               $volume_item_temp[$i] = $rowrab->volume_item_temp;
               $volume_item[$i] = $volume_item_sat[$i]+$volume_item_temp[$i];

               $volume_realisasi_sat[$i] = $rowrab->volume_realisasi_sat;
               $volume_realisasi_temp[$i] = $rowrab->volume_realisasi_temp;
               $volume_item_terealisasi[$i] = $volume_realisasi_sat[$i]+$volume_realisasi_temp[$i];
               $eksekusi[$i] = 0;
            }
         }

      for($i=0;$i<$x;$i++){

         if($id_pengali[$i] == 0){
            $a = ($koefisien_item_kali[$i]*$volume_template);
            $ar = ($koefisien_item_kali[$i]*$volume_realisasi);
         }
         else{
            for($i2=0;$i2<$i;$i2++){
               if($id_pengali[$i] == $id_item[$i2]){
                  $a = $koefisien_item_kali[$i]*($volume_item_temp[$i2]-$volume_item_temp0[$i2]);
                  $ar = $koefisien_item_kali[$i]*($volume_realisasi_temp[$i2]-$volume_realisasi_temp0[$i2]); 
               } 
            }
         } 

         if($id_pembagi[$i] == 0){
            if($koefisien_item_bagi[$i]>0){
               if( ( $volume_template1 % $koefisien_item_bagi[$i]) > 0){
                  if($koefisien_item_bagi[$i]>0){
                     $b = ((((($volume_template1 - ($volume_template1 % $koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i])*$koefisien_item_bagi[$i])
                       +$koefisien_item_bagi[$i])/$koefisien_item_bagi[$i])-1;
                     $b = $b - (((((($volume_template0 - ($volume_template0 % $koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i])*$koefisien_item_bagi[$i])
                       +$koefisien_item_bagi[$i])/$koefisien_item_bagi[$i])-1);
                     
                     $br = ((((($volume_realisasi1 - ($volume_realisasi1 % $koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i])*$koefisien_item_bagi[$i])
                       +$koefisien_item_bagi[$i])/$koefisien_item_bagi[$i])-1;
                     $br = $br - (((((($volume_realisasi0 - ($volume_realisasi0 % $koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i])*$koefisien_item_bagi[$i])
                       +$koefisien_item_bagi[$i])/$koefisien_item_bagi[$i])-1);
                  }
                  else{$b=0;$br=0;}
               }
               else{
                  if($koefisien_item_bagi[$i]>0){
                     $b = (($volume_template1-($volume_template1%$koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i]);
                     $b = $b - (($volume_template0-($volume_template0%$koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i]);

                     $br = (($volume_realisasi1-($volume_realisasi1%$koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i]);
                     $br = $br - (($volume_realisasi0-($volume_realisasi0%$koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i]);

                  }
                  else{$b=0;$br=0;}
               }
            }else{$b=0;$br=0;}
         }

         else{
            for($i2=0;$i2<$i;$i2++){
               if($id_pembagi[$i] == $id_item[$i2]){
                  if($koefisien_item_bagi[$i]>0){
                     if( ($volume_item[$i2] % $koefisien_item_bagi[$i]) > 0){
                        $b = ((((($volume_item_temp[$i2] - ($volume_item_temp[$i2] % $koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i])*$koefisien_item_bagi[$i])
                            +$koefisien_item_bagi[$i])/$koefisien_item_bagi[$i])-1;
                        $b = $b - (((((($volume_item_temp0[$i2] - ($volume_item_temp0[$i2] % $koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i])*$koefisien_item_bagi[$i])
                            +$koefisien_item_bagi[$i])/$koefisien_item_bagi[$i])-1);

                        $br = ((((($volume_realisasi_temp[$i2] - ($volume_realisasi_temp[$i2] % $koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i])*$koefisien_item_bagi[$i])
                            +$koefisien_item_bagi[$i])/$koefisien_item_bagi[$i])-1;
                        $br = $br - (((((($volume_realisasi_temp0[$i2] - ($volume_realisasi_temp0[$i2] % $koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i])*$koefisien_item_bagi[$i])
                            +$koefisien_item_bagi[$i])/$koefisien_item_bagi[$i])-1);

                     }
                     else{
                        if($koefisien_item_bagi[$i]>0){
                           $b = (($volume_item_temp[$i2]-($volume_item_temp[$i2]%$koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i]);
                           $b = $b - (($volume_item_temp0[$i2]-($volume_item_temp0[$i2]%$koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i]);

                           $br = (($volume_realisasi_temp[$i2]-($volume_realisasi_temp[$i2]%$koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i]);
                           $br = $br - (($volume_realisasi_temp0[$i2]-($volume_realisasi_temp0[$i2]%$koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i]);
                        }
                        else{$b=0;$br=0;}
                     }
                  }else{$b=0;$br=0;}
               }
            }
         }

         if($id_penambah[$i] == 0){
            $c=0;
            $cr=0;
            if($volume_template>0 && $volume_template0==0){$c = $koefisien_item_tambah[$i];}
            if($volume_template<0 && $volume_template0==0){$c = -$koefisien_item_tambah[$i];}
            if($volume_template==-$volume_template0 && $volume_template0!=0){$c = -$koefisien_item_tambah[$i];}

            if($volume_realisasi>0 && $volume_realisasi0==0){$cr = $koefisien_item_tambah[$i];}
            if($volume_realisasi<0 && $volume_realisasi0==0){$cr = -$koefisien_item_tambah[$i];}
            if($volume_realisasi==-$volume_realisasi0 && $volume_realisasi0!=0){$cr = -$koefisien_item_tambah[$i];}
         }
         else{
            for($i2=0;$i2<$i;$i2++){
               if($id_penambah[$i] == $id_item[$i2]){
                  $c=0;
                  $cr=0;
                  if($volume_item_temp[$i2]>0 && $volume_template0==0 ){$c = $koefisien_item_tambah[$i];}
                  if($volume_item_temp[$i2]<0 && $volume_template0==0 ){$c = -$koefisien_item_tambah[$i];}
                  if($volume_item_temp[$i2]==-$volume_template0 && $volume_template0!=0 ){$c = -$koefisien_item_tambah[$i];}

                  if($volume_realisasi_temp[$i2]>0 && $volume_realisasi0==0){$cr = $koefisien_item_tambah[$i];}
                  if($volume_realisasi_temp[$i2]<0 && $volume_realisasi0==0){$cr = -$koefisien_item_tambah[$i];}
                  if($volume_realisasi_temp[$i2]==-$volume_realisasi0 && $volume_realisasi0!=0){$cr = -$koefisien_item_tambah[$i];}
               } 
            }
         } 
         
         if($id_pengurang[$i] == 0){
            $d = -($koefisien_item_kurang[$i]*$volume_template);
            $dr = -($koefisien_item_kurang[$i]*$volume_realisasi);
         }
         else{
            for($i2=0;$i2<$i;$i2++){
               if($id_pengurang[$i] == $id_item[$i2]){
                  $d = -($koefisien_item_kurang[$i]*($volume_item_temp[$i2]-$volume_item_temp0[$i2]));
                  $dr = -($koefisien_item_kurang[$i]*($volume_realisasi_temp[$i2]-$volume_realisasi_temp0[$i2]));
               } 
            }
         } 
               
         $volume_awal_item_temp[$i] = $volume_item_temp[$i];
         $volume_item_temp[$i] = $volume_item_temp[$i] + ($a+$b+$c+$d);
         
         $volume_awal_item[$i] = $volume_item[$i];
         $volume_item[$i] = $volume_item_sat[$i] + $volume_item_temp[$i];
         
         $jumlah_harga[$i] = $volume_item[$i] * $harga_satuan_item[$i];
         $total_inv = $total_inv + (1.1*(($volume_item[$i] - $volume_item0[$i]) * $harga_satuan_item[$i]));

         $volume_awal_realisasi_temp[$i] = $volume_realisasi_temp[$i];
         $volume_realisasi_temp[$i] = $volume_realisasi_temp[$i] + ($ar + $br + $cr + $dr);
         
         $volume_awal_item_terealisasi[$i] = $volume_item_terealisasi[$i];
         $volume_item_terealisasi[$i] = $volume_realisasi_sat[$i] + $volume_realisasi_temp[$i];

         $jumlah_harga_real[$i] = $volume_item_terealisasi[$i]*$harga_satuan_item[$i];
      }

      for($i=0;$i<$x;$i++){
         if($eksekusi[$i] == 1){
            $data3 = [
               'id_utama' => $id_utama,
               'nomor_rab' => $id_utama,
               'id_item' => $id_item[$i],
               'jenis_item' => $jenis_item[$i],
               'volume_item_sat' => 0,
               'volume_item_temp' => $volume_item_temp[$i],
               'volume_item' => $volume_item[$i],
               'volume_realisasi_sat' => 0,
               'volume_realisasi_temp' => 0,
               'volume_item_terealisasi' => 0,
               'satuan_item' => $satuan_item[$i],
               'harga_satuan_item' => $harga_satuan_item[$i],
               'jumlah_harga' => $jumlah_harga[$i],
               'jumlah_harga_terealisasi' => 0,
               'kategori_item' => $kategori_item[$i],
               'jenis_pekerjaan_item' => $jenis_pekerjaan_item[$i],
               'subjenis_pekerjaan_item' => $subjenis_pekerjaan_item[$i],
               'jenis_pengadaan' => $jenis_pengadaan[$i],
               'id_unit_induk' => $id_unit_induk[$i],
               'unit' => $id_unit[$i],
               'sumber_hs' => $sumber_hs[$i]
            ];
            $this->db->insert('tb_rab', $data3);
         }
         else{
            $data3 = [
               'volume_item_temp' => $volume_item_temp[$i],
               'volume_item' => $volume_item[$i],
               'jumlah_harga' => $jumlah_harga[$i]
            ];
               
               $this->db->where('id_utama', $id_utama); 
               $this->db->where('id_item', $id_item[$i]); 
               $this->db->update('tb_rab', $data3); 
         }
      } 

      $this->db->where('id_utama', $id_utama);
      $queryin = $this->db->get('tb_utama'); 

      foreach ($queryin->result() as $row)
      {
         $ninves = $row->nilai_investasi;
         $bpp = $row->bpp;
         $biaya_penyambungan = $row->biaya_penyambungan;
         $gain_penyambungan = $row->gain_penyambungan;
         $ttl = $row->ttl_lwbp;
         $ENS_saving = $row->ens;
         $loss_saving = $row->losses;
         $interest_rate = $row->interest_rate;
         $roe = $row->required_roe;
         $biaya_om = $row->biaya_om;
         $id_unit = $row->id_unit;
         $umur_aset = $row->umur_aset;
      }

      $this->db->where('id_unit', $id_unit);
      $queryun = $this->db->get('tb_unit'); 
      foreach ($queryun->result() as $row2)
      {
         $bpp_mc_tmtr = $row2->bpp_mc_tmtr;
      }

      $nilai_investasi = $ninves + $total_inv;
      if($nilai_investasi<0){$nilai_investasi=0;}

      //rwacc
       if ($bpp < $bpp_mc_tmtr || $nilai_investasi == 0 || $biaya_penyambungan == 0) {
                     $rwacc = 7.87;
                     if ($nilai_investasi == 0 || $biaya_penyambungan == 0) {
                        $rwacc = $interest_rate;
                     }
                  }else{
                     $der = ($nilai_investasi - $biaya_penyambungan) / $biaya_penyambungan;
                     $np = $nilai_investasi / 1000000000;
                     if ((1 + $der) == 0) {$debt = 0; $equity = 0;}else{$debt = $np * $der / (1+$der); $equity = $np / (1+$der);}
                     $rwacc = (($equity / $np) * $roe) + ((1 - 0.25) * ($debt / $np ) * $interest_rate);
                  }

         //irr npv
          $x = 1; 
         $cost  = 0;
         while($x <= $umur_aset) {
         $cost = $cost + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640* $loss_saving)-$biaya_om)*(1/pow((1+($interest_rate/100)),$x)));
         $x++;
         if($nilai_investasi==0){$cost_rasio =100;}
         else{$cost_rasio = ($cost+$biaya_penyambungan) / $nilai_investasi;}
         $npv = ($cost+$biaya_penyambungan) - $nilai_investasi;
         } 

         $irr = 0;
         $y = 0;
         while($y < 100) {

         $x = 1;
         $cost2  = 0;
         while($x <= $umur_aset) {
         $cost2 = $cost2 + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640*$loss_saving)-$biaya_om)*(1/pow((1+($irr/100)),$x)));
         $x++;
         } 

         $npv_triger = ($cost2 + $biaya_penyambungan) - $nilai_investasi;
         $irr++;
         $y++;
         if($npv_triger <= 0){$y = 100;}

         }

         $irr = $irr-2;
         $y = 0;
         while($y < 1) {

         $x = 1;
         $cost2  = 0;
         while($x <= $umur_aset) {
         $cost2 = $cost2 + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640*$loss_saving)-$biaya_om)*(1/pow((1+($irr/100)),$x)));
         $x++;
         } 

         $npv_triger = ($cost2 + $biaya_penyambungan) - $nilai_investasi;
         $irr=$irr+0.1;
         $y=$y+0.1;
         if($npv_triger <= 0){$y = 1;}

         }

         $irr = $irr-0.2;
         $y = 0;
         while($y < 0.1) {

         $x = 1;
         $cost2  = 0;
         while($x <= $umur_aset) {
         $cost2 = $cost2 + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640*$loss_saving)-$biaya_om)*(1/pow((1+($irr/100)),$x)));
         $x++;
         } 

         $npv_triger = ($cost2 + $biaya_penyambungan) - $nilai_investasi;
         $irr=$irr+0.01;
         $y=$y+0.01;
         if($npv_triger <= 0){$y = 1;}

         }

         $x = 1; 
         $cost  = 0;
         $cost_rasio =100;
         while($x <= $umur_aset) {
         $cost = $cost + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640*$loss_saving)-$biaya_om)*(1/pow((1+($interest_rate/100)),$x)));
         $x++;
         if($nilai_investasi==0){$cost_rasio =100;}
         else{$cost_rasio = ($cost+$biaya_penyambungan) / $nilai_investasi;}
         
         } 

         //payback
          $payback = ($nilai_investasi-$biaya_penyambungan)/
                         (
                           (($ttl-$bpp)* ((720*$loss_saving)+(720*$ENS_saving)))+($gain_penyambungan/12)
                         )/12;
         
         if($payback <0){$payback=0;}
            $data2 = [
                     'nilai_investasi' => $nilai_investasi,
                     'npv' => $npv,
                     'rwacc' => $rwacc,
                     'irr' => $irr,
                     'payback' => $payback
                  ];

            $this->db->where('id_utama', $id_utama);
            $this->db->update('tb_utama', $data2);

             if ($count==0){
               $data = [
               'id_utama' => $id_utama,
               'id_kategori' => $kategori,
               'id_list_template' => $template, 
               'volume_template' => $volume_template,
               'volume_realisasi' => $volume_realisasi,
               'id_satuan' => $satuan
                     ];

               $this->Model_rab->insert_templaterab($data, 'tb_template_rab');
               $this->session->set_flashdata('flash', 'Ditambah');
             }
             else{
               $data = [
               'volume_template' => $volume+$volume_template
                     ];

               $this->db->where('id_list_template', $template); 
               $this->db->update('tb_template_rab', $data); 
               $this->session->set_flashdata('flash', 'Template sudah ada, volume ditambahkan pada template yang ada');

             }

      
      redirect('rab/rab/file_rab/' .$id_utama);
   }

   public function hapus_rab($id) 
   {

       $query = $this->db->get_where('tb_rab', array('id_rab' => $id));

           foreach ($query->result() as $row){
              $id_utama = $row->id_utama;
              $volume_item = $row->volume_item_sat;
              $harga_satuan = $row->harga_satuan_item;
              $jml_harga = $volume_item * $harga_satuan;
              $id_item = $row->id_item;
              $volume_temp = $row->volume_item_temp;
           }

      $count1=0;
      $querytemp = $this->db->get_where('tb_item_template', array('id_item' => $id_item));
      foreach ($querytemp->result() as $rowtemp){
              $id_list = $rowtemp->id_list;
              $querytemp2 = $this->db->get_where('tb_template_rab', array('id_list_template' => $id_list));
              foreach ($querytemp2->result() as $rowtemp2){$count1=1;}
           }

         $this->db->where('id_utama', $id_utama);
         $queryin = $this->db->get('tb_utama');

         foreach ($queryin->result() as $row)
         {
            $ninves = $row->nilai_investasi;
            $bpp = $row->bpp;
            $biaya_penyambungan = $row->biaya_penyambungan;
            $gain_penyambungan = $row->gain_penyambungan;
            $ttl = $row->ttl_lwbp;
            $ENS_saving = $row->ens;
            $loss_saving = $row->losses;
            $interest_rate = $row->interest_rate;
            $roe = $row->required_roe;
            $biaya_om = $row->biaya_om;
            $id_unit = $row->id_unit;
            $umur_aset = $row->umur_aset;
         }

         $this->db->where('id_unit', $id_unit);
         $queryun = $this->db->get('tb_unit');
         foreach ($queryun->result() as $row2)
         {
            $bpp_mc_tmtr = $row2->bpp_mc_tmtr;
         }

         $nilai_investasi = $ninves-($jml_harga*1.1); 

         //rwacc
          if ($bpp < $bpp_mc_tmtr || $nilai_investasi == 0 || $biaya_penyambungan == 0) {
                        $rwacc = 7.87;
                        if ($nilai_investasi == 0 || $biaya_penyambungan == 0) {
                           $rwacc = $interest_rate;
                        }
                     }else{
                        $der = ($nilai_investasi - $biaya_penyambungan) / $biaya_penyambungan;
                        $np = $nilai_investasi / 1000000000;
                        if ((1 + $der) == 0) {$debt = 0; $equity = 0;}else{$debt = $np * $der / (1+$der); $equity = $np / (1+$der);}
                        $rwacc = (($equity / $np) * $roe) + ((1 - 0.25) * ($debt / $np ) * $interest_rate);
                     }

            //irr npv
             $x = 1; 
            $cost  = 0;
            while($x <= $umur_aset) {
            $cost = $cost + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640* $loss_saving)-$biaya_om)*(1/pow((1+($interest_rate/100)),$x)));
            $x++;
            if($nilai_investasi==0){$cost_rasio =100;}
            else{$cost_rasio = ($cost+$biaya_penyambungan) / $nilai_investasi;}
            $npv = ($cost+$biaya_penyambungan) - $nilai_investasi;
            } 

            $irr = 0;
            $y = 0;
            while($y < 100) {

            $x = 1;
            $cost2  = 0;
            while($x <= $umur_aset) {
            $cost2 = $cost2 + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640*$loss_saving)-$biaya_om)*(1/pow((1+($irr/100)),$x)));
            $x++;
            } 

            $npv_triger = ($cost2 + $biaya_penyambungan) - $nilai_investasi;
            $irr++;
            $y++;
            if($npv_triger <= 0){$y = 100;}

            }

            $irr = $irr-2;
            $y = 0;
            while($y < 1) {

            $x = 1;
            $cost2  = 0;
            while($x <= $umur_aset) {
            $cost2 = $cost2 + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640*$loss_saving)-$biaya_om)*(1/pow((1+($irr/100)),$x)));
            $x++;
            } 

            $npv_triger = ($cost2 + $biaya_penyambungan) - $nilai_investasi;
            $irr=$irr+0.1;
            $y=$y+0.1;
            if($npv_triger <= 0){$y = 1;}

            }

            $irr = $irr-0.2;
            $y = 0;
            while($y < 0.1) {

            $x = 1;
            $cost2  = 0;
            while($x <= $umur_aset) {
            $cost2 = $cost2 + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640*$loss_saving)-$biaya_om)*(1/pow((1+($irr/100)),$x)));
            $x++;
            } 

            $npv_triger = ($cost2 + $biaya_penyambungan) - $nilai_investasi;
            $irr=$irr+0.01;
            $y=$y+0.01;
            if($npv_triger <= 0){$y = 1;}

            }

            $x = 1; 
            $cost  = 0;
            $cost_rasio =100;
            while($x <= $umur_aset) {
            $cost = $cost + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640*$loss_saving)-$biaya_om)*(1/pow((1+($interest_rate/100)),$x)));
            $x++;
            if($nilai_investasi==0){$cost_rasio =100;}
            else{$cost_rasio = ($cost+$biaya_penyambungan) / $nilai_investasi;}
            
            } 

            //payback
            $payback = ($nilai_investasi-$biaya_penyambungan)/
                         (
                           (($ttl-$bpp)* ((720*$loss_saving)+(720*$ENS_saving)))+($gain_penyambungan/12)
                         )/12;
            
            if($payback <0){$payback=0;}
         
               $kategori = $this->input->post('kategori');
               $jenis_pekerjaan = $this->input->post('jenis_pekerjaan');
               $subjenis = $this->input->post('subjenis');
               $item = $this->input->post('item');
               $satuan_item = $this->input->post('satuan_item');
               $jenis_item = $this->input->post('jenis_item');
               $jenis_pengadaan = $this->input->post('jenis_pengadaan');
               $unit_induk = $this->input->post('unit_induk');
               $unit = $this->input->post('unit');
               $sumber_hs = $this->input->post('sumber_hs'); 

               $data2 = [
                        'nilai_investasi' => $nilai_investasi,
                        'npv' => $npv,
                        'rwacc' => $rwacc,
                        'irr' => $irr,
                        'payback' => $payback
                     ];

               $this->db->where('id_utama', $id_utama);
               $this->db->update('tb_utama', $data2);

               if($count1 == 0){
                  $this->Model_rab->delete_rab($id);
                  $this->session->set_flashdata('flash', 'DiHapus'); 
               }
               else{

                  $data3 = [
                        'volume_item_sat' => 0,
                        'volume_item' => $volume_temp,
                        'jumlah_harga' => $volume_temp*$harga_satuan
                     ];

                  $this->db->where('id_rab', $id); 
                  $this->db->update('tb_rab', $data3); 

                  $this->session->set_flashdata('flash', 'Data memiliki volume dari template, volume satuan dinolkan '); 
               }

               redirect('rab/rab/file_rab/' .$id_utama);
   }

   public function hapus_template_rab($id)
   {
         $queryrab1 = $this->db->get_where('tb_template_rab', array('id_template_rab' => $id));

           foreach ($queryrab1->result() as $rowrab1){
              $id_utama = $rowrab1->id_utama;
              $id_list = $rowrab1->id_list_template;
              $volume_template0 = $rowrab1->volume_template;
              $volume_realisasi0 = $rowrab1->volume_realisasi;
           }

         $volume_template1 = 0;
         $volume_realisasi1 = 0;

         $volume_template = $volume_template1 - $volume_template0;
         $volume_realisasi = $volume_realisasi1 - $volume_realisasi0;

         $total_inv = 0;

         $query = $this->db->get_where('tb_item_template', array('id_list' => $id_list));
         $x=0;
         foreach ($query->result() as $row){
            $id_item[$x] = $row->id_item;
            $volume_item[$x] = 0;
            $volume_item_terealisasi[$x] = 0;
            $harga_satuan_item[$x] = $row->harga_satuan_item;
            $jumlah_harga[$x] =  0;
            $jumlah_harga_terealisasi[$x] = 0; 

            $koefisien_item_kali[$x]=$row->koefisien_item_kali;
            $koefisien_item_bagi[$x]=$row->koefisien_item_bagi;
            $koefisien_item_tambah[$x]=$row->koefisien_item_tambah;
            $koefisien_item_kurang[$x]=$row->koefisien_item_kurang;

            $id_pengali[$x]=$row->item_pengali;
            $id_pembagi[$x]=$row->item_pembagi;
            $id_penambah[$x]=$row->item_penambah;
            $id_pengurang[$x]=$row->item_pengurang;

            $jenis_item[$x] = $row->jenis_item;
            $satuan_item[$x] = $row->satuan_item;
            $kategori_item[$x] = $row->kategori_item;
            $jenis_pekerjaan_item[$x] = $row->jenis_pekerjaan_item;
            $subjenis_pekerjaan_item[$x] = $row->subjenis_pekerjaan_item;
            $jenis_pengadaan[$x] = $row->jenis_pengadaan;
            $id_unit_induk[$x] = $row->id_unit_induk;
            $id_unit[$x] = $row->id_unit;
            $sumber_hs[$x] = $row->sumber_hs;
            $x++;
         } 

         for($i=0;$i<$x;$i++){
         $this->db->where('id_utama', $id_utama);
         $this->db->where('id_item', $id_item[$i]);
         $queryrab = $this->db->get('tb_rab');
         $volume_item_sat0[$i] = 0;
         $volume_item_temp0[$i] = 0;
         $volume_item0[$i] = 0;

         $volume_realisasi_sat0[$i] = 0;
         $volume_realisasi_temp0[$i] = 0;
         $volume_item_terealisasi0[$i] = 0;

         $volume_item_sat[$i] = 0;
         $volume_item_temp[$i] = 0;
         $volume_item[$i] = 0;

         $volume_realisasi_sat[$i] = 0;
         $volume_realisasi_temp[$i] = 0;
         $volume_item_terealisasi[$i] = 0;

         foreach ($queryrab->result() as $rowrab){

               $volume_item_sat0[$i] = $rowrab->volume_item_sat;
               $volume_item_temp0[$i] = $rowrab->volume_item_temp;
               $volume_item0[$i] = $volume_item_sat0[$i]+$volume_item_temp0[$i];

               $volume_realisasi_sat0[$i] = $rowrab->volume_realisasi_sat;
               $volume_realisasi_temp0[$i] = $rowrab->volume_realisasi_temp;
               $volume_item_terealisasi0[$i] = $volume_realisasi_sat0[$i]+$volume_realisasi_temp0[$i];

               $volume_item_sat[$i] = $rowrab->volume_item_sat;
               $volume_item_temp[$i] = $rowrab->volume_item_temp;
               $volume_item[$i] = $volume_item_sat[$i]+$volume_item_temp[$i];

               $volume_realisasi_sat[$i] = $rowrab->volume_realisasi_sat;
               $volume_realisasi_temp[$i] = $rowrab->volume_realisasi_temp;
               $volume_item_terealisasi[$i] = $volume_realisasi_sat[$i]+$volume_realisasi_temp[$i];
            }
         }



      for($i=0;$i<$x;$i++){

         $eksekusi[$i] = 1;

         if($id_pengali[$i] == 0){
            $a = ($koefisien_item_kali[$i]*$volume_template);
            $ar = ($koefisien_item_kali[$i]*$volume_realisasi);
         }
         else{
            for($i2=0;$i2<$i;$i2++){
               if($id_pengali[$i] == $id_item[$i2]){
                  $a = $koefisien_item_kali[$i]*($volume_item_temp[$i2]-$volume_item_temp0[$i2]);
                  $ar = $koefisien_item_kali[$i]*($volume_realisasi_temp[$i2]-$volume_realisasi_temp0[$i2]); 
               } 
            }
         } 

         if($id_pembagi[$i] == 0){
            if($koefisien_item_bagi[$i]>0){
               if( ( $volume_template1 % $koefisien_item_bagi[$i]) > 0){
                  if($koefisien_item_bagi[$i]>0){
                     $b = ((((($volume_template1 - ($volume_template1 % $koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i])*$koefisien_item_bagi[$i])
                       +$koefisien_item_bagi[$i])/$koefisien_item_bagi[$i])-1;
                     $b = $b - (((((($volume_template0 - ($volume_template0 % $koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i])*$koefisien_item_bagi[$i])
                       +$koefisien_item_bagi[$i])/$koefisien_item_bagi[$i])-1);
                     
                     $br = ((((($volume_realisasi1 - ($volume_realisasi1 % $koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i])*$koefisien_item_bagi[$i])
                       +$koefisien_item_bagi[$i])/$koefisien_item_bagi[$i])-1;
                     $br = $br - (((((($volume_realisasi0 - ($volume_realisasi0 % $koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i])*$koefisien_item_bagi[$i])
                       +$koefisien_item_bagi[$i])/$koefisien_item_bagi[$i])-1);
                  }
                  else{$b=0;$br=0;}
               }
               else{
                  if($koefisien_item_bagi[$i]>0){
                     $b = (($volume_template1-($volume_template1%$koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i]);
                     $b = $b - (($volume_template0-($volume_template0%$koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i]);

                     $br = (($volume_realisasi1-($volume_realisasi1%$koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i]);
                     $br = $br - (($volume_realisasi0-($volume_realisasi0%$koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i]);

                  }
                  else{$b=0;$br=0;}
               }
            }else{$b=0;$br=0;}
         }

         else{
            for($i2=0;$i2<$i;$i2++){
               if($id_pembagi[$i] == $id_item[$i2]){
                  if($koefisien_item_bagi[$i]>0){
                     if( ($volume_item[$i2] % $koefisien_item_bagi[$i]) > 0){
                        $b = ((((($volume_item_temp[$i2] - ($volume_item_temp[$i2] % $koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i])*$koefisien_item_bagi[$i])
                            +$koefisien_item_bagi[$i])/$koefisien_item_bagi[$i])-1;
                        $b = $b - (((((($volume_item_temp0[$i2] - ($volume_item_temp0[$i2] % $koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i])*$koefisien_item_bagi[$i])
                            +$koefisien_item_bagi[$i])/$koefisien_item_bagi[$i])-1);

                        $br = ((((($volume_realisasi_temp[$i2] - ($volume_realisasi_temp[$i2] % $koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i])*$koefisien_item_bagi[$i])
                            +$koefisien_item_bagi[$i])/$koefisien_item_bagi[$i])-1;
                        $br = $br - (((((($volume_realisasi_temp0[$i2] - ($volume_realisasi_temp0[$i2] % $koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i])*$koefisien_item_bagi[$i])
                            +$koefisien_item_bagi[$i])/$koefisien_item_bagi[$i])-1);

                     }
                     else{
                        if($koefisien_item_bagi[$i]>0){
                           $b = (($volume_item_temp[$i2]-($volume_item_temp[$i2]%$koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i]);
                           $b = $b - (($volume_item_temp0[$i2]-($volume_item_temp0[$i2]%$koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i]);

                           $br = (($volume_realisasi_temp[$i2]-($volume_realisasi_temp[$i2]%$koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i]);
                           $br = $br - (($volume_realisasi_temp0[$i2]-($volume_realisasi_temp0[$i2]%$koefisien_item_bagi[$i]))/$koefisien_item_bagi[$i]);
                        }
                        else{$b=0;$br=0;}
                     }
                  }else{$b=0;$br=0;}
               }
            }
         }

         if($id_penambah[$i] == 0){
            $c=0;
            $cr=0;
            if($volume_template>0 && $volume_template0==0){$c = $koefisien_item_tambah[$i];}
            if($volume_template<0 && $volume_template0==0){$c = -$koefisien_item_tambah[$i];}
            if($volume_template==-$volume_template0 && $volume_template0!=0){$c = -$koefisien_item_tambah[$i];}

            if($volume_realisasi>0 && $volume_realisasi0==0){$cr = $koefisien_item_tambah[$i];}
            if($volume_realisasi<0 && $volume_realisasi0==0){$cr = -$koefisien_item_tambah[$i];}
            if($volume_realisasi==-$volume_realisasi0 && $volume_realisasi0!=0){$cr = -$koefisien_item_tambah[$i];}
         }
         else{
            for($i2=0;$i2<$i;$i2++){
               if($id_penambah[$i] == $id_item[$i2]){
                  $c=0;
                  $cr=0;
                  if($volume_item_temp[$i2]>0 && $volume_template0==0 ){$c = $koefisien_item_tambah[$i];}
                  if($volume_item_temp[$i2]<0 && $volume_template0==0 ){$c = -$koefisien_item_tambah[$i];}
                  if($volume_item_temp[$i2]==-$volume_template0 && $volume_template0!=0 ){$c = -$koefisien_item_tambah[$i];}

                  if($volume_realisasi_temp[$i2]>0 && $volume_realisasi0==0){$cr = $koefisien_item_tambah[$i];}
                  if($volume_realisasi_temp[$i2]<0 && $volume_realisasi0==0){$cr = -$koefisien_item_tambah[$i];}
                  if($volume_realisasi_temp[$i2]==-$volume_realisasi0 && $volume_realisasi0!=0){$cr = -$koefisien_item_tambah[$i];}
               } 
            }
         } 
         
         if($id_pengurang[$i] == 0){
            $d = -($koefisien_item_kurang[$i]*$volume_template);
            $dr = -($koefisien_item_kurang[$i]*$volume_realisasi);
         }
         else{
            for($i2=0;$i2<$i;$i2++){
               if($id_pengurang[$i] == $id_item[$i2]){
                  $d = -($koefisien_item_kurang[$i]*($volume_item_temp[$i2]-$volume_item_temp0[$i2]));
                  $dr = -($koefisien_item_kurang[$i]*($volume_realisasi_temp[$i2]-$volume_realisasi_temp0[$i2]));
               } 
            }
         } 
               
         $volume_awal_item_temp[$i] = $volume_item_temp[$i];
         $volume_item_temp[$i] = $volume_item_temp[$i] + ($a+$b+$c+$d);
         
         $volume_awal_item[$i] = $volume_item[$i];
         $volume_item[$i] = $volume_item_sat[$i] + $volume_item_temp[$i];
         
         $jumlah_harga[$i] = $volume_item[$i] * $harga_satuan_item[$i];
         $total_inv = $total_inv + (1.1*(($volume_item[$i] - $volume_item0[$i]) * $harga_satuan_item[$i]));

         $volume_awal_realisasi_temp[$i] = $volume_realisasi_temp[$i];
         $volume_realisasi_temp[$i] = $volume_realisasi_temp[$i] + ($ar + $br + $cr + $dr);
         
         $volume_awal_item_terealisasi[$i] = $volume_item_terealisasi[$i];
         $volume_item_terealisasi[$i] = $volume_realisasi_sat[$i] + $volume_realisasi_temp[$i];

         $jumlah_harga_real[$i] = $volume_item_terealisasi[$i]*$harga_satuan_item[$i];

         if($volume_item[$i] > 0 || $volume_item_terealisasi[$i] > 0){$eksekusi[$i] = 0;}

      }

      for($i=0;$i<$x;$i++){
            if($eksekusi[$i] == 0){
            $data3 = [
               'volume_item_temp' => $volume_item_temp[$i],
               'volume_item' => $volume_item[$i],
               'volume_realisasi_temp' => $volume_realisasi_temp[$i],
               'volume_item_terealisasi' => $volume_item_terealisasi[$i],
               'jumlah_harga' => $harga_satuan_item[$i],
               'jumlah_harga_terealisasi' => $jumlah_harga_real[$i]
            ];
               
               $this->db->where('id_utama', $id_utama); 
               $this->db->where('id_item', $id_item[$i]); 
               $this->db->update('tb_rab', $data3); 
            }
            else{
               $this->db->where('id_utama', $id_utama); 
               $this->db->where('id_item', $id_item[$i]); 
               $this->db->delete('tb_rab'); 
            }
         
      } 
      $this->db->where('id_utama', $id_utama);
      $queryin = $this->db->get('tb_utama'); 

      foreach ($queryin->result() as $row)
      {
         $ninves = $row->nilai_investasi;
         $bpp = $row->bpp;
         $biaya_penyambungan = $row->biaya_penyambungan;
         $gain_penyambungan = $row->gain_penyambungan;
         $ttl = $row->ttl_lwbp;
         $ENS_saving = $row->ens;
         $loss_saving = $row->losses;
         $interest_rate = $row->interest_rate;
         $roe = $row->required_roe;
         $biaya_om = $row->biaya_om;
         $id_unit = $row->id_unit;
         $umur_aset = $row->umur_aset;
      }

      $this->db->where('id_unit', $id_unit);
      $queryun = $this->db->get('tb_unit'); 
      foreach ($queryun->result() as $row2)
      {
         $bpp_mc_tmtr = $row2->bpp_mc_tmtr;
      }

      $nilai_investasi = $ninves + $total_inv;
      if($nilai_investasi<0){$nilai_investasi=0;}

      //rwacc
       if ($bpp < $bpp_mc_tmtr || $nilai_investasi == 0 || $biaya_penyambungan == 0) {
                     $rwacc = 7.87;
                     if ($nilai_investasi == 0 || $biaya_penyambungan == 0) {
                        $rwacc = $interest_rate;
                     }
                  }else{
                     $der = ($nilai_investasi - $biaya_penyambungan) / $biaya_penyambungan;
                     $np = $nilai_investasi / 1000000000;
                     if ((1 + $der) == 0) {$debt = 0; $equity = 0;}else{$debt = $np * $der / (1+$der); $equity = $np / (1+$der);}
                     $rwacc = (($equity / $np) * $roe) + ((1 - 0.25) * ($debt / $np ) * $interest_rate);
                  }

         //irr npv
          $x = 1; 
         $cost  = 0;
         while($x <= $umur_aset) {
         $cost = $cost + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640* $loss_saving)-$biaya_om)*(1/pow((1+($interest_rate/100)),$x)));
         $x++;
         if($nilai_investasi==0){$cost_rasio =100;}
         else{$cost_rasio = ($cost+$biaya_penyambungan) / $nilai_investasi;}
         $npv = ($cost+$biaya_penyambungan) - $nilai_investasi;
         } 

         $irr = 0;
         $y = 0;
         while($y < 100) {

         $x = 1;
         $cost2  = 0;
         while($x <= $umur_aset) {
         $cost2 = $cost2 + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640*$loss_saving)-$biaya_om)*(1/pow((1+($irr/100)),$x)));
         $x++;
         } 

         $npv_triger = ($cost2 + $biaya_penyambungan) - $nilai_investasi;
         $irr++;
         $y++;
         if($npv_triger <= 0){$y = 100;}

         }

         $irr = $irr-2;
         $y = 0;
         while($y < 1) {

         $x = 1;
         $cost2  = 0;
         while($x <= $umur_aset) {
         $cost2 = $cost2 + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640*$loss_saving)-$biaya_om)*(1/pow((1+($irr/100)),$x)));
         $x++;
         } 

         $npv_triger = ($cost2 + $biaya_penyambungan) - $nilai_investasi;
         $irr=$irr+0.1;
         $y=$y+0.1;
         if($npv_triger <= 0){$y = 1;}

         }

         $irr = $irr-0.2;
         $y = 0;
         while($y < 0.1) {

         $x = 1;
         $cost2  = 0;
         while($x <= $umur_aset) {
         $cost2 = $cost2 + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640*$loss_saving)-$biaya_om)*(1/pow((1+($irr/100)),$x)));
         $x++;
         } 

         $npv_triger = ($cost2 + $biaya_penyambungan) - $nilai_investasi;
         $irr=$irr+0.01;
         $y=$y+0.01;
         if($npv_triger <= 0){$y = 1;}

         }

         $x = 1; 
         $cost  = 0;
         $cost_rasio =100;
         while($x <= $umur_aset) {
         $cost = $cost + (($gain_penyambungan+(($ttl-$bpp)*8640*$ENS_saving)+(($ttl-$bpp)*8640*$loss_saving)-$biaya_om)*(1/pow((1+($interest_rate/100)),$x)));
         $x++;
         if($nilai_investasi==0){$cost_rasio =100;}
         else{$cost_rasio = ($cost+$biaya_penyambungan) / $nilai_investasi;}
         
         } 

         //payback
          $payback = ($nilai_investasi-$biaya_penyambungan)/
                         (
                           (($ttl-$bpp)* ((720*$loss_saving)+(720*$ENS_saving)))+($gain_penyambungan/12)
                         )/12;
         
         if($payback <0){$payback=0;}
            $data2 = [
                     'nilai_investasi' => $nilai_investasi,
                     'npv' => $npv,
                     'rwacc' => $rwacc,
                     'irr' => $irr,
                     'payback' => $payback
                  ];

            $this->db->where('id_utama', $id_utama);
            $this->db->update('tb_utama', $data2);

            $this->Model_rab->delete_templaterab($id);
            $this->session->set_flashdata('flash', 'DiHapus');
            redirect('rab/rab/file_rab/' .$id_utama);
   }

   public function edit_rab($id)
   {
      $data['tittle'] = 'Edit';
      $data['rab'] = $this->Model_rab->getrabById($id);
      $this->form_validation->set_rules('id_rab', 'id_rab', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('rab/edit_rab', $data);
            $this->load->view('templates/footer');
      } else {
         
         $query = $this->db->get_where('tb_rab', array('id_rab' => $id));

           foreach ($query->result() as $row){
              $id_utama = $row->id_utama;
           }

         $this->Model_rab->updaterab();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('rab/rab/file_rab/' .$id_utama);
      }
   }

   public function edit_template_rab($id)
   {
      $data['tittle'] = 'Edit';
      $data['templaterab'] = $this->Model_rab->gettemplaterabById($id);
      $data['kategori'] = $this->Model_item->fetch_kategori();
      $data['list'] = $this->Model_layanan->getAlllist();
      $data['satuan'] = $this->Model_satuan->getAllsatuan();
      $this->form_validation->set_rules('id_template_rab', 'id_template_rab', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('rab/edit_templaterab', $data);
            $this->load->view('templates/footer');
      } else {
         
         $query = $this->db->get_where('tb_template_rab', array('id_template_rab' => $id));

           foreach ($query->result() as $row){
              $id_utama = $row->id_utama;
           }

         $this->Model_rab->updatetemplaterab();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('rab/rab/file_rab/' .$id_utama);
      }
   }

   public function pracetak()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'RAB'
            ];
        
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('rab/pracetak', $data);
         $this->load->view('templates/footer');
      }
   }
   
}

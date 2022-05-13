<?php

class Model_rab extends CI_Model
{
   
    public function getAllrab()
   {
          
      $query = "SELECT tb_rab.*, tb_item.*, tb_jenis.*, tb_satuan.*, tb_kategori.*, tb_jenis_pekerjaan.*, tb_subjenis_pekerjaan.*, tb_jenis_pengadaan.*, tb_unit_induk.*, tb_unit.*, tb_sumberhs.*
                  FROM tb_rab JOIN tb_item ON tb_rab.id_item=tb_item.id_item join tb_jenis on tb_rab.jenis_item=tb_jenis.id_jenis join tb_satuan on tb_rab.satuan_item=tb_satuan.id_satuan join tb_kategori on tb_rab.kategori_item=tb_kategori.id_kategori join tb_jenis_pekerjaan on tb_rab.jenis_pekerjaan_item=tb_jenis_pekerjaan.id_jp join tb_subjenis_pekerjaan on tb_rab.subjenis_pekerjaan_item=tb_subjenis_pekerjaan.id_subjenis_pekerjaan join tb_jenis_pengadaan on tb_rab.jenis_pengadaan=tb_jenis_pengadaan.id_jenis_pengadaan join tb_unit_induk on tb_rab.id_unit_induk=tb_unit_induk.id_unit_induk join tb_unit on tb_rab.unit=tb_unit.id_unit join tb_sumberhs on tb_rab.sumber_hs=tb_sumberhs.id_sumber_hs ORDER BY tb_rab.kategori_item ASC, tb_rab.jenis_item, tb_item.uraian_item";
      return $this->db->query($query)->result_array();
   }

   public function getAllrabid($id)
   {
          
      $query = "SELECT tb_rab.*, tb_item.*, tb_jenis.*, tb_satuan.*, tb_kategori.*, tb_jenis_pekerjaan.*, tb_subjenis_pekerjaan.*, tb_jenis_pengadaan.*, tb_unit_induk.*, tb_unit.*, tb_sumberhs.*
                  FROM tb_rab JOIN tb_item ON tb_rab.id_item=tb_item.id_item join tb_jenis on tb_rab.jenis_item=tb_jenis.id_jenis join tb_satuan on tb_rab.satuan_item=tb_satuan.id_satuan join tb_kategori on tb_rab.kategori_item=tb_kategori.id_kategori join tb_jenis_pekerjaan on tb_rab.jenis_pekerjaan_item=tb_jenis_pekerjaan.id_jp join tb_subjenis_pekerjaan on tb_rab.subjenis_pekerjaan_item=tb_subjenis_pekerjaan.id_subjenis_pekerjaan join tb_jenis_pengadaan on tb_rab.jenis_pengadaan=tb_jenis_pengadaan.id_jenis_pengadaan join tb_unit_induk on tb_rab.id_unit_induk=tb_unit_induk.id_unit_induk join tb_unit on tb_rab.unit=tb_unit.id_unit join tb_sumberhs on tb_rab.sumber_hs=tb_sumberhs.id_sumber_hs where tb_rab.id_utama='$id' ORDER BY tb_rab.jenis_item DESC, tb_rab.kategori_item, tb_item.uraian_item";
      return $this->db->query($query)->result_array();
   }

    public function getAlltemplaterab()
   {
          
      $query = "SELECT tb_template_rab.*, tb_utama.*, tb_list_template.*, tb_satuan.*, tb_kategori.*
                  FROM tb_template_rab JOIN tb_utama ON tb_template_rab.id_utama=tb_utama.id_utama join tb_list_template on tb_template_rab.id_list_template=tb_list_template.id_list join tb_satuan on tb_template_rab.id_satuan=tb_satuan.id_satuan join tb_kategori on tb_template_rab.id_kategori=tb_kategori.id_kategori ORDER BY tb_template_rab.id_kategori ASC, tb_list_template.uraian_template"; 
      return $this->db->query($query)->result_array();
   }

    public function getAlltemplaterabid($id)
   {
          
      $query = "SELECT tb_template_rab.*, tb_utama.*, tb_list_template.*, tb_satuan.*, tb_kategori.*
                  FROM tb_template_rab JOIN tb_utama ON tb_template_rab.id_utama=tb_utama.id_utama join tb_list_template on tb_template_rab.id_list_template=tb_list_template.id_list join tb_satuan on tb_template_rab.id_satuan=tb_satuan.id_satuan join tb_kategori on tb_template_rab.id_kategori=tb_kategori.id_kategori where tb_template_rab.id_utama='$id' ORDER BY tb_template_rab.id_kategori ASC, tb_list_template.uraian_template"; 
      return $this->db->query($query)->result_array();
   }

   public function insert_rab($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function insert_templaterab($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_rab($id) 
   {
      $this->db->delete('tb_rab', ['id_rab' => $id]);
   }

   public function delete_templaterab($id)
   {
      $this->db->delete('tb_template_rab', ['id_template_rab' => $id]);
   }

   public function getrabById($id)
   {
      return $this->db->get_where('tb_rab', ['id_rab' => $id])->row_array();
   }

   public function gettemplaterabById($id)
   {
      return $this->db->get_where('tb_template_rab', ['id_template_rab' => $id])->row_array();
   }

   public function updaterab()
   {
       $harga_satuan = $this->input->post('harga_satuan');

      $volume_sat =  $this->input->post('volume_item_sat');
      $volume_temp = $this->input->post('volume_item_temp');
      $volume_item = $this->input->post('volume_item_sat') + $this->input->post('volume_item_temp');

      $volume_real_sat = $this->input->post('volume_real_sat');
      $volume_real_temp = $this->input->post('volume_real_temp');
      $volume_item_terealisasi = $this->input->post('volume_real_sat') + $this->input->post('volume_real_temp');  
      
      $volume_awal = $this->input->post('volume_awal');  
      
      $id_utama = $this->input->post('id_utama');

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
     
      $jml_harga = ($volume_item - $volume_awal) * $harga_satuan; 

      $nilai_investasi = $ninves + ($jml_harga*1.1);
      if($nilai_investasi<0){$nilai_investasi=0;}

      $jml_harga_realisasi = $volume_item_terealisasi * $harga_satuan;

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


      $data = [
        'volume_item_sat' => $volume_sat,
        'volume_item_temp' => $volume_temp,
        'volume_item' => $volume_item,

        'volume_realisasi_sat' => $volume_real_sat,
        'volume_realisasi_temp' => $volume_real_temp,
        'volume_item_terealisasi' => $volume_item_terealisasi,
        
        'jumlah_harga' => $volume_item*$harga_satuan,
        'jumlah_harga_terealisasi' => $jml_harga_realisasi
      ];

      $this->db->update('tb_rab', $data, ['id_rab' => $this->input->post('id_rab')]);
   }

   public function updatetemplaterab()
   {
      $id_utama = $this->input->post('id_utama');
      $kategori = $this->input->post('kategori2');
      $template = $this->input->post('id_template_rab');
      $id_list = $this->input->post('id_list');
      $volume_template1 = $this->input->post('volume_template');
      $volume_realisasi1 = $this->input->post('volume_realisasi');
      $satuan = $this->input->post('satuan_item2');

      $this->db->where('id_template_rab', $template); 
      $querytemplate = $this->db->get('tb_template_rab'); 
      $volume = 0;
      $volume_template0 = 0;
      $volume_realisasi0 = 0;
      $volume_template = 0;
      $volume_realisasi = 0;
      foreach ($querytemplate->result() as $rowtemplate)
      {
         $volume_template0 = $rowtemplate->volume_template;
         $volume_realisasi0 = $rowtemplate->volume_realisasi;

         $volume_template = $volume_template1 - $rowtemplate->volume_template;
         $volume_realisasi = $volume_realisasi1 - $rowtemplate->volume_realisasi;

         $volume = $volume_template0;
         $count = 1;
      }

      $total_inv = 0;

      $query = $this->db->get_where('tb_item_template', array('id_list' => $id_list));
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
         $eksekusi_edit[$i] = 0;

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
               $eksekusi_edit[$i] = 1;

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
         if($eksekusi_edit[$i] == 0){
            $data3 = [
               'id_utama' => $id_utama,
               'nomor_rab' => $id_utama,
               'id_item' => $id_item[$i],
               'jenis_item' => $jenis_item[$i],
               'volume_item_sat' => 0,
               'volume_item_temp' => $volume_item_temp[$i],
               'volume_item' => $volume_item[$i],
               'volume_realisasi_sat' => 0,
               'volume_realisasi_temp' => $volume_realisasi_temp[$i],
               'volume_item_terealisasi' => $volume_item_terealisasi[$i],
               'satuan_item' => $satuan_item[$i],
               'harga_satuan_item' => $harga_satuan_item[$i],
               'jumlah_harga' => $jumlah_harga[$i],
               'jumlah_harga_terealisasi' => $jumlah_harga_real[$i] ,
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
               'volume_realisasi_temp' => $volume_realisasi_temp[$i],
               'volume_item_terealisasi' => $volume_item_terealisasi[$i],
               'jumlah_harga' => $jumlah_harga[$i],
               'jumlah_harga_terealisasi' => $jumlah_harga_real[$i]

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
               'volume_template' => $volume_template1,
               'volume_realisasi' => $volume_realisasi1,
               'id_satuan' => $satuan
                     ];

               $this->Model_rab->insert_templaterab($data, 'tb_template_rab');
               $this->session->set_flashdata('flash', 'Ditambah');
             }
             else{
               $data = [
               'volume_template' => $volume_template1,
               'volume_realisasi' => $volume_realisasi1
                     ];

               $this->db->where('id_template_rab', $template); 
               $this->db->update('tb_template_rab', $data); 
               $this->session->set_flashdata('flash', 'Template sudah ada, volume ditambahkan pada template yang ada, Volume Rencana'.$volume_template.'Volume Realisasi : '.$volume_realisasi);

             }

      redirect('rab/rab/file_rab/' .$id_utama);
   }

}

?>
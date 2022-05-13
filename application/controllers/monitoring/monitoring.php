<?php

class monitoring extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_unit');
      $this->load->model('Model_unitinduk');
      $this->load->model('Model_penyulang');
      $this->load->model('Model_trafo');
      $this->load->model('Model_gardu');
      $this->load->model('Model_program');
      $this->load->model('Model_monitoring');
      $this->load->model('Model_tarif');
      $this->load->model('Model_daya');
      $this->load->model('Model_user');
      $this->load->model('Model_status');
      $this->load->model('Model_layanan');

    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'monitoring'
            ];
         // $data['monitoring'] = $this->Model_monitoring->getAllmonitoring();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('monitoring/monitoring', $data);
         $this->load->view('templates/footer');
      }
   }

   public function view()
   {
       $data=$this->Model_monitoring->getAllmonitoring();
         echo json_encode($data);
   }

    public function form_monitoring()
   {

      $data = [
            'tittle' => 'form monitoring'
         ];

      $data['unit'] = $this->Model_unit->getAllunit();
      $data['unitinduk'] = $this->Model_unitinduk->unit_induk();
      $data['tarif'] = $this->Model_tarif->fetch_tarif();
      $data['daya'] = $this->Model_daya->getAlldaya();
      $data['trafo'] = $this->Model_trafo->fetch_trafo();
      $data['penyulang'] = $this->Model_penyulang->getAllpenyulang();
      $data['gardu'] = $this->Model_gardu->getAllgardu();
      $data['program'] = $this->Model_program->getAllprogram();
      $data['pic'] = $this->Model_user->getAlluser();
      $data['status'] = $this->Model_status->getAllstatus();
      $data['layanan'] = $this->Model_layanan->getAlllayanan();
      
      $this->load->view('templates/header', $data);
      $this->load->view('templates/navbar', $data);
      $this->load->view('templates/menu', $data);
      $this->load->view('monitoring/add_monitoring', $data);
      $this->load->view('templates/footer');
      
   }

   public function tambahmonitoring() 
   {
      $unit_induk = $this->input->post('unit_induk');
      $unit = $this->input->post('unit');
      $unit_layanan = $this->input->post('unit_layanan');
      $nama_pekerjaan = $this->input->post('nama_pekerjaan');
      $id_penyulang = $this->input->post('id_penyulang');
      $id_trafo_gi = $this->input->post('id_trafo_gi');
      $gardu = $this->input->post('gardu');
      $pekerjaan = $this->input->post('pekerjaan');
      $saidi = $this->input->post('saidi');
      $saifi = $this->input->post('saifi');
      $ENS_saving = $this->input->post('ENS_saving');
      $loss_saving = $this->input->post('loss_saving');
      $umur_aset = $this->input->post('umur_aset');
      $jam_nyala = $this->input->post('jam_nyala');
      $nama_pemohon = $this->input->post('nama_pemohon');
      $id_pel = $this->input->post('id_pel');
      $nama_perusahaan = $this->input->post('nama_perusahaan');
      $lokasi_pekerjaan = $this->input->post('lokasi_pekerjaan');
      $tikor = $this->input->post('tikor');
      $rencana_teknik = $this->input->post('rencana_teknik');
      $tgl_permohonan_pel = $this->input->post('tgl_permohonan_pel');
      $nb = $this->input->post('nb');
      $tgl_nodin_terbit = $this->input->post('tgl_nodin_terbit');
      $nodin_niaga = $this->input->post('nodin_niaga');
      $tgl_pelaksanaan_survey = $this->input->post('tgl_pelaksanaan_survey');
      $tgl_pembuatan_gambar = $this->input->post('tgl_pembuatan_gambar'); 

      $status = $this->input->post('status');
      $unit_induk_pic = $this->input->post('unit_induk_pic');
      $unit_pic = $this->input->post('unit_pic');
      $unit_layanan_pic = $this->input->post('unit_layanan_pic');
      $user_pic = $this->input->post('user_pic');

      $jml_pel1 = $this->input->post('jml_pel1');
      $jml_pel2 = $this->input->post('jml_pel2');
      $jml_pel3 = $this->input->post('jml_pel3');
      $jml_pel4 = $this->input->post('jml_pel4');
      $jml_pel5 = $this->input->post('jml_pel5');
      $jml_pel6 = $this->input->post('jml_pel6');
      $jml_pel7 = $this->input->post('jml_pel7');
      $jml_pel8 = $this->input->post('jml_pel8');
      $jml_pel9 = $this->input->post('jml_pel9');
      $jml_pel10 = $this->input->post('jml_pel10');

      $tgl_input = date('Y-m-d');
      $tgl_now = date('Y-m-d H:i:s');

      $tarif_awal1 = $this->input->post('tarif_awal1');
      $tarif_awal2 = $this->input->post('tarif_awal2');
      $tarif_awal3 = $this->input->post('tarif_awal3');
      $tarif_awal4 = $this->input->post('tarif_awal4');
      $tarif_awal5 = $this->input->post('tarif_awal5');
      $tarif_awal6 = $this->input->post('tarif_awal6');
      $tarif_awal7 = $this->input->post('tarif_awal7');
      $tarif_awal8 = $this->input->post('tarif_awal8');
      $tarif_awal9 = $this->input->post('tarif_awal9');
      $tarif_awal10 = $this->input->post('tarif_awal10');

      $tarif_akhir1 = $this->input->post('tarif_akhir1');
      $tarif_akhir2 = $this->input->post('tarif_akhir2');
      $tarif_akhir3 = $this->input->post('tarif_akhir3');
      $tarif_akhir4 = $this->input->post('tarif_akhir4');
      $tarif_akhir5 = $this->input->post('tarif_akhir5');
      $tarif_akhir6 = $this->input->post('tarif_akhir6');
      $tarif_akhir7 = $this->input->post('tarif_akhir7');
      $tarif_akhir8 = $this->input->post('tarif_akhir8');
      $tarif_akhir9 = $this->input->post('tarif_akhir9');
      $tarif_akhir10 = $this->input->post('tarif_akhir10');

      $daya_awal1 = $this->input->post('daya_awal1'); 
      $daya_awal2 = $this->input->post('daya_awal2');
      $daya_awal3 = $this->input->post('daya_awal3'); 
      $daya_awal4 = $this->input->post('daya_awal4');
      $daya_awal5 = $this->input->post('daya_awal5');
      $daya_awal6 = $this->input->post('daya_awal6');
      $daya_awal7 = $this->input->post('daya_awal7');
      $daya_awal8 = $this->input->post('daya_awal8');
      $daya_awal9 = $this->input->post('daya_awal9');
      $daya_awal10 = $this->input->post('daya_awal10');

      $daya_akhir1 = $this->input->post('daya_akhir1'); 
      $daya_akhir2 = $this->input->post('daya_akhir2');
      $daya_akhir3 = $this->input->post('daya_akhir3');
      $daya_akhir4 = $this->input->post('daya_akhir4');
      $daya_akhir5 = $this->input->post('daya_akhir5');
      $daya_akhir6 = $this->input->post('daya_akhir6');
      $daya_akhir7 = $this->input->post('daya_akhir7');
      $daya_akhir8 = $this->input->post('daya_akhir8');
      $daya_akhir9 = $this->input->post('daya_akhir9');
      $daya_akhir10 = $this->input->post('daya_akhir10');

      if($daya_awal1==NULL){$daya_awal1 = 0;}      
      if($daya_awal2==NULL){$daya_awal2 = 0;}      
      if($daya_awal3==NULL){$daya_awal3 = 0;}      
      if($daya_awal4==NULL){$daya_awal4 = 0;}      
      if($daya_awal5==NULL){$daya_awal5 = 0;}      
      if($daya_awal6==NULL){$daya_awal6 = 0;}      
      if($daya_awal7==NULL){$daya_awal7 = 0;}      
      if($daya_awal8==NULL){$daya_awal8 = 0;}      
      if($daya_awal9==NULL){$daya_awal9 = 0;}      
      if($daya_awal10==NULL){$daya_awal10 = 0;} 

      if($daya_akhir1==NULL){$daya_akhir1 = 0;}      
      if($daya_akhir2==NULL){$daya_akhir2 = 0;}      
      if($daya_akhir3==NULL){$daya_akhir3 = 0;}      
      if($daya_akhir4==NULL){$daya_akhir4 = 0;}      
      if($daya_akhir5==NULL){$daya_akhir5 = 0;}      
      if($daya_akhir6==NULL){$daya_akhir6 = 0;}      
      if($daya_akhir7==NULL){$daya_akhir7 = 0;}      
      if($daya_akhir8==NULL){$daya_akhir8 = 0;}      
      if($daya_akhir9==NULL){$daya_akhir9 = 0;}      
      if($daya_akhir10==NULL){$daya_akhir10 = 0;}

      $layanan = $this->input->post('layanan');
      $layanan2 = $this->input->post('layanan2');
      $layanan3 = $this->input->post('layanan3');
      $layanan4 = $this->input->post('layanan4');
      $layanan5 = $this->input->post('layanan5');
      $layanan6 = $this->input->post('layanan6');
      $layanan7 = $this->input->post('layanan7');
      $layanan8 = $this->input->post('layanan8');
      $layanan9 = $this->input->post('layanan9');
      $layanan10 = $this->input->post('layanan10');

      $telp = $this->input->post('telp');

      $id_user = $this->session->userdata('id_user');

      ob_start();  
      system('ipconfig /all');  
      $mycom=ob_get_contents();   
      ob_clean();  
      $findme = "Physical";  
      $pmac = strpos($mycom, $findme);  
      $mac=substr($mycom,($pmac+36),17);   
      
      $filename1 = $_FILES['gambar1']['name']; 
      $filename2 = $_FILES['gambar2']['name'];
      $filename3 = $_FILES['gambar3']['name'];

      $ext1 = pathinfo($filename1, PATHINFO_EXTENSION);
      $ext2 = pathinfo($filename2, PATHINFO_EXTENSION);
      $ext3 = pathinfo($filename3, PATHINFO_EXTENSION);
      
      $gambarname1 = $mac.time().'.'.$ext1;
      
      if ($gambarname1){
             $config1['upload_path']          = './upload/';
             $config1['allowed_types']        = 'pdf';
             $config1['remove_spaces']        = FALSE;
             $config1['file_name']            = $mac.time();
             
             $this->load->library('upload', $config1);
             if ($this->upload->do_upload('gambar1')) {
             } else {
                echo $this->upload->display_errors();
             }
        }

      $gambarname2 = $mac.time().'1.'.$ext2;
      if ($gambarname2){
             $config2['upload_path']          = './upload/';
             $config2['allowed_types']        = 'pdf';
             $config2['remove_spaces']        = FALSE;
             $config2['file_name']            = $mac.time();
             $this->load->library('upload', $config2);
             if ($this->upload->do_upload('gambar2')) {
             } else {
                echo $this->upload->display_errors();
             }
        }

        $gambarname3 = $mac.time().'2.'.$ext3;
        if ($gambarname3){
             $config3['upload_path']          = './upload/';
             $config3['allowed_types']        = 'pdf';
             $config3['remove_spaces']        = FALSE;
             $config3['file_name']            = $mac.time();
             $this->load->library('upload', $config3);
             if ($this->upload->do_upload('gambar3')) {
             } else {
                echo $this->upload->display_errors();
             }
        }


        $n_daya_awal1 = 0;
        $n_daya_awal2 = 0;
        $n_daya_awal3 = 0;
        $n_daya_awal4 = 0;
        $n_daya_awal5 = 0;
        $n_daya_awal6 = 0;
        $n_daya_awal7 = 0;
        $n_daya_awal8 = 0;
        $n_daya_awal9 = 0;
        $n_daya_awal10 = 0;

        $n_daya_akhir1 = 0;
        $n_daya_akhir2 = 0;
        $n_daya_akhir3 = 0;
        $n_daya_akhir4 = 0;
        $n_daya_akhir5 = 0;
        $n_daya_akhir6 = 0;
        $n_daya_akhir7 = 0;
        $n_daya_akhir8 = 0;
        $n_daya_akhir9 = 0;
        $n_daya_akhir10 = 0;

         $rp_sambung = 0;
         $rp_sambung2 = 0;
         $rp_sambung3 = 0;
         $rp_sambung4 = 0;
         $rp_sambung5 = 0;
         $rp_sambung6 = 0;
         $rp_sambung7 = 0;
         $rp_sambung8 = 0;
         $rp_sambung9 = 0;
         $rp_sambung10 = 0;


         $q_daya_awal1 = $this->db->get_where('tb_daya', array('id_daya' => $daya_awal1));
         foreach ($q_daya_awal1->result() as $rowdayaawal1){$n_daya_awal1 = $rowdayaawal1->daya;}
         $q_daya_awal2 = $this->db->get_where('tb_daya', array('id_daya' => $daya_awal2));
         foreach ($q_daya_awal2->result() as $rowdayaawal2){$n_daya_awal2 = $rowdayaawal2->daya;}
         $q_daya_awal3 = $this->db->get_where('tb_daya', array('id_daya' => $daya_awal3));
         foreach ($q_daya_awal3->result() as $rowdayaawal3){$n_daya_awal3 = $rowdayaawal3->daya;}
         $q_daya_awal4 = $this->db->get_where('tb_daya', array('id_daya' => $daya_awal4));
         foreach ($q_daya_awal4->result() as $rowdayaawal4){$n_daya_awal4 = $rowdayaawal4->daya;}
         $q_daya_awal5 = $this->db->get_where('tb_daya', array('id_daya' => $daya_awal5));
         foreach ($q_daya_awal5->result() as $rowdayaawal5){$n_daya_awal5 = $rowdayaawal5->daya;}
         $q_daya_awal6 = $this->db->get_where('tb_daya', array('id_daya' => $daya_awal6));
         foreach ($q_daya_awal6->result() as $rowdayaawal6){$n_daya_awal6 = $rowdayaawal6->daya;}
         $q_daya_awal7 = $this->db->get_where('tb_daya', array('id_daya' => $daya_awal7));
         foreach ($q_daya_awal7->result() as $rowdayaawal7){$n_daya_awal7 = $rowdayaawal7->daya;}
         $q_daya_awal8 = $this->db->get_where('tb_daya', array('id_daya' => $daya_awal8));
         foreach ($q_daya_awal8->result() as $rowdayaawal8){$n_daya_awal8 = $rowdayaawal8->daya;}
         $q_daya_awal9 = $this->db->get_where('tb_daya', array('id_daya' => $daya_awal9));
         foreach ($q_daya_awal9->result() as $rowdayaawal9){$n_daya_awal9 = $rowdayaawal9->daya;}
         $q_daya_awal10 = $this->db->get_where('tb_daya', array('id_daya' => $daya_awal10));
         foreach ($q_daya_awal10->result() as $rowdayaawal10){$n_daya_awal10 = $rowdayaawal10->daya;}

         $q_daya_akhir1 = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir1));
         foreach ($q_daya_akhir1->result() as $rowdayaakhir1){$n_daya_akhir1 = $rowdayaakhir1->daya;} 
         $q_daya_akhir2 = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir2));
         foreach ($q_daya_akhir2->result() as $rowdayaakhir2){$n_daya_akhir2 = $rowdayaakhir2->daya;}
         $q_daya_akhir3 = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir3));
         foreach ($q_daya_akhir3->result() as $rowdayaakhir3){$n_daya_akhir3 = $rowdayaakhir3->daya;}
         $q_daya_akhir4 = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir4));
         foreach ($q_daya_akhir4->result() as $rowdayaakhir4){$n_daya_akhir4 = $rowdayaakhir4->daya;}
         $q_daya_akhir5 = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir5));
         foreach ($q_daya_akhir5->result() as $rowdayaakhir5){$n_daya_akhir5 = $rowdayaakhir5->daya;}
         $q_daya_akhir6 = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir6));
         foreach ($q_daya_akhir6->result() as $rowdayaakhir6){$n_daya_akhir6 = $rowdayaakhir6->daya;}
         $q_daya_akhir7 = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir7));
         foreach ($q_daya_akhir7->result() as $rowdayaakhir7){$n_daya_akhir7 = $rowdayaakhir7->daya;}
         $q_daya_akhir8 = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir8));
         foreach ($q_daya_akhir8->result() as $rowdayaakhir8){$n_daya_akhir8 = $rowdayaakhir8->daya;}
         $q_daya_akhir9 = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir9));
         foreach ($q_daya_akhir9->result() as $rowdayaakhir9){$n_daya_akhir9 = $rowdayaakhir9->daya;}
         $q_daya_akhir10 = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir10));
         foreach ($q_daya_akhir10->result() as $rowdayaakhir10){$n_daya_akhir10 = $rowdayaakhir10->daya;}

         if ($n_daya_akhir1 > 0) { 
            $q_tarif = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir1));

              foreach ($q_tarif->result() as $rowtarif){
                 $rp_tarif = $rowtarif->rp_tariff; 
                 if($layanan != 1){
                     $q_layanan = $this->db->get_where('tb_layanan_khusus', array('id_layanan_khusus' => $layanan));
                     foreach ($q_layanan->result() as $rowlayanan){
                        $rp_tarif = $rp_tarif + $rowlayanan->penambahan_tarif;
                     }
                 }
              }
         }else{
            $rp_tarif = 0; 
        }


         if ($n_daya_akhir1 > 0) {
            $q_sambung = $this->db->query("select * from tb_penyambungan where daya_bawah <= '$n_daya_akhir1' and daya_atas >= '$n_daya_akhir1'"); 

              foreach ($q_sambung->result() as $rowpenyambungan){
                 $rp_sambung = ($n_daya_akhir1 - $n_daya_awal1) * $rowpenyambungan->rp_perva;
              }
         }else{
            $rp_sambung = 0;
         }

         if ($n_daya_akhir2 > 0) {
            $q_tarif2 = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir2));

              foreach ($q_tarif2->result() as $rowtarif2){
                 $rp_tarif2 = $rowtarif2->rp_tariff;
                 if($layanan2 != 1){
                     $q_layanan2 = $this->db->get_where('tb_layanan_khusus', array('id_layanan_khusus' => $layanan2));
                     foreach ($q_layanan2->result() as $rowlayanan2){
                        $rp_tarif2 = $rp_tarif2 + $rowlayanan2->penambahan_tarif;
                     }
                 }
              }
         }else{
            $rp_tarif2 = 0;
        }


         if ($n_daya_akhir2 > 0) {
            $q_sambung2 = $this->db->query("select * from tb_penyambungan where daya_bawah <= '$n_daya_akhir2' and daya_atas >= '$n_daya_akhir2'");

              foreach ($q_sambung2->result() as $rowpenyambungan2){
                 $rp_sambung2 = ($n_daya_akhir2 - $n_daya_awal2) * $rowpenyambungan2->rp_perva;
              }
         }else{
            $rp_sambung2 = 0;
         }
      
         if ($n_daya_akhir3 > 0) {
            $q_tarif3 = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir3));

              foreach ($q_tarif3->result() as $rowtarif3){
                 $rp_tarif3 = $rowtarif3->rp_tariff;
                 if($layanan3 != 1){
                     $q_layanan3 = $this->db->get_where('tb_layanan_khusus', array('id_layanan_khusus' => $layanan3));
                     foreach ($q_layanan3->result() as $rowlayanan3){
                        $rp_tarif3 = $rp_tarif3 + $rowlayanan3->penambahan_tarif;
                     }
                 }
              }
         }else{
            $rp_tarif3 = 0;
        }


         if ($n_daya_akhir3 > 0) {
            $q_sambung3 = $this->db->query("select * from tb_penyambungan where daya_bawah <= '$n_daya_akhir3' and daya_atas >= '$n_daya_akhir3'");

              foreach ($q_sambung3->result() as $rowpenyambungan3){
                 $rp_sambung3 = ($n_daya_akhir3 - $n_daya_awal3) * $rowpenyambungan3->rp_perva;
              }
         }else{
            $rp_sambung3 = 0;
         }
         if ($n_daya_akhir4 > 0) {
            $q_tarif4 = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir4));

              foreach ($q_tarif4->result() as $rowtarif4){
                 $rp_tarif4 = $rowtarif4->rp_tariff;
                 if($layanan4 != 1){
                     $q_layanan4 = $this->db->get_where('tb_layanan_khusus', array('id_layanan_khusus' => $layanan4));
                     foreach ($q_layanan4->result() as $rowlayanan4){
                        $rp_tarif4 = $rp_tarif4 + $rowlayanan4->penambahan_tarif;
                     }
                 }
              }
         }else{
            $rp_tarif4 = 0;
        }


         if ($n_daya_akhir4 > 0) {
            $q_sambung4 = $this->db->query("select * from tb_penyambungan where daya_bawah <= '$n_daya_akhir4' and daya_atas >= '$n_daya_akhir4'");

              foreach ($q_sambung4->result() as $rowpenyambungan4){
                 $rp_sambung4 = ($n_daya_akhir4 - $n_daya_awal4) * $rowpenyambungan4->rp_perva;
              }
         }else{
            $rp_sambung4 = 0;
         }
         if ($n_daya_akhir5 > 0) {
            $q_tarif5 = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir5));

              foreach ($q_tarif5->result() as $rowtarif5){
                 $rp_tarif5 = $rowtarif5->rp_tariff;
                 if($layanan5 != 1){
                     $q_layanan5 = $this->db->get_where('tb_layanan_khusus', array('id_layanan_khusus' => $layanan5));
                     foreach ($q_layanan5->result() as $rowlayanan5){
                        $rp_tarif5 = $rp_tarif5 + $rowlayanan5->penambahan_tarif;
                     }
                 }
              }
         }else{
            $rp_tarif5 = 0;
        }


         if ($n_daya_akhir5 > 0) {
            $q_sambung5 = $this->db->query("select * from tb_penyambungan where daya_bawah <= '$n_daya_akhir5' and daya_atas >= '$n_daya_akhir5'");

              foreach ($q_sambung5->result() as $rowpenyambungan5){
                 $rp_sambung5 = ($n_daya_akhir5 - $n_daya_awal5) * $rowpenyambungan5->rp_perva;
              }
         }else{
            $rp_sambung5 = 0;
         }
         if ($n_daya_akhir6 > 0) {
            $q_tarif6 = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir6));

              foreach ($q_tarif6->result() as $rowtarif6){
                 $rp_tarif6 = $rowtarif6->rp_tariff;
                 if($layanan6 != 1){
                     $q_layanan6 = $this->db->get_where('tb_layanan_khusus', array('id_layanan_khusus' => $layanan6));
                     foreach ($q_layanan6->result() as $rowlayanan6){
                        $rp_tarif6 = $rp_tarif6 + $rowlayanan6->penambahan_tarif;
                     }
                 }
              }
         }else{
            $rp_tarif6 = 0;
        }


         if ($n_daya_akhir6 > 0) {
            $q_sambung6 = $this->db->query("select * from tb_penyambungan where daya_bawah <= '$n_daya_akhir6' and daya_atas >= '$n_daya_akhir6'");

              foreach ($q_sambung6->result() as $rowpenyambungan6){
                 $rp_sambung6 = ($n_daya_akhir6 - $n_daya_awal6) * $rowpenyambungan6->rp_perva;
              }
         }else{
            $rp_sambung6 = 0;
         }
         if ($n_daya_akhir7 > 0) {
            $q_tarif7 = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir7));

              foreach ($q_tarif7->result() as $rowtarif7){
                 $rp_tarif7 = $rowtarif7->rp_tariff;
                 if($layanan7 != 1){
                     $q_layanan7 = $this->db->get_where('tb_layanan_khusus', array('id_layanan_khusus' => $layanan7));
                     foreach ($q_layanan7->result() as $rowlayanan7){
                        $rp_tarif7 = $rp_tarif7 + $rowlayanan7->penambahan_tarif;
                     }
                 }
              }
         }else{ 
            $rp_tarif7 = 0;
        }


         if ($n_daya_akhir7 > 0) {
            $q_sambung7 = $this->db->query("select * from tb_penyambungan where daya_bawah <= '$n_daya_akhir7' and daya_atas >= '$n_daya_akhir7'");

              foreach ($q_sambung7->result() as $rowpenyambungan7){
                 $rp_sambung7 = ($n_daya_akhir7 - $n_daya_awal7) * $rowpenyambungan7->rp_perva;
              }
         }else{
            $rp_sambung7 = 0;
         }
         if ($n_daya_akhir8 > 0) {
            $q_tarif8 = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir8));

              foreach ($q_tarif8->result() as $rowtarif8){
                 $rp_tarif8 = $rowtarif8->rp_tariff;
                 if($layanan8 != 1){
                     $q_layanan8 = $this->db->get_where('tb_layanan_khusus', array('id_layanan_khusus' => $layanan8));
                     foreach ($q_layanan8->result() as $rowlayanan8){
                        $rp_tarif8 = $rp_tarif8 + $rowlayanan8->penambahan_tarif;
                     }
                 }
              }
         }else{
            $rp_tarif8 = 0;
        }


         if ($n_daya_akhir8 > 0) {
            $q_sambung8 = $this->db->query("select * from tb_penyambungan where daya_bawah <= '$n_daya_akhir8' and daya_atas >= '$n_daya_akhir8'");

              foreach ($q_sambung8->result() as $rowpenyambungan8){
                 $rp_sambung8 = ($n_daya_akhir8 - $n_daya_awal8) * $rowpenyambungan8->rp_perva;
              }
         }else{
            $rp_sambung8 = 0;
         }
         if ($n_daya_akhir9 > 0) {
            $q_tarif9 = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir9));

              foreach ($q_tarif9->result() as $rowtarif9){
                 $rp_tarif9 = $rowtarif9->rp_tariff;
                 if($layanan9 != 1){
                     $q_layanan9 = $this->db->get_where('tb_layanan_khusus', array('id_layanan_khusus' => $layanan9));
                     foreach ($q_layanan9->result() as $rowlayanan9){
                        $rp_tarif9 = $rp_tarif9 + $rowlayanan9->penambahan_tarif;
                     }
                 }
              }
         }else{
            $rp_tarif9 = 0;
        }


         if ($n_daya_akhir9 > 0) {
            $q_sambung9 = $this->db->query("select * from tb_penyambungan where daya_bawah <= '$n_daya_akhir9' and daya_atas >= '$n_daya_akhir9'");

              foreach ($q_sambung9->result() as $rowpenyambungan9){
                 $rp_sambung9 = ($n_daya_akhir9 - $n_daya_awal9) * $rowpenyambungan9->rp_perva;
              }
         }else{
            $rp_sambung9 = 0;
         }
         if ($n_daya_akhir10 > 0) {
            $q_tarif10 = $this->db->get_where('tb_daya', array('id_daya' => $daya_akhir10));

              foreach ($q_tarif10->result() as $rowtarif10){
                 $rp_tarif10 = $rowtarif10->rp_tariff;
                 if($layanan10 != 1){
                     $q_layanan10 = $this->db->get_where('tb_layanan_khusus', array('id_layanan_khusus' => $layanan10));
                     foreach ($q_layanan10->result() as $rowlayanan10){
                        $rp_tarif10 = $rp_tarif10 + $rowlayanan10->penambahan_tarif;
                     }
                 }
              }
         }else{
            $rp_tarif10 = 0;
        }


         if ($n_daya_akhir10 > 0) {
            $q_sambung10 = $this->db->query("select * from tb_penyambungan where daya_bawah <= '$n_daya_akhir10' and daya_atas >= '$n_daya_akhir10'");

              foreach ($q_sambung10->result() as $rowpenyambungan10){
                 $rp_sambung10 = ($n_daya_akhir10 - $n_daya_awal10) * $rowpenyambungan10->rp_perva;
              }
         }else{
            $rp_sambung10 = 0;
         }
  
         $tgl_pelanggan_bayar = $this->input->post('tgl_pelanggan_bayar');

         $biaya_penyambungan = $rp_sambung + $rp_sambung2 + $rp_sambung3 + $rp_sambung4 + $rp_sambung5 + $rp_sambung6 + $rp_sambung7 + $rp_sambung8 + $rp_sambung9 + $rp_sambung10;
         
         $nilai_investasi = 0;
         $total_anggaran_uid = 0;
         $total_anggaran_unit = 0;
         $total_anggaran_errect = 0;

         $q_bpp = $this->db->get_where('tb_unit', array('id_unit' => $unit));

         foreach ($q_bpp->result() as $rowbpp){
                  $biaya_om = $rowbpp->biaya_om;
                  $roe = $rowbpp->roe;
                  $interest_rate = $rowbpp->interest_rate;
                  $ttl = $rowbpp->rata_jual;
                  $max_tarif = $ttl;

                  if ($max_tarif < $rp_tarif) {$max_tarif = $rp_tarif;}
                  if ($max_tarif < $rp_tarif2) {$max_tarif = $rp_tarif2;}
                  if ($max_tarif < $rp_tarif3) {$max_tarif = $rp_tarif3;}
                  if ($max_tarif < $rp_tarif4) {$max_tarif = $rp_tarif4;}
                  if ($max_tarif < $rp_tarif5) {$max_tarif = $rp_tarif5;}
                  if ($max_tarif < $rp_tarif6) {$max_tarif = $rp_tarif6;}
                  if ($max_tarif < $rp_tarif7) {$max_tarif = $rp_tarif7;}
                  if ($max_tarif < $rp_tarif8) {$max_tarif = $rp_tarif8;}
                  if ($max_tarif < $rp_tarif9) {$max_tarif = $rp_tarif9;}
                  if ($max_tarif < $rp_tarif10) {$max_tarif = $rp_tarif10;}

                  $min_tarif = $max_tarif;
                  if ($min_tarif > $rp_tarif and $rp_tarif != 0) {$min_tarif = $rp_tarif;}
                  if ($min_tarif > $rp_tarif2 and $rp_tarif2 != 0) {$min_tarif = $rp_tarif2;}
                  if ($min_tarif > $rp_tarif3 and $rp_tarif3 != 0) {$min_tarif = $rp_tarif3;}
                  if ($min_tarif > $rp_tarif4 and $rp_tarif4 != 0) {$min_tarif = $rp_tarif4;}
                  if ($min_tarif > $rp_tarif5 and $rp_tarif5 != 0) {$min_tarif = $rp_tarif5;}
                  if ($min_tarif > $rp_tarif6 and $rp_tarif6 != 0) {$min_tarif = $rp_tarif6;}
                  if ($min_tarif > $rp_tarif7 and $rp_tarif7 != 0) {$min_tarif = $rp_tarif7;}
                  if ($min_tarif > $rp_tarif8 and $rp_tarif8 != 0) {$min_tarif = $rp_tarif8;}
                  if ($min_tarif > $rp_tarif9 and $rp_tarif9 != 0) {$min_tarif = $rp_tarif9;}
                  if ($min_tarif > $rp_tarif10 and $rp_tarif10 != 0) {$min_tarif = $rp_tarif10;}

                  $ttl = $min_tarif;
                  $bpp = $rowbpp->bpp_ss_tmtr;
                  $bpp_mc_tmtr = $rowbpp->bpp_mc_tmtr;
                  $bpp_unit = $rowbpp->bpp_unit;

                  if ($ttl < $bpp_mc_tmtr){$bpp = $bpp_mc_tmtr;} 
                  if ($ttl < $bpp_unit){$bpp = $bpp_unit;} 

         }

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

         $pf = 0.85; 

         $d_daya1 = $n_daya_akhir1 - $n_daya_awal1;
         $d_daya2 = $n_daya_akhir2 - $n_daya_awal2;
         $d_daya3 = $n_daya_akhir3 - $n_daya_awal3;
         $d_daya4 = $n_daya_akhir4 - $n_daya_awal4;
         $d_daya5 = $n_daya_akhir5 - $n_daya_awal5;
         $d_daya6 = $n_daya_akhir6 - $n_daya_awal6;
         $d_daya7 = $n_daya_akhir7 - $n_daya_awal7;
         $d_daya8 = $n_daya_akhir8 - $n_daya_awal8;
         $d_daya9 = $n_daya_akhir9 - $n_daya_awal9;
         $d_daya10 = $n_daya_akhir10 - $n_daya_awal10;

          $delta_daya = $d_daya1 + $d_daya2 + $d_daya3 + $d_daya4 + $d_daya5 + $d_daya6 + $d_daya7 + $d_daya8 + $d_daya9 + $d_daya10;

         $gain_penyambungan = 
                (($rp_tarif-$bpp)* ($jam_nyala*12)*(($pf*($d_daya1))/1000))
               +(($rp_tarif2-$bpp)* ($jam_nyala*12)*(($pf*($d_daya2))/1000))
               +(($rp_tarif3-$bpp)* ($jam_nyala*12)*(($pf*($d_daya3))/1000))
               +(($rp_tarif4-$bpp)* ($jam_nyala*12)*(($pf*($d_daya4))/1000))
               +(($rp_tarif5-$bpp)* ($jam_nyala*12)*(($pf*($d_daya5))/1000))
               +(($rp_tarif6-$bpp)* ($jam_nyala*12)*(($pf*($d_daya6))/1000))
               +(($rp_tarif7-$bpp)* ($jam_nyala*12)*(($pf*($d_daya7))/1000))
               +(($rp_tarif8-$bpp)* ($jam_nyala*12)*(($pf*($d_daya8))/1000))
               +(($rp_tarif9-$bpp)* ($jam_nyala*12)*(($pf*($d_daya9))/1000))
               +(($rp_tarif10-$bpp)* ($jam_nyala*12)*(($pf*($d_daya10))/1000));

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
                (($ttl-$bpp)*((720*$loss_saving)+(720*$ENS_saving)))
               +(($rp_tarif-$bpp)* ($jam_nyala)*(($pf*($d_daya1))/1000)) 
               +(($rp_tarif2-$bpp)* ($jam_nyala)*(($pf*($d_daya2))/1000))
               +(($rp_tarif3-$bpp)* ($jam_nyala)*(($pf*($d_daya3))/1000))
               +(($rp_tarif4-$bpp)* ($jam_nyala)*(($pf*($d_daya4))/1000))
               +(($rp_tarif5-$bpp)* ($jam_nyala)*(($pf*($d_daya5))/1000))
               +(($rp_tarif6-$bpp)* ($jam_nyala)*(($pf*($d_daya6))/1000))
               +(($rp_tarif7-$bpp)* ($jam_nyala)*(($pf*($d_daya7))/1000))
               +(($rp_tarif8-$bpp)* ($jam_nyala)*(($pf*($d_daya8))/1000))
               +(($rp_tarif9-$bpp)* ($jam_nyala)*(($pf*($d_daya9))/1000))
               +(($rp_tarif10-$bpp)* ($jam_nyala)*(($pf*($d_daya10))/1000))
               )/12; 
         
         if($payback <0){$payback=0;}

            $data = [
                  'id_unit_induk' => $unit_induk,
                  'id_unit' => $unit,
                  'id_unit_layanan' => $unit_layanan,
                  'nama_pekerjaan' => $nama_pekerjaan,
                  'penyulang' => $id_penyulang,
                  'trafo_gi' => $id_trafo_gi,
                  'gardu' => $gardu,
                  'jenis_program_kerja' => $pekerjaan,
                  'nilai_investasi' => $nilai_investasi,
                  'nilai_realisasi' => 0,
                  'saifi' => $saifi,
                  'saidi' => $saidi,
                  'npv' => $npv,
                  'rwacc' => $rwacc,
                  'irr' => $irr,
                  'payback' => $payback,
                  'status' => $status,
                  'tgl_input' => $tgl_input,
                  'id_tarif' => $tarif_awal1,
                  'id_tarif2' => $tarif_awal2,
                  'id_tarif3' => $tarif_awal3,
                  'id_tarif4' => $tarif_awal4,
                  'id_tarif5' => $tarif_awal5,
                  'id_tarif6' => $tarif_awal6,
                  'id_tarif7' => $tarif_awal7,
                  'id_tarif8' => $tarif_awal8,
                  'id_tarif9' => $tarif_awal9,
                  'id_tarif10' => $tarif_awal10,
                  'daya' => $daya_awal1,
                  'daya2' => $daya_awal2,
                  'daya3' => $daya_awal3,
                  'daya4' => $daya_awal4,
                  'daya5' => $daya_awal5,
                  'daya6' => $daya_awal6,
                  'daya7' => $daya_awal7,
                  'daya8' => $daya_awal8,
                  'daya9' => $daya_awal9,
                  'daya10' => $daya_awal10,
                  'daya_saat_ini' => $daya_akhir1,
                  'daya_saat_ini2' => $daya_akhir2,
                  'daya_saat_ini3' => $daya_akhir3,
                  'daya_saat_ini4' => $daya_akhir4,
                  'daya_saat_ini5' => $daya_akhir5,
                  'daya_saat_ini6' => $daya_akhir6,
                  'daya_saat_ini7' => $daya_akhir7,
                  'daya_saat_ini8' => $daya_akhir8,
                  'daya_saat_ini9' => $daya_akhir9,
                  'daya_saat_ini10' => $daya_akhir10,
                  'tarif_saat_ini' => $tarif_akhir1,
                  'tarif_saat_ini2' => $tarif_akhir2,
                  'tarif_saat_ini3' => $tarif_akhir3,
                  'tarif_saat_ini4' => $tarif_akhir4,
                  'tarif_saat_ini5' => $tarif_akhir5,
                  'tarif_saat_ini6' => $tarif_akhir6,
                  'tarif_saat_ini7' => $tarif_akhir7,
                  'tarif_saat_ini8' => $tarif_akhir8,
                  'tarif_saat_ini9' => $tarif_akhir9,
                  'tarif_saat_ini10' => $tarif_akhir10,
                  'jml_pelanggan' => $jml_pel1,
                  'jml_pelanggan2' => $jml_pel2,
                  'jml_pelanggan3' => $jml_pel3,
                  'jml_pelanggan4' => $jml_pel4,
                  'jml_pelanggan5' => $jml_pel5,
                  'jml_pelanggan6' => $jml_pel6,
                  'jml_pelanggan7' => $jml_pel7,
                  'jml_pelanggan8' => $jml_pel8,
                  'jml_pelanggan9' => $jml_pel9,
                  'jml_pelanggan10' => $jml_pel10,
                  'rp_tarif' => $rp_tarif,
                  'rp_tarif2' => $rp_tarif2,
                  'rp_tarif3' => $rp_tarif3,
                  'rp_tarif4' => $rp_tarif4,
                  'rp_tarif5' => $rp_tarif5,
                  'rp_tarif6' => $rp_tarif6,
                  'rp_tarif7' => $rp_tarif7,
                  'rp_tarif8' => $rp_tarif8,
                  'rp_tarif9' => $rp_tarif9,
                  'rp_tarif10' => $rp_tarif10,
                  'rp_sambung' => $rp_sambung,
                  'rp_sambung2' => $rp_sambung2,
                  'rp_sambung3' => $rp_sambung3,
                  'rp_sambung4' => $rp_sambung4,
                  'rp_sambung5' => $rp_sambung5,
                  'rp_sambung6' => $rp_sambung6,
                  'rp_sambung7' => $rp_sambung7,
                  'rp_sambung8' => $rp_sambung8,
                  'rp_sambung9' => $rp_sambung9,
                  'rp_sambung10' => $rp_sambung10,
                  'id_layanan_khusus' => $layanan,
                  'id_layanan_khusus2' => $layanan2,
                  'id_layanan_khusus3' => $layanan3,
                  'id_layanan_khusus4' => $layanan4,
                  'id_layanan_khusus5' => $layanan5,
                  'id_layanan_khusus6' => $layanan6,
                  'id_layanan_khusus7' => $layanan7,
                  'id_layanan_khusus8' => $layanan8,
                  'id_layanan_khusus9' => $layanan9,
                  'id_layanan_khusus10' => $layanan10,
                  'bpp' => $bpp,
                  'ttl_lwbp' => $ttl,
                  'umur_aset' => $umur_aset,
                  'jam_nyala' => $jam_nyala,
                  'biaya_om' => $biaya_om,
                  'biaya_penyambungan' => $biaya_penyambungan,
                  'required_roe' => $roe,
                  'interest_rate' => $interest_rate,
                  'ens' => $ENS_saving,
                  'losses' => $loss_saving,
                  'nama_pemohon' => $nama_pemohon,
                  'id_pel/no_meter' => $id_pel,
                  'nama_perusahaan' => $nama_perusahaan,
                  'lokasi_pekerjaan' => $lokasi_pekerjaan,
                  'tikor' => $tikor,
                  'tgl_permohonan_pelanggan' => $tgl_permohonan_pel,
                  'tgl_pelanggan_bayar' =>  $tgl_pelanggan_bayar,
                  'nb' =>  $nb,
                  'tgl_nota_dinas_terbit' => $tgl_nodin_terbit,
                  'no_surat_nota_dinas_niaga' => $nodin_niaga,
                  'tgl_pelaksanaan_survey' => $tgl_pelaksanaan_survey,
                  'tgl_pembuatan_gambar' => $tgl_pembuatan_gambar,
                  'upload_gambar' => $gambarname1,
                  'upload_gambar2' => $gambarname2,
                  'upload_gambar3' => $gambarname3,
                  'rencana_teknik' => $rencana_teknik,
                  'id_user' => $id_user,
                  'total_anggaran_uid' => $total_anggaran_uid,
                  'total_anggaran_unit' => $total_anggaran_unit,
                  'total_anggaran_errect' => $total_anggaran_errect,
                  'id_unit_induk_pic' => $unit_induk_pic,
                  'id_unit_pic' => $unit_pic,
                  'id_layanan_pic' => $unit_layanan_pic,
                  'id_user_pic' => $user_pic,
                  'telp' => $telp,
                  'persentase_progres' => 0,
                  'gain_penyambungan' => $gain_penyambungan,
                  'delta_daya' => $delta_daya,
                  'cost_rasio' => $cost_rasio
               ];

         // $this->Model_monitoring->insert_monitoring($data, 'tb_utama');
          $this->db->insert('tb_utama', $data);
          $id_last = $this->db->insert_id();

          $data2 = [
                  'id_utama' => $id_last,
                  'id_unit_induk' => $unit_induk,
                  'id_unit' => $unit,
                  'id_unit_layanan' => $unit_layanan,
                  'id_user' => $this->session->userdata('id_user'),
                  'id_status' => 8,
                  'tanggal' => $tgl_now
               ];

         $this->db->insert('tb_histori', $data2);

         $data3 = [
                  'id_utama' => $id_last,
                  'id_unit_induk' => $unit_induk_pic,
                  'id_unit' => $unit_pic,
                  'id_unit_layanan' => $unit_layanan_pic,
                  'id_user' => $user_pic,
                  'id_status' => $status,
                  'tanggal' => $tgl_now
               ];
         $this->db->insert('tb_histori', $data3);

         $this->session->set_flashdata('flash', 'Ditambah');
         redirect('monitoring/monitoring');

   }

   public function fetch_detail()
   {
       $Data = $this->input->post('id');

       if(isset($Data) and !empty($Data)){
            $records = $this->Model_monitoring->get_fetch_detail($Data);
            
            $output = '';
            foreach($records->result_array() as $row){
             $output .= '
       
         <div class="row">
         <div class="col-lg-12">
         <center><h3>Monitoring Proyek</h3></center>
          <table class="table table-bordered">
           <tr>
            <td><b>Unit Induk</b></td>
            <td>'.$row["nama_unit_induk"].'</td>
           </tr>
           <tr>
            <td><b>Unit</b></td>
            <td>'.$row["nama_unit"].'</td>
           </tr>  
           <tr>
            <td><b>Unit Layanan</b></td>
            <td>'.$row["nama_unit_layanan"].'</td>
           </tr> 
           <tr>
            <td><b>Nama Pekerjaan</b></td>
            <td>'.$row["nama_pekerjaan"].'</td>
           </tr>  
           <tr>
            <td><b>Nama Penyulang</b></td>
            <td>'.$row["nama_penyulang"].'</td>
           </tr>  
           <tr>
            <td><b>Nama Trafo Gi</b></td>
            <td>'.$row["nama_trafo_gi"].'</td>
           </tr>
            <tr>
            <td><b>Gardu</b></td>
            <td>'.$row["nama_gardu"].'</td>
           </tr> 
           <tr>
            <td><b>Jenis Program Kerja</b></td>
            <td>'.$row["nama_program"].'</td>
           </tr> 
            <tr>
            <td><b>Nilai Investasi</b></td>
            <td>'.$row["nilai_investasi"].'</td>
           </tr>
           <tr>
            <td><b>Kajian Finansial</b></td>
            <td>
               NPV : '.$row["npv"].'<br>
               IRR : '.$row["irr"].'<br>
               PBP : '.$row["payback"].'
            </td>
           </tr>  
            <tr>
            <td><b>Tgl Input</b></td>
            <td>'.$row["tgl_input"].'</td>
           </tr>  
           <tr>
            <td><b>Gambar Survay</b></td>
            <td><a href="./upload/'.$row["upload_gambar"].'" target="__blank">Gambar Survey</a></td>
           </tr>
           <tr>
            <td><b>Gambar Teknik</b></td>
            <td><a href="./upload/'.$row["upload_gambar2"].'" target="__blank">Gambar Teknik</a></td>
           </tr>  
           <tr>
            <td><b>Gambar Progress Realisasi</b></td>
            <td><a href="./upload/'.$row["upload_gambar3"].'" target="__blank">Gambar Realisasi</a></td>
           </tr>    
           <tr>
            <td><b>Gambar Teknik</b></td>
            <td>'.$row["tgl_input"].'</td>
           </tr>  
           <tr>
            <td><b>Gambar Progress Realisasi</b></td>
            <td>'.$row["tgl_input"].'</td>
           </tr>  
       </table>
      </div>
      </div>';
            }    
            echo $output;

            $record = $this->Model_monitoring->get_fetch_histori($Data);
            $outputs = '';
            $outputs .=  '<div class="row">
                     <div class="col-lg-12">
                     <center><h3>Histori Proyek</h3></center>
                      <table class="table table-bordered">
                         <tr>
                            <td>Unit Induk</td>
                            <td>Unit</td>
                            <td>Unit Layanan</td>
                            <td>PIC</td>
                            <td>Status</td>
                            <td>Tanggal</td>
                         </tr>';
             foreach($record as $dat){
            $outputs .= '
      
                         <tr> 
                           <td>'.$dat["nama_unit_induk"].'</td>
                           <td>'.$dat["nama_unit"].'</td>
                           <td>'.$dat["nama_unit_layanan"].'</td>
                           <td>'.$dat["nama"].'</td>
                           <td>'.$dat["uraian_status"].'</td>
                           <td>'.$dat["tanggal"].'</td>
                         </tr>
                       ';
               }
               $outputs .= '</table>
                  </div>
                  </div>';

            echo $outputs;
        }
        else {
         echo '<center><ul class="list-group"><li class="list-group-item">'.''.'</li></ul></center>';
        }
        
       
        
   }
   
}

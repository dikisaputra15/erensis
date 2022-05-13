<?php

class pdf_kkp extends CI_Controller
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

  
    public function c_kkp($id)
   {

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
		
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "kkp.pdf";
		$this->pdf->load_view('rab/pdf_kkp', $data);
   }

   public function c_rab()
   {	
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "rab.pdf";
		$this->pdf->load_view('rab/pdf_rab');
   }

   public function c_templaterab($id)
   {	
   		$data['templaterab'] = $this->Model_rab->getAlltemplaterabid($id);
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "templaterab.pdf";
		$this->pdf->load_view('rab/pdf_templaterab', $data);
   }
 
   
}

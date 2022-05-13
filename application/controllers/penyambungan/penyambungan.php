<?php

class penyambungan extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_penyambungan');
      $this->load->model('Model_tarif');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'penyambungan'
            ];
         $data['penyambungan'] = $this->Model_penyambungan->getAllpenyambungan();
         // $data['tarif'] = $this->Model_tarif->getAlltarif();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('penyambungan/penyambungan', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahpenyambungan()
   {
      
      $daya_atas = $this->input->post('daya_atas');
      $daya_bawah = $this->input->post('daya_bawah');
      $rp_perva = $this->input->post('rp_perva');

      $data = [
               'daya_bawah' => $daya_bawah,
               'daya_atas' => $daya_atas,
               'rp_perva' => $rp_perva
            ];

      $this->Model_penyambungan->insert_penyambungan($data, 'tb_penyambungan');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('penyambungan/penyambungan');
   }

   public function hapus_penyambungan($id)
   {
      $this->Model_penyambungan->delete_penyambungan($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('penyambungan/penyambungan');
   }

   public function edit_penyambungan($id)
   {
      $data['tittle'] = 'Edit';
      $data['penyambungan'] = $this->Model_penyambungan->getpenyambunganById($id);
      // $data['tarif'] = $this->Model_tarif->getAlltarif();
      $this->form_validation->set_rules('id_bp', 'id_bp', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('penyambungan/edit_penyambungan', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_penyambungan->updatepenyambungan();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('penyambungan/penyambungan');
      }
   }
   
}

<?php

class layanan_khusus extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_layanan');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'layanan khusus'
            ];
         $data['layanan'] = $this->Model_layanan->getAlllayanan();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('layanan/layanan_khusus', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahlayanan()
   {
      $uraian = $this->input->post('uraian');
      $penambahan_tarif = $this->input->post('penambahan_tarif');

      $data = [
               'uraian' => $uraian,
               'penambahan_tarif' => $penambahan_tarif
            ];

      $this->Model_layanan->insert_layanan($data, 'tb_layanan_khusus');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('layanan/layanan_khusus');
   }

   public function hapus_layanan($id)
   {
      $this->Model_layanan->delete_layanan($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('layanan/layanan_khusus');
   }

   public function edit_layanan($id)
   {
      $data['tittle'] = 'Edit';
      $data['layanan'] = $this->Model_layanan->getlayananById($id);
      $this->form_validation->set_rules('id_layanan_khusus', 'id_layanan_khusus', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('layanan/edit_layanan', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_layanan->updatelayanan();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('layanan/layanan_khusus');
      }
   }
   
}

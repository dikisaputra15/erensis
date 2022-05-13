<?php

class pengadaan extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_jenis');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'jenis'
            ];
         $data['pengadaan'] = $this->Model_jenis->getAllpengadaan();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('jenis/pengadaan', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahpengadaan()
   {
      $jenis_pengadaan = $this->input->post('jenis_pengadaan');

      $data = [
               'jenis_pengadaan' => $jenis_pengadaan
            ];

      $this->Model_jenis->insert_jenispengadaan($data, 'tb_jenis_pengadaan');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('jenis/pengadaan');
   }

   public function hapus_pengadaan($id)
   {
      $this->Model_jenis->delete_pengadaan($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('jenis/pengadaan');
   }

   public function edit_pengadaan($id)
   {
      $data['tittle'] = 'Edit';
      $data['pengadaan'] = $this->Model_jenis->getpengadaanById($id);
      $this->form_validation->set_rules('id_jenis_pengadaan', 'id_jenis_pengadaan', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('jenis/edit_pengadaan', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_jenis->updatepengadaan();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('jenis/pengadaan');
      }
   }
   
}

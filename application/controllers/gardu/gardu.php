<?php

class gardu extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_gardu');
      $this->load->model('Model_trafo');
      $this->load->model('Model_penyulang');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'gardu'
            ];
         $data['gardu'] = $this->Model_gardu->getAllgardu();
         $data['trafo'] = $this->Model_trafo->fetch_trafo();
         $data['penyulang'] = $this->Model_penyulang->getAllpenyulang();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('gardu/gardu', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahgardu()
   {
      $nama_gardu = $this->input->post('nama_gardu');
      $id_trafo_gi = $this->input->post('id_trafo_gi');
      $id_penyulang = $this->input->post('id_penyulang');
      $kapasitas = $this->input->post('kapasitas');
      $beban = $this->input->post('beban');

      $data = [
               'nama_gardu' => $nama_gardu,
               'id_trafo_gi' => $id_trafo_gi,
               'id_penyulang' => $id_penyulang,
               'kapasitas' => $kapasitas,
               'beban' => $beban
            ];

      $this->Model_gardu->insert_gardu($data, 'tb_gardu');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('gardu/gardu');
   }

   public function hapus_gardu($id)
   {
      $this->Model_gardu->delete_gardu($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('gardu/gardu');
   }

   public function edit_gardu($id)
   {
      $data['tittle'] = 'Edit';
      $data['gardu'] = $this->Model_gardu->getgarduById($id);
      $data['trafo'] = $this->Model_trafo->fetch_trafo();
      $data['penyulang'] = $this->Model_penyulang->getAllpenyulang();
      $this->form_validation->set_rules('id_gardu', 'id_gardu', 'required');
      $this->form_validation->set_rules('nama_gardu', 'nama_gardu', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('gardu/edit_gardu', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_gardu->updategardu();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('gardu/gardu');
      }
   }
   
}

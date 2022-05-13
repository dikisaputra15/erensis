<?php

class satuan extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_satuan');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'satuan'
            ];
         $data['satuan'] = $this->Model_satuan->getAllsatuan();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('satuan/satuan', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahsatuan()
   {
      $satuan = $this->input->post('satuan');

      $data = [
               'nama_satuan' => $satuan
            ];

      $this->Model_satuan->insert_satuan($data, 'tb_satuan');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('satuan/satuan');
   }

   public function hapus_satuan($id)
   {
      $this->Model_satuan->delete_satuan($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('satuan/satuan');
   }

   public function edit_satuan($id)
   {
      $data['tittle'] = 'Edit';
      $data['satuan'] = $this->Model_satuan->getsatuanById($id);
      $this->form_validation->set_rules('id_satuan', 'id_satuan', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('satuan/edit_satuan', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_satuan->updatesatuan();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('satuan/satuan');
      }
   }
   
}

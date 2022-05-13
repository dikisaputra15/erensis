<?php

class sumberhs extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_sumberhs');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'sumber hs'
            ];
         $data['sumberhs'] = $this->Model_sumberhs->getAllsumberhs();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('item/sumberhs', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahsumberhs()
   {
      $uraian = $this->input->post('uraian');

      $data = [
               'uraian_sumber_hs' => $uraian
            ];

      $this->Model_sumberhs->insert_sumberhs($data, 'tb_sumberhs');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('item/sumberhs');
   }

   public function hapus_sumberhs($id)
   {
      $this->Model_sumberhs->delete_sumberhs($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('item/sumberhs');
   }

   public function edit_sumberhs($id)
   {
      $data['tittle'] = 'Edit';
      $data['sumberhs'] = $this->Model_sumberhs->getsumberhsById($id);
      $this->form_validation->set_rules('id_sumber_hs', 'id_sumber_hs', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('item/edit_sumberhs', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_sumberhs->updatesumberhs();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('item/sumberhs');
      }
   }
   
}

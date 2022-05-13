<?php

class jenis extends CI_Controller
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
         $data['jenis'] = $this->Model_jenis->getAlljenis();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('jenis/jenis', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahjenis()
   {
      $jenis = $this->input->post('jenis');

      $data = [
               'jenis' => $jenis
            ];

      $this->Model_jenis->insert_jenis($data, 'tb_jenis');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('jenis/jenis');
   }

   public function hapus_jenis($id)
   {
      $this->Model_jenis->delete_jenis($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('jenis/jenis');
   }

   public function edit_jenis($id)
   {
      $data['tittle'] = 'Edit';
      $data['jenis'] = $this->Model_jenis->getjenisById($id);
      $this->form_validation->set_rules('id_jenis', 'id_jenis', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('jenis/edit_jenis', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_jenis->updatejenis();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('jenis/jenis');
      }
   }

    function fetch_jenis()
    {
     if($this->input->post('kategori'))
     {
       echo $this->Model_jenis->fetch_jenis_pekerjaan($this->input->post('kategori'));
     }
    }
   
}

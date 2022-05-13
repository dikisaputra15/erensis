<?php

class trafo extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_trafo');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'Trafo'
            ];
         $data['trafo'] = $this->Model_trafo->getAlltrafo();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('trafo/trafo', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahtrafo()
   {
      $nama_trafo = $this->input->post('nama_trafo');
      $kapasitas = $this->input->post('kapasitas');
      $beban = $this->input->post('beban');

      $data = [
               'nama_trafo_gi' => $nama_trafo,
               'kapasitas' => $kapasitas,
               'beban' => $beban
            ];

      $this->Model_trafo->insert_trafo($data, 'tb_trafo_gi');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('trafo/trafo');
   }

   public function hapus_trafo($id)
   {
      $this->Model_trafo->delete_trafo($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('trafo/trafo');
   }

   public function edit_trafo($id)
   {
      $data['tittle'] = 'Edit';
      $data['trafo'] = $this->Model_trafo->gettrafoById($id);
      $this->form_validation->set_rules('id_trafo_gi', 'id_trafo_gi', 'required');
      $this->form_validation->set_rules('nama_trafo_gi', 'nama_trafo_gi', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('trafo/edit_trafo', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_trafo->updatetrafo();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('trafo/trafo');
      }
   }

    public function ajax_trafo()
   {
      if($this->input->post('id_trafo_gi'))
        {
          echo $this->Model_trafo->ajax_trafo($this->input->post('id_trafo_gi'));
        }
   }
   
}

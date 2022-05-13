<?php

class kategori extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_kategori');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'satuan'
            ];
         $data['kategori'] = $this->Model_kategori->getAllkategori();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('kategori/kategori', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahkategori()
   {
      $kategori = $this->input->post('kategori');

      $data = [
               'kategori' => $kategori
            ];

      $this->Model_kategori->insert_kategori($data, 'tb_kategori');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('kategori/kategori');
   }

   public function hapus_kategori($id)
   {
      $this->Model_kategori->delete_kategori($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('kategori/kategori');
   }

   public function edit_kategori($id)
   {
      $data['tittle'] = 'Edit';
      $data['kategori'] = $this->Model_kategori->getkategoriById($id);
      $this->form_validation->set_rules('id_kategori', 'id_kategori', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('kategori/edit_kategori', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_kategori->updatekategori();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('kategori/kategori');
      }
   }
   
}

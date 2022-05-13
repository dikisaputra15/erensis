<?php

class subjenis extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_jenis');
      $this->load->model('Model_pekerjaan');
      $this->load->model('Model_kategori');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'jenis'
            ];
         $data['subjenis'] = $this->Model_jenis->getAllsubjenis();
         $data['kategori'] = $this->Model_kategori->view_kategori();
         $data['pekerjaan'] = $this->Model_pekerjaan->getAllpekerjaan();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('jenis/subjenis', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahsubjenis()
   {
      $subjenis = $this->input->post('subjenis');
      $kategori = $this->input->post('kategori');
      $jp = $this->input->post('jp');

      $data = [
               'id_kategori' => $kategori,
               'id_jp' => $jp,
               'subjenis_pekerjaan' => $subjenis
            ];

      $this->Model_jenis->insert_subjenis($data, 'tb_subjenis_pekerjaan');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('jenis/subjenis');
   }

   public function hapus_jenis($id)
   {
      $this->Model_jenis->delete_jenis($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('jenis/jenis');
   }

    public function hapus_subjenis($id)
   {
      $this->Model_jenis->delete_subjenis($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('jenis/subjenis');
   }

   public function edit_subjenis($id)
   {
      $data['tittle'] = 'Edit';
      $data['subjenis'] = $this->Model_jenis->getsubjenisById($id);
      $data['pekerjaan'] = $this->Model_pekerjaan->getAllpekerjaan();
      $data['kategori'] = $this->Model_kategori->view_kategori();
      $data['jp'] = $this->Model_jenis->getjpbyid($id);
      $this->form_validation->set_rules('id_subjenis_pekerjaan', 'id_subjenis_pekerjaan', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('jenis/edit_subjenis', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_jenis->updatesubjenis();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('jenis/subjenis');
      }
   }
   
    function fetch_jp()
    {
     if($this->input->post('kategori'))
     {
       echo $this->Model_jenis->fetch_jp($this->input->post('kategori'));
     }
    }
}

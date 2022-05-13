<?php

class penyulang extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_penyulang');
      $this->load->model('Model_trafo');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'Penyulang'
            ];
         $data['penyulang'] = $this->Model_penyulang->getAllpenyulang();
         $data['trafo'] = $this->Model_trafo->getAlltrafo();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('penyulang/penyulang', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahpenyulang()
   {
      $nama_penyulang = $this->input->post('nama_penyulang');
      $trafo = $this->input->post('trafo');
      $kapasitas = $this->input->post('kapasitas');
      $beban = $this->input->post('beban');

      $data = [
               'nama_penyulang' => $nama_penyulang,
               'id_trafo_gi' => $trafo,
               'kapasitas' => $kapasitas,
               'beban' => $beban
            ];

      $this->Model_penyulang->insert_penyulang($data, 'tb_penyulang');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('penyulang/penyulang');
   }

   public function hapus_penyulang($id)
   {
      $this->Model_penyulang->delete_penyulang($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('penyulang/penyulang');
   }

   public function edit_penyulang($id)
   {
      $data['tittle'] = 'Edit';
      $data['penyulang'] = $this->Model_penyulang->getpenyulangById($id);
      $data['trafo'] = $this->Model_trafo->getAlltrafo();
      $this->form_validation->set_rules('id_penyulang', 'id_penyulang', 'required');
      $this->form_validation->set_rules('nama_penyulang', 'nama_penyulang', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('penyulang/edit_penyulang', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_penyulang->updatepenyulang();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('penyulang/penyulang');
      }
   }

   public function fetch_penyulang()
   {
      if($this->input->post('id_penyulang'))
        {
         echo $this->Model_penyulang->ajax_penyulang($this->input->post('id_penyulang'));
        }
   }
   
}

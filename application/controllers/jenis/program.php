<?php

class program extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_program');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'Program'
            ];
         $data['program'] = $this->Model_program->getAllprogram();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('jenis/program', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahprogram()
   {
      $nama_program = $this->input->post('nama_program');

      $data = [
               'nama_program' => $nama_program
            ];

      $this->Model_program->insert_program($data, 'tb_program_kerja');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('jenis/program');
   }

   public function hapus_program($id)
   {
      $this->Model_program->delete_program($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('jenis/program');
   }

   public function edit_program($id)
   {
      $data['tittle'] = 'Edit';
      $data['program'] = $this->Model_program->getprogramById($id);
      $this->form_validation->set_rules('id_program', 'id_program', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('jenis/edit_program', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_program->updateprogram();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('jenis/program');
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

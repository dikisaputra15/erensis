<?php

class dashboard extends CI_Controller
{
   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_unit');
      $this->load->model('Model_unitinduk');
      $this->load->model('Model_penyulang');
      $this->load->model('Model_trafo');
      $this->load->model('Model_gardu');
      $this->load->model('Model_pekerjaan');
      $this->load->model('Model_monitoring');

    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'dashboard'
            ];
             // $data['monitoring'] = $this->Model_monitoring->getAllmonitoring();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('dashboard', $data);
            $this->load->view('templates/footer');
         }
   }

   public function view()
   {
         
         $data=$this->Model_monitoring->getAllmonitoringlap();
         echo json_encode($data);
         
   }
      
}

   
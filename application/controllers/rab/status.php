<?php

class status extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_status');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'Status Proyek'
            ];
         $data['status'] = $this->Model_status->getAllstatus1();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('rab/status', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahstatus()
   {
      $uraian_status = $this->input->post('uraian_status');

      $data = [
               'uraian_status' => $uraian_status
            ];

      $this->Model_status->insert_status($data, 'tb_status');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('rab/status');
   }

   public function hapus_status($id)
   {
      $this->Model_status->delete_status($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('rab/status');
   }

   public function edit_status($id)
   {
      $data['tittle'] = 'Edit';
      $data['status'] = $this->Model_status->getstatusById($id);
      $this->form_validation->set_rules('id_status', 'id_status', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('rab/edit_status', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_status->updatestatus();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('rab/status');
      }
   }

   public function ajax_tarif()
   {
      if($this->input->post('tarif_awal1'))
        {
          echo $this->Model_tarif->ajax_tarif($this->input->post('tarif_awal1'));
        }
   }

   public function ajax_tarif2()
   {
      if($this->input->post('tarif_akhir1'))
        {
          echo $this->Model_tarif->ajax_tarif2($this->input->post('tarif_akhir1'));
        }
   }

   public function ajax_tarif3()
   {
      if($this->input->post('tarif_awal2'))
        {
          echo $this->Model_tarif->ajax_tarif3($this->input->post('tarif_awal2'));
        }
   }

   public function ajax_tarif4()
   {
      if($this->input->post('tarif_akhir2'))
        {
          echo $this->Model_tarif->ajax_tarif4($this->input->post('tarif_akhir2'));
        }
   }

   public function ajax_tarif5()
   {
      if($this->input->post('tarif_awal3'))
        {
          echo $this->Model_tarif->ajax_tarif5($this->input->post('tarif_awal3'));
        }
   }

   public function ajax_tarif6()
   {
      if($this->input->post('tarif_akhir3'))
        {
          echo $this->Model_tarif->ajax_tarif6($this->input->post('tarif_akhir3'));
        }
   }

   public function ajax_tarif7()
   {
      if($this->input->post('tarif_awal4'))
        {
          echo $this->Model_tarif->ajax_tarif7($this->input->post('tarif_awal4'));
        }
   }

    public function ajax_tarif8()
   {
      if($this->input->post('tarif_akhir4'))
        {
          echo $this->Model_tarif->ajax_tarif8($this->input->post('tarif_akhir4'));
        }
   }

    public function ajax_tarif9()
   {
      if($this->input->post('tarif_awal5'))
        {
          echo $this->Model_tarif->ajax_tarif9($this->input->post('tarif_awal5'));
        }
   }   

    public function ajax_tarif10()
   {
      if($this->input->post('tarif_akhir5'))
        {
          echo $this->Model_tarif->ajax_tarif10($this->input->post('tarif_akhir5'));
        }
   }   

   public function ajax_tarif11()
   {
      if($this->input->post('tarif_awal6'))
        {
          echo $this->Model_tarif->ajax_tarif11($this->input->post('tarif_awal6'));
        }
   }   

    public function ajax_tarif12()
   {
      if($this->input->post('tarif_akhir6'))
        {
          echo $this->Model_tarif->ajax_tarif12($this->input->post('tarif_akhir6'));
        }
   }   

   public function ajax_tarif13()
   {
      if($this->input->post('tarif_awal7'))
        {
          echo $this->Model_tarif->ajax_tarif13($this->input->post('tarif_awal7'));
        }
   }   

   public function ajax_tarif14()
   {
      if($this->input->post('tarif_akhir7'))
        {
          echo $this->Model_tarif->ajax_tarif14($this->input->post('tarif_akhir7'));
        }
   }   

   public function ajax_tarif15()
   {
      if($this->input->post('tarif_awal8'))
        {
          echo $this->Model_tarif->ajax_tarif15($this->input->post('tarif_awal8'));
        }
   }   

   public function ajax_tarif16()
   {
      if($this->input->post('tarif_akhir8'))
        {
          echo $this->Model_tarif->ajax_tarif16($this->input->post('tarif_akhir8'));
        }
   }  

   public function ajax_tarif17()
   {
      if($this->input->post('tarif_awal9'))
        {
          echo $this->Model_tarif->ajax_tarif17($this->input->post('tarif_awal9'));
        }
   }   

   public function ajax_tarif18()
   {
      if($this->input->post('tarif_akhir9'))
        {
          echo $this->Model_tarif->ajax_tarif18($this->input->post('tarif_akhir9'));
        }
   }  

   public function ajax_tarif19()
   {
      if($this->input->post('tarif_awal10'))
        {
          echo $this->Model_tarif->ajax_tarif19($this->input->post('tarif_awal10'));
        }
   }   

    public function ajax_tarif20()
   {
      if($this->input->post('tarif_akhir10'))
        {
          echo $this->Model_tarif->ajax_tarif20($this->input->post('tarif_akhir10'));
        }
   } 

}

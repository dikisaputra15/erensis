<?php

class menu extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_menu');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'menu'
            ];
         // $data['menu'] = $this->Model_menu->getAllmenu();

         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('menu/menu', $data);
         $this->load->view('templates/footer');
      }
   }

    public function view()
   {
         // $search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
         // $limit = $_POST['length']; // Ambil data limit per page
         // $start = $_POST['start']; // Ambil data start
         // $order_index = $_POST['order'][0]['column']; // Untuk mengambil index yg menjadi acuan untuk sorting
         // $order_field = $_POST['columns'][$order_index]['data']; // Untuk mengambil nama field yg menjadi acuan untuk sorting
         // $order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"

         // $sql_total = $this->Model_menu->count_all(); // Panggil fungsi count_all pada SiswaModel
         // $sql_data = $this->Model_menu->getAllmenu($search, $limit, $start, $order_field, $order_ascdesc); // Panggil fungsi filter pada SiswaModel
         // $sql_filter = $this->Model_menu->count_filter($search); // Panggil fungsi count_filter pada SiswaModel

         // $callback = array(
         //  'draw'=>$_POST['draw'], // Ini dari datatablenya
         //  'recordsTotal'=>$sql_total,
         //  'recordsFiltered'=>$sql_filter,
         //  'data'=>$sql_data
         // );

         // header('Content-Type: application/json');
         // echo json_encode($callback); // Convert array $callback ke json
         $data=$this->Model_menu->getAllmenu();
         echo json_encode($data);
         
   }

   public function tambahmenu()
   {
      $tittle = $this->input->post('tittle');
      $url = $this->input->post('url');
      $icon = $this->input->post('icon');

      $data = [
               'tittle' => $tittle,
               'url' => $url,
               'icon' => $icon
            ];

      $this->Model_menu->insert_menu($data, 'tb_menu');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('menu/menu');
   }

   public function hapus_menu($id)
   {
      $this->Model_menu->delete_menu($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('menu/menu');
   }

   public function edit_menu($id)
   {
      $data['tittle'] = 'Edit';
      $data['menu'] = $this->Model_menu->getmenuById($id);
      $this->form_validation->set_rules('id_menu', 'id_menu', 'required');
      $this->form_validation->set_rules('tittle', 'tittle', 'required');
      $this->form_validation->set_rules('url', 'url', 'required');
      $this->form_validation->set_rules('icon', 'icon', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('menu/edit_menu', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_menu->updatemenu();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('menu/menu');
      }
   }
   
}

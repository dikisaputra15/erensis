<?php

class user extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_user');
      $this->load->model('Model_role');
      $this->load->model('Model_unit');
      $this->load->model('Model_unitinduk');
      $this->load->model('Model_unitlayanan');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'user'
            ];
         $data['user'] = $this->Model_user->getAlluser();
         $data['role'] = $this->Model_role->getAllrole1();
         $data['unit'] = $this->Model_unit->getAllunit();
         $data['unitinduk'] = $this->Model_unitinduk->unit_induk();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('user/user', $data);
         $this->load->view('templates/footer');
     } 
   }

   public function tambahuser()
   {
      $nama = $this->input->post('nama');
      $nip = $this->input->post('nip');
      $password = $this->input->post('password');
      $id_role = $this->input->post('id_role');
      $unit_induk = $this->input->post('unit_induk');
      $unit = $this->input->post('unit');
      $unit_layanan = $this->input->post('unit_layanan');

      $data = [
               'nama' => $nama,
               'nip' => $nip,
               'password' => $password,
               'role' => $id_role,
               'unit_induk' => $unit_induk,
               'unit' => $unit,
               'unit_layanan' => $unit_layanan
            ];

      $this->Model_user->insert_user($data, 'tb_user');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('user/user');
   }

   public function hapus_user($id)
   {
      $this->Model_user->delete_user($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('user/user');
   }

   public function edit_user($id)
   {
      $data['tittle'] = 'Edit';
      $data['user'] = $this->Model_user->getuserById($id);
      $data['role'] = $this->Model_role->getAllrole1();
      $data['unit'] = $this->Model_unit->getAllunit();
      $data['unitinduk'] = $this->Model_unitinduk->unit_induk();
      $data['unit'] = $this->Model_unit->getbyiduser($id);
      $data['unitlayanan'] = $this->Model_unitlayanan->getbyid($id);
      $this->form_validation->set_rules('id_user', 'id_user', 'required');
      $this->form_validation->set_rules('nama', 'nama', 'required');
      $this->form_validation->set_rules('nip', 'nip', 'required');
      $this->form_validation->set_rules('password', 'password', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('user/edit_user', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_user->updateuser();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('user/user');
      }
   }
   
}

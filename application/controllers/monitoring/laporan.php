<?php

class laporan extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_unit');
      $this->load->model('Model_unitinduk');
      $this->load->model('Model_unitlayanan');
      $this->load->model('Model_penyulang');
      $this->load->model('Model_trafo');
      $this->load->model('Model_gardu');
      $this->load->model('Model_pekerjaan');
      $this->load->model('Model_monitoring');
      $this->load->model('Model_tarif');
      $this->load->model('Model_program');
      $this->load->model('Model_daya');
      $this->load->model('Model_user');
      $this->load->model('Model_status');
      $this->load->model('Model_layanan');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'laporan monitoring'
            ];
         $data['monitoring'] = $this->Model_monitoring->getAllmonitoringlap();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('monitoring/laporan', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahkontribusi()
   {
      $nama = $this->input->post('nama');

      $data = [
               'nama' => $nama
            ];

      $this->Model_kontribusi->insert_kontribusi($data, 'tb_jenis_kontribusi');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('kontribusi/kontribusi');
   }

   public function hapus_laporan($id)
   {
      $this->Model_monitoring->delete_monitoring($id);

      $this->db->delete('tb_rab', array('id_utama' => $id));
      $this->db->delete('tb_template_rab', array('id_utama' => $id));

       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('monitoring/monitoring');
   }

   public function edit_laporan($id)
   {
      $data['tittle'] = 'Edit';
      $data['unit'] = $this->Model_unit->getbyidlaporan($id);
      $data['unitinduk'] = $this->Model_unitinduk->unit_induk();
      $data['unitlayanan'] = $this->Model_unitlayanan->getbyidlaporan($id);
      $data['penyulang'] = $this->Model_penyulang->getAllpenyulang();
      $data['trafo'] = $this->Model_trafo->fetch_trafo();
      $data['gardu'] = $this->Model_gardu->getAllgardu();
      $data['pekerjaan'] = $this->Model_pekerjaan->getAllpekerjaan();
      $data['monitoring'] = $this->Model_monitoring->getmonitoringbyid($id);
      $data['program'] = $this->Model_program->getAllprogram();
      $data['tarif'] = $this->Model_tarif->fetch_tarif();
      $data['daya'] = $this->Model_daya->getAlldaya();
      $data['user'] = $this->Model_user->getedituser($id);
      $data['status'] = $this->Model_status->getAllstatus();
      $data['layanan'] = $this->Model_layanan->getAlllayanan();

      $this->form_validation->set_rules('id_utama', 'id_utama', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('monitoring/edit_laporan', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_monitoring->updatemonitoring();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('monitoring/monitoring');
      }
   }

   public function status($id)
   {
      $this->Model_monitoring->update_status($id);
      $this->session->set_flashdata('flash', 'DiUbah');
      redirect('monitoring/monitoring');
   }

   function fetch_daya()
   {
      $id = $this->input->post('id',TRUE);
      $data = $this->Model_tarif->fetch_daya($id)->result();
      echo json_encode($data);

   }

    public function kirim($id)
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'kirin'
            ];
         $data['unit'] = $this->Model_unit->getbyidlaporan($id);
         $data['unitinduk'] = $this->Model_unitinduk->unit_induk();
         $data['unitlayanan'] = $this->Model_unitlayanan->getbyidlaporan($id);
         $data['status'] = $this->Model_status->getAllstatus();
         $data['user'] = $this->Model_user->getedituser($id);
         $data['monitoring'] = $this->Model_monitoring->getmonitoringbyid($id);
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('monitoring/kirim', $data);
         $this->load->view('templates/footer');
      }
   }

    public function proseskirim()
   {
      $status = $this->input->post('status');
      $unit_induk_pic = $this->input->post('unit_induk_pic');
      $unit_pic = $this->input->post('unit_pic');
      $unit_layanan_pic = $this->input->post('unit_layanan_pic');
      $user_pic = $this->input->post('user_pic');
      $id_utama = $this->input->post('id_utama'); 
      $tgl_now = date('Y-m-d H:i:s');

       $data = [
                  'id_utama' => $id_utama,
                  'id_unit_induk' => $unit_induk_pic,
                  'id_unit' => $unit_pic,
                  'id_unit_layanan' => $unit_layanan_pic,
                  'id_user' => $user_pic,
                  'id_status' => $status,
                  'tanggal' => $tgl_now
               ];


       $data2 = [
                  'id_unit_induk_pic' => $unit_induk_pic,
                  'id_unit_pic' => $unit_pic,
                  'id_layanan_pic' => $unit_layanan_pic,
                  'id_user_pic' => $user_pic,
                  'status' => $status
               ];

         $this->db->insert('tb_histori', $data);
         $this->db->where('id_utama', $id_utama);
         $this->db->update('tb_utama', $data2);
         $this->session->set_flashdata('flash', 'Ditambah');
         redirect('monitoring/monitoring');
   }
   
}

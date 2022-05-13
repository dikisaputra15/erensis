<?php

class item extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_item');
      $this->load->model('Model_jenis');
      $this->load->model('Model_satuan');
      $this->load->model('Model_kategori');
      $this->load->model('Model_pekerjaan');
      $this->load->model('Model_unitinduk');
      $this->load->model('Model_unit');
      $this->load->model('Model_sumberhs');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'item'
            ];
         // $data['item'] = $this->Model_item->getAllitem();
         $data['jenis'] = $this->Model_jenis->getAlljenis();
         $data['satuan'] = $this->Model_satuan->getAllsatuan();
         $data['viewkategori'] = $this->Model_kategori->getviewkategori();
         $data['jenis_pekerjaan'] = $this->Model_item->jenis_pekerjaan();
         $data['unitinduk'] = $this->Model_unitinduk->unit_induk();
         $data['sumberhs'] = $this->Model_sumberhs->getAllsumberhs();
         $data['pengadaan'] = $this->Model_jenis->getAllpengadaan();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('item/item', $data);
         $this->load->view('templates/footer');
      }
   }

   public function view()
   {
         
         $data=$this->Model_item->getAllitem();
         echo json_encode($data);
         
   }

   public function tambahitem()
   {
      $uraian_item = $this->input->post('uraian_item');
      $jenis = $this->input->post('jenis');
      $satuan = $this->input->post('satuan');
      $harga_satuan = $this->input->post('harga_satuan');
      $kategori = $this->input->post('kategori');
      $jenis_pekerjaan = $this->input->post('jenis_pekerjaan');
      $subjenis = $this->input->post('subjenis');
      $jenis_pengadaan = $this->input->post('jenis_pengadaan');
      $unit_induk = $this->input->post('unit_induk');
      $unit = $this->input->post('unit');
      $sumberhs = $this->input->post('sumberhs');

      $data = [
               'uraian_item' => $uraian_item,
               'jenis' => $jenis,
               'satuan' => $satuan,
               'harga_satuan' => $harga_satuan,
               'kategori' => $kategori,
               'jenis_pekerjaan' => $jenis_pekerjaan,
               'subjenis_pekerjaan' => $subjenis,
               'jenis_pengadaan' => $jenis_pengadaan,
               'id_unit_induk' => $unit_induk,
               'id_unit' => $unit,
               'sumber_hs' => $sumberhs
            ];

      $this->Model_item->insert_item($data, 'tb_item');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('item/item');
   }

   public function tambahitemtemplates()
   {
      $id_list = $this->input->post('id_list');
      $satuan_template = $this->input->post('satuan_template');
      $kategori = $this->input->post('kategori');
      $jenis_pekerjaan = $this->input->post('jenis_pekerjaan');
      $subjenis = $this->input->post('subjenis');
      $item = $this->input->post('item');
      $satuan_item = $this->input->post('satuan_item');
      $harga_satuan = $this->input->post('harga_satuan');
      $jenis_item = $this->input->post('jenis_item');
      $jenis_pengadaan = $this->input->post('jenis_pengadaan');
      $unit_induk = $this->input->post('unit_induk');
      $unit = $this->input->post('unit');
      $sumber_hs = $this->input->post('sumber_hs');
      $koef_item_kali = $this->input->post('koef_item_kali');
      $koef_item_bagi = $this->input->post('koef_item_bagi');
      $koef_item_tambah = $this->input->post('koef_item_tambah');
      $koef_item_kurang = $this->input->post('koef_item_kurang');
      $id_pengali = $this->input->post('id_pengali');
      $id_pembagi = $this->input->post('id_pembagi');
      $id_penambah = $this->input->post('id_penambah');
      $id_pengurang = $this->input->post('id_pengurang');

      $data = [
               'id_list' => $id_list,
               'satuan_template' => $satuan_template,
               'id_item' => $item,
               'jenis_item' => $jenis_item,
               'koefisien_item_kali' => $koef_item_kali,
               'koefisien_item_bagi' => $koef_item_bagi,
               'koefisien_item_tambah' => $koef_item_tambah,
               'koefisien_item_kurang' => $koef_item_kurang,
               'item_pengali' => $id_pengali,
               'item_pembagi' => $id_pembagi,
               'item_penambah' => $id_penambah,
               'item_pengurang' => $id_pengurang,
               'satuan_item' => $satuan_item,
               'harga_satuan_item' => $harga_satuan,
               'kategori_item' => $kategori,
               'jenis_pekerjaan_item' => $jenis_pekerjaan,
               'subjenis_pekerjaan_item' => $subjenis,
               'jenis_pengadaan' => $jenis_pengadaan,
               'id_unit_induk' => $unit_induk,
               'id_unit' => $unit,
               'sumber_hs' => $sumber_hs
            ];

      $this->Model_item->insert_item_template($data, 'tb_item_template');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('layanan/list_template/edit_list/' . $id_list);
   }

   public function hapus_item($id)
   {
      $this->Model_item->delete_item($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('item/item');
   }

   public function edit_item($id)
   {
      $data['tittle'] = 'Edit';
      $data['item'] = $this->Model_item->getitemById($id);
      $data['jenis'] = $this->Model_jenis->getAlljenis();
      $data['satuan'] = $this->Model_satuan->getAllsatuan();
      $data['kategori'] = $this->Model_kategori->view_kategori();
      $data['jp'] = $this->Model_jenis->getmultijpbyid($id);
      $data['subjenis'] = $this->Model_jenis->getmultisubjenisbyid($id);
      $data['pengadaan'] = $this->Model_jenis->getAllpengadaan();
      $data['unitinduk'] = $this->Model_unitinduk->getmultiunitindukbyid();
      $data['unit'] = $this->Model_unit->getmultiunitbyid($id);
      $data['sumberhs'] = $this->Model_sumberhs->getAllsumberhs();
      $this->form_validation->set_rules('id_item', 'id_item', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('jenis/edit_item', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_item->updateitem();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('item/item');
      }
   }

   function fetch_subjenis()
    {
     if($this->input->post('jenis_pekerjaan'))
     {
       echo $this->Model_item->fetch_subjenis($this->input->post('jenis_pekerjaan'));
     }
    }
   
}

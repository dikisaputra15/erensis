<?php

class list_template extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_layanan');
      $this->load->model('Model_satuan');
      $this->load->model('Model_item');
      $this->load->model('Model_jenis');
      $this->load->model('Model_kategori');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'list template'
            ];
         $data['list'] = $this->Model_layanan->getAlllist();
         $data['satuan'] = $this->Model_satuan->getAllsatuan();
          $data['kategori'] = $this->Model_kategori->getAllkategori();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('layanan/list_template', $data);
         $this->load->view('templates/footer');
      }
   }

   public function view()
   {
      $data=$this->Model_layanan->getAlllist1();
         echo json_encode($data);
   }

   public function tambahlist()
   {
      $uraian_template = $this->input->post('uraian_template');
      $id_satuan = $this->input->post('id_satuan');
      $id_kategori = $this->input->post('id_kategori');

      $data = [
               'uraian_template' => $uraian_template,
               'id_satuan' => $id_satuan,
               'id_kategori' => $id_kategori
            ];

      $this->Model_layanan->insert_list($data, 'tb_list_template');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('layanan/list_template');
   }

   public function hapus_list($id)
   {
      $this->Model_layanan->delete_list($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('layanan/list_template');
   }

    public function hapus_listtemplate($id)
   {
      // $uri_id = $this->uri->segment(4);
      $query = $this->db->query("select * from tb_item_template where id_item_template='$id'");

      foreach ($query->result() as $row)
      {
              $idhap = $row->id_list;
      }

      $this->Model_layanan->delete_listtemplate($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('layanan/list_template/edit_list/' .$idhap);
   }

   public function edit_list($id)
   {
      $data['tittle'] = 'Edit';
      $data['list'] = $this->Model_layanan->getlistById($id);
      $data['satuan'] = $this->Model_satuan->getAllsatuan();
      $data['listitem'] = $this->Model_item->getAlllistitem($id);
       $data['item'] = $this->Model_item->getAllitem();
       $data['jenis'] = $this->Model_jenis->getAlljenis();
       $data['kategori'] = $this->Model_item->fetch_kategori();
       $data['item_pengali'] = $this->Model_item->fetch_item_pengali();
      $this->form_validation->set_rules('id_list', 'id_list', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('layanan/edit_list', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_layanan->updatelist();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('layanan/list_template');
      }
   }

   public function edit_listtemplate($id)
   {
      $data['tittle'] = 'Edit';
      // $data['list'] = $this->Model_layanan->getlistById($id);
      // $data['satuan'] = $this->Model_satuan->getAllsatuan();
      $data['listtemplate'] = $this->Model_item->getlisttemplatebyid($id);
       // $data['item'] = $this->Model_item->getAllitem();
       // $data['jenis'] = $this->Model_jenis->getAlljenis();
       // $data['kategori'] = $this->Model_item->fetch_kategori();
       $data['item_pengali'] = $this->Model_item->fetch_item_pengalitmp($id);
      $this->form_validation->set_rules('id_item_template', 'id_item_template', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('layanan/edit_listtemplate', $data);
            $this->load->view('templates/footer');
      } else {

        $query = $this->db->query("select * from tb_item_template where id_item_template='$id'");

        foreach ($query->result() as $row)
        {
                $idhap = $row->id_list;
        }
         $this->Model_layanan->updatelisttemplate();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('layanan/list_template/edit_list/' .$idhap);
         
      }
   }

   function fetch_jp()
    {
     if($this->input->post('id_kategori'))
     {
      echo $this->Model_item->fetch_jp($this->input->post('id_kategori'));
     }
    }

    function fetch_subjenis()
    {
     if($this->input->post('id_jp'))
     {
      echo $this->Model_item->fetch_subjenis2($this->input->post('id_jp'));
     }
    }

     function fetch_item()
    {
     if($this->input->post('id_sub'))
     {
      echo $this->Model_item->fetch_item($this->input->post('id_sub'));
     }
    }

     function fetch_satuan()
    {
     if($this->input->post('id_sat'))
     {
      echo $this->Model_item->fetch_satuan($this->input->post('id_sat'));
     }
    }

    function fetch_hs()
    {
     if($this->input->post('id_hs'))
     {
      echo $this->Model_item->fetch_hs($this->input->post('id_hs'));
     }
    }

    function fetch_pengali()
    {
     if($this->input->post('item_pengali'))
     {
      echo $this->Model_item->fetch_pengali($this->input->post('item_pengali'));
     }
    }

    function fetch_jenisitem()
    {
     if($this->input->post('jenis_item'))
     {
      echo $this->Model_item->fetch_jenisitem($this->input->post('jenis_item'));
     }
    }

    function fetch_jenispengadaan()
    {
     if($this->input->post('jenis_pengadaan'))
     {
      echo $this->Model_item->fetch_jenispengadaan($this->input->post('jenis_pengadaan'));
     }
    }

    function fetch_unitinduk()
    {
     if($this->input->post('unit_induk'))
     {
      echo $this->Model_item->fetch_unitinduk($this->input->post('unit_induk'));
     }
    }

    function fetch_unit()
    {
     if($this->input->post('unit'))
     {
      echo $this->Model_item->fetch_unit($this->input->post('unit'));
     }
    }

    function fetch_sumberhs()
    {
     if($this->input->post('sumber_hs'))
     {
      echo $this->Model_item->fetch_sumberhs($this->input->post('sumber_hs'));
     }
    }

    function fetch_template()
    {
     if($this->input->post('id_kategori2'))
     {
      echo $this->Model_item->fetch_template($this->input->post('id_kategori2'));
     }
    }

    function fetch_satuan2()
    {
     if($this->input->post('id_satuan2'))
     {
      echo $this->Model_item->fetch_satuan2($this->input->post('id_satuan2'));
     }
    }
   
}

<?php

class Model_layanan extends CI_Model
{
   
    public function getAlllayanan()
   {
          
      $query = "SELECT * from tb_layanan_khusus";
      return $this->db->query($query)->result_array();
   }

    public function getAlllist()
   {
          
      $query = "SELECT tb_list_template.*, tb_kategori.*, tb_satuan.id_satuan,tb_satuan.nama_satuan
                  FROM tb_list_template JOIN tb_satuan
                  ON tb_list_template.id_satuan=tb_satuan.id_satuan join tb_kategori on tb_list_template.id_kategori=tb_kategori.id_kategori";
      return $this->db->query($query)->result_array();
   }

   public function getAlllist1()
   {
      $hasil=$this->db->query("SELECT tb_list_template.*, tb_kategori.*, tb_satuan.id_satuan,tb_satuan.nama_satuan FROM tb_list_template JOIN tb_satuan ON tb_list_template.id_satuan=tb_satuan.id_satuan join tb_kategori on tb_list_template.id_kategori=tb_kategori.id_kategori");
        return $hasil->result();
   }

 	public function insert_layanan($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function insert_list($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_layanan($id)
   {
      $this->db->delete('tb_layanan_khusus', ['id_layanan_khusus' => $id]);
   }

   public function delete_list($id)
   {
      $this->db->delete('tb_list_template', ['id_list' => $id]);
      $this->db->delete('tb_item_template', ['id_list' => $id]);
   }

   public function delete_listtemplate($id)
   {
      $this->db->delete('tb_item_template', ['id_item_template' => $id]);
   }

    public function getlayananById($id)
   {
      return $this->db->get_where('tb_layanan_khusus', ['id_layanan_khusus' => $id])->row_array();
   }


    public function getlistById($id)
   {
      return $this->db->get_where('tb_list_template', ['id_list' => $id])->row_array();
   }

	public function updatelist()
   {
      $uraian = $this->input->post('uraian');
      $id_satuan = $this->input->post('id_satuan');
      $id_kategori = $this->input->post('id_kategori');

      $data = [
         'uraian_template' => $uraian,
         'id_satuan' => $id_satuan,
         'id_kategori' => $id_kategori
      ];

      $this->db->update('tb_list_template', $data, ['id_list' => $this->input->post('id_list')]);
   }

   public function updatelayanan()
   {
      $uraian = $this->input->post('uraian');
      $penambahan_tarif = $this->input->post('penambahan_tarif');

      $data = [
         'uraian' => $uraian,
         'penambahan_tarif' => $penambahan_tarif
      ];

      $this->db->update('tb_layanan_khusus', $data, ['id_layanan_khusus' => $this->input->post('id_layanan_khusus')]);
   }

   public function updatelisttemplate()
   {
      $koefisien_item_kali = $this->input->post('koefisien_item_kali');
      $koefisien_item_bagi = $this->input->post('koefisien_item_bagi');
      $koefisien_item_tambah = $this->input->post('koefisien_item_tambah');
      $koefisien_item_kurang = $this->input->post('koefisien_item_kurang');
      $id_pengali = $this->input->post('id_pengali');
      $id_pembagi = $this->input->post('id_pembagi');
      $id_penambah = $this->input->post('id_penambah');
      $id_pengurang = $this->input->post('id_pengurang');

      $data = [
         'koefisien_item_kali' => $koefisien_item_kali,
         'koefisien_item_bagi' => $koefisien_item_bagi,
         'koefisien_item_tambah' => $koefisien_item_tambah,
         'koefisien_item_kurang' => $koefisien_item_kurang,
         'item_pengali' => $id_pengali,
         'item_pembagi' => $id_pembagi,
         'item_penambah' => $id_penambah,
      	'item_pengurang' => $id_pengurang
      ];

      $this->db->update('tb_item_template', $data, ['id_item_template' => $this->input->post('id_item_template')]);
   }

    function getlayanan($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_layanan = $row->id_layanan_khusus;
        }

         return $this->db->get_where('tb_layanan_khusus', ['id_layanan_khusus' => $id_layanan])->row_array();
        
    }

    function getlayanan2($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_layanan = $row->id_layanan_khusus2;
        }

         return $this->db->get_where('tb_layanan_khusus', ['id_layanan_khusus' => $id_layanan])->row_array();
        
    }

    function getlayanan3($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_layanan = $row->id_layanan_khusus3;
        }

         return $this->db->get_where('tb_layanan_khusus', ['id_layanan_khusus' => $id_layanan])->row_array();
        
    }

    function getlayanan4($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_layanan = $row->id_layanan_khusus4;
        }

         return $this->db->get_where('tb_layanan_khusus', ['id_layanan_khusus' => $id_layanan])->row_array();
        
    }

    function getlayanan5($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_layanan = $row->id_layanan_khusus5;
        }

         return $this->db->get_where('tb_layanan_khusus', ['id_layanan_khusus' => $id_layanan])->row_array();
        
    }

    function getlayanan6($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_layanan = $row->id_layanan_khusus6;
        }

         return $this->db->get_where('tb_layanan_khusus', ['id_layanan_khusus' => $id_layanan])->row_array();
        
    }

    function getlayanan7($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_layanan = $row->id_layanan_khusus7;
        }

         return $this->db->get_where('tb_layanan_khusus', ['id_layanan_khusus' => $id_layanan])->row_array();
        
    }

    function getlayanan8($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_layanan = $row->id_layanan_khusus8;
        }

         return $this->db->get_where('tb_layanan_khusus', ['id_layanan_khusus' => $id_layanan])->row_array();
        
    }

    function getlayanan9($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_layanan = $row->id_layanan_khusus9;
        }

         return $this->db->get_where('tb_layanan_khusus', ['id_layanan_khusus' => $id_layanan])->row_array();
        
    }

    function getlayanan10($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_layanan = $row->id_layanan_khusus10;
        }

         return $this->db->get_where('tb_layanan_khusus', ['id_layanan_khusus' => $id_layanan])->row_array();
        
    }

     public function getreguler()
   {
      return $this->db->get_where('tb_layanan_khusus', ['id_layanan_khusus' => 1])->row_array();
   }

    public function getbronze()
   {
      return $this->db->get_where('tb_layanan_khusus', ['id_layanan_khusus' => 2])->row_array();
   }

   public function getsilver()
   {
      return $this->db->get_where('tb_layanan_khusus', ['id_layanan_khusus' => 3])->row_array();
   }

   public function getgold()
   {
      return $this->db->get_where('tb_layanan_khusus', ['id_layanan_khusus' => 4])->row_array();
   }

   public function getplatinum()
   {
      return $this->db->get_where('tb_layanan_khusus', ['id_layanan_khusus' => 5])->row_array();
   }

}

?>
<?php

class Model_jenis extends CI_Model
{
   
    public function getAlljenis()
   {
          
      $query = "SELECT * from tb_jenis";
      return $this->db->query($query)->result_array();
   }

    public function getAllsubjenis()
   {
          
      $query = "SELECT tb_subjenis_pekerjaan.*, tb_jenis_pekerjaan.id_jp,tb_jenis_pekerjaan.nama, tb_kategori.id_kategori,tb_kategori.kategori
                  FROM tb_subjenis_pekerjaan JOIN tb_jenis_pekerjaan
                  ON tb_subjenis_pekerjaan.id_jp=tb_jenis_pekerjaan.id_jp join tb_kategori on tb_subjenis_pekerjaan.id_kategori=tb_kategori.id_kategori";
      return $this->db->query($query)->result_array();
   }

   public function getAllpengadaan()
   {
          
      $query = "SELECT * from tb_jenis_pengadaan";
      return $this->db->query($query)->result_array();
   }

 	public function insert_jenis($data, $table)
   {
      $this->db->insert($table, $data);
   }

      public function insert_jenispengadaan($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function insert_subjenis($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_jenis($id)
   {
      $this->db->delete('tb_jenis', ['id_jenis' => $id]);
   }

   public function delete_pengadaan($id)
   {
      $this->db->delete('tb_jenis_pengadaan', ['id_jenis_pengadaan' => $id]);
   }

    public function delete_subjenis($id)
   {
      $this->db->delete('tb_subjenis_pekerjaan', ['id_subjenis_pekerjaan' => $id]);
   }

    public function getjenisById($id)
   {
      return $this->db->get_where('tb_jenis', ['id_jenis' => $id])->row_array();
   }

   public function getpengadaanById($id)
   {
      return $this->db->get_where('tb_jenis_pengadaan', ['id_jenis_pengadaan' => $id])->row_array();
   }

    public function getsubjenisById($id)
   {
      return $this->db->get_where('tb_subjenis_pekerjaan', ['id_subjenis_pekerjaan' => $id])->row_array();
   }

	public function updatejenis()
   {
      $jenis = $this->input->post('jenis');

      $data = [
      	'jenis' => $jenis
      ];

      $this->db->update('tb_jenis', $data, ['id_jenis' => $this->input->post('id_jenis')]);
   }

   public function updatepengadaan()
   {
      $jenis_pengadaan = $this->input->post('jenis_pengadaan');

      $data = [
         'jenis_pengadaan' => $jenis_pengadaan
      ];

      $this->db->update('tb_jenis_pengadaan', $data, ['id_jenis_pengadaan' => $this->input->post('id_jenis_pengadaan')]);
   }

   public function updatesubjenis()
   {
      $jp = $this->input->post('jp');
      $kategori = $this->input->post('kategori');
      $subjenis_pekerjaan = $this->input->post('subjenis_pekerjaan');

      $data = [
         'id_kategori' => $kategori,
         'id_jp' => $jp,
         'subjenis_pekerjaan' => $subjenis_pekerjaan
      ];

      $this->db->update('tb_subjenis_pekerjaan', $data, ['id_subjenis_pekerjaan' => $this->input->post('id_subjenis_pekerjaan')]);
   }

   function fetch_jp($kategori)
   {
      $this->db->where('id_kategori', $kategori);
      $this->db->order_by('nama', 'ASC');
      $query = $this->db->get('tb_jenis_pekerjaan');
      $output = '<option value="">Select Jenis Pekeerjaan</option>';
      foreach($query->result() as $row)
      {
       $output .= '<option value="'.$row->id_jp.'">'.$row->nama.'</option>';
      }
      return $output;
   }

   public function getjpbyid($id)
   {  
       $query = $this->db->get_where('tb_subjenis_pekerjaan', array('id_subjenis_pekerjaan' => $id));

           foreach ($query->result() as $row){
              $id_kategori = $row->id_kategori;
           }

     $quer = "SELECT * from tb_jenis_pekerjaan where id_kategori='$id_kategori'";
      return $this->db->query($quer)->result_array();
   }

    public function getmultijpbyid($id)
   {  
       $query = $this->db->get_where('tb_item', array('id_item' => $id));

           foreach ($query->result() as $row){
              $id_kategori = $row->kategori;
           }

     $quer = "SELECT * from tb_jenis_pekerjaan where id_kategori='$id_kategori'";
      return $this->db->query($quer)->result_array();
   }

   public function getmultisubjenisbyid($id)
   {  
       $query = $this->db->get_where('tb_item', array('id_item' => $id));

           foreach ($query->result() as $row){
              $id_kategori = $row->kategori;
           }

     $quer = "SELECT * from tb_subjenis_pekerjaan where id_kategori='$id_kategori'";
      return $this->db->query($quer)->result_array();
   }

    function fetch_jenis_pekerjaan($kategori)
   {
      $this->db->where('id_kategori', $kategori);
      $this->db->order_by('kategori', 'ASC');
      $query = $this->db->get('tb_jenis_pekerjaan');
      $output = '<option value="">Select jenis pekerjaan</option>';
      foreach($query->result() as $row)
      {
       $output .= '<option value="'.$row->id_jenis_pekerjaan.'">'.$row->nama.'</option>';
      }
      return $output;
   }

}

?>
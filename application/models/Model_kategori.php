<?php

class Model_kategori extends CI_Model
{
   
    public function getAllkategori()
   {
          
      $query = "SELECT * from tb_kategori";
      return $this->db->query($query)->result_array();
   }

 	public function insert_kategori($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_kategori($id)
   {
      $this->db->delete('tb_kategori', ['id_kategori' => $id]);
   }

    public function getkategoriById($id)
   {
      return $this->db->get_where('tb_kategori', ['id_kategori' => $id])->row_array();
   }

	public function updatekategori()
   {
      $kategori = $this->input->post('kategori');

      $data = [
      	'kategori' => $kategori
      ];

      $this->db->update('tb_kategori', $data, ['id_kategori' => $this->input->post('id_kategori')]);
   }

   function view_kategori(){
        $this->db->order_by("kategori", "ASC");
        $query = $this->db->get("tb_kategori");
        return $query->result();  
    }

    function getviewkategori(){
        $this->db->order_by("kategori", "ASC");
        $query = $this->db->get("tb_kategori");
        return $query->result();  
    }

}

?>
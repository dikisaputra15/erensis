<?php

class Model_pekerjaan extends CI_Model
{
   
    public function getAllpekerjaan()
   {
          
      $query = "SELECT tb_jenis_pekerjaan.*, tb_kategori.id_kategori,tb_kategori.kategori
                  FROM tb_jenis_pekerjaan JOIN tb_kategori
                  ON tb_jenis_pekerjaan.id_kategori=tb_kategori.id_kategori";
      return $this->db->query($query)->result_array();
   }

 	public function insert_pekerjaan($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_pekerjaan($id)
   {
      $this->db->delete('tb_jenis_pekerjaan', ['id_jp' => $id]);
   }

    public function getpekerjaanById($id)
   {
      return $this->db->get_where('tb_jenis_pekerjaan', ['id_jp' => $id])->row_array();
   }

	public function updatepekerjaan()
   {
      $id_kategori = $this->input->post('id_kategori');
      $nama = $this->input->post('nama');

      $data = [
         'id_kategori' => $id_kategori,
      	'nama' => $nama
      ];

      $this->db->update('tb_jenis_pekerjaan', $data, ['id_jp' => $this->input->post('id_jp')]);
   }

}

?>
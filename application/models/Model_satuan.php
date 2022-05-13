<?php

class Model_satuan extends CI_Model
{
   
    public function getAllsatuan()
   {
          
      $query = "SELECT * from tb_satuan";
      return $this->db->query($query)->result_array();
   }

 	public function insert_satuan($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_satuan($id)
   {
      $this->db->delete('tb_satuan', ['id_satuan' => $id]);
   }

    public function getsatuanById($id)
   {
      return $this->db->get_where('tb_satuan', ['id_satuan' => $id])->row_array();
   }

	public function updatesatuan()
   {
      $satuan = $this->input->post('satuan');

      $data = [
      	'nama_satuan' => $satuan
      ];

      $this->db->update('tb_satuan', $data, ['id_satuan' => $this->input->post('id_satuan')]);
   }

}

?>
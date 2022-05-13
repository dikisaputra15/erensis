<?php

class Model_sumberhs extends CI_Model
{
   
    public function getAllsumberhs()
   {
          
      $query = "SELECT * from tb_sumberhs";
      return $this->db->query($query)->result_array();
   }

 	public function insert_sumberhs($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_sumberhs($id)
   {
      $this->db->delete('tb_sumberhs', ['id_sumber_hs' => $id]);
   }

    public function getsumberhsById($id)
   {
      return $this->db->get_where('tb_sumberhs', ['id_sumber_hs' => $id])->row_array();
   }

	public function updatesumberhs()
   {
      $uraian = $this->input->post('uraian');

      $data = [
      	'uraian_sumber_hs' => $uraian
      ];

      $this->db->update('tb_sumberhs', $data, ['id_sumber_hs' => $this->input->post('id_sumber_hs')]);
   }

}

?>
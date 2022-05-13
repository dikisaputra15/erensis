<?php

class Model_status extends CI_Model
{
   
    public function getAllstatus()
   {
          
      $query = "SELECT * from tb_status";
      return $this->db->query($query)->result_array();
   }

   public function getAllstatus1()
   {
          
      $query = "SELECT * from tb_status where id_status > 3";
      return $this->db->query($query)->result_array();
   }

 	public function insert_status($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_status($id)
   {
      $this->db->delete('tb_status', ['id_status' => $id]);
   }

    public function getstatusById($id)
   {
      return $this->db->get_where('tb_status', ['id_status' => $id])->row_array();
   }

	public function updatestatus()
   {
      $uraian_status = $this->input->post('uraian_status');

      $data = [
      	'uraian_status' => $uraian_status
      ];

      $this->db->update('tb_status', $data, ['id_status' => $this->input->post('id_status')]);
   }

}

?>
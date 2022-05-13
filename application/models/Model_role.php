<?php

class Model_role extends CI_Model
{
   
    public function getAllrole()
   {
          
      // $query = "SELECT * from tb_role";
      // return $this->db->query($query)->result_array();

       $hasil=$this->db->query("SELECT * from tb_role");
        return $hasil->result();
   }

   public function getAllrole1()
   {
          
      $query = "SELECT * from tb_role";
      return $this->db->query($query)->result_array();
   }

 	public function insert_role($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_role($id)
   {
      $this->db->delete('tb_role', ['id_role' => $id]);
   }

    public function getroleById($id)
   {
      return $this->db->get_where('tb_role', ['id_role' => $id])->row_array();
   }

	public function updaterole()
   {
      $role = $this->input->post('role');

      $data = [
      	'role' => $role
      ];

      $this->db->update('tb_role', $data, ['id_role' => $this->input->post('id_role')]);
   }

}

?>
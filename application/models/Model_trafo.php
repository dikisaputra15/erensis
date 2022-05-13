<?php

class Model_trafo extends CI_Model
{
   
    public function getAlltrafo()
   {
          
      $query = "SELECT * from tb_trafo_gi";
      return $this->db->query($query)->result_array();
   }

   public function fetch_trafo()
   {  
       $this->db->order_by("nama_trafo_gi", "ASC");
        $query = $this->db->get("tb_trafo_gi");
        return $query->result();  
   }

   public function getpenyulang()
   {
          
       $this->db->order_by("nama_penyulang", "ASC");
        $query = $this->db->get("tb_penyulang");
        return $query->result();  
   }

 	public function insert_trafo($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_trafo($id)
   {
      $this->db->delete('tb_trafo_gi', ['id_trafo_gi' => $id]);
   }

    public function delete_segmen($id)
   {
      $this->db->delete('tb_segmen', ['nama_penyulang' => $id]);
   }

   public function delete_gardu($id)
   {
      $this->db->delete('tb_gardu', ['id_penyulang' => $id]);
   }

    public function gettrafoById($id)
   {
      return $this->db->get_where('tb_trafo_gi', ['id_trafo_gi' => $id])->row_array();
   }

	public function updatetrafo()
   {
      $nama_trafo_gi = $this->input->post('nama_trafo_gi');
      $kapasitas = $this->input->post('kapasitas');
      $beban = $this->input->post('beban');

      $data = [
         'nama_trafo_gi' => $nama_trafo_gi,
         'kapasitas' => $kapasitas,
      	'beban' => $beban
      ];

      $this->db->update('tb_trafo_gi', $data, ['id_trafo_gi' => $this->input->post('id_trafo_gi')]);
   }

   public function ajax_trafo($id_trafo_gi)
   {
      $this->db->where('id_trafo_gi', $id_trafo_gi);
      $this->db->order_by('nama_penyulang', 'ASC');
      $query = $this->db->get('tb_penyulang');
      $output = '<option value="">-Select Penyulang-</option>';
      foreach($query->result() as $row)
      {
       $output .= '<option value="'.$row->id_penyulang.'">'.$row->nama_penyulang.'</option>';
      }
      return $output;
   }

}

?>
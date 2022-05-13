<?php

class Model_penyambungan extends CI_Model
{
   
    public function getAllpenyambungan()
   {
          
      $query = "SELECT * from tb_penyambungan";
      return $this->db->query($query)->result_array();
   }

 	public function insert_penyambungan($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_penyambungan($id)
   {
      $this->db->delete('tb_penyambungan', ['id_bp' => $id]);
   }

    public function getpenyambunganById($id)
   {
      return $this->db->get_where('tb_penyambungan', ['id_bp' => $id])->row_array();
   }

	public function updatepenyambungan()
   {
      $daya_bawah = $this->input->post('daya_bawah');
      $daya_atas = $this->input->post('daya_atas');
      $rp_perva = $this->input->post('rp_perva');

      $data = [
         'daya_bawah' => $daya_bawah,
         'daya_atas' => $daya_atas,
      	'rp_perva' => $rp_perva
      ];

      $this->db->update('tb_penyambungan', $data, ['id_bp' => $this->input->post('id_bp')]);
   }

}

?>
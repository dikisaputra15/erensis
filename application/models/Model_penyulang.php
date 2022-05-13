<?php

class Model_penyulang extends CI_Model
{
   
    public function getAllpenyulang()
   {
          
      $query = "SELECT tb_penyulang.*, tb_trafo_gi.id_trafo_gi,tb_trafo_gi.nama_trafo_gi FROM tb_penyulang JOIN tb_trafo_gi ON tb_penyulang.id_trafo_gi=tb_trafo_gi.id_trafo_gi";
      return $this->db->query($query)->result_array();
   }

 	public function insert_penyulang($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_penyulang($id)
   {
      $this->db->delete('tb_penyulang', ['id_penyulang' => $id]);
   }

    public function delete_gardu($id)
   {
      $this->db->delete('tb_gardu', ['nama_segmen' => $id]);
   }

    public function getpenyulangById($id)
   {
      return $this->db->get_where('tb_penyulang', ['id_penyulang' => $id])->row_array();
   }

	public function updatepenyulang()
   {
      $nama_penyulang = $this->input->post('nama_penyulang');
      $id_trafo_gi = $this->input->post('id_trafo_gi');
      $kapasitas = $this->input->post('kapasitas');
      $beban = $this->input->post('beban');

      $data = [
      	'nama_penyulang' => $nama_penyulang,
         'id_trafo_gi' => $id_trafo_gi,
         'kapasitas' => $kapasitas,
      	'beban' => $beban
      ];

      $this->db->update('tb_penyulang', $data, ['id_penyulang' => $this->input->post('id_penyulang')]);
   }

     public function ajax_penyulang($id_penyulang)
   {
      $this->db->where('id_penyulang', $id_penyulang);
      $this->db->order_by('nama_gardu', 'ASC');
      $query = $this->db->get('tb_gardu');
      $output = '<option value="">-Select Gardu-</option>';
      foreach($query->result() as $row)
      {
       $output .= '<option value="'.$row->id_gardu.'">'.$row->nama_gardu.'</option>';
      }
      return $output;
   }

}

?>
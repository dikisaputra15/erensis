<?php

class Model_gardu extends CI_Model
{
   
    public function getAllgardu()
   {
          
      $query = "SELECT tb_gardu.*, tb_trafo_gi.id_trafo_gi,tb_trafo_gi.nama_trafo_gi, tb_penyulang.id_penyulang,tb_penyulang.nama_penyulang
                  FROM tb_gardu JOIN tb_trafo_gi
                  ON tb_gardu.id_trafo_gi=tb_trafo_gi.id_trafo_gi join tb_penyulang on tb_gardu.id_penyulang=tb_penyulang.id_penyulang";
      return $this->db->query($query)->result_array();
   }

 	public function insert_gardu($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_gardu($id)
   {
      $this->db->delete('tb_gardu', ['id_gardu' => $id]);
   }

    public function getgarduById($id)
   {
      return $this->db->get_where('tb_gardu', ['id_gardu' => $id])->row_array();
   }

	public function updategardu()
   {
      $nama_gardu = $this->input->post('nama_gardu');
      $id_trafo_gi = $this->input->post('id_trafo_gi');
      $id_penyulang = $this->input->post('id_penyulang');
      $kapasitas = $this->input->post('kapasitas');
      $beban = $this->input->post('beban');

      $data = [
      	'nama_gardu' => $nama_gardu,
         'id_trafo_gi' => $id_trafo_gi,
         'id_penyulang' => $id_penyulang,
         'kapasitas' => $kapasitas,
      	'beban' => $beban
      ];

      $this->db->update('tb_gardu', $data, ['id_gardu' => $this->input->post('id_gardu')]);
   }

}

?>
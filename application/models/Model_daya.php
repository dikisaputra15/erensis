<?php

class Model_daya extends CI_Model
{
   
    public function getAlldaya()
   {
          
      $query = "SELECT tb_daya.*, tb_tarif.id_tarif,tb_tarif.nama_tarif
                  FROM tb_daya JOIN tb_tarif
                  ON tb_daya.id_tarif=tb_tarif.id_tarif";
      return $this->db->query($query)->result_array();
   }

 	public function insert_daya($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_daya($id)
   {
      $this->db->delete('tb_daya', ['id_daya' => $id]);
   }

    public function getdayaById($id)
   {
      return $this->db->get_where('tb_daya', ['id_daya' => $id])->row_array();
   }

	public function updatedaya()
   {
      $id_tarif = $this->input->post('id_tarif');
      $daya = $this->input->post('daya');
      $rp_tarif = $this->input->post('rp_tarif');

      $data = [
         'id_tarif' => $id_tarif,
         'daya' => $daya,
      	'rp_tariff' => $rp_tarif
      ];

      $this->db->update('tb_daya', $data, ['id_daya' => $this->input->post('id_daya')]);
   }

    function getdayaawal($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }

    function getdayaawal2($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya2;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }

    function getdayaawal3($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya3;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }

    function getdayaawal4($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya4;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }

    function getdayaawal5($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya5;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }

     function getdayaawal6($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya6;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }

    function getdayaawal7($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya7;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }

     function getdayaawal8($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya8;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }

    function getdayaawal9($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya9;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }

    function getdayaawal10($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya10;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }

    function getdayaakhir($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya_saat_ini;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }

    function getdayaakhir2($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya_saat_ini2;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }

    function getdayaakhir3($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya_saat_ini3;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }

    function getdayaakhir4($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya_saat_ini4;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }

    function getdayaakhir5($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya_saat_ini5;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }

     function getdayaakhir6($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya_saat_ini6;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }

    function getdayaakhir7($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya_saat_ini7;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }

     function getdayaakhir8($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya_saat_ini8;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }

    function getdayaakhir9($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya_saat_ini9;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }

    function getdayaakhir10($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_daya = $row->daya_saat_ini10;
        }

         return $this->db->get_where('tb_daya', ['id_daya' => $id_daya])->row_array();
        
    }


}

?>
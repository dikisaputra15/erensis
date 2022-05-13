<?php

class Model_unit extends CI_Model
{
   
    public function getAllunit()
   {
          
      $query = "SELECT tb_unit.*, tb_unit_induk.id_unit_induk,tb_unit_induk.nama_unit_induk
                  FROM tb_unit JOIN tb_unit_induk
                  ON tb_unit.unit_induk=tb_unit_induk.id_unit_induk";
      return $this->db->query($query)->result_array();
   }

 	public function insert_unit($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_unit($id)
   {
      $this->db->delete('tb_unit', ['id_unit' => $id]);
   }

    public function getunitById($id)
   {
      return $this->db->get_where('tb_unit', ['id_unit' => $id])->row_array();
   }

    public function getbyid($id)
   {  
       $query = $this->db->get_where('tb_unit_layanan', array('id_unit_layanan' => $id));

           foreach ($query->result() as $row){
              $idunit_induk = $row->unit_induk;
           }

     $quer = "SELECT * from tb_unit where unit_induk='$idunit_induk'";
      return $this->db->query($quer)->result_array();
   }

    public function getbyiduser($id)
   {  
       $query = $this->db->get_where('tb_user', array('id_user' => $id));

           foreach ($query->result() as $row){
              $idunit_induk = $row->unit_induk;
           }

     $quer = "SELECT * from tb_unit where unit_induk='$idunit_induk'";
      return $this->db->query($quer)->result_array();
   }

   public function getbyidlaporan($id)
   {  
       $query = $this->db->get_where('tb_utama', array('id_utama' => $id));

           foreach ($query->result() as $row){
              $idunit_induk = $row->id_unit_induk;
           }

     $quer = "SELECT * from tb_unit where unit_induk='$idunit_induk'";
      return $this->db->query($quer)->result_array();
   }

	public function updateunit()
   {
      $nama_unit = $this->input->post('nama_unit');
      $unit_induk = $this->input->post('unit_induk');
      $bpp_unit = $this->input->post('bpp_unit');
      $bpp_mc_tmtr = $this->input->post('bpp_mc_tmtr');
      $bpp_mc_tt = $this->input->post('bpp_mc_tt');
      $bpp_ss_tmtr = $this->input->post('bpp_ss_tmtr');
      $bpp_ss_tt = $this->input->post('bpp_ss_tt');
      $biaya_om = $this->input->post('biaya_om');
      $roe = $this->input->post('roe');
      $interest_rate = $this->input->post('interest_rate');
      $rata_jual = $this->input->post('rata_jual');


      $data = [
         'unit_induk' => $unit_induk,
      	 'nama_unit' => $nama_unit,
         'bpp_unit' => $bpp_unit,
         'bpp_mc_tmtr' => $bpp_mc_tmtr,
         'bpp_mc_tt' => $bpp_mc_tt,
         'bpp_ss_tmtr' => $bpp_ss_tmtr,
         'bpp_ss_tt' => $bpp_ss_tt,
         'biaya_om' => $biaya_om,
         'roe' => $roe,
         'interest_rate' => $interest_rate,
         'rata_jual' => $rata_jual
      ];

      $this->db->update('tb_unit', $data, ['id_unit' => $this->input->post('id_unit')]);
   }

   public function unit()
   {
      $query = $this->db->get('tb_unit_induk');
      return $query; 
   }

    public function pelaksana($id)
   {
      $query = $this->db->get_where('tb_unit_layanan', array('unit' => $id));
        return $query;
   }

    public function getmultiunitbyid($id)
   {  
       $query = $this->db->get_where('tb_item', array('id_item' => $id));

           foreach ($query->result() as $row){
              $id_unit_induk = $row->id_unit_induk;
           }

     $quer = "SELECT * from tb_unit where unit_induk='$id_unit_induk'";
      return $this->db->query($quer)->result_array();
   }

}

?>
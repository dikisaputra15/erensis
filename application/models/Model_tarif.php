<?php

class Model_tarif extends CI_Model
{
   
    public function getAlltarif()
   {
          
      $query = "SELECT * from tb_tarif";
      return $this->db->query($query)->result_array();
   }

 	public function insert_tarif($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_tarif($id)
   {
      $this->db->delete('tb_tarif', ['id_tarif' => $id]);
   }

    public function gettarifById($id)
   {
      return $this->db->get_where('tb_tarif', ['id_tarif' => $id])->row_array();
   }

	public function updatetarif()
   {
      $nama_tarif = $this->input->post('nama_tarif');

      $data = [
      	'nama_tarif' => $nama_tarif
      ];

      $this->db->update('tb_tarif', $data, ['id_tarif' => $this->input->post('id_tarif')]);
   }

   public function tarif()
   {    
      $this->db->order_by("nama_tarif", "ASC");
      $query = $this->db->get("tb_tarif");
      return $query->result();  
   }

    public function fetch_daya($id)
   {    
       $query = $this->db->get_where('tb_daya', array('id_tarif' => $id));
       return $query;
   }

   function fetch_tarif(){
        $this->db->order_by("nama_tarif", "ASC");
        $query = $this->db->get("tb_tarif");
        return $query->result();  
    }

     function ajax_tarif($tarif_awal1){
        $this->db->where('id_tarif', $tarif_awal1);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

    function ajax_tarif2($tarif_akhir1){
        $this->db->where('id_tarif', $tarif_akhir1);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

    function ajax_tarif3($tarif_awal2){
        $this->db->where('id_tarif', $tarif_awal2);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

     function ajax_tarif4($tarif_akhir2){
        $this->db->where('id_tarif', $tarif_akhir2);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

     function ajax_tarif5($tarif_awal3){
        $this->db->where('id_tarif', $tarif_awal3);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

     function ajax_tarif6($tarif_akhir3){
        $this->db->where('id_tarif', $tarif_akhir3);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

    function ajax_tarif7($tarif_awal4){
        $this->db->where('id_tarif', $tarif_awal4);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

    function ajax_tarif8($tarif_akhir4){
        $this->db->where('id_tarif', $tarif_akhir4);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

     function ajax_tarif9($tarif_awal5){
        $this->db->where('id_tarif', $tarif_awal5);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

    function ajax_tarif10($tarif_akhir5){
        $this->db->where('id_tarif', $tarif_akhir5);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

    function ajax_tarif11($tarif_awal6){
        $this->db->where('id_tarif', $tarif_awal6);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

    function ajax_tarif12($tarif_akhir6){
        $this->db->where('id_tarif', $tarif_akhir6);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

    function ajax_tarif13($tarif_awal7){
        $this->db->where('id_tarif', $tarif_awal7);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

     function ajax_tarif14($tarif_akhir7){
        $this->db->where('id_tarif', $tarif_akhir7);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

     function ajax_tarif15($tarif_awal8){
        $this->db->where('id_tarif', $tarif_awal8);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

    function ajax_tarif16($tarif_akhir8){
        $this->db->where('id_tarif', $tarif_akhir8);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

     function ajax_tarif17($tarif_awal9){
        $this->db->where('id_tarif', $tarif_awal9);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

    function ajax_tarif18($tarif_akhir9){
        $this->db->where('id_tarif', $tarif_akhir9);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

    function ajax_tarif19($tarif_awal10){
        $this->db->where('id_tarif', $tarif_awal10);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

    function ajax_tarif20($tarif_akhir10){
        $this->db->where('id_tarif', $tarif_akhir10);
        // $this->db->order_by('nama_unit', 'ASC');
        $query = $this->db->get('tb_daya');
        $output = '<option value="0">Select Daya</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_daya.'">'.$row->daya.'</option>';
        }
        return $output;
    }

    function gettarifawal($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->id_tarif;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }

    function gettarifawal2($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->id_tarif2;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }

    function gettarifawal3($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->id_tarif3;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }

    function gettarifawal4($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->id_tarif4;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }

    function gettarifawal5($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->id_tarif5;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }

    function gettarifawal6($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->id_tarif6;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }

    function gettarifawal7($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->id_tarif7;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }

    function gettarifawal8($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->id_tarif8;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }

    function gettarifawal9($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->id_tarif9;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }

    function gettarifawal10($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->id_tarif10;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }

    function gettarifakhir($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->tarif_saat_ini;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }

    function gettarifakhir2($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->tarif_saat_ini2;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }

    function gettarifakhir3($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->tarif_saat_ini3;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }

    function gettarifakhir4($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->tarif_saat_ini4;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }

    function gettarifakhir5($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->tarif_saat_ini5;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }

    function gettarifakhir6($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->tarif_saat_ini6;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }

    function gettarifakhir7($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->tarif_saat_ini7;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }

    function gettarifakhir8($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->tarif_saat_ini8;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }

    function gettarifakhir9($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->tarif_saat_ini9;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }

    function gettarifakhir10($id){
        $this->db->where('id_utama', $id);
        $query = $this->db->get('tb_utama');
        foreach($query->result() as $row)
        {
          $id_tarif = $row->tarif_saat_ini10;
        }

         return $this->db->get_where('tb_tarif', ['id_tarif' => $id_tarif])->row_array();
        
    }


}

?>
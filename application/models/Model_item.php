<?php

class Model_item extends CI_Model
{
   
    public function getAllitem()
   {
          
      // $query = "SELECT tb_item.*, tb_jenis_pengadaan.*, tb_jenis.id_jenis,tb_jenis.jenis, tb_satuan.id_satuan,tb_satuan.nama_satuan, tb_kategori.id_kategori,tb_kategori.kategori, tb_jenis_pekerjaan.id_jp,tb_jenis_pekerjaan.nama, tb_subjenis_pekerjaan.id_subjenis_pekerjaan,tb_subjenis_pekerjaan.id_jp,tb_subjenis_pekerjaan.subjenis_pekerjaan, tb_unit_induk.id_unit_induk,tb_unit_induk.nama_unit_induk, tb_unit.id_unit,tb_unit.unit_induk,tb_unit.nama_unit, tb_sumberhs.id_sumber_hs,tb_sumberhs.uraian_sumber_hs
      //             FROM tb_item JOIN tb_jenis
      //             ON tb_item.jenis=tb_jenis.id_jenis join tb_satuan on tb_item.satuan=tb_satuan.id_satuan join tb_kategori on tb_item.kategori=tb_kategori.id_kategori join tb_jenis_pekerjaan on tb_item.jenis_pekerjaan=tb_jenis_pekerjaan.id_jp join tb_subjenis_pekerjaan on tb_item.subjenis_pekerjaan=tb_subjenis_pekerjaan.id_subjenis_pekerjaan join tb_unit_induk on tb_item.id_unit_induk=tb_unit_induk.id_unit_induk join tb_unit on tb_item.id_unit=tb_unit.id_unit join tb_sumberhs on tb_item.sumber_hs=tb_sumberhs.id_sumber_hs join tb_jenis_pengadaan on tb_item.jenis_pengadaan=tb_jenis_pengadaan.id_jenis_pengadaan";
      // return $this->db->query($query)->result_array();

       $hasil=$this->db->query("SELECT tb_item.*, tb_jenis_pengadaan.*, tb_jenis.id_jenis,tb_jenis.jenis, tb_satuan.id_satuan,tb_satuan.nama_satuan, tb_kategori.id_kategori,tb_kategori.kategori, tb_jenis_pekerjaan.id_jp,tb_jenis_pekerjaan.nama, tb_subjenis_pekerjaan.id_subjenis_pekerjaan,tb_subjenis_pekerjaan.id_jp,tb_subjenis_pekerjaan.subjenis_pekerjaan, tb_unit_induk.id_unit_induk,tb_unit_induk.nama_unit_induk, tb_unit.id_unit,tb_unit.unit_induk,tb_unit.nama_unit, tb_sumberhs.id_sumber_hs,tb_sumberhs.uraian_sumber_hs
                  FROM tb_item JOIN tb_jenis
                  ON tb_item.jenis=tb_jenis.id_jenis join tb_satuan on tb_item.satuan=tb_satuan.id_satuan join tb_kategori on tb_item.kategori=tb_kategori.id_kategori join tb_jenis_pekerjaan on tb_item.jenis_pekerjaan=tb_jenis_pekerjaan.id_jp join tb_subjenis_pekerjaan on tb_item.subjenis_pekerjaan=tb_subjenis_pekerjaan.id_subjenis_pekerjaan join tb_unit_induk on tb_item.id_unit_induk=tb_unit_induk.id_unit_induk join tb_unit on tb_item.id_unit=tb_unit.id_unit join tb_sumberhs on tb_item.sumber_hs=tb_sumberhs.id_sumber_hs join tb_jenis_pengadaan on tb_item.jenis_pengadaan=tb_jenis_pengadaan.id_jenis_pengadaan");
        return $hasil->result();
   }

   public function getAlllistitem($id)
   {
          
      $query = "SELECT tb_item_template.*, tb_list_template.*, tb_satuan.*, tb_item.*, tb_jenis.*, tb_kategori.*, tb_jenis_pekerjaan.*, tb_subjenis_pekerjaan.*, tb_jenis_pengadaan.*, tb_unit_induk.*, tb_unit.*, tb_sumberhs.* 
                  FROM tb_item_template JOIN tb_list_template
                  ON tb_item_template.id_list=tb_list_template.id_list join tb_satuan on tb_item_template.satuan_template=tb_satuan.id_satuan join tb_item on tb_item_template.id_item=tb_item.id_item join tb_jenis on tb_item_template.jenis_item=tb_jenis.id_jenis join tb_kategori on tb_item_template.kategori_item=tb_kategori.id_kategori join tb_jenis_pekerjaan on tb_item_template.jenis_pekerjaan_item=tb_jenis_pekerjaan.id_jp join tb_subjenis_pekerjaan on tb_item_template.subjenis_pekerjaan_item=tb_subjenis_pekerjaan.id_subjenis_pekerjaan join tb_jenis_pengadaan on tb_item_template.jenis_pengadaan=tb_jenis_pengadaan.id_jenis_pengadaan join tb_unit_induk on tb_item_template.id_unit_induk=tb_unit_induk.id_unit_induk join tb_unit on tb_item_template.id_unit=tb_unit.id_unit join tb_sumberhs on tb_item_template.sumber_hs=tb_sumberhs.id_sumber_hs where tb_item_template.id_list='$id'";
      return $this->db->query($query)->result_array();
   }

 	public function insert_item($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function insert_item_template($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_item($id)
   {
      $this->db->delete('tb_item', ['id_item' => $id]);
   }

    public function getgarduById($id)
   {
      return $this->db->get_where('tb_gardu', ['id_gardu' => $id])->row_array();
   }

   public function getitemById($id)
   {
      return $this->db->get_where('tb_item', ['id_item' => $id])->row_array();
   }

	public function updateitem()
   {
      $uraian_item = $this->input->post('uraian_item');
      $jenis = $this->input->post('jenis');
      $satuan = $this->input->post('satuan');
      $harga_satuan = $this->input->post('harga_satuan');
      $kategori = $this->input->post('kategori');
      $jenis_pekerjaan = $this->input->post('jenis_pekerjaan');
      $subjenis = $this->input->post('subjenis');
      $jenis_pengadaan = $this->input->post('jenis_pengadaan');
      $unit_induk = $this->input->post('unit_induk');
      $unit = $this->input->post('unit');
      $sumber_hs = $this->input->post('sumber_hs');

      $data = [
      	'uraian_item' => $uraian_item,
        'jenis' => $jenis,
        'satuan' => $satuan,
        'harga_satuan' => $harga_satuan,
        'kategori' => $kategori,
        'jenis_pekerjaan' => $jenis_pekerjaan,
        'subjenis_pekerjaan' => $subjenis,
        'jenis_pengadaan' => $jenis_pengadaan,
        'id_unit_induk' => $unit_induk,
        'id_unit' => $unit,
      	'sumber_hs' => $sumber_hs
      ];

      $this->db->update('tb_item', $data, ['id_item' => $this->input->post('id_item')]);
   }


   function jenis_pekerjaan(){
        $this->db->order_by("nama", "ASC");
        $query = $this->db->get("tb_jenis_pekerjaan");
        return $query->result();  
    }

    function fetch_subjenis($jenis_pekerjaan)
   {
      $this->db->where('id_jp', $jenis_pekerjaan);
      $this->db->order_by('subjenis_pekerjaan', 'ASC');
      $query = $this->db->get('tb_subjenis_pekerjaan');
      $output = '<option value="">Select subjenis pekerjaan</option>';
      foreach($query->result() as $row)
      {
       $output .= '<option value="'.$row->id_subjenis_pekerjaan.'">'.$row->subjenis_pekerjaan.'</option>';
      }
      return $output;
   }

    function fetch_kategori()
   {
      $this->db->order_by("kategori", "ASC");
      $query = $this->db->get("tb_kategori");
      return $query->result(); 
   }

   function fetch_jp($id_kategori)
   {    
      $this->db->where('id_kategori', $id_kategori);
      $this->db->order_by('nama', 'ASC');
      $query = $this->db->get('tb_jenis_pekerjaan');
      $output = '<option value="">Select Jenis Pekerjaan</option>';
      foreach($query->result() as $row)
      {
       $output .= '<option value="'.$row->id_jp.'">'.$row->nama.'</option>';
      }
      return $output;
    } 

    function fetch_subjenis2($id_jp)
   {    
      $this->db->where('id_jp', $id_jp);
      $this->db->order_by('subjenis_pekerjaan', 'ASC');
      $query = $this->db->get('tb_subjenis_pekerjaan');
      $output = '<option value="">Select Subjenis Pekerjaan</option>';
      foreach($query->result() as $row)
      {
       $output .= '<option value="'.$row->id_subjenis_pekerjaan.'">'.$row->subjenis_pekerjaan.'</option>';
      }
      return $output;
    } 

    function fetch_item($id_sub)
   {    
      $this->db->where('subjenis_pekerjaan', $id_sub);
      $this->db->order_by('uraian_item', 'ASC');
      $query = $this->db->get('tb_item');
      $output = '<option value="">Select Item</option>';
      foreach($query->result() as $row)
      {
       $output .= '<option value="'.$row->id_item.'">'.$row->uraian_item.'</option>';
      }
      return $output;
    } 

    function fetch_satuan($id_sat)
   {    

      $this->db->where('id_item', $id_sat);
      $this->db->order_by('satuan', 'ASC');
      $query = $this->db->get('tb_item');

      foreach($query->result() as $row)
      {
       // $output .= '<option value="'.$row->satuan.'">'.$row->satuan.'</option>';
        $id = $row->satuan;
        $this->db->where('id_satuan', $id);
        $this->db->order_by('nama_satuan', 'ASC');
        $quer = $this->db->get('tb_satuan');
         // return $this->db->query($quer)->result_array();
          foreach($quer->result() as $dat)
          {
              $output .= '<option value="'.$dat->id_satuan.'">'.$dat->nama_satuan.'</option>';
          }
      }

      return $output;
    }

     function fetch_hs($id_hs)
   {    

      $this->db->where('id_item', $id_hs);
      $this->db->order_by('satuan', 'ASC');
      $query = $this->db->get('tb_item');

      foreach($query->result() as $row)
      {
       $output .= '<option value="'.$row->harga_satuan.'">'.$row->harga_satuan.'</option>';
      }

      return $output;
    }  

    function fetch_item_pengali() 
   {    
      
      $id = $this->uri->segment(4);
     
      $queri = "SELECT tb_item_template.*, tb_item.* FROM tb_item_template JOIN tb_item
                  ON tb_item_template.id_item=tb_item.id_item where tb_item_template.id_list='$id'";
      return $this->db->query($queri)->result_array();

    }

 function fetch_item_pengalitmp($id_item_template) 
   {    
      
      $this->db->where('id_item_template', $id_item_template);
      $query = $this->db->get('tb_item_template');

        foreach($query->result() as $row)
        {
          $id = $row->id_list;
        }

        $queri = "SELECT tb_item_template.*, tb_item.* FROM tb_item_template JOIN tb_item
                  ON tb_item_template.id_item=tb_item.id_item where tb_item_template.id_list='$id' and tb_item_template.id_item_template < '$id_item_template'";
      return $this->db->query($queri)->result_array();
     

    }

    function fetch_jenisitem($jenis_item)
   {    

      $this->db->where('id_item', $jenis_item);
      $query = $this->db->get('tb_item');

      foreach($query->result() as $row)
      {
       // $output .= '<option value="'.$row->satuan.'">'.$row->satuan.'</option>';
        $id = $row->jenis;
        $this->db->where('id_jenis', $id);
        $this->db->order_by('jenis', 'ASC');
        $quer = $this->db->get('tb_jenis');
         // return $this->db->query($quer)->result_array();
          foreach($quer->result() as $dat)
          {
              $output .= '<option value="'.$dat->id_jenis.'">'.$dat->jenis.'</option>';
          }
      }

      return $output;
    }    

     function fetch_jenispengadaan($jenis_pengadaan)
   {    

      $this->db->where('id_item', $jenis_pengadaan);
      $query = $this->db->get('tb_item');

      foreach($query->result() as $row)
      {
       // $output .= '<option value="'.$row->satuan.'">'.$row->satuan.'</option>';
        $id = $row->jenis_pengadaan;
        $this->db->where('id_jenis_pengadaan', $id);
        $this->db->order_by('jenis_pengadaan', 'ASC');
        $quer = $this->db->get('tb_jenis_pengadaan');
         // return $this->db->query($quer)->result_array();
          foreach($quer->result() as $dat)
          {
              $output .= '<option value="'.$dat->id_jenis_pengadaan.'">'.$dat->jenis_pengadaan.'</option>';
          }
      }

      return $output;
    }    

    function fetch_unitinduk($unit_induk)
   {    

      $this->db->where('id_item', $unit_induk);
      $query = $this->db->get('tb_item');

      foreach($query->result() as $row)
      {
       // $output .= '<option value="'.$row->satuan.'">'.$row->satuan.'</option>';
        $id = $row->id_unit_induk;
        $this->db->where('id_unit_induk', $id);
        $this->db->order_by('nama_unit_induk', 'ASC');
        $quer = $this->db->get('tb_unit_induk');
         // return $this->db->query($quer)->result_array();
          foreach($quer->result() as $dat)
          {
              $output .= '<option value="'.$dat->id_unit_induk.'">'.$dat->nama_unit_induk.'</option>';
          }
      }

      return $output;
    }    

    function fetch_unit($unit)
   {    

      $this->db->where('id_item', $unit);
      $query = $this->db->get('tb_item');

      foreach($query->result() as $row)
      {
       // $output .= '<option value="'.$row->satuan.'">'.$row->satuan.'</option>';
        $id = $row->id_unit;
        $this->db->where('id_unit', $id);
        $this->db->order_by('nama_unit', 'ASC');
        $quer = $this->db->get('tb_unit');
         // return $this->db->query($quer)->result_array();
          foreach($quer->result() as $dat)
          {
              $output .= '<option value="'.$dat->id_unit.'">'.$dat->nama_unit.'</option>';
          }
      }

      return $output;
    }    

    function fetch_sumberhs($sumber_hs)
   {    

      $this->db->where('id_item', $sumber_hs);
      $query = $this->db->get('tb_item');

      foreach($query->result() as $row)
      {
       // $output .= '<option value="'.$row->satuan.'">'.$row->satuan.'</option>';
        $id = $row->sumber_hs;
        $this->db->where('id_sumber_hs', $id);
        $this->db->order_by('uraian_sumber_hs', 'ASC');
        $quer = $this->db->get('tb_sumberhs');
         // return $this->db->query($quer)->result_array();
          foreach($quer->result() as $dat)
          {
              $output .= '<option value="'.$dat->id_sumber_hs.'">'.$dat->uraian_sumber_hs.'</option>';
          }
      }

      return $output;
    }

    function fetch_template($id_kategori2)
   {    

      $this->db->where('id_kategori', $id_kategori2);
      $query = $this->db->get('tb_list_template');
      $output = '<option value="">Pilih Template</option>';
          foreach($query->result() as $dat)
          {
              $output .= '<option value="'.$dat->id_list.'">'.$dat->uraian_template.'</option>';
          }

      return $output;
    }

    function fetch_satuan2($id_satuan2)
   {    

      $this->db->where('id_list', $id_satuan2);
      $query = $this->db->get('tb_list_template');
      foreach($query->result() as $row)
      {
       // $output .= '<option value="'.$row->satuan.'">'.$row->satuan.'</option>';
        $id_sat = $row->id_satuan;
        $this->db->where('id_satuan', $id_sat);
        $this->db->order_by('nama_satuan', 'ASC');
        $quer = $this->db->get('tb_satuan');
         // return $this->db->query($quer)->result_array();
          foreach($quer->result() as $dat)
          {
              $output .= '<option value="'.$dat->id_satuan.'">'.$dat->nama_satuan.'</option>';
          }
       }

      return $output;
    }

    public function getlisttemplatebyid($id)
   {
      return $this->db->get_where('tb_item_template', ['id_item_template' => $id])->row_array();
   }    

}

?>
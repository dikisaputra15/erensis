<?php

class Model_menu extends CI_Model
{
   
    public function getAllmenu1()
   {
          
      $query = "SELECT * from tb_menu";
      return $this->db->query($query)->result_array();
   }

   public function getAllmenu()
   {
          
      // $this->db->like('tittle', $search); // Untuk menambahkan query where LIKE
      // $this->db->or_like('url', $search); // Untuk menambahkan query where OR LIKE
      // $this->db->or_like('icon', $search); // Untuk menambahkan query where OR LIKE
      // $this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
      // $this->db->limit($limit, $start); // Untuk menambahkan query LIMIT

      // return $this->db->get('tb_menu')->result_array(); // Eksekusi query sql sesuai kondisi diatas
         $hasil=$this->db->query("SELECT * FROM tb_menu");
        return $hasil->result();
   }

   public function count_all(){
      return $this->db->count_all('tb_menu'); // Untuk menghitung semua data siswa
   }

   public function count_filter($search){
      $this->db->like('tittle', $search); // Untuk menambahkan query where LIKE
      $this->db->or_like('url', $search); // Untuk menambahkan query where OR LIKE
      $this->db->or_like('icon', $search); // Untuk menambahkan query where OR LIKE

      return $this->db->get('tb_menu')->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
   }

 	public function insert_menu($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_menu($id)
   {
      $this->db->delete('tb_menu', ['id_menu' => $id]);
   }

    public function getmenuById($id)
   {
      return $this->db->get_where('tb_menu', ['id_menu' => $id])->row_array();
   }

	public function updatemenu()
   {
      $tittle = $this->input->post('tittle');
      $url = $this->input->post('url');
      $icon = $this->input->post('icon');

      $data = [
      	'tittle' => $tittle,
      	'url' => $url,
      	'icon' => $icon
      ];

      $this->db->update('tb_menu', $data, ['id_menu' => $this->input->post('id_menu')]);
   }

}

?>
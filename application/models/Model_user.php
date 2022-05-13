<?php

class Model_user extends CI_Model
{
   
    public function getAllakses()
   {
          
      // $query = "SELECT tb_akses.*, tb_role.id_role,tb_role.role, tb_menu.id_menu,tb_menu.tittle
      //             FROM tb_akses JOIN tb_role
      //             ON tb_akses.id_role=tb_role.id_role join tb_menu on tb_akses.id_menu=tb_menu.id_menu
      //           ";
      // return $this->db->query($query)->result_array();

       $hasil=$this->db->query("SELECT tb_akses.*, tb_role.id_role,tb_role.role, tb_menu.id_menu,tb_menu.tittle
                  FROM tb_akses JOIN tb_role
                  ON tb_akses.id_role=tb_role.id_role join tb_menu on tb_akses.id_menu=tb_menu.id_menu");
        return $hasil->result();
   }

 	public function saveakses($id_role,$checkbox)
   {
      $query="insert into tb_akses values('',$id_role,$checkbox)";
		$this->db->query($query);
      
   }

   public function delete_akses($id)
   {
      $this->db->delete('tb_akses', ['id_akses' => $id]);
   }

  public function getAlluser()
   {
          
      $query = "SELECT tb_user.*, tb_role.id_role,tb_role.role, tb_unit.id_unit,tb_unit.nama_unit, tb_unit_induk.id_unit_induk,tb_unit_induk.nama_unit_induk, tb_unit_layanan.id_unit_layanan,tb_unit_layanan.nama_unit_layanan
                  FROM tb_user JOIN tb_role
                  ON tb_user.role=tb_role.id_role join tb_unit_induk on tb_user.unit_induk=tb_unit_induk.id_unit_induk join tb_unit on tb_user.unit=tb_unit.id_unit join tb_unit_layanan on tb_user.unit_layanan=tb_unit_layanan.id_unit_layanan";
      return $this->db->query($query)->result_array();
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

   public function insert_user($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function getuserById($id)
   {
      return $this->db->get_where('tb_user', ['id_user' => $id])->row_array();
   }

   public function updateuser()
   {
      $nama = $this->input->post('nama');
      $nip = $this->input->post('nip');
      $password = $this->input->post('password');
      $id_role = $this->input->post('id_role');
      $unit_induk = $this->input->post('unit_induk');
      $unit = $this->input->post('unit');
      $unit_layanan = $this->input->post('unit_layanan');

      $data = [
      	'nama' => $nama,
      	'nip' => $nip,
      	'password' => $password,
      	'role' => $id_role,
        'unit_induk' => $unit_induk,
        'unit' => $unit,
      	'unit_layanan' => $unit_layanan
      ];

      $this->db->update('tb_user', $data, ['id_user' => $this->input->post('id_user')]);
   }

    public function delete_user($id)
   {
      $this->db->delete('tb_user', ['id_user' => $id]);
   }

    public function getaksesById($id_role)
   {
          
      return $this->db->get_where('tb_akses', ['id_role' => $id_role])->row_array();

   }

   public function getedituser($id)
   {
          
      $query = $this->db->get_where('tb_utama', array('id_utama' => $id));

           foreach ($query->result() as $row){
              $id_pic_user = $row->id_user_pic;
           }

     $quer = "SELECT * from tb_user where id_user='$id_pic_user'";
      return $this->db->query($quer)->result_array();

   }


}

?>
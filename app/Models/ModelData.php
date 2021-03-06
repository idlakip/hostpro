<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelData extends Model
{
  // protected $table = 'users';


  public function get_all_data()
  {
    return $this->db->table('users')->get()->getResultArray();
  }

  public function insert_data($data)
  {
    return $this->db->table('users')->insert($data);
  }

  public function detail($id)
  {
    return $this->db->table('users')->where('id', $id)->get()->getRowArray();
  }

  public function update_chart($data, $id)
  {
    return $this->db->table('users')->update($data, array('id' => $id));
  }

  public function delete_chart($id)
  {
    return $this->db->table('users')->delete(array('id' => $id));
  }
}

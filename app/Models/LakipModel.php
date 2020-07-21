<?php

namespace App\Models;

use CodeIgniter\Model;

class LakipModel extends Model
{
  protected $table = 'users';
  protected $useTimestamps = true;

  public function getLakip($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }


  public function get_all_data()
  {
    return $this->db->table('users')->get()->getResultArray();
  }


  public function insert_data($data)
  {
    return $this->db->table('users')->insert($data);
  }

  public function detail_users($id_users)
  {
    return $this->db->table('users')->where('id_users', $id_users)->get()->getRowArray();
  }

  public function update_users($data, $id)
  {
    return $this->db->table('users')->update($data, array('id' => $id));
  }

  public function delete_users($id)
  {
    return $this->db->table('users')->delete(array('id' => $id));
  }
}

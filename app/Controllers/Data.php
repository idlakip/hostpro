<?php

namespace App\Controllers;

use App\Models\ModelData;

use CodeIgniter\Model;

class Data extends BaseController
{
  protected $ModelData;
  public function __construct()
  {
    // helper('form');
    $this->ModelData = new ModelData();
  }

  public function index()
  {
    $data = [
      'title' => 'Datatable',
      'name' => 'Masrianto',
      'users' => $this->ModelData->getDatausers()
    ];
    return view('data/index', $data);
  }

  public function detail($slug)
  {
    $data = [
      'title' => 'Detail Data',
      'users' => $this->ModelData->getDatausers($slug)
    ];

    // Jika data tidak ada ditabel
    if (empty($data['users'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Data yang anda cari adalah :  '  . $slug .  ' dan tidak ada dalam database kami.');
    }
    return view('data/detail', $data);
  }
}

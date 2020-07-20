<?php

namespace App\Controllers;

use App\Models\ModelTabel;

class Datatable extends BaseController
{
  public function __construct()
  {
    // helper('form');
    $this->ModelTabel = new ModelTabel();
  }

  public function index()
  {
    $data = [
      'title' => 'Datatable',
      'name' => 'Masrianto'
    ];
    return view('data/table', $data);
  }
}

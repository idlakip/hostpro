<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LakipModel;

class Lakip extends BaseController
{
  // protected $LakipModel;
  public function __construct()
  {
    helper('form');
    $this->LakipModel = new LakipModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Datatable',
      'users' => $this->LakipModel->get_all_data(),

    ];
    return view('lakip/r_tabel', $data);
  }

  public function personal()
  {
    $data = [
      'title' => 'Contatc',
      'users' => $this->LakipModel->get_all_data(),

    ];
    return view('lakip/r_contact', $data);
  }

  public function invoice()
  {
    $data = [
      'title' => 'Contatc',
      'users' => $this->LakipModel->get_all_data(),

    ];
    return view('lakip/r_invoice', $data);
  }

  public function print()
  {
    $data = [
      'title' => 'Contatc',
      'users' => $this->LakipModel->get_all_data(),

    ];
    return view('lakip/invoice_print', $data);
  }

  public function pdf()
  {
    $data = [
      'title' => 'Contatc',
      'users' => $this->LakipModel->get_all_data(),
    ];
    return view('lakip/invoice_pdf', $data);
  }
}

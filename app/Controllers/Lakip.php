<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LakipModel;
use CodeIgniter\Validation\Rules;

class Lakip extends BaseController
{
  protected $LakipModel;
  public function __construct()
  {
    helper('form');
    $this->LakipModel = new LakipModel();
  }

  public function index()
  {
    $data = [
      'title' => 'User',
      // 'users' => $this->LakipModel->get_all_data(),
      'users' => $this->LakipModel->getLakip()


    ];
    return view('lakip/index', $data);
  }

  public function tambah()
  {
    $data = [
      'title' => 'User',
      // 'users' => $this->LakipModel->insert_data(),

    ];
    return view('lakip/tambah', $data);
  }


  public function edit($id_users)
  {
    $data = [
      'title' => 'Edit Users',
      'users' => $this->LakipModel->detail_users($id_users),

    ];
    return view('lakip/edit', $data);
  }

  public function personal()
  {
    $data = [
      'title' => 'Contatc',
      'users' => $this->LakipModel->getLakip()
    ];
    return view('lakip/r_contact', $data);
  }

  public function invoice($id_users)
  {
    $data = [
      'title' => 'INVOICE',
      // 'users' => $this->LakipModel->get_all_data(),
      'users' => $this->LakipModel->detail_users($id_users),
      // 'users' => $this->LakipModel->getLakip($id_users),


    ];
    return view('lakip/invoice', $data);
  }

  public function print($id_users)
  {
    $data = [
      'title' => 'PRINT',
      // 'users' => $this->LakipModel->get_all_data(),
      'users' => $this->LakipModel->detail_users($id_users),
      // 'users' => $this->LakipModel->getLakip(),

    ];
    return view('lakip/invoice_print', $data);
  }

  public function pdf()
  {
    $data = [
      'title' => 'PDF',
      // 'users' => $this->LakipModel->get_all_data(),
      'users' => $this->LakipModel->getLakip(),

    ];
    return view('lakip/invoice_pdf', $data);
  }
}

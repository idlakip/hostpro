<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LakipModel;
use CodeIgniter\Validation\Rules;

// use Endroid\QrCode\ErrorCorrectionLevel;
// use Endroid\QrCode\LabelAlignment;
// use Endroid\QrCode\QrCode;
// use Endroid\QrCode\Response\QrCodeResponse;

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

  public function qrcode($id_users)
  {
    $data = [
      'title' => 'QR Code Users',
      'users' => $this->LakipModel->detail_users($id_users),
      // 'users' => $this->LakipModel->getLakip($id_users)

    ];
    return view('lakip/qr_code', $data);
  }

  public function personal()
  {
    $data = [
      'title' => 'Contact',
      // 'users' => $this->LakipModel->detail_users($id_users),
      'users' => $this->LakipModel->get_all_data(),
      // 'users' => $this->LakipModel->getLakip()
    ];
    return view('lakip/r_contact', $data);
  }

  public function profile($id_users)
  {
    $data = [
      'title' => 'Contact',
      'users' => $this->LakipModel->detail_users($id_users),
      // 'users' => $this->LakipModel->get_all_data(),
      // 'users' => $this->LakipModel->getLakip()
    ];
    return view('lakip/r_profile', $data);
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

<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelKantor;

class Kantor extends BaseController
{

  public function __construct()
  {
    helper('form');
    $this->ModelKantor = new ModelKantor();
  }

  public function index()
  {
    $data = [
      'title' => 'Kantor',
      'kantor' => $this->ModelKantor->get_all_data(),
      //'isi' => 's_home', // s_ = template & v_ = v_template
    ];
    return view('kantor/s_home', $data);
  }

  //--------------------------------------------------------------------
  public function add()
  {
    $data = [
      'title' => 'Add Kantor'
      //'isi' => 's_home', // s_ = template & v_ = v_template
    ];
    return view('kantor/s_add_kantor', $data);
  }
  //--------------------------------------------------------------------

  public function save()
  {
    $valid = $this->validate([
      'nama_kantor' => [
        'label' => 'Nama Kantor',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'no_telp' => [
        'label' => 'Telephone',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'alamat' => [
        'label' => 'Alamat Kantor',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'pimpinan' => [
        'label' => 'Pimpinan Kantor',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'latitude' => [
        'label' => 'Latitude Lokasi',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} belum ditandai di peta'
        ]
      ],
      'longitude' => [
        'label' => 'Longitude Lokasi',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} belum ditandai di peta'
        ]
      ],
      'description' => [
        'label' => 'Description Kantor',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'photo' => [
        'label' => 'Foto Kantor',
        'rules' => 'mime_in[photo,image/jpg,image/jpeg,image/png,image/gif]|max_size[photo,1500]',
        'errors' => [
          // 'uploaded' => '{field} wajib diisi',
          'mime_in' => '{field} yang dimasukkan bukan format yang diizinkan',
          'max_size' => '{field} yang dimasukkan max: 1024kb'

        ]
      ],
    ]);

    if (!$valid) {
      session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
      return redirect()->to(base_url('kantor/add'));
    } else {
      $filePhoto = $this->request->getFile('photo');
      if ($filePhoto->getError() == 4) {
        $namaPhoto = 'default.jpg';
      } else {
        $namaPhoto = $filePhoto->getRandomName();
        $filePhoto->move('foto', $namaPhoto);
      }
      // $name = $filePhoto->getRandomName();
      $data = [
        'nama_kantor' => $this->request->getPost('nama_kantor'),
        'no_telp' => $this->request->getPost('no_telp'),
        'alamat' => $this->request->getPost('alamat'),
        'pimpinan' => $this->request->getPost('pimpinan'),
        'latitude' => $this->request->getPost('latitude'),
        'longitude' => $this->request->getPost('longitude'),
        'description' => $this->request->getPost('description'),
        'photo' => $namaPhoto
      ];
      // $filePhoto->move(ROOTPATH . 'public/foto', $name);
      $this->ModelKantor->insert_data($data);
      session()->setFlashdata('success', 'Data berhasil ditambahkan');
      return redirect()->to(base_url('kantor'));
    }
  }
  //--------------------------------------------------------------------

  public function edit($id_kantor)
  {
    $data = [
      'title' => 'Edit Kantor',
      'kantor' => $this->ModelKantor->detail($id_kantor)
      //'isi' => 's_home', // s_ = template & v_ = v_template
    ];
    return view('kantor/s_edit_kantor', $data);
  }
  //--------------------------------------------------------------------

  public function update($id_kantor)
  {
    $valid = $this->validate([
      'nama_kantor' => [
        'label' => 'Nama Kantor',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'no_telp' => [
        'label' => 'Telephone',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'alamat' => [
        'label' => 'Alamat Kantor',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'pimpinan' => [
        'label' => 'Pimpinan Kantor',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'latitude' => [
        'label' => 'Latitude Lokasi',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} belum ditandai di peta'
        ]
      ],
      'longitude' => [
        'label' => 'Longitude Lokasi',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} belum ditandai di peta'
        ]
      ],
      'description' => [
        'label' => 'Description Kantor',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} wajib diisi'
        ]
      ],
      'photo' => [
        'label' => 'Foto Kantor',
        'rules' => 'mime_in[photo,image/jpg,image/jpeg,image/png,image/gif]|max_size[photo,1500]',
        'errors' => [
          'required' => '{field} wajib diisi',
          'mime_in' => '{field} yang dimasukkan bukan format yang diizinkan',
          'max_size' => '{field} yang dimasukkan max: 1024kb'
        ]
      ],
    ]);

    if (!$valid) {
      session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
      return redirect()->to(base_url('kantor/edit/' . $id_kantor));
    } else {
      $filePhoto = $this->request->getFile('photo');
      // darisini
      if ($filePhoto->getError() == 4) {
        $namaPhoto = $this->request->getVar('photoLama');
        // $namaPhoto = 'default.jpg';
      } else {
        $namaPhoto = $filePhoto->getRandomName();
        $filePhoto->move('foto', $namaPhoto);
        // unlink('foto/' . $this->request->getVar('photoLama'));
      } // sampai disini
      // $name = $image->getRandomName();
      $data = [
        'id_kantor' => $id_kantor,
        'nama_kantor' => $this->request->getPost('nama_kantor'),
        'no_telp' => $this->request->getPost('no_telp'),
        'alamat' => $this->request->getPost('alamat'),
        'pimpinan' => $this->request->getPost('pimpinan'),
        'latitude' => $this->request->getPost('latitude'),
        'longitude' => $this->request->getPost('longitude'),
        'description' => $this->request->getPost('description'),
        'photo' => $namaPhoto // $name
      ];
      // $filePhoto->move(ROOTPATH . 'public/foto', $namaPhoto);
      $this->ModelKantor->update_kantor($data, $id_kantor);
      session()->setFlashdata('success', 'Data berhasil diupdate');
      return redirect()->to(base_url('kantor'));
    }
  }
  //--------------------------------------------------------------------

  public function delete($id_kantor)
  {
    $this->ModelKantor->delete_kantor($id_kantor);
    session()->setFlashdata('success', 'Data berhasil dihapus');
    return redirect()->to(base_url('kantor'));
  }
}

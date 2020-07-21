<?= $this->extend('layout/data_table'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">

  <div class="card">
    <div class="card-header">
      <h3 class="card-title"><a href="<?= base_url('lakip/tambah'); ?>" class="btn btn-sm btn-primary">Add <?= $title; ?></a></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <?php

      if (!empty(session()->getFlashdata('success'))) { ?>
        <div class="alert alert-success">
          <?php echo session()->getFlashdata('success'); ?>
        </div>
      <?php }; ?>
      <?= csrf_field(); ?>
      <table id="table1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>Invoice</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>

          <?php $no = 1;
          foreach ($users as $key => $value) { ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $value['nama']; ?></td>
              <td>
                <?= $value['username']; ?>
              </td>
              <td><?= $value['email']; ?></td>
              <td><a href="<?= base_url('lakip/invoice/' . $value['id_users']); ?>" class="btn btn-sm btn-success"><i class="fas fa-file"></i>Invoice</a></td>
              <td><?= $value['alamat']; ?></td>
              <td>
                <a href="<?= base_url('lakip/edit/' . $value['id_users']); ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>Edit</a> <a href="<?= base_url('lakip/delete/' . $value['id_users']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah yakin ingin hapus???')"><i class="fas fa-trash-alt"></i>Hapus</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>Invoice</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>


  <?= $this->endSection(); ?>
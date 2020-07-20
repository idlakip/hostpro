<?= $this->extend('layout/data_table'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">

  <div class="card">
    <div class="card-header">
      <h3 class="card-title"><?= $title; ?></h3>
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
            <th>username</th>
            <th>email</th>
            <th>password</th>
            <th>alamat</th>
            <th>level</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($users as $u) : ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $u['nama']; ?></td>
              <td><?= $u['username']; ?></td>
              <td><?= $u['email']; ?></td>
              <td><?= $u['password']; ?></td>
              <td><?= $u['alamat']; ?></td>
              <td><?= $u['level']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>username</th>
            <th>email</th>
            <th>password</th>
            <th>alamat</th>
            <th>level</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>


  <?= $this->endSection(); ?>
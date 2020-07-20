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
          <?php $no = 1;
          foreach ($users as $key => $value) { ?>

            <tr>
              <td><?= $no++; ?></td>
              <td><?= $value['nama']; ?></td>
              <td><?= $value['username']; ?></td>
              <td><?= $value['email']; ?></td>
              <td><?= $value['password']; ?></td>
              <td><?= $value['password']; ?></td>
              <td><?= $value['alamat']; ?></td>
              <td><?= $value['level']; ?></td>
            </tr>
          <?php } ?>
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
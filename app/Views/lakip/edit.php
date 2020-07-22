<?php
$qrCode = new Endroid\QrCode\QrCode($users['id_users']);
$qrCode->writeFile(ROOTPATH . 'public/qrcode/inv-' . $users['id_users'] . '.png'); ?>
<?= $this->extend('layout/data_table'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-sm-6">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Lokasi </h3>
        </div>
        <div class="card-body">
          <?php

          if (!empty(session()->getFlashdata('success'))) { ?>
            <div class="alert alert-success">
              <?php echo session()->getFlashdata('success'); ?>
            </div>
          <?php }; ?>
          <?php echo form_open_multipart('lakip/update/' . $users['id_users']); ?>
          <?= csrf_field(); ?>
          <div class="form-group">
            <label for="nama">Nama </label>
            <input type="text" class="form-control form-control-sm" id="nama" name="nama" value="<?= $users['nama']; ?>">
          </div>
          <div class="form-group">
            <label for="username">Username </label>
            <input type="text" class="form-control form-control-sm" id="username" name="username" value="<?= $users['username']; ?>">
          </div>
          <div class="form-group">
            <label for="email">Email </label>
            <input type="text" class="form-control form-control-sm" id="email" name="email" value="<?= $users['email']; ?>">
          </div>
          <div class="form-group">
            <label for="password">Password </label>
            <input type="text" class="form-control form-control-sm" id="password" name="password" value="<?= $users['password']; ?>">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat </label>
            <input type="text" class="form-control form-control-sm" id="alamat" name="alamat" value="<?= $users['alamat']; ?>">
          </div>
          <div class="form-group">
            <label for="level">Level </label>
            <input type="text" class="form-control form-control-sm" id="level" name="level" value="<?= $users['level']; ?>">
          </div>


          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>

        <?php echo form_close(); ?>

      </div>
    </div>

    <div class="col-sm-6">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Lokasi </h3>
        </div>
        <div class="card-body">
          <?php

          // header('Content-Type: ' . $qrCode->getContentType());
          // echo $qrCode->writeString();
          ?>
          <img src="<?= base_url('qrcode/inv-' . $users['id_users'] . '.png'); ?>" style="width:100px" alt="<?= $users['nama']; ?>">
          <a href="<?= base_url('lakip/qrcode/' . $users['id_users']); ?>" class="btn btn-warning btn-flat btn-sm"><i class="fa fa-download"></i></a>

        </div>
      </div>
    </div>




    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- /.card-body -->
    <!-- </div> -->


    <?= $this->endSection(); ?>
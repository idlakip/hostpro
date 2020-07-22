<?php
$qrCode = new Endroid\QrCode\QrCode($users['id_users']);
$qrCode->writeFile(ROOTPATH . 'public/qrcode/inv-' . $users['id_users'] . '.png');
?>
<?= $this->extend('layout/data_table'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">

  <div class="box">
    <div class="box-body">

      <div class="col-sm-4 invoice-col">
        <img src="<?= base_url('qrcode/inv-' . $users['id_users'] . '.png'); ?>" style="width:200px" alt="<?= $users['nama']; ?>">
      </div>
      <!-- <div class="pull-right"> -->
      <a href="<?= base_url('lakip/edit/' . $users['id_users']); ?>" class="btn btn-warning btn-flat btn-sm"><i class="fa fa-undo"></i>Back</a>
      <!-- </div> -->
    </div>
  </div>



  <?= $this->endSection(); ?>
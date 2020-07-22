<?= $this->extend('layout/data_table'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">

  <div class="box">
    <div class="box-header">


      <a href="<?= base_url('lakip/edit/' . $users['id_users']); ?>" class="btn btn-warning btn-flat btn-sm"><i class="fa fa-undo"></i>Back</a>

    </div>
    <div class="box-body">

      <?php
      $qrCode = new Endroid\QrCode\QrCode($users['id_users']);
      $qrCode->writeFile(ROOTPATH . 'public/qrcode/inv-' . $users['id_users'] . '.png');
      // header('Content-Type: ' . $qrCode->getContentType());
      // echo $qrCode->writeString();
      ?>
      <!-- <div class="col-sm-4 invoice-col"> -->
      <img src="<?= base_url('qrcode/inv-' . $users['id_users'] . '.png'); ?>" style="width:100px" alt="<?= $users['id_users']; ?>">
      <!-- </div> -->
    </div>
  </div>



  <?= $this->endSection(); ?>
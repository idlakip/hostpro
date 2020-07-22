<?php include 'lib/romawi.php'; ?>
<?php include 'lib/rupiah.php'; ?>
<?php include 'lib/terbilang.php'; ?>
<?= $this->extend('layout/template_print'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">


  <!-- <div class="container-fluid"> -->
  <div class="row">
    <div class="col-12">
      <div class="callout callout-info">
        <h5><i class="fas fa-info"></i> Note:<a href="<?= base_url('lakip'); ?>" class="btn btn-sm btn-warning"> <i class="fas fa-file"> </i>Back</a></h5>
        This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.

      </div>


      <!-- Main content -->
      <div class="invoice p-3 mb-3">
        <!-- title row -->
        <div class="row">
          <!-- <div class="col-12"> -->
          <div class="col-sm-2 invoice-col">
            <img src="<?= base_url(); ?>/template/dist/img/credit/lakip.png" class="photo" alt="LAKIP">
          </div>
          <div class="col-sm-2 invoice-col">
            <img src="<?= base_url('qrcode/inv-' . $users['id_users'] . '.png'); ?>" style="width:100px" alt="<?= $users['nama']; ?>">
          </div>

        </div>
        <!-- info row -->
        <small class="float-right">Jakarta, <?php echo date('d m Y'); ?></small> <br>
        <hr>
        <!-- <h4> -->
        <!-- <i class="fas fa-globe"></i>  -->
        <!-- <small class="float-right">Date: <?php echo date('d m Y'); ?></small> -->
        <!-- </h4> -->
        <!-- <div class="col-sm-10 invoice-col text-center"> -->
        <!-- <h4>Lembaga Administrasi Keuangan dan Ilmu Pemerintahan <br> LAKIP</h4> -->
        <!-- <h4 class="text-muted well well-sm shadow-none text-center" style="margin-top: 10px;">Lembaga Administrasi Keuangan dan Ilmu Pemerintahan <br> LAKIP</h4> -->
        <!-- </div> -->
        <!-- </div> -->
        <!-- /.col -->


        <h4 class="text-muted well well-sm shadow-none text-center my-2px">KWITANSI <br />
          No. Account : 968-345<?= $users['id_users']; ?>-LAKIP-<?= $users['id_users'] . '/' . $bln . '/' . date('Y'); ?><br>
        </h4>
        <hr>
        <div class="row invoice-info">
          <!-- <div class="col-sm-5 invoice-col">
            From
            <address>
              <strong>LAKIP</strong><br>
              Jakarta, 10650<br>
              Phone: (021) 4288-5718<br>
              Email: info@lakip.co.id
            </address>
          </div> -->
          <!-- /.col -->
          <div class="col-sm-12 invoice-col">
            To
            <address>
              <strong><?= $users['nama'] ?></strong><br>
              <?= $users['alamat']; ?><br>
              <b>Order ID:</> 4F3S8<?= $users['id_users']; ?>J<br>
                <b>Payment Due:</b> <?php echo date('d M Y'); ?> -
                <?php $date = date_create('21-07-2020');
                date_add($date, date_interval_create_from_date_string('5 days'));
                echo date_format($date, 'd M Y'); ?>

            </address>
          </div>
          <!-- /.col -->
          <!-- <div class="col-sm-2 invoice-col">
              <img src="<?= base_url('qrcode/inv-' . $users['id_users'] . '-' . date('ymd') . '.png'); ?>" style="width:100px" alt="<?= $users['nama']; ?>">
            </div> -->
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
          <div class="col-12 table-responsive">
            <!-- <h4 class="text-muted well well-sm shadow-none text-center my-2px">KWITANSI </h4> -->
            <!-- <p class="lead text-center"> -->

            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width:5%">Qty</th>
                  <!-- <th>#</th> -->
                  <th style="width:85%">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Pembayaran</td>
                  <!-- <td>:</td> -->
                  <td>
                    <p class="lead">
                      kontribusi bimtek tentang : Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor ut libero dolore
                      et dolorum? Perferendis quibusdam harum rerum enim. Dolorem dolores fugiat fuga culpa esse est sit iusto
                      optio amet? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, ullam voluptates fuga impedit
                      cum molestiae, debitis possimus similique sapiente ea officiis, ipsam minus earum maiores adipisci? Consequatur
                      molestias cumque eveniet.



                    </p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <hr>
        <div class="row">
          <div class="col-10">
            <p class="lead">
              Terbilang : ###<?= ucwords(terbilang($users['level'])) . " Rupiah"; ?>###
            </p>
          </div>

          <div class="col-2">
            <p class="lead">
              <?= rupiah($users['level']); ?>
            </p>
          </div>
        </div>
        <!-- <hr> -->

        <div class="row">
          <!-- accepted payments column -->
          <div class="col-7">
            <!-- <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;"> -->
            <p class="lead">Payment Methods:</p>
            <img src="<?= base_url(); ?>/template/dist/img/credit/mandiri.svg" alt="Bank Mandiri">
            <!-- <img src="<?= base_url(); ?>/template/dist/img/credit/bri.svg" alt="Bank BRI"> -->
            <!-- <img src="<?= base_url(); ?>/template/dist/img/credit/bni.svg" alt="Bank BNI"> -->
            <!-- <img src="<?= base_url(); ?>/template/dist/img/credit/bca.svg" alt="Bank BCA"> -->

            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
              "Dicetak otomatis oleh sistem elektronik dan tidak memerlukan tandatangan dan stempel basah, Untuk informasi dapat menghubungi bagian keuangan di 021-42885718".
            </p>


            <div class="col-sm-2 invoice-col">
              <img src="<?= base_url('qrcode/inv-' . $users['id_users'] . '.png'); ?>" style="width:80px" alt="<?= $users['nama']; ?>">
            </div>
          </div>
          <!-- /.col -->
          <div class="col-5">
            <p class="lead text-center">Jakarta , <?= date('d M Y'); ?> <br>
              Lembaga Administrasi Keuangan dan Ilmu Pemerintahan
            </p>
            <br>
            <p class="lead text-center">
              <img src="<?= base_url(); ?>/template/dist/img/credit/bca.svg" alt="Bank BCA"><br>
              MASRIANTO
            </p>
            <hr>
            <!-- <div class="table-responsive">
              <table class="table">
                <tr>
                  <th style="width:50%">Subtotal:</th>
                  <td>$250.30</td>
                </tr>
                <tr>
                  <th>Tax (9.3%)</th>
                  <td>$10.34</td>
                </tr>
                <tr>
                  <th>Shipping:</th>
                  <td>$5.80</td>
                </tr>
                <tr>
                  <th>Total:</th>
                  <td>15000</td>
                </tr>
              </table> -->
            <!-- </div> -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
          <div class="col-12">
            <a href="<?= base_url('lakip/print/' . $users['id_users']); ?>" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
            <a href="<?= base_url(); ?>/lakip/pdf" rel="noopener" target="_blank" class="btn btn-default float-right"><i class="fas fa-download"></i> Generate PDF</a>
            <!-- <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                  Payment
                </button> -->
            <!-- <button type="button" class="btn btn-primary float-right"> -->

            <!-- </button> -->
          </div>
        </div>
      </div>
      <!-- /.invoice -->
    </div><!-- /.col -->
  </div><!-- /.row -->



  <?= $this->endSection(); ?>
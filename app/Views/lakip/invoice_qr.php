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
          <div class="col-12">
            <h4>
              <i class="fas fa-globe"></i> AdminLTE, Inc.
              <small class="float-right">Date: <?php echo date('d m Y'); ?></small>
            </h4>
          </div>
          <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            From
            <address>
              <strong>LAKIP</strong><br>
              Kemayoran<br>
              Jakarta, 10650<br>
              Phone: (021) 4288-5718<br>
              Email: info@lakip.co.id
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            To
            <address>
              <strong><?= $users['nama'] ?></strong><br>
              <?= $users['nama']; ?><br>
              <?= $users['alamat']; ?><br>
              Phone: <?= $users['password']; ?><br>
              Email: <?= $users['email']; ?>
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            <b>Invoice #0020<?= $users['id_users']; ?></b><br>
            <br>
            <b>Order ID:</b> 4F3S8<?= $users['id_users']; ?>J<br>
            <b>Payment Due:</b> <?php echo date('d M Y'); ?> - <?php $date = date_create('21-07-2020');
                                                                date_add($date, date_interval_create_from_date_string('5 days'));
                                                                echo date_format($date, 'd M Y');  ?>
            <br>
            <b>Account:</b> 968-345<?= $users['id_users']; ?>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
          <div class="col-12 table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Qty</th>
                  <th>Product</th>
                  <th>Serial #</th>
                  <th>Description</th>
                  <th>Subtotal</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Call of Duty</td>
                  <td>455-981-221</td>
                  <td>El snort testosterone trophy driving gloves handsome</td>
                  <td>$64.50</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Need for Speed IV</td>
                  <td>247-925-726</td>
                  <td>Wes Anderson umami biodiesel</td>
                  <td>$50.00</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Monsters DVD</td>
                  <td>735-845-642</td>
                  <td>Terry Richardson helvetica tousled street art master</td>
                  <td>$10.70</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Grown Ups Blue Ray</td>
                  <td>422-568-642</td>
                  <td>Tousled lomo letterpress</td>
                  <td>$25.99</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <!-- accepted payments column -->
          <div class="col-6">
            <p class="lead">Payment Methods:</p>
            <img src="<?= base_url(); ?>/template/dist/img/credit/visa.png" alt="Visa">
            <img src="<?= base_url(); ?>/template/dist/img/credit/mastercard.png" alt="Mastercard">
            <img src="<?= base_url(); ?>/template/dist/img/credit/american-express.png" alt="American Express">
            <img src="<?= base_url(); ?>/template/dist/img/credit/paypal2.png" alt="Paypal">

            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
              "Dicetak otomatis dengan sistem elektronik dan tidak memerlukan tandatangan, Untuk informasi dapat menghubungi bagian keuangan di 021-42885718".
            </p>
          </div>
          <!-- /.col -->
          <div class="col-6">
            <p class="lead">Amount Due <?php echo date('d M Y'); ?></p>

            <div class="table-responsive">
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
                  <td>$265.24</td>
                </tr>
              </table>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
          <div class="col-12">
            <a href="<?= base_url('lakip/print/' . $users['id_users']); ?>" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
            <!-- <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                  Payment
                </button> -->
            <!-- <button type="button" class="btn btn-primary float-right"> -->
            <a href="<?= base_url(); ?>/lakip/pdf" rel="noopener" target="_blank" class="btn btn-default float-right"><i class="fas fa-download"></i> Generate PDF</a>

            <!-- </button> -->
          </div>
        </div>
      </div>
      <!-- /.invoice -->
    </div><!-- /.col -->
  </div><!-- /.row -->



  <?= $this->endSection(); ?>
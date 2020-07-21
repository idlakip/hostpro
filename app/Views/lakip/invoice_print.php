<?php
function penyebut($nilai)
{
  $nilai = abs($nilai);
  $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
  $temp = "";
  if ($nilai < 12) {
    $temp = " " . $huruf[$nilai];
  } else if ($nilai < 20) {
    $temp = penyebut($nilai - 10) . " belas";
  } else if ($nilai < 100) {
    $temp = penyebut($nilai / 10) . " puluh" . penyebut($nilai % 10);
  } else if ($nilai < 200) {
    $temp = " seratus" . penyebut($nilai - 100);
  } else if ($nilai < 1000) {
    $temp = penyebut($nilai / 100) . " ratus" . penyebut($nilai % 100);
  } else if ($nilai < 2000) {
    $temp = " seribu" . penyebut($nilai - 1000);
  } else if ($nilai < 1000000) {
    $temp = penyebut($nilai / 1000) . " ribu" . penyebut($nilai % 1000);
  } else if ($nilai < 1000000000) {
    $temp = penyebut($nilai / 1000000) . " juta" . penyebut($nilai % 1000000);
  } else if ($nilai < 1000000000000) {
    $temp = penyebut($nilai / 1000000000) . " milyar" . penyebut(fmod($nilai, 1000000000));
  } else if ($nilai < 1000000000000000) {
    $temp = penyebut($nilai / 1000000000000) . " trilyun" . penyebut(fmod($nilai, 1000000000000));
  }
  return $temp;
}

function terbilang($nilai)
{
  if ($nilai < 0) {
    $hasil = "minus " . trim(penyebut($nilai));
  } else {
    $hasil = trim(penyebut($nilai));
  }
  return $hasil;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>/template/plugins/fontawesome-free/css/all.min.css">
  <!-- My CSS -->
  <link rel="stylesheet" href="/css/style.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>/template/dist/css/adminlte.min.css">
</head>


<!-- Main content -->
<div class="invoice p-3 mb-3">
  <!-- title row -->
  <div class="row">
    <!-- <div class="col-12"> -->
    <div class="col-sm-2 invoice-col">
      <img src="<?= base_url(); ?>/template/dist/img/credit/bca.svg" alt="Bank BCA">

      <!-- <h4> -->
      <!-- <i class="fas fa-globe"></i>  -->
      <!-- <small class="float-right">Date: <?php echo date('d m Y'); ?></small> -->
      <!-- </h4> -->
    </div>
    <!-- <div class="col-sm-10 invoice-col text-center"> -->
    <!-- <h4>Lembaga Administrasi Keuangan dan Ilmu Pemerintahan <br> LAKIP</h4> -->
    <!-- <h4 class="text-muted well well-sm shadow-none text-center" style="margin-top: 10px;">Lembaga Administrasi Keuangan dan Ilmu Pemerintahan <br> LAKIP</h4> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- /.col -->
  </div>
  <!-- info row -->
  <hr>
  <small class="float-right">Jakarta, <?php echo date('d m Y'); ?></small> <br>
  <div class="row invoice-info">
    <div class="col-sm-4 invoice-col">
      From
      <address>
        <strong>LAKIP</strong><br>
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
        <?= $users['alamat']; ?><br>
        Phone: <?= $users['password']; ?><br>
        Email: <?= $users['email']; ?>
      </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-4 invoice-col">
      <b>Invoice #0020<?= $users['id_users']; ?></b><br>
      <b>Order ID:</> 4F3S8<?= $users['id_users']; ?>J<br>
        <b>Payment Due:</b> <?php echo date('d M Y'); ?> - <?php $date = date_create('21-07-2020');
                                                            date_add($date, date_interval_create_from_date_string('5 days'));
                                                            echo date_format($date, 'd M Y');  ?>
        <br>
        <b>Account:</b> 968-345<?= $users['id_users']; ?>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  <hr>
  <!-- Table row -->
  <div class="row">
    <div class="col-12 table-responsive">
      <!-- <p class="lead text-center"> -->
      <!-- <p class="text-muted well well-sm shadow-none text-center" style="margin-top: 10px;">
            </p> -->
      <h4 class="text-muted well well-sm shadow-none text-center my-10%">KWITANSI</h4>
      <table class="table table-striped">
        <thead>
          <tr>
            <th style="width:5%">Qty</th>
            <th>#</th>
            <th style="width:85%">Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td>

              <?= $users['nama']; ?>
            </td>
          </tr>
          <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td>

              <?= $users['password']; ?>
            </td>
          </tr>
          <tr>
            <td>Asal</td>
            <td>:</td>
            <td>

              <?= $users['alamat']; ?>
            </td>
          </tr>
          <tr>
            <td>Pembayaran</td>
            <td>:</td>
            <td>

              kontribusi bimtek tentang : Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor ut libero dolore et dolorum? Perferendis quibusdam harum rerum enim. Dolorem dolores fugiat fuga culpa esse est sit iusto optio amet? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, ullam voluptates fuga impedit cum molestiae, debitis possimus similique sapiente ea officiis, ipsam minus earum maiores adipisci? Consequatur molestias cumque eveniet. <?= $users['alamat']; ?> Terbilang : ###<?php echo ucwords(terbilang($users['level'])) . " Rupiah"; ?>###
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
        Terbilang : ###<?php echo ucwords(terbilang($users['level'])) . " Rupiah"; ?>###
      </p>
    </div>

    <div class="col-2">
      <p class="lead">
        <?php
        function rupiah($angka)
        {
          $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
          return $hasil_rupiah;
        }
        echo rupiah($users['level']);
        ?>
      </p>
    </div>
  </div>
  <hr>

  <div class="row">
    <!-- accepted payments column -->
    <div class="col-7">
      <!-- <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;"> -->
      <p class="lead">Payment Methods:</p>
      <img src="<?= base_url(); ?>/template/dist/img/credit/mandiri.svg" alt="Bank Mandiri">
      <img src="<?= base_url(); ?>/template/dist/img/credit/bri.svg" alt="Bank BRI">
      <img src="<?= base_url(); ?>/template/dist/img/credit/bni.svg" alt="Bank BNI">
      <img src="<?= base_url(); ?>/template/dist/img/credit/bca.svg" alt="Bank BCA">

      <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
        "Dicetak otomatis oleh sistem elektronik dan tidak memerlukan tandatangan, Untuk informasi dapat menghubungi bagian keuangan di 021-42885718".
      </p>

    </div>
    <!-- /.col -->
    <div class="col-5">
      <p class="lead text-center">Jakarta , <?php echo date('d M Y'); ?> <br>
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

  <script>
    window.addEventListener("load", window.print());
  </script>
  <!-- jQuery -->
  <script src="<?= base_url(); ?>/template/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url(); ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="<?= base_url(); ?>/template/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url(); ?>/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url(); ?>/template/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url(); ?>/template/dist/js/demo.js"></script>
  <!-- My JS -->
  <script src="<?= base_url(); ?>/js/tabel.js"></script>

  </body>

</html>
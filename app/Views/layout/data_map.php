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
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>/template/dist/css/adminlte.min.css">
  <!-- My CSS -->
  <link rel="stylesheet" href="/css/style.css">
  <!-- Map -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</head>

<body class="hold-transition sidebar-mini">

  <?= $this->include('layout/theme/m_navtop'); ?>
  <?= $this->include('layout/theme/m_sidebar'); ?>
  <div class="content-wrapper">
    <?= $this->include('layout/theme/m_wrapper'); ?>
    <?= $this->renderSection('content'); ?>

    </section>
  </div>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">

      <b>Version</b> 1.0.0-pre
    </div>
    Copyright &copy; 2012-<?php echo date('Y'); ?><a href="https://lakip.co.id"> Lakip.co.id</a>.</strong> All rights reserved.

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url(); ?>/template/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url(); ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- bs-custom-file-input -->
  <script src="<?= base_url(); ?>/template/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url(); ?>/template/dist/js/adminlte.min.js"></script>
  <!-- My JS -->
  <script src="<?= base_url(); ?>/js/tabel.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url(); ?>/template/dist/js/demo.js"></script>
</body>

</html>
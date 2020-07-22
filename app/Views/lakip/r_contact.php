<?= $this->extend('layout/data_table'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card card-solid">
    <div class="card-body pb-0">
      <div class="row d-flex align-items-stretch">
        <?php $i = 1; ?>
        <?php foreach ($users as $u) : ?>
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                <?= $u['username']; ?>
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b><?= $u['nama']; ?></b></h2>
                    <p class="text-muted text-sm"><b>About: </b> <?= $u['email']; ?> </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: <?= $u['alamat']; ?></li>
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: <?= $u['password']; ?></li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <!-- <img src="<?= base_url(); ?>/template/dist/img/user3-128x128.jpg" alt="user-avatar" class="img-circle img-fluid"> -->
                    <!-- <img src="<?= base_url('qrcode/inv-' . $u['id_users'] . '.png'); ?>" alt="<?= $u['nama']; ?>" class="img-circle img-fluid"> -->
                    <img src="<?= base_url('qrcode/inv-' . $u['id_users'] . '.png'); ?>" alt="<?= $u['nama']; ?>" class="photo">
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="#" class="btn btn-sm bg-teal">
                    <i class="fas fa-comments"></i>
                  </a>
                  <a href="<?= base_url('lakip/profile/' . $u['id_users']); ?>" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> View Profile
                  </a>
                </div>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <nav aria-label="Contacts Page Navigation">
        <ul class="pagination justify-content-center m-0">
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item"><a class="page-link" href="#">6</a></li>
          <li class="page-item"><a class="page-link" href="#">7</a></li>
          <li class="page-item"><a class="page-link" href="#">8</a></li>
        </ul>
      </nav>
    </div>
    <!-- /.card-footer -->
  </div>
  <!-- /.card -->


  <?= $this->endSection(); ?>
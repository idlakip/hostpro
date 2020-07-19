<?= $this->extend('layout/data_map'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"><?= $title; ?></h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
      <div id="mapid" style="height: 350px;">

        <script>
          var mymap = L.map('mapid').setView([-6.149785, 106.821717], 13);
          // var mymap = L.map('mapid').setView([-6.166585, 106.826071], 13);
          // var mymap = L.map('mapid').setView([-3.938785, 119.688359], 13);

          L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
              '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
              'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
          }).addTo(mymap);

          var iconkantor = L.icon({
            iconUrl: '<?= base_url('icon/1104720.svg'); ?>',
            iconSize: [38, 65],
            // shadowSize: [50, 64],
            // iconAnchor: [22, 94],
            // shadowAnchor: [4, 62],
            // popupAnchor: [-3, -76]
          });
          <?php foreach ($kantor as $key => $value) { ?>
            L.marker([<?= $value['latitude']; ?>, <?= $value['longitude']; ?>], {
                icon: iconkantor
              }).addTo(mymap)
              .bindPopup("<b><?= $value['nama_kantor'] ?></b><br/>" +
                '<img src="<?= base_url('foto/' . $value['photo']); ?>" class="photo"><br/>' +
                "<b></b>Telp. : <?= $value['no_telp'] ?></b>"
              );
          <?php } ?>
        </script>
      </div>
      <!-- /.card-body -->
      <!-- <div class="card-footer">
        Footer
      </div> -->
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->


    <?= $this->endSection(); ?>
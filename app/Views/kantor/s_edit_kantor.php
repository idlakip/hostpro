<?= $this->extend('layout/data_map'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-sm-7">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Lokasi </h3>
        </div>
        <div class="card-body">

          <div id="map" style="height: 600px;">

          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-5">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Kantor </h3>
        </div>
        <div class="card-body">
          <?php
          $errors = session()->getFlashdata('errors');
          if (!empty($errors)) { ?>
            <div class="alert alert-danger">
              !!! Ada kesalahan input data yaitu :
              <ol>
                <?php foreach ($errors as $key => $error) { ?>
                  <li class="text text-sm"><?= esc($error) ?></li>
                <?php } ?>
              </ol>
            </div>
          <?php } ?>

          <?php echo form_open_multipart('kantor/update/' . $kantor['id_kantor']); ?>
          <?= csrf_field(); ?>
          <input type="hidden" name="photoLama" value="<?= $kantor['photo']; ?>">
          <div class="form-group">
            <label for="nama_kantor">Nama Kantor</label>
            <input type="text" class="form-control form-control-sm" id="nama_kantor" name="nama_kantor" value="<?= $kantor['nama_kantor']; ?>">
          </div>
          <div class="form-group">
            <label for="no_telp">No. Kantor</label>
            <!-- <input type="text" class="form-control form-control-sm" id="no_telp" name="no_telp" placeholder="+62"> -->
            <!-- </div> -->

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
              </div>
              <input type="text" class="form-control form-control-sm" id="no_telp" name="no_telp" value="<?= $kantor['no_telp']; ?>" data-inputmask="'mask': ['9999 999 99[99]', '9999 9999 9[9]99']" data-mask>
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control form-control-sm" id="email" name="email" value="<?= $kantor['email']; ?>">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control form-control-sm" id="alamat" name="alamat" value="<?= $kantor['alamat']; ?>">
          </div>

          <div class="form-group">
            <label for="pimpinan">Pimpinan</label>
            <input type="text" class="form-control form-control-sm" id="pimpinan" name="pimpinan" value="<?= $kantor['pimpinan']; ?>">
          </div>

          <div class="form-group">
            <label for="latitude">Lokasi Kantor</label>
            <input type="text" class="form-control form-control-sm" id="latitude" name="latitude" value="<?= $kantor['latitude']; ?>">
          </div>

          <div class="form-group">
            <!-- <label for="longitude">Longitude Kantor</label> -->
            <input type="text" class="form-control form-control-sm" id="longitude" name="longitude" value="<?= $kantor['longitude']; ?>">
          </div>

          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control form-control-sm" id="description" name="description" value="<?= $kantor['description']; ?>">
            <!-- <textarea class="form-control form-control-sm" id="description" name="description" value="<?= $kantor['description']; ?>"></textarea> -->
          </div>
          <!-- <div class=" form-group">
            <label> Preview</label><br>
            <img src="" alt="" width="100px"><br>
            <label for="photo"> Ganti Foto Kantor</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="photo" name="photo">
                <label class="custom-file-label" for="photo">Choose file</label>
              </div>
            </div> -->

          <div class="form-group">
            <label for="photo" class="col-sm-4 col-form-label">Foto Kantor</label>
            <div class="col-sm-4">
              <img src="<?= base_url('foto/' . $kantor['photo']); ?>" class="img-thumbnail img-preview">
            </div>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="photo" name="photo" onchange="previewImg()">
                <label class="custom-file-label" for="photo"><?= $kantor['photo']; ?></label>
              </div>
            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>

          <?php echo form_close(); ?>

        </div>
      </div>
    </div>


    <script>
      var curLocation = [0, 0];
      if (curLocation[0] == 0 && curLocation[1] == 0) {
        curLocation = [<?= $kantor['latitude']; ?>, <?= $kantor['longitude']; ?>];
      }
      var map = L.map('map').setView([<?= $kantor['latitude']; ?>, <?= $kantor['longitude']; ?>], 14);

      L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
          '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
          'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
      }).addTo(map);

      map.attributionControl.setPrefix(false);
      var marker = new L.marker(curLocation, {
        draggable: 'true',
      });

      marker.on('dragend', function(event) {
        var position = marker.getLatLng();
        marker.setLatLng(position, {
          draggable: 'true'
        }).bindPopup(position).update();
        $('#latitude').val(position.lat);
        $('#longitude').val(position.lng).keyup();
      });

      map.addLayer(marker);

      $("#latitude, #longitude").change(function() {
        var position = [parseInt($("#latitude").val()), parseInt($("#longitude").val())];
        marker.setLatLng(position, {
          draggable: 'true'
        }).bindPopup(position).update();
        map.panTo(position);
      });

      map.addLayer(marker);
    </script>






</section>
<?= $this->endSection(); ?>
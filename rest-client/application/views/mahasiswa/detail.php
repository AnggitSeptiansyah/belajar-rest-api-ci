<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">

      <div class="card">
        <div class="card-body">
          <div class="card-header">
            Detail Data | <strong> <?= $mahasiswa['nama'] ?> </strong>
          </div>
          <div class="card-body">
            <h5 class="card-title"><?= $mahasiswa['nama'] ?>
            <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email']; ?></h6>
            <p class="card-text"><?= $mahasiswa['nrp']; ?></p>
            <p class="card-text"><?= $mahasiswa['jurusan']; ?></p>
            <a href="<?= base_url() ?>mahasiswa" class="btn btn-primary">Kembali</a>

          </div>
        </div>
      </div>
        
    </div>
  </div>
</div>
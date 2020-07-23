<div class="container mt-3">

  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3>Form Ubah Mahasiswa</h3>
        </div>
        <div class="card-body">
            <form action="" method="post">
              <input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>">
              <div class="form-group">
                <label for="nama">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>">
                <small class="form-text text-danger">
                  <?= form_error('nama') ?>
                </small>
              </div>

              <div class="form-group">
                <label for="nim">Nim</label>
                <input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nrp'] ?>">
                <small class="form-text text-danger">
                  <?= form_error('nim') ?>
                </small>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email'] ?>">
                <small class="form-text text-danger">
                  <?= form_error('email') ?>
                </small>
              </div>

              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" id="jurusan" class="form-control">
                  <?php foreach ($jurusan as $j) : ?>
                    <?php if($j == $mahasiswa['jurusan']) : ?>
                      <option value="<?= $j ?>" selected><?= $j ?></option>
                    <?php else : ?>
                      <option value="<?= $j ?>"><?= $j ?></option>
                    <?php endif ?>
                  <?php endforeach; ?>
                </select>
              </div>

              <button class="btn btn-primary float-right" type="submit" name="ubah">Ubah Data</button>              
            </form>
          </div>
        </div>
    </div>
  </div>
</div>
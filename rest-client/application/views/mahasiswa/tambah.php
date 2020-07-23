<div class="container mt-3">

  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3>Form Mahasiswa</h3>
        </div>
        <div class="card-body">
            <form action="" method="post">
              <div class="form-group">
                <label for="nama">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama" name="nama">
                <small class="form-text text-danger">
                  <?= form_error('nama') ?>
                </small>
              </div>

              <div class="form-group">
                <label for="nim">Nim</label>
                <input type="text" class="form-control" id="nim" name="nim">
                <small class="form-text text-danger">
                  <?= form_error('nim') ?>
                </small>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email">
                <small class="form-text text-danger">
                  <?= form_error('email') ?>
                </small>
              </div>

              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" id="jurusan" class="form-control">
                  <option value="Teknik Informatika">Teknik Informatika</option>
                  <option value="Sistem Informasi">Sistem Informasi</option>
                  <option value="Teknik Industri">Teknik Industri</option>
                  <option value="Matematika">Matematika</option>
                </select>
              </div>

              <button name="tambah" class="btn btn-primary float-right" type="submit">Tambah Data</button>

              
            </form>
          </div>
        </div>
    </div>
  </div>
</div>
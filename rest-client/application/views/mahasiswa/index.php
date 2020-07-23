<div class="container mt-3">
  <h3>Daftar Mahasiswa</h3>

  <?php if($this->session->flashdata()) : ?>
    <div class="row">
      <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mahasiswa <strong>Berhasil <?= $this->session->flashdata('message') ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="row  mt-2 mb-2">
    <div class="col-md-6">
      <form action="" method="post">
        <div class="input-group">
          <input name="keyword" type="text" class="form-control" placeholder="Masukkan Pencarian...">
          <div class="input-group-append">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
    <?php if(empty($mahasiswa)) : ?>
      <div class="alert alert-danger" role="alert">
        Data Mahasiswa Tidak Ditemukan
      </div>
    <?php endif; ?>
      <ul class="list-group">
        <?php foreach($mahasiswa as $mhs) : ?>
          <li class="list-group-item">
            <?= $mhs['nama' ] ?>
            <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id'] ?>" class="btn btn-danger btn-sm float-right" onclick="return confirm('yakin?')">Hapus</a>
            <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id'] ?>" class="btn btn-primary btn-sm float-right">Detail</a>
            <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id'] ?>" class="btn btn-success btn-sm float-right">Update</a>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>

        
  <div class="row">
    <div class="col-md-6 mt-2">
      <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
    </div>
  </div>
</div>
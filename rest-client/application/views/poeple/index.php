<div class="container">
  <h3 class="mt-3">List of All Poeple</h3>
  

  <div class="row  mt-2 mb-2">
    <div class="col-md-6">
      <form action="<?= base_url('poeple'); ?>" method="post">
        <div class="input-group">
          <input name="keyword" type="text" class="form-control" placeholder="Masukkan Pencarian...">
          <div class="input-group-append">
            <input name="submit" class="btn btn-outline-primary" type="submit" autocomplete='off' autofocus>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <h5>Results: <?= $total_rows ?></h5>
    </div>
  </div>

  <?php if(empty($poeple)) : ?>
    <div class="alert alert-danger" role="alert">
      Data Not Found
    </div>
  <?php else : ?>
    <div class="row">
    <div class="col-md-12">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
      
          <?php foreach($poeple as $poeple) : ?>
          <tr>
            
              <th><?= ++$start; ?></th>
              <td><?= $poeple['name'] ?></td>
              <td><?= $poeple['email'] ?></td>
              <td><?= $poeple['address'] ?></td>
              <td>
                <a href="" class="btn btn-warning btn-sm">Detail</a>
                <a href="" class="btn btn-success btn-sm">Edit</a>
                <a href="" class="btn btn-danger btn-sm">Delete</a>
              </td>
            
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <?= $this->pagination->create_links(); ?>
    </div>
  </div>
  <?php endif; ?>
  
</div>
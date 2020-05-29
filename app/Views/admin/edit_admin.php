  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="card">
        <div class="card-body">
          <div class="container">
            <?php foreach ($admin as $adm) : ?>
              <div class="row">
                <div class="col-md-8">
                  <form action="<?= base_url('/admin/update_admin') ?>" method="post">
                    <div class="form-group">
                      <label for="nama">Nama * </label>
                      <input type="hidden" name="id_admin" value="<?= $adm->id_admin ?>">
                      <input type="hidden" name="foto" value="<?= $adm->foto_admin ?>">
                      <input type="text" class="form-control" name="nama" value="<?= $adm->nama_admin ?>">
                    </div>
                    <div class="form-group">
                      <label for="email">Email * </label>
                      <input type="email" class="form-control" name="email" value="<?= $adm->email_admin ?>">
                    </div>
                    <div class="form-group">
                      <label for="telepon">Telepon * </label>
                      <input type="text" class="form-control" name="telepon" value="<?= $adm->telepon_admin ?>">
                    </div>
                    <div class="form-group">
                      <label for="password">Password * </label>
                      <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                      <label for="vpassword">Verivy Password * </label>
                      <input type="password" class="form-control" name="vpassword">
                    </div>
                    <div class="form-group">
                      <label for="foto">Foto Admin * </label>
                      <input type="file" class="form-control" name="foto" value="<?= $adm->foto_admin ?>">
                    </div>
                    <button type="submit" class="btn btn-info">Simpan</button>
                  </form>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <img src="" alt="" class="img-fluid">
                  </div>
                </div>
              <?php endforeach; ?>
              </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
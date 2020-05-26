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
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Telepon</th>
                  <th>Foto</th>
                  <th colspan="2" width="5%">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <button type="button" class="btn btn-info mt-2 mb-2" data-toggle="modal" data-target="#anggotaModal">
                  Tambah <i class="fas fa-plus"></i>
                </button>
                <?php $no = 1 ?>
                <?php foreach ($admin as $adm) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $adm->nama_admin ?></td>
                    <td><?= $adm->email_admin ?></td>
                    <td><?= $adm->telepon_admin ?></td>
                    <td><?= $adm->foto_admin ?></td>
                    <td><a href="" class="btn btn-danger">Hapus</a></td>
                    <td><a href="" class="btn btn-success">Ubah</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

  <!-- Modal -->
  <div class="modal fade" id="anggotaModal" tabindex="-1" role="dialog" aria-labelledby="anggotaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="anggotaModalLabel">Tambah Admin</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <form action="<?= base_url('admin/do_register') ?>" method="post">
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="nama">Nama Admin</label>
                <input type="text" name="nama" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="vpassword">Verify Password</label>
                <input type="password" name="vpassword" class="form-control" required>
              </div>
              <div class="float-right">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-info">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
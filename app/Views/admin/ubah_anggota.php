  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Anggota</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
                          <li class="breadcrumb-item active">Anggota</li>
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
                      <?php foreach ($anggota as $mbr) : ?>
                          <div class="row">
                              <div class="col-md-8">
                                  <form action="<?= base_url('/anggota/update_anggota') ?>" method="post">
                                      <div class="form-group">
                                          <label for="nama">Nama * </label>
                                          <input type="hidden" name="id_anggota" value="<?= $mbr->id_anggota ?>">
                                          <input type="hidden" name="foto" value="<?= $mbr->foto_anggota ?>">
                                          <input type="text" class="form-control" name="nama" value="<?= $mbr->nama_anggota ?>">
                                      </div>
                                      <div class="form-group">
                                          <label for="email">Nim * </label>
                                          <input type="text" class="form-control" name="nim" value="<?= $mbr->nim_anggota ?>">
                                      </div>
                                      <div class="form-group">
                                          <label for="email">Email * </label>
                                          <input type="email" class="form-control" name="email" value="<?= $mbr->email_anggota ?>">
                                      </div>
                                      <div class="form-group">
                                          <label for="telepon">Telepon * </label>
                                          <input type="text" class="form-control" name="telepon" value="<?= $mbr->telepon_anggota ?>">
                                      </div>
                                      <div class="form-group">
                                          <label for="password">Password * </label>
                                          <input type="password" class="form-control" name="password">
                                      </div>
                                      <div class="form-group">
                                          <label for="vpassword">Verivy Password * </label>
                                          <input type="password" class="form-control" name="vpassword">
                                      </div>
                                      <div class=" form-group">
                                          <label for="kelas">Kelas * </label>
                                          <input type="text" class="form-control" name="kelas" value="<?= $mbr->kelas_anggota ?>">
                                      </div>
                                      <div class="form-group">
                                          <label for="jurusan">Jurusan * </label>
                                          <input type="text" class="form-control" name="jurusan" value="<?= $mbr->jurusan_anggota ?>">
                                      </div>

                                      <div class="form-group">
                                          <label for="alamat">Alamat * </label>
                                          <textarea name="alamat" class="form-control"><?= $mbr->alamat_anggota; ?></textarea>
                                      </div>
                                      <div class="form-group">
                                          <label for="foto">Foto anggota * </label>
                                          <input type="file" class="form-control" name="foto" value="<?= $mbr->foto_anggota ?>">
                                      </div>
                                      <button type="submit" class="btn btn-info">Simpan</button>
                                  </form>
                              </div>
                              <div class="col-md-4">
                                  <div class="thumbnail">
                                      <img src="<?= base_url('assets/img/foto_anggota/' . $mbr->foto_anggota) ?>" class="img-fluid">
                                  </div>
                              </div>
                          </div>
                      <?php endforeach; ?>
                  </div>
              </div>
          </div>
      </section>
  </div>
  <!-- /.content-wrapper -->
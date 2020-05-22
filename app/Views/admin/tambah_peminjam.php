  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
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

            <div class="card">
              <div class="card-body">
                <div class="row">
                  <?php foreach ($anggota as $member) : ?>
                    <div class="col-md-8">
                      <div class="form-group">
                        <label for="nim_anggota">Nim Anggota *</label>
                        <input type="text" class="form-control" name="nim_anggota" value="<?= $member->nim_anggota ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="nama_anggota">Nama Anggota *</label>
                        <input type="text" class="form-control" name="nama_anggota" value="<?= $member->nama_anggota ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="email_anggota">Email Anggota *</label>
                        <input type="text" class="form-control" name="email_anggota" value="<?= $member->email_anggota ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="telepon_anggota">Telepon Anggota *</label>
                        <input type="text" class="form-control" name="telepon_anggota" value="<?= $member->telepon_anggota ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="jurusan_anggota">Jurusan Anggota *</label>
                        <input type="text" class="form-control" name="jurusan_anggota" value="<?= $member->jurusan_anggota ?>" readonly>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="thumbnail mt-4">
                        <img src="<?= base_url('assets/img/foto_anggota/' . $member->foto_anggota) ?>" class="img-fluid">
                      </div>
                    </div>
                  <?php endforeach ?>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="row">

                  <?php foreach ($buku as $bku) : ?>
                    <div class="col-md-8">
                      <div class="form-group">
                        <label for="isbn_buku">ISBN Buku</label>
                        <input type="text" name="isbn_buku" class="form-control" value="<?= $bku->isbn_buku ?>">
                      </div>
                      <div class="form-group">
                        <label for="judul_buku">Judul Buku</label>
                        <input type="text" name="judul_buku" class="form-control" value="<?= $bku->judul_buku ?>">
                      </div>
                      <div class="form-group">
                        <label for="pengarang_buku">pengarang Buku</label>
                        <input type="text" name="pengarang_buku" class="form-control" value="<?= $bku->pengarang_buku ?>">
                      </div>
                      <div class="form-group">
                        <label for="penerbit_buku">penerbit Buku</label>
                        <input type="text" name="penerbit_buku" class="form-control" value="<?= $bku->penerbit_buku ?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="thumbnail mt-4">
                        <img src="<?= base_url('assets/img/cover_buku/' . $bku->cover_buku) ?>" class="img-fluid">
                      </div>
                    </div>
                  <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="container text-center">
              <button type="button" class="btn btn-info mt-2 mb-2" data-toggle="modal" data-target="#peminjamanModal">
                Proses
              </button>
            </div>
          </div>
          <!-- /.content-wrapper -->
          <!-- Modal -->
          <div class="modal fade" id="peminjamanModal" tabindex="-1" role="dialog" aria-labelledby="peminjamanModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="peminjamanModalLabel">Tambah buku</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container">
                    <form method="post" action="<?= base_url('peminjaman/proses_pinjam') ?>" enctype="multipart/form-data">
                      <label for="tgl_kembali">Tanggal Pengembalian</label>
                      <input type="hidden" name="id_anggota" value="<?= $member->id_anggota ?>">
                      <input type="hidden" name="id_buku" value="<?= $bku->id_buku ?>">
                      <input type="date" class="form-control" name="tgl_kembali" value="<?= date('Y-m-d') ?>" </div> <button type="submit" class="btn btn-info float-right mt-2" onclick="return confirm('tambah peminjam ?')">simpan</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

    </section>

  </div>
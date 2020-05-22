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
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Judul Buku</th>
                  <th>Tanggal Pinjam</th>
                  <th>Tanggal Kembali</th>
                  <th>Waktu/Denda</th>
                  <th colspan="2" width="2%">Aksi</th>
                </tr>
              </thead>
              <button type="button" class="btn btn-info mt-2 mb-2" data-toggle="modal" data-target="#peminjamanModal">
                Tambah <i class="fas fa-plus"></i>
              </button>
              <tbody>
                <?php $no = 1 ?>
                <?php foreach ($peminjaman as $peminjam) : ?>
                  <td><?= $no++ ?></td>
                  <td><?= $peminjam->nama_anggota ?></td>
                  <td><?= $peminjam->judul_buku ?></td>
                  <td><?= $peminjam->tgl_pinjam ?></td>
                  <td><?= $peminjam->tgl_kembali ?></td>
                  <td><?php
                      $datek = $peminjam->tgl_kembali;
                      $datek = strtotime($datek);
                      $date2 = strtotime(date('Y-m-d'));
                      $selisih = $date2 - $datek;
                      $selisih = $selisih / 86400;
                      ?>
                    <?php if ($selisih > 0) : ?>
                      <?php $denda = $selisih * 10000; ?>
                      <p class="bg-danger rounded text-center"><?= $selisih ?>+ Hari / Rp.<?= number_format($denda) ?></p>
                    <?php else : ?>
                      <?php $selisih2 = $datek - $date2 ?>
                      <p class="bg-success rounded text-center"><?= $selisih2 / 86400 ?> Hari</p>
                    <?php endif ?>
                  <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#detailModal<?= $peminjam->id_peminjaman ?>">
                      Detail</i>
                    </button>
                  </td>
                  <td>
                    <a href="<?= base_url('peminjaman/update_peminjaman/' . $peminjam->id_peminjaman) ?>" class="btn btn-info">Ubah</a>
                  </td>
                  </tr>
                  <div class="modal fade" id="detailModal<?= $peminjam->id_peminjaman ?>" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel<?= $peminjam->id_peminjaman ?>" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="detailModalLabel<?= $peminjam->id_peminjaman ?>">Detail Peminjam</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-8">
                                <div class="form-group">
                                  <label for="">Nama Peminjam*</label>
                                  <input type="text" class="form-control" value="<?= $peminjam->nama_anggota ?>" readonly>
                                </div>
                                <div class="form-group">
                                  <label for="">Telepon Peminjam*</label>
                                  <input type="text" class="form-control" value="<?= $peminjam->telepon_anggota ?>" readonly>
                                </div>
                                <div class="form-group">
                                  <label for="">Judul Buku *</label>
                                  <input type="text" class="form-control" value="<?= $peminjam->judul_buku ?>" readonly>
                                </div>
                                <div class="form-group">
                                  <label for="">ISBN Buku *</label>
                                  <input type="text" class="form-control" value="<?= $peminjam->isbn_buku ?>" readonly>
                                </div>
                                <div class="form-group">
                                  <label for="">Denda *</label>
                                  <?php
                                  $date1 = $peminjam->tgl_pinjam;
                                  $datek = $peminjam->tgl_kembali;
                                  $datek = strtotime($datek);
                                  $date1 = strtotime($date1);
                                  $date2 = strtotime(date('Y-m-d'));
                                  $selisih = $date2 - $date1;
                                  $selisih = $selisih / 86400;
                                  ?>
                                  <?php if ($selisih > 0) : ?>
                                    <?php $denda = $selisih * 10000; ?>
                                    <input type="text" class="form-control bg-danger" value="<?= $selisih ?>+ Hari / Rp.<?= number_format($denda) ?>" readonly>
                                  <?php else : ?>
                                    <?php $selisih2 = $datek - $date2 ?>
                                    <input type="text" class="form-control bg-success" value="<?= $selisih2 / 86400 ?> Hari" readonly>
                                  <?php endif ?>

                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="thumbnail">
                                  <img src="<?= base_url('assets/img/cover_buku/' . $peminjam->cover_buku) ?>" class="img-fluid mt-1 mb-1">
                                </div>
                                <div class="thumbnail">
                                  <img src="<?= base_url('assets/img/foto_anggota/' . $peminjam->foto_anggota) ?>" class="img-fluid mt-1 mb-1">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <form action="<?= base_url('peminjaman/kembalikan_buku') ?>" method="post">
                            <div class="form-group">
                              <input type="hidden" value="<?= $peminjam->id_peminjaman ?>" name="id_peminjaman">
                            </div>
                            <button type="submit" class="btn btn-success" onclick="return confirm('buku sudah di kembalikan ?')">Sudah dikembalikan</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <!-- Modal -->
  <div class="modal fade" id="peminjamanModal" tabindex="-1" role="dialog" aria-labelledby="peminjamanModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="peminjamanModalLabel">Tambah Peminjam</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <form method="post" enctype="multipart/form-data" action="<?= base_url('peminjaman/generate_peminjam') ?>">
              <div class="form-group">
                <label for="nim_peminjam">Nim Peminjam</label>
                <input type="text" class="form-control" name="nim_peminjam">
              </div>
              <div class="form-group">
                <label for="isbn_buku">Isbn Buku</label>
                <input type="text" class="form-control" name="isbn_buku">
              </div>
              <button type="submit" class="btn btn-info float-right">Generate</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
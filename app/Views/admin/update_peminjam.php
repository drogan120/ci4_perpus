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
            <?php foreach ($peminjaman as $peminjam) : ?>

              <div class="row">
                <div class="col-md-8">
                  <form action="<?= base_url('peminjaman/proses_update') ?>" method="post">
                    <div class="form-group">
                      <label for="">Nama Peminjam*</label>
                      <input type="text" class="form-control" value="<?= $peminjam->nama_anggota ?>" readonly>
                      <input type="hidden" name="id_peminjaman" value="<?= $peminjam->id_peminjaman ?>">
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
                      <label for="">Tanggal Pinjam *</label>
                      <input type="text" class="form-control" value="<?= $peminjam->tgl_pinjam ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Tanggal Kembali *</label>
                      <input type="text" class="form-control" value="<?= $peminjam->tgl_kembali ?>" readonly>
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
                    <div class="form-group">
                      <label for="ubah_tanggal">Update Tanggal</label>
                      <input type="date" name="ubah_tanggal" id="ubah_tanggal" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-info">Update</button>
                  </form>
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

            <?php endforeach; ?>


          </div>
          <!-- /.content-wrapper -->

    </section>

  </div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Buku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Buku</li>
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
                  <th>Judul</th>
                  <th>Pengarang</th>
                  <th>ISBN</th>
                  <th>Penerbit</th>
                  <th>Cover</th>
                  <th colspan="2">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <button type="button" class="btn btn-info mt-2 mb-2" data-toggle="modal" data-target="#bukuModal">
                  Tambah <i class="fas fa-plus"></i>
                </button>
                <?php $no = 1 ?>
                <?php foreach ($buku as $bku) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $bku->judul_buku ?></td>
                    <td><?= $bku->pengarang_buku ?></td>
                    <td><?= $bku->isbn_buku ?></td>
                    <td><?= $bku->penerbit_buku ?></td>
                    <td><img src="<?= base_url('assets/img/cover_buku/' . $bku->cover_buku) ?>" class="img-fluid" width="100"></td>
                    <td><a href="<?= base_url('buku/hapus_buku/' . $bku->id_buku) ?>" class="btn btn-danger" onclick="return confirm('hapus buku')">Hapus</a></td>
                    <td><a href="<?= base_url('buku/ubah_buku/' . $bku->id_buku) ?>" class="btn btn-info">Ubah</a></td>
                  </tr>
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
  <div class="modal fade" id="bukuModal" tabindex="-1" role="dialog" aria-labelledby="bukuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bukuModalLabel">Tambah buku</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <form method="post" action="<?= base_url('buku/tambah_buku') ?>" enctype="multipart/form-data">
              <div class="form-group">
                <label for="judul">Judul Buku *</label>
                <input type="text" class="form-control" name="judul">
              </div>
              <div class="form-group">
                <label for="pengarang">Pengarang Buku * </label>
                <input type="text" class="form-control" name="pengarang">
              </div>
              <div class="form-group">
                <label for="isbn">ISBN Buku *</label>
                <input type="text" class="form-control" name="isbn">
              </div>
              <div class="form-group">
                <label for="penerbit">Penerbit Buku *</label>
                <input type="text" class="form-control" name="penerbit">
              </div>
              <div class="form-group">
                <label for="cover">Cover Buku</label>
                <input type="file" class="form-control" name="cover">
              </div>
              <button type="submit" class="btn btn-info float-rigth">simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
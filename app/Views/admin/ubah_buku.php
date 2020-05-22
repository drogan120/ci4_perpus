  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ubah Buku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Ubah Buku</li>
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

            <div class="row">
              <div class="col-md-8">
                <?php foreach ($buku as $bku) : ?>
                  <form method="post" action="<?= base_url('buku/update_buku') ?>" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="judul">Judul Buku *</label>
                      <input type="hidden" name="id_buku" value="<?= $bku->id_buku ?>">
                      <input type="hidden" name="cover_lama" value="<?= $bku->cover_buku ?>">
                      <input type="text" class="form-control" name="judul" value="<?= $bku->judul_buku ?>">
                    </div>
                    <div class="form-group">
                      <label for="pengarang">Pengarang Buku * </label>
                      <input type="text" class="form-control" name="pengarang" value="<?= $bku->pengarang_buku ?>">
                    </div>
                    <div class="form-group">
                      <label for="isbn">ISBN Buku *</label>
                      <input type="text" class="form-control" name="isbn" value="<?= $bku->isbn_buku ?>">
                    </div>
                    <div class="form-group">
                      <label for="penerbit">Penerbit Buku *</label>
                      <input type="text" class="form-control" name="penerbit" value="<?= $bku->penerbit_buku ?>">
                    </div>
              </div>
              <div class="col-md-4">
                <div class="form-group mt-4">
                  <div class="thumbnail">
                    <img src="<?= base_url('assets/img/cover_buku/' . $bku->cover_buku) ?>" class="img-fluid">
                  </div>
                  <label for="cover_buku">Cover Buku</label>
                  <input type="file" class="form-control" name="cover_buku">
                </div>
                <button type="submit" class="btn btn-info float-rigth">simpan</button>
              </div>
            </div>
            </form>
          <?php endforeach ?>

          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
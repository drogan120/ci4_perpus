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
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
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


            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>No. Telpon</th>
                  <th>Kelas</th>
                  <th>Jurusan</th>
                  <th>Cover</th>
                  <th colspan="2">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <button type="button" class="btn btn-info mt-2 mb-2" data-toggle="modal" data-target="#anggotaModal">
                  Tambah <i class="fas fa-plus"></i>
                </button>
                <?php $no =1 ?>
                <?php foreach ($anggota as $member): ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $member->nama_anggota ?></td>
                    <td><?= $member->telepon_anggota ?></td>
                    <td><?= $member->kelas_anggota ?></td>
                    <td><?= $member->jurusan_anggota ?></td>
                    <td><a href="" class="btn btn-danger">Hapus</a></td>
                    <td><a href="" class="btn btn-info">Ubah</a></td>
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
  <div class="modal fade" id="anggotaModal" tabindex="-1" role="dialog" aria-labelledby="anggotaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="anggotaModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
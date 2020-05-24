
<div class="container">
    <form action="" method="post">
        <div class="form-group mt-5">
            <input type="text" class="form-control" placeholder="Search title here .." id="keyword">
        </div>
    </form>
    <div class="row" id="buku">
        <?php foreach ($buku as $bku) : ?>
            <div class="col-md-3">
                <div class="card mt-3 mb-3">
                    <img class="card-img-top" src="<?= base_url('assets/img/cover_buku/' . $bku->cover_buku) ?>" width="200" height="300" class="img-fluid">
                    <div class="card-body card-deskripsi">
                        <h5 class="card-title p-3"><?= $bku->judul_buku; ?></h5>
                        <p class="card-text p-3"><?= $bku->isbn_buku; ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal2">Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

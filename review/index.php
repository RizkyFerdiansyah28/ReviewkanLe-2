<?php 

include 'layout/header.php';

?>


<section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Jelajahi Film Terbaru</h1>
            <p class="lead text-body-secondary">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Reprehenderit perspiciatis nemo, fugit ea molestias, dolor vitae
              quae ab consectetur pariatur temporibus totam laudantium esse
              dignissimos cum recusandae commodi itaque delectus obcaecati dicta
              aliquid? Laboriosam, incidunt animi dignissimos maiores inventore
              nostrum vitae distinctio nisi fuga quibusdam placeat sit facilis
              possimus voluptatum.
            </p>
            <p>
              <a href="#" class="btn btn-primary my-2">Terbaru</a>
              <a href="#" class="btn btn-secondary my-2">Terbaik</a>
            </p>
          </div>
        </div>
      </section>

      <main>
      <div class="container">
        <div class="album py-3 bg-body-tertiary">
          <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <div class="col">
                <div class="card shadow-sm">
                <?php foreach ($data_review as $review) : ?>
                  <img
                    src="./foto/breaking-bad.jpeg"
                    class="bd-placeholder-img card-img-top"
                    width="100%"
                    height="225"
                    alt=""
                    srcset=""
                  />
                  <div class="card-body">
                    <h1><?= $review['judul_film']; ?></h1>
                    <p class="card-text">
                      
                    <?= $review['ulasan']; ?>
                    </p>
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm">
                          <a href="detail-review.php?id_review=<?= $review['id_review']; ?>">baca selengkapnya</a>
                        </button>
                      </div>
                      <small class="text-body-secondary"><?= date('d F Y', strtotime($review['tanggal'])); ?></small>
                    </div>
                    <?php  endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </main>


  <!-- <div class="container mt-5">
    <h1>ReviewkanLe</h1>

    <a href="tambah-review.php" class="btn btn-success"> Tambah</a>
    <table class="table table-striped table-bordered mt-3">
      <thead>
        <tr>
          <th class="text-center">No</th>
          <th class="text-center">Judul</th>
          <th class="text-center">Tanggal Rilis</th>
          <th class="text-center">Genre</th>
          <th class="text-center">Review</th>
          <th class="text-center">Rating</th>
          <th class="text-center">Aksi</th>
        </tr>
      </thead>

      <tbody>
        <?php $no = 1;?>
        <?php foreach ($data_review as $review) : ?>
        <tr>
          <td class="text-center"><?= $no++; ?></td>
          <td class="text-center"><?= $review['judul_film']; ?></td>
          <td class="text-center"><?= date('d F Y', strtotime($review['tanggal'])); ?></td>
          <td class="text-center"><?= $review['genre']; ?></td>
          <td class="text-start"><?= $review['ulasan']; ?></td>
          <td class="text-center"><?= $review['rating']; ?></td>
          <td width="15%" class="text-center">
            <a href="edit-review.php?id_review=<?= $review['id_review']; ?>" class="btn btn-primary">Edit</a>
            <a href="hapus-review.php?id_review=<?= $review['id_review']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus review')">Hapus</a>
          </td>
        </tr>
        <?php  endforeach; ?>
      </tbody>
    </table>
  </div> -->
  
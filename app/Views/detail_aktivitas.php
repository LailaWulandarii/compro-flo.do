<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?> <article>
  <?php
  $lang = session()->get('lang') ?? 'id';
  ?>

  <section class="section aktivitas" id="aktivitas" aria-label="aktivitas">
    <div class="container">
      <h1 class="h1 section-title text-center" style="margin-bottom: 10px; font-size: 4rem;">
        <span class="has-before"> <?= $lang === 'id' ? $aktivitas['judul_aktivitas_id'] : $aktivitas['judul_aktivitas_en'] ?>
        </span>
      </h1>
      <div class="container" style="margin-top: 40px;">
        <ul class="blog-list">
          <li>
            <div class="blog-card large">
              <figure class=" card-banner large-banner">
                <img src="<?= base_url('assets/img/aktivitas/' . $aktivitas['foto_aktivitas']) ?>"
                  alt="<?= $lang === 'id' ? $aktivitas['alt_aktivitas_id'] : $aktivitas['alt_aktivitas_en'] ?>"
                  class="img-cover" loading="lazy">
              </figure>
              <div class="card-content">
                <a href="#" class="tag">
                  <?= $lang === 'id' ? $aktivitas['nama_kategori_id'] : $aktivitas['nama_kategori_en'] ?>
                </a>
              </div>

            </div>
            <p class="card-text">
              <?= $lang === 'id' ? $aktivitas['deskripsi_aktivitas_id'] : $aktivitas['deskripsi_aktivitas_en'] ?>
            </p>
          </li>
          <li>
            <div class="blog-card">
              <figure class="card-banner standard-banner">
                <img src="<?= base_url('assets/img/aktivitas/' . $aktivitas['foto_aktivitas']) ?>"
                  alt="<?= $lang === 'id' ? $aktivitas['alt_aktivitas_id'] : $aktivitas['alt_aktivitas_en'] ?>"
                  class="img-cover" loading="lazy">
              </figure>
              <div class="card-content standard-card">

                <div class="wrapper">
                  <a href="#" class="tag">
                    <?= $lang === 'id' ? $aktivitas['nama_kategori_id'] : $aktivitas['nama_kategori_en'] ?>
                  </a>
                </div>
                <h3 class="h3">
                  <a>
                    <?= $lang === 'id' ? $aktivitas['judul_aktivitas_id'] : $aktivitas['judul_aktivitas_en'] ?>
                  </a>
                </h3>
              </div>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </section>


</article>
<?= $this->endSection(); ?>
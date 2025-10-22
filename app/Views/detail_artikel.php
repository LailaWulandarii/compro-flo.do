<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?> <article>
  <?php
  $lang = session()->get('lang') ?? 'id';
  ?>
  <section class="section aktivitas" id="aktivitas" aria-label="aktivitas">
    <div class="container">
      <h1 class="h1 section-title text-center" style="margin-bottom: 10px; font-size: 4rem;">
        <span class="has-before"><?= $lang === 'id' ? $artikel['judul_artikel_id'] : $artikel['judul_artikel_en'] ?></span>
      </h1>
      <div class="container" style="margin-top: 20px;">
        <div class="card-content detail-artikel">
          <img src="<?= base_url('assets/img/artikel/' . $artikel['foto_artikel']) ?>"
            alt="<?= $lang === 'id' ? $artikel['alt_artikel_id'] : $artikel['alt_artikel_en'] ?>"
            class="artikel-img" loading="lazy">

          <div class="wrapper">
            <a href="#" class="tag">
              <?= $lang === 'id' ? $artikel['nama_kategori_id'] : $artikel['nama_kategori_en'] ?>
            </a>
            <a href="#" class="publish-date">
              <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
              <span class="span"><?= date('d F Y', strtotime($artikel['created_at'])) ?></span>
            </a>
          </div>
          <p class="card-text">
            <?= $lang === 'id' ? $artikel['deskripsi_artikel_id'] : $artikel['deskripsi_artikel_en'] ?>
          </p>
        </div>
      </div>
    </div>
  </section>


</article>
<?= $this->endSection(); ?>
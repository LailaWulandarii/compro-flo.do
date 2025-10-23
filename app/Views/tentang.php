<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<article>
  <section class="section tentang" id="tentang" aria-label="tentang" style="background-color: white; margin-top: 50px">
    <div class="container">

      <figure class="tentang-banner">
        <img src="<?= base_url('assets/img/profil/' . $profil['foto_perusahaan']); ?>" alt="<?= $lang == 'id' ? $profil['alt_foto_perusahaan_id'] : $profil['alt_foto_perusahaan_en']; ?>" style="border-radius: 30px;" width="355" height="356"
          loading="lazy" alt="tentang banner" class="w-100">
      </figure>

      <div class="tentang-content">
        <h1 class="h1 section-title" style="color: black; margin-bottom: 4px;">
          <span class="has-before"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></span>
        </h1>
        <p class="section-subtitle" style="margin-bottom: 20px;">
          <?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?>
        </p>
        <p class="card-text">
          <?= $lang == 'id' ? $profil['deskripsi_perusahaan_id'] : $profil['deskripsi_perusahaan_en']; ?>
        </p>
        <br>
      </div>

    </div>

  </section>
</article>
<?= $this->endSection(); ?>
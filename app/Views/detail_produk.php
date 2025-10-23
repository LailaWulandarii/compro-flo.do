<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php
$lang = session()->get('lang') ?? 'id';
?>

<section class="section aktivitas" id="aktivitas" aria-label="aktivitas" style="background-color: white  ;">
  <div class="container">
    <h1 class="h1 section-title text-center" style="margin-bottom: 40px; font-size: 4rem;">
      <span class="has-before"><?= $lang === 'id' ? $product['nama_produk_id'] : $product['nama_produk_en'] ?></span>
    </h1>
    <div class="container">
      <ul class="blog-list">
        <li>
          <div class="blog-card large">

            <figure class="card-banner produk-banner">
              <img src="<?= base_url('assets/img/produk/' . $product['foto_produk']) ?>"
                alt="<?= $lang === 'id' ? $product['alt_produk_id'] : $product['alt_produk_en'] ?>" class="img-cover">
            </figure>

          </div>
        </li>

        <li>
          <div class="blog-card">

            <div class="card-content">
              <p><?= $lang === 'id' ? $product['deskripsi_produk_id'] : $product['deskripsi_produk_en'] ?></p>
            </div>

          </div>
        </li>

      </ul>

    </div>
  </div>
</section>
<?= $this->endSection(); ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<article>

  <!-- 
        - #AKTIVITAS
      -->

  <section class="section aktivitas" id="aktivitas" aria-label="aktivitas">
    <div class="container">
      <h1 class="h1 section-title text-center" style="margin-bottom: 10px; font-size: 4rem;">
        <span class="has-before">Detail Produk</span>
      </h1>
      <p class="section-subtitle text-center" style="margin-bottom: 0px;">Berikut detail produk </p>
      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">
          <ul class="blog-list">
            <li>
              <div class="blog-card large">

                <figure class="card-banner">
                  <img src="./assets/img/blog-1.jpg" width="644" height="363" loading="lazy"
                    alt="Godaddy user flow solution..." class="img-cover">
                </figure>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="card-content">
                  <h3 class="h3 card-title">Nama Produk
                  </h3>
                  <p>Deskripsi Produk</p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>
    </div>
  </section>


</article>
<?= $this->endSection(); ?>
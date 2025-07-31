<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?> <article>

  <!-- 
        - #AKTIVITAS
      -->

  <section class="section aktivitas" id="aktivitas" aria-label="aktivitas">
    <div class="container">
      <h1 class="h1 section-title text-center" style="margin-bottom: 10px; font-size: 4rem;">
        <span class="has-before">Detail Aktivitas</span>
      </h1>
      <p class="section-subtitle text-center" style="margin-bottom: 0px;">Berikut detail aktivitas </p>
      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">
          <ul class="blog-list">

            <li>
              <div class="blog-card large">

                <figure class="card-banner large-banner">
                  <img src="./assets/img/hero1.png" width="644" height="363" loading="lazy"
                    alt="Godaddy user flow solution..." class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="wrapper">
                    <a href="#" class="tag">Development</a>
                  </div>

                  <h3>
                    <a href="#" class="card-title">Godaddy user flow solution...</a>
                  </h3>

                  <p class="card-text">
                    At Pixology we specialize in designing, building, shipping and scaling beautifu. At Pixology we
                    specialize in designing,
                    building, shipping and scaling beautiful.
                  </p>

                </div>

              </div>
            </li>
            <li>
              <div class="blog-card">

                <figure class="card-banner standard-banner">
                  <img src="./assets/img/blog-2.jpg" width="202" height="162" loading="lazy"
                    alt="Godaddy user flow solution for every individual" class="img-cover">
                </figure>

                <div class="card-content standard-card">

                  <div class="wrapper">
                    <a href="#" class="tag">Development</a>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Godaddy user flow solution for every individual</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner standard-banner">
                  <img src="./assets/img/blog-3.png" width="202" height="162" loading="lazy"
                    alt="Business solution for every individual" class="img-cover">
                </figure>

                <div class="card-content standard-card">

                  <div class="wrapper">
                    <a href="#" class="tag">Development</a>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Business solution for every individual</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner standard-banner">
                  <img src="./assets/img/blog-4.png" width="202" height="162" loading="lazy"
                    alt="How to gain pro experience ar figma update version" class="img-cover">
                </figure>

                <div class="card-content standard-card">

                  <div class="wrapper">
                    <a href="#" class="tag">Development</a>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">How to gain pro experience ar figma update version</a>
                  </h3>

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
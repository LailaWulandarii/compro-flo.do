<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?> <article>

  <!-- 
        - #AKTIVITAS
      -->

  <section class="section aktivitas" id="aktivitas" aria-label="aktivitas">
    <div class="container">
      <h1 class="h1 section-title text-center" style="margin-bottom: 10px; font-size: 4rem;">
        <span class="has-before">Detail Artikel</span>
      </h1>
      <p class="section-subtitle text-center" style="margin-bottom: 0px;">Berikut detail artikel </p>
      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">

          <div class="card-content detail-artikel">
            <img src="./assets/img/blog-2.jpg" alt="Godaddy user flow" class="artikel-img" loading="lazy">

            <div class="wrapper">
              <a href="#" class="tag">Development</a>
              <a href="#" class="publish-date">
                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                <span class="span">July 22, 2022</span>
              </a>
            </div>

            <h3>
              <a href="#" class="card-title">Godaddy user flow solution for every individual</a>
            </h3>

            <p class="card-text">
              At Pixology we specialize in designing, building, shipping, and scaling beautiful digital experiences
              that truly impact users and businesses alike.
            </p>
          </div>

        </div>
      </section>
    </div>
  </section>


</article>
<?= $this->endSection(); ?>
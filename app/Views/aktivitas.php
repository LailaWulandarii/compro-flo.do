<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?> <article>

  <!-- 
        - #AKTIVITAS
      -->

  <section class="section aktivitas" id="aktivitas" aria-label="aktivitas">
    <div class="container">
      <h1 class="h1 section-title text-center" style="margin-bottom: 10px; font-size: 4rem;">
        <span class="has-before">Aktivitas</span>
      </h1>
      <p class="section-subtitle text-center" style="margin-bottom: 40px;">Berikut aktivitas </p>

      <ul class="grid-list aktivitas-list">
        <li>
          <a href="detail aktivitas.html" class="aktivitas-link">
            <div class="aktivitas-card">
              <img src="./assets/img/hero1.png" class="aktivitas-img" width="100" loading="lazy"
                alt="aktivitas icon">

              <h3 class="h3">Workshop Merangkai</h3>
              <div class="meta-row">
                <p class="kategori">Kolaborasi</p>
              </div>
              <p class="deskripsi">
                Bersinergi dengan berbagai brand untuk menciptakan inovasi dan pengalaman baru.
              </p><a class="see-more" style="font-size: 1.3rem; margin-top: 10px;" href="detail aktivitas.html">Baca
                Selengkapnya</a>
            </div>
          </a>
        </li>

        <li>
          <a href="detail aktivitas.html" class="aktivitas-link">
            <div class="aktivitas-card">
              <img src="./assets/img/hero1.png" class="aktivitas-img" width="100" loading="lazy"
                alt="aktivitas icon">

              <h3 class="h3">Kolaborasi Brand</h3>
              <div class="meta-row">
                <p class="kategori">Kolaborasi</p>
              </div>
              <p class="deskripsi">
                Bersinergi dengan berbagai brand untuk menciptakan inovasi dan pengalaman baru.
              </p>
              <a class="see-more" style="font-size: 1.3rem; margin-top: 10px;" href="detail aktivitas.html">Baca
                Selengkapnya</a>
            </div>
          </a>
        </li>

        <li>
          <a href="detail aktivitas.html" class="aktivitas-link">
            <div class="aktivitas-card">
              <img src="./assets/img/hero1.png" class="aktivitas-img" width="100" loading="lazy"
                alt="aktivitas icon">

              <h3 class="h3">Flo.do x Amigo cake</h3>
              <div class="meta-row">
                <p class="kategori">Kolaborasi</p>
              </div>
              <p class="deskripsi">
                Bersinergi dengan berbagai brand untuk menciptakan inovasi dan pengalaman baru.
              </p><a class="see-more" style="font-size: 1.3rem; margin-top: 10px;" href="detail aktivitas.html">Baca
                Selengkapnya</a>
            </div>
          </a>
        </li>

        <li>
          <a href="detail aktivitas.html" class="aktivitas-link">
            <div class="aktivitas-card">
              <img src="./assets/img/hero1.png" class="aktivitas-img" width="100" loading="lazy"
                alt="aktivitas icon">

              <h3 class="h3">Flower Arrangement</h3>
              <div class="meta-row">
                <p class="kategori">Kolaborasi</p>
              </div>
              <p class="deskripsi">
                Bersinergi dengan berbagai brand untuk menciptakan inovasi dan pengalaman baru.
              </p><a class="see-more" style="font-size: 1.3rem; margin-top: 10px;" href="detail aktivitas.html">Baca
                Selengkapnya</a>
            </div>
          </a>
        </li>

      </ul>
    </div>
  </section>


</article>
<?= $this->endSection(); ?>
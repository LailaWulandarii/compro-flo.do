<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<article>

  <!-- 
        - #HERO
      -->

  <section class="section hero" id="beranda" aria-label="hero">
    <div class="container">
      <div class="hero-content">
        <h1 class="h1 hero-title">
          Bloom your <span class="has-before">Memories</span> with us
        </h1>
      </div>

      <div class="hero-carousel">
        <div class="slide active">
          <img src="./assets/img/hero1.png" alt="Slide 1">
        </div>
        <div class="slide">
          <img src="./assets/img/hero2.png" alt="Slide 2">
        </div>
        <div class="slide">
          <img src="./assets/img/hero3.png" alt="Slide 3">
        </div>
      </div>
    </div>
  </section>

  <section class="section tentang has-bg-image" id="tentang" aria-label="tentang"
    style="background-color: var(--light-pink)">
    <div class="container">

      <figure class="tentang-banner">
        <img src="./assets/img/tentang-1.jpg" style="border-radius: 30px;" width="355" height="356"
          loading="lazy" alt="tentang banner" class="w-100">
      </figure>

      <div class="tentang-content">

        <p class="section-subtitle has-before">Tentang</p>

        <h2 class="h2 section-title">
          <span class="has-before">Flo.do |</span>
        </h2>
        <p class="card-text">Florist adalah penyedia dekorasi bunga dan interior yang
          menghadirkan keindahan alami
          ke dalam ruang
          Anda. Dengan sentuhan artistik dan pengalaman profesional, kami telah dipercaya oleh ratusan klien untuk
          menciptakan suasana yang elegan dan penuh makna.</p>
        <br>
        <a class="see-more" style="font-size: 1.6rem;" href="tentang.html">Baca Selengkapnya</a>
      </div>

    </div>
  </section>

  <!-- 
        - #PRODUK
      -->

  <section class=" section produk" id="produk" aria-label="produk">
    <div class="container">

      <p class="section-subtitle has-before text-left">Produk</p>
      <div class="row header-row">
        <h2 class="h2 section-title text-left">
          Temukan produk <span class="has-before">terbaik</span> kami
        </h2>
        <a class="h2 section-title text-right see-more" href="produk.html">Lihat Selengkapnya</a>
      </div>

      <ul class="grid-list">

        <li>
          <div class="produk-card">

            <figure class="card-banner img-holder" style="--width: 835; --height: 429;">
              <img src="./assets/img/premium fresh-4.jpg" width="835" height="429" loading="lazy"
                alt="Premium Fresh Flowers" class="img-cover">
            </figure>

            <div class="card-content">
              <h4 class="h4">
                <a href="detail produk.html" class="card-title">Premium Fresh Flowers</a>
              </h4>
            </div>

          </div>
        </li>

        <li>
          <div class="produk-card">

            <figure class="card-banner img-holder" style="--width: 416; --height: 429;">
              <img src="./assets/img/fresh flowers-1.jpg" width="416" height="429" loading="lazy"
                alt="Fresh Flowers" class="img-cover">
            </figure>

            <div class="card-content">
              <h4 class="h4">
                <a href="detail produk.html" class="card-title">Fresh Flowers</a>
              </h4>
            </div>

          </div>
        </li>

        <li>
          <div class="produk-card">

            <figure class="card-banner img-holder" style="--width: 416; --height: 429;">
              <img src="./assets/img/artificial flowers-1.jpg" width="416" height="429" loading="lazy"
                alt="Artificial Flowers" class="img-cover">
            </figure>

            <div class="card-content">
              <h4 class="h4">
                <a href="detail produk.html" class="card-title">Artificial Flowers</a>
              </h4>
            </div>
          </div>
        </li>

        <li>
          <div class="produk-card">

            <figure class="card-banner img-holder" style="--width: 416; --height: 429;">
              <img src="./assets/img/hand bouqet-1.jpg" width="416" height="429" loading="lazy" alt="Hand Bouqet"
                class="img-cover">
            </figure>

            <div class="card-content">
              <h4 class="h4">
                <a href="detail produk.html" class="card-title">Hand Bouqet</a>
              </h4>
            </div>

          </div>
        </li>

        <li>
          <div class="produk-card">

            <figure class="card-banner img-holder" style="--width: 416; --height: 429;">
              <img src="./assets/img/standing flowers-1.jpg" width="416" height="429" loading="lazy"
                alt="standing flowers" class="img-cover">
            </figure>

            <div class="card-content">
              <h4 class="h4">
                <a href="detail produk.html" class="card-title">Standing Flowers</a>
              </h4>
            </div>

          </div>
        </li>

      </ul>

    </div>
  </section>

  <!-- 
        - #AKTIVITAS
      -->

  <section class="section aktivitas" id="aktivitas" aria-label="aktivitas">
    <div class="container">
      <p class="section-subtitle has-before text-left">Aktivitas</p>

      <div class="row header-row">
        <h2 class="h2 section-title text-left">Aktivitas <span class="has-before">menarik</span> kami</h2>
        <a href="aktivitas.html" class="h2 section-title text-right see-more">Lihat Selengkapnya</a>
      </div>
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

              <h3 class="h3">Flower Arrangement</h3>
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

      </ul>

    </div>
  </section>

  <!-- 
        - #blog
      -->

  <section class="section blog" id="artikel" aria-label="artikel">
    <div class="container">

      <p class="section-subtitle text-center has-before">Artikel</p>

      <h2 class="h2 section-title text-center">
        Jelajahi artikel <span class="has-before">ter-populer</span>
      </h2>
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
                <div class="publish-date">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span" style="font-size: 1.5rem;">July 22, 2022</span>
                </div>
              </div>


              <h3>
                <a href="#" class="card-title" style="margin-top: 10px;">Godaddy user flow solution...</a>
              </h3>

              <p class="card-text">
                At Pixology we specialize in designing, building, shipping and scaling beautifu. At Pixology we
                specialize in designing,
                building, shipping and scaling beautiful.
              </p>
              </p><a class="see-more" style="font-size: 1.3rem; margin-top: 10px;" href="detail artikel.html">Baca
                Selengkapnya</a>
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



  <!-- 
        - #KONTAK
      -->

  <section class="section blog" id="kontak" aria-label="kontak">
    <div class="container">

      <p class="section-subtitle text-center has-before">Kontak</p>
      <p class="section-subtitle text-center"
        style="margin-bottom: 40px; margin-top: 10px;color: var(--raisin-black-1);">Hubungi
        kami untuk menerima
        penawaran
        terbaik </p>
      <ul class="blog-list">

        <li>
          <div class="map-container">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.724507302189!2d111.9013767759053!3d-7.601316592387556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e784b0027a0743b%3A0xd34e088a9b19702c!2sFlodo%20(Florist%20%26%20Self%20Photo%20Studio)%20Nganjuk!5e0!3m2!1sid!2sid!4v1690000000000!5m2!1sid!2sid"
              loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen>
            </iframe>
          </div>

        </li>

        <li>
          <div class="blog-card">

            <div class="card-content">

              <div class="wrapper">
                <a href="#" class="tag ">Hubungi Kami</a>
              </div>

              <h4>
                <a style="margin-bottom: 20px; font-weight: 500;" href="#">Kami siap membantu anda dengan layanan
                  terbaik</a>
              </h4>
              <div class="social-list">
                <div class="social-member">
                  <div class="circle-icon">
                    <ion-icon name="logo-instagram" aria-hidden="true"></ion-icon>
                  </div>
                  <div class="member-info">
                    <h4>Instagram</h4>
                    <p>Florist & UI Designer</p>
                  </div>
                </div>

                <div class="social-member">
                  <div class="circle-icon">
                    <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
                  </div>
                  <div class="member-info">
                    <h4>Lokasi</h4>
                    <p>Workshop Coordinator</p>
                  </div>
                </div>

                <div class="social-member">
                  <div class="circle-icon">
                    <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                  </div>
                  <div class="member-info">
                    <h4>Kontak</h4>
                    <p>Event Stylist</p>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </li>


      </ul>
    </div>
  </section>

</article>

<?= $this->endSection(); ?>
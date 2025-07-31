<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<article>


  <section class=" section produk" id="produk" aria-label="produk">
    <div class="container">
      <h1 class="h1 section-title text-center" style="margin-bottom: 10px; font-size: 4rem;">
        <span class="has-before">Produk</span>
      </h1>
      <p class="section-subtitle text-center" style="margin-bottom: 50px;">Temukan produk unggulan </p>


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
</article>
<?= $this->endSection(); ?>
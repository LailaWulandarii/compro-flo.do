<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<article>

  <!-- 
        - #AKTIVITAS
      -->

  <section class="section aktivitas" id="aktivitas" aria-label="aktivitas">
    <div class="container">
      <h1 class="h1 section-title text-center" style="margin-bottom: 10px; font-size: 4rem;">
        <span class="has-before">Kontak</span>
      </h1>
      <p class="section-subtitle text-center" style="margin-bottom: 0px;">Hubungi kami untuk menerima penawaran
        terbaik </p>
      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">
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
                    <a style="margin-bottom: 20px; font-weight: 500;" href="#">Kami siap membantu anda dengan
                      layanan
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
    </div>
  </section>


</article>
<?= $this->endSection(); ?>
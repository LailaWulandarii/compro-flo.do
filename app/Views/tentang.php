<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<article>
  <section class="section tentang has-bg-image" id="tentang" aria-label="tentang"
    style="background-image: url('./assets/img/background-1.jpg')">
    <div class="container">
      <div class="tentang-content">
        <h1 class="h1 section-title">
          <span class="has-before" style="color: black;">Tentang</span>
        </h1>
        <h2 class="text-c">Flo.do</h2>
      </div>
    </div>
    <div class="container">
      <figure class="tentang-banner">
        <img src="./assets/img/tentang-1.jpg" style="border-radius: 30px;" width="355" height="356"
          loading="lazy" alt="tentang banner" class="w-100">
      </figure>

      <div class="tentang-content">

        <p class="card-text">Flo.do adalah florist dan penyedia dekorasi interior yang menghadirkan keindahan alami
          ke dalam ruang Anda. Kami menggabungkan estetika bunga dengan desain ruang yang harmonis, menciptakan
          atmosfer yang elegan dan penuh makna untuk berbagai kebutuhan—mulai dari pernikahan, acara spesial, hingga
          interior hunian dan kantor.</p><br>
        <p class="card-text">
          Dengan sentuhan artistik dan pengalaman profesional, Flo.do telah dipercaya oleh ratusan klien. Kami
          merancang setiap proyek dengan perhatian terhadap detail, mengutamakan keunikan dan kenyamanan visual.
          Melalui kolaborasi kreatif dan layanan personal, kami berkomitmen menjadikan setiap ruang lebih hidup dan
          berkesan.</p>
      </div>

    </div>
  </section>
</article>

<?= $this->endSection(); ?>
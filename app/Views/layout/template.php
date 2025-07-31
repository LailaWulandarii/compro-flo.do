<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flo.do - Blooming your memories</title>

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.ico" type="image/svg+xml">

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- 
    - preload img
  -->
    <link rel="preload" as="image" href="./assets/img/hero-banner.png">

</head>

<body id="top">

    <!-- 
    - #HEADER
  -->


    <header class="header" data-header>
        <div class="container">

            <a href="#" class="logo">Flo.do</a>

            <nav class="navbar" data-navbar>

                <div class="wrapper">
                    <a href="#" class="logo">Flo.do</a>

                    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">

                    <li class="navbar-item">
                        <a href="index.html" class="navbar-link" data-nav-link>Beranda</a>
                    </li>

                    <li class="navbar-item">
                        <a href="tentang.html" class="navbar-link" data-nav-link>Tentang</a>
                    </li>

                    <li class="navbar-item">
                        <a href="produk.html" class="navbar-link" data-nav-link>Produk</a>
                    </li>

                    <!-- Dropdown Aktivitas -->
                    <li class="navbar-item dropdown">
                        <a href="#" class="navbar-link dropdown-toggle" data-nav-link>
                            <span>Aktivitas</span>
                            <ion-icon name="chevron-down-outline" class="chevron-icon" aria-hidden="true"></ion-icon>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="aktivitas.html">Workshop</a></li>
                            <li><a href="aktivitas.html">Kreasi</a></li>
                            <li><a href="aktivitas.html">Komunitas</a></li>
                        </ul>
                    </li>


                    <!-- Dropdown blog -->
                    <li class="navbar-item dropdown">
                        <a href="#" class="navbar-link dropdown-toggle" data-nav-link>
                            <span>Artikel</span>
                            <ion-icon name="chevron-down-outline" class="chevron-icon" aria-hidden="true"></ion-icon>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="artikel.html">Teknik</a></li>
                            <li><a href="artikel.html">Visual</a></li>
                            <li><a href="artikel.html">Cerita</a></li>
                        </ul>
                    </li>

                    <li class="navbar-item">
                        <a href="kontak.html" class="navbar-link" data-nav-link>Kontak</a>
                    </li>

                    <!-- Dropdown Bahasa -->
                    <li class="navbar-item dropdown">
                        <a href="#" class="navbar-link dropdown-toggle" data-nav-link>
                            <span>Bahasa</span>
                            <ion-icon name="chevron-down-outline" class="chevron-icon" aria-hidden="true"></ion-icon>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#id"> Indonesia</a></li>
                            <li><a href="#en"> English</a></li>
                        </ul>
                    </li>

                </ul>

            </nav>
            <div class="overlay" data-nav-toggler data-overlay></div>

        </div>
    </header>
    <main>
        <?= $this->renderSection('content'); ?>

    </main>


    <!-- 
    - #FOOTER
  -->

    <footer class="footer">
        <div class="container">

            <div class="footer-top section">

                <div class="footer-brand">
                    <a href="#" class="logo" style="color: white;">Flo.do</a>
                </div>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Tautan Berguna</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Beranda</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Tentang</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Artikel</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Produk</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Kontak</a>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Artikel Kami</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Teknik</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Visual</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Cerita</a>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Ikuti Kami di</p>
                    </li>
                    <li>
                        <a href="#" class="footer-link">
                            <ion-icon name="logo-instagram" class="social-icon" aria-hidden="true"></ion-icon>
                            Instagram
                        </a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">
                            <ion-icon name="logo-tiktok" class="social-icon" aria-hidden="true"></ion-icon>
                            TikTok
                        </a>
                    </li>

                </ul>
                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Marketplace </p>
                    </li>

                    <li>
                        <p href="#" class="footer-link">No market place available</p>
                    </li>

                </ul>

            </div>

            <div class="footer-bottom">

                <p class="copyright">
                    &copy; 2022 Pixology. All Rights Reserved by codewithsadee
                </p>

                <ul class="footer-bottom-list">

                    <li>
                        <a href="#" class="footer-bottom-link">Terms and conditions</a>
                    </li>

                    <li>
                        <a href="#" class="footer-bottom-link">Privacy policy</a>
                    </li>

                    <li>
                        <a href="#" class="footer-bottom-link">Login / Signup</a>
                    </li>

                </ul>

            </div>

        </div>
    </footer>





    <!-- 
    - #BACK TO TOP
  -->

    <a href="#top" class="back-top-btn has-after active" aria-label="back to top" data-back-top-btn>
        <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
    </a>





    <!-- 
    - custom js link
  -->
    <script src="./assets/js/script.js" defer></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        let slides = document.querySelectorAll('.slide');
        let current = 0;

        setInterval(() => {
            slides[current].classList.remove('active');
            current = (current + 1) % slides.length;
            slides[current].classList.add('active');
        }, 3000); // ganti slide tiap 3 detik
    </script>

</body>

</html>
<?php
// Ambil bahasa yang disimpan di session
$lang = session()->get('lang') ?? 'id'; // Default ke 'id' jika tidak ada di session

$current_url = uri_string();

// Ambil query string (misalnya ?keyword=sukses)
$query_string = $_SERVER['QUERY_STRING'] ?? ''; // Pastikan tidak ada error jika query string kosong

// Simpan segmen bahasa saat ini
$segments = explode('/', $current_url);
$lang_segment = $segments[0] ?? ''; // Ambil segmen pertama dari URL

// Pastikan hanya 'en' atau 'id' yang dianggap sebagai segmen bahasa
if ($lang_segment !== 'en' && $lang_segment !== 'id') {
    $lang_segment = 'id'; // Default ke 'id' jika segmen bahasa tidak ada
}

// Definisikan tautan untuk setiap halaman berdasarkan bahasa
$homeLink    = ($lang_segment === 'en') ? '/' : '/';
$aboutLink   = ($lang_segment === 'en') ? 'about' : 'tentang';
$contactLink = ($lang_segment === 'en') ? 'contact' : 'kontak';
$articleLink = ($lang_segment === 'en') ? 'article' : 'artikel';
$activityLink = ($lang_segment === 'en') ? 'activity' : 'aktivitas';
$productLink = ($lang_segment === 'en') ? 'product' : 'produk';

// Ambil bagian dari URL tanpa segmen bahasa
array_shift($segments); // Hapus segmen bahasa dari array
$url_without_lang = implode('/', $segments); // Gabungkan kembali sisa URL

// Tentukan bahasa yang ingin digunakan
$new_lang = ($lang_segment === 'en') ? 'id' : 'en';

// Mapping penggantian segmen dalam URL berdasarkan bahasa yang aktif
$replace_map = [
    'tentang' => 'about',
    'kontak' => 'contact',
    'artikel' => 'article',
    'aktivitas' => 'activity',
    'produk' => 'product',
];

foreach ($replace_map as $id => $en) {
    if ($lang_segment === 'en') {
        // Jika bahasa saat ini 'en', ubah ke 'id'
        $url_without_lang = str_replace($en, $id, $url_without_lang);
    } else {
        // Jika bahasa saat ini 'id', ubah ke 'en'
        $url_without_lang = str_replace($id, $en, $url_without_lang);
    }
}

// Buat URL yang bersih
$clean_url = ($url_without_lang !== '') ? "$new_lang/$url_without_lang" : $new_lang;

// Gabungkan query string jika ada
if (!empty($query_string)) {
    $clean_url .= '?' . $query_string;
}

// Tautan Bahasa Inggris & Indonesia
$english_url = base_url($clean_url);
$indonesia_url = base_url($clean_url);

// Tautan Kategori Artikel untuk Navbar
$categoryLinks = [];
if (!empty($categories)) {
    foreach ($categories as $cat) {
        $slug = ($lang === 'id') ? $cat['slug_kategori_id'] : $cat['slug_kategori_en'];
        $name = ($lang === 'id') ? $cat['nama_kategori_id'] : $cat['nama_kategori_en'];
        $categoryLinks[] = [
            'url' => base_url("$lang/$articleLink/$slug"),
            'name' => $name
        ];
    }
}

// Tautan Kategori Aktivitas untuk Navbar
$kategoriAktivitasLinks = [];
if (!empty($categoriesAktivitas)) {
    foreach ($categoriesAktivitas as $cat) {
        $slug = ($lang === 'id') ? $cat['slug_kategori_id'] : $cat['slug_kategori_en'];
        $name = ($lang === 'id') ? $cat['nama_kategori_id'] : $cat['nama_kategori_en'];
        $kategoriAktivitasLinks[] = [
            'url' => base_url("$lang/$activityLink/$slug"),
            'name' => $name
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="<?= session()->get('lang') ?? 'id'; ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flo.do - Blooming your memories</title>

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="<?= base_url('favicon.ico'); ?>" type="image/svg+xml">

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

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
                        <a href="<?= base_url($lang . '/') ?>"
                            class="navbar-link <?= isset($data['activeMenu']) && $data['activeMenu'] === 'home' ? 'active' : '' ?>"
                            data-nav-link>
                            <?= lang('bahasa.Beranda'); ?>
                        </a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?= base_url($lang . '/tentang') ?>"
                            class="navbar-link <?= isset($data['activeMenu']) && $data['activeMenu'] === 'tentang' ? 'active' : '' ?>"
                            data-nav-link>
                            <?= lang('bahasa.Tentang'); ?>
                        </a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?= base_url($lang . '/produk') ?>"
                            class="navbar-link <?= isset($data['activeMenu']) && $data['activeMenu'] === 'produk' ? 'active' : '' ?>"
                            data-nav-link>
                            <?= lang('bahasa.Produk'); ?>
                        </a>
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
                        <a href="<?= base_url($lang . '/kontak') ?>"
                            class="navbar-link <?= isset($data['activeMenu']) && $data['activeMenu'] === 'kontak' ? 'active' : '' ?>"
                            data-nav-link>
                            <?= lang('bahasa.Kontak'); ?>
                        </a>
                    </li>

                    <!-- Dropdown Bahasa -->
                    <li class="navbar-item dropdown">
                        <a href="#" class="navbar-link dropdown-toggle" data-nav-link>
                            <span><?= ($lang === 'en') ? 'English' : 'Indonesia'; ?></span>
                            <ion-icon name="chevron-down-outline" class="chevron-icon" aria-hidden="true"></ion-icon>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?= $indonesia_url; ?>" class="<?= $lang === 'id' ? 'active disabled' : ''; ?>">
                                    Indonesia
                                </a>
                            </li>
                            <li>
                                <a href="<?= $english_url; ?>" class="<?= $lang === 'en' ? 'active disabled' : ''; ?>">
                                    English
                                </a>
                            </li>
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
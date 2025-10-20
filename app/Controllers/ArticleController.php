<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;
use App\Models\CategoryActivityModel;
use App\Models\CategoryArtikelModel;
use App\Models\KontakModel;
use App\Models\MarketplaceModel;
use App\Models\MetaModel;
use App\Models\ProfilModel;
use App\Models\SosmedModel;

class ArticleController extends BaseController
{
    public function index($slugCategory = null)
    {
        $data['activeMenu'] = 'article';
        $lang = session()->get('lang') ?? 'id'; // Mendapatkan bahasa aktif dari sesi

        // Inisialisasi model
        $categoryModel = new CategoryArtikelModel();
        $artikelModel = new ArtikelModel();
        $metaModel = new MetaModel();
        $profilModel = new ProfilModel();
        $dataProfil = $profilModel->first();

        // Cek apakah kategori berdasarkan slug ditemukan, sesuai dengan bahasa
        $category = $slugCategory ? $categoryModel->getCategoryBySlug($slugCategory) : null;


        $categoryId = $category ? $category['id_kategori_artikel'] : null;

        // $categorySlugCheck = ($lang === 'id') ? $category['slug_kategori_id'] : $category['slug_kategori_en'];

        $canonical = base_url("$lang/" . ($lang === 'id' ? 'artikel' : 'article') . '/' . $slugCategory);

        // Jika kategori tidak ditemukan, redire    ct ke halaman utama artikel
        if ($slugCategory && !$category) {
            log_message('warning', 'Kategori tidak ditemukan untuk slug: ' . $slugCategory);
            return redirect()->to(base_url($lang === 'id' ? 'id/artikel' : 'en/article'));
        }

        // Validasi slug dan redirect ke slug yang benar jika tidak sesuai dengan bahasa yang dipilih
        if ($category) {
            $correctSlug = $lang === 'id' ? $category['slug_kategori_id'] : $category['slug_kategori_en'];

            // Jika slug yang digunakan tidak sesuai, redirect ke slug yang benar
            if ($slugCategory !== $correctSlug) {
                log_message('info', 'Slug tidak sesuai, mengarahkan ke slug yang benar: ' . $correctSlug);
                return redirect()->to(base_url($lang === 'id' ? "id/artikel/$correctSlug" : "en/article/$correctSlug"));
            }
        }

        // Ambil artikel berdasarkan kategori (jika ada)
        $perPage = 3;
        $allArticles = $artikelModel->getPaginatedArticles($categoryId, $lang, $perPage);
        $pager = $artikelModel->pager; // Ambil objek pagination
        // $allArticles = $artikelModel->getArticlesWithCategory($categoryId, $lang);

        $sideArticles = $artikelModel->getSideArticlesWithCategory($categoryId, $lang);

        // Ambil semua kategori untuk navigasi
        $categories = $categoryModel->getAllCategories($lang);
        $categoriess = $categoryModel->findAll();

        // Metadata halaman, prioritas dari kategori jika ada
        $meta = $metaModel->where('id_meta', '5')->first();
        $metaCategory = $category ? [
            'title_id' => $category['title_kategori_id'] ?? '',
            'title_en' => $category['title_kategori_en'] ?? '',
            'meta_desc_id' => $category['meta_desc_id'] ?? '',
            'meta_desc_en' => $category['meta_desc_en'] ?? ''
        ] : null;

        $kategoriModel = new CategoryArtikelModel();
        $kategoriAktivitasModel = new CategoryActivityModel();

        // Ambil data kategori artikel terbanyak
        $kategori_teratas = $kategoriModel->getKategoriTerbanyak();

        // Ambil data sosial media
        $sosmedModel = new SosmedModel();
        $sosmed = $sosmedModel->findAll();

        // Ambil data marketplace
        $marketplaceModel = new MarketplaceModel();
        $marketplace = $marketplaceModel->findAll();

        // Ambil data kontak
        $kontakModel = new KontakModel();
        $kontak = $kontakModel->first();

        $categoriesAktivitas = $kategoriAktivitasModel->findAll();

        // Ambil URL saat ini
        return view('artikel', [
            'lang' => $lang,
            'canonical' => $canonical,
            'allArticle' => $allArticles,
            'sideArticle' => $sideArticles,
            'kategori' => $categories,
            'categoryId' => $categoryId,
            'meta' => $meta,
            'metaCategory' => $metaCategory,
            'data' => $data,
            'profil' => $dataProfil,
            'kategori_teratas' => $kategori_teratas,
            'sosmed' => $sosmed,
            'marketplace' => $marketplace,
            'kontak' => $kontak,
            'pager' => $pager,
            'categoriesAktivitas' => $categoriesAktivitas,
            'categories' => $categoriess

        ]);
    }

    public function detail($categorySlug, $slug)
    {
        $data['activeMenu'] = 'article';
        $lang = session()->get('lang') ?? 'id';

        $articleModel = new ArtikelModel();
        $metaModel = new MetaModel();
        $profilModel = new ProfilModel();
        $categoryModel = new CategoryArtikelModel();
        $kategoriAktivitasModel = new CategoryActivityModel();
        $sosmedModel = new SosmedModel();
        $marketplaceModel = new MarketplaceModel();
        $kontakModel = new KontakModel();

        // Ambil artikel berdasarkan slug
        $artikel = $articleModel->getArtikelWithCategory($slug);

        if (!$artikel) {
            return redirect()->to('/')->with('error', 'Artikel tidak ditemukan');
        }

        // Ambil kategori dari artikel
        $category = $categoryModel->find($artikel['id_kategori_artikel']);
        if (!$category) {
            return redirect()->to('/')->with('error', 'Kategori artikel tidak ditemukan');
        }

        // Sisipkan nama & slug kategori ke array artikel
        $artikel['nama_kategori'] = $lang === 'id' ? $category['nama_kategori_id'] : $category['nama_kategori_en'];
        $artikel['slug_kategori'] = $lang === 'id' ? $category['slug_kategori_id'] : $category['slug_kategori_en'];

        // Redirect jika slug tidak sesuai bahasa
        $expectedSlug = $lang === 'id' ? $artikel['slug_artikel_id'] : $artikel['slug_artikel_en'];
        $expectedCategorySlug = $lang === 'id' ? $category['slug_kategori_id'] : $category['slug_kategori_en'];
        $urlPrefix = $lang === 'id' ? 'artikel' : 'article';

        if ($slug !== $expectedSlug || $categorySlug !== $expectedCategorySlug) {
            return redirect()->to("$lang/$urlPrefix/$expectedCategorySlug/$expectedSlug");
        }

        // Canonical URL
        $canonical = base_url("$lang/$urlPrefix/$expectedCategorySlug/$expectedSlug");

        // Artikel terkait dalam kategori yang sama (kecuali artikel ini)
        $allArticle = $articleModel
            ->join('tb_kategori_artikel', 'tb_kategori_artikel.id_kategori_artikel = tb_artikel.id_kategori_artikel', 'left')
            ->where('tb_artikel.id_artikel !=', $artikel['id_artikel'])
            ->where('tb_artikel.id_kategori_artikel', $artikel['id_kategori_artikel'])
            ->orderBy('tb_artikel.created_at', 'DESC')
            ->findAll(5);

        // Metadata
        $meta = $metaModel->where('id_meta', '9')->first();
        $metaCategory = [
            'title_id' => $artikel['title_artikel_id'] ?? '',
            'title_en' => $artikel['title_artikel_en'] ?? '',
            'meta_desc_id' => $artikel['meta_desc_id'] ?? '',
            'meta_desc_en' => $artikel['meta_desc_en'] ?? ''
        ];

        return view('detail_artikel', [
            'canonical' => $canonical,
            'lang' => $lang,
            'artikel' => $artikel,
            'category' => $category,
            'meta' => $meta,
            'metaCategory' => $metaCategory,
            'allArticle' => $allArticle,
            'data' => $data,
            'profil' => $profilModel->first(),
            'kategori_teratas' => $categoryModel->getKategoriTerbanyak(),
            'sosmed' => $sosmedModel->findAll(),
            'marketplace' => $marketplaceModel->findAll(),
            'kontak' => $kontakModel->first(),
            'categories' => $categoryModel->findAll(),
            'categoriesAktivitas' => $kategoriAktivitasModel->findAll(),
        ]);
    }
}

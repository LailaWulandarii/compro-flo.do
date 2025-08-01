<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ActivityModel;
use App\Models\CategoryActivityModel;
use App\Models\CategoryArtikelModel;
use App\Models\KontakModel;
use App\Models\MarketplaceModel;
use App\Models\MetaModel;
use App\Models\ProfilModel;
use App\Models\SosmedModel;

class ActivityController extends BaseController
{
    public function index($slugCategory = null)
    {
        $data['activeMenu'] = 'activity';
        $lang = session()->get('lang') ?? 'id';

        $categoryModel = new CategoryActivityModel();
        $aktivitasModel = new ActivityModel();
        $metaModel = new MetaModel();
        $profilModel = new ProfilModel();
        $dataProfil = $profilModel->first();

        // Cek apakah kategori berdasarkan slug ditemukan
        $category = $slugCategory ? $categoryModel->getCategoryBySlug($slugCategory) : null;

        // Redirect jika slug tidak valid
        if ($slugCategory && !$category) {
            return redirect()->to(base_url($lang === 'id' ? 'id/aktivitas' : 'en/activity'));
        }

        // Redirect jika slug tidak sesuai bahasa
        if ($category) {
            $correctSlug = $lang === 'id' ? $category['slug_kategori_id'] : $category['slug_kategori_en'];
            if ($slugCategory !== $correctSlug) {
                return redirect()->to(base_url($lang === 'id' ? "id/aktivitas/$correctSlug" : "en/activity/$correctSlug"));
            }
        }

        // Canonical redirect setelah slug valid
        $canonical = base_url($lang === 'id'
            ? ($category ? "id/aktivitas/{$category['slug_kategori_id']}" : "id/aktivitas")
            : ($category ? "en/activity/{$category['slug_kategori_en']}" : "en/activity"));

        if (current_url() !== $canonical) {
            return redirect()->to($canonical);
        }

        $categoryId = $category ? $category['id_kategori_aktivitas'] : null;
        $allAktivitas = $aktivitasModel->getArticlesWithCategory($categoryId, $lang);
        $categories = $categoryModel->getAllCategories($lang);
        $meta = $metaModel->where('id_meta', '4')->first();

        $metaCategory = $category ? [
            'title_id' => $category['title_kategori_id'] ?? '',
            'title_en' => $category['title_kategori_en'] ?? '',
            'meta_desc_id' => $category['meta_desc_id'] ?? '',
            'meta_desc_en' => $category['meta_desc_en'] ?? ''
        ] : null;

        $kategoriArtikelModel = new CategoryArtikelModel();
        $kategoriAktivitasModel = new CategoryActivityModel();
        $kategori_teratas = $kategoriArtikelModel->getKategoriTerbanyak();
        $categoriess = $kategoriArtikelModel->findAll();
        $categoriesAktivitas = $kategoriAktivitasModel->findAll();

        $sosmedModel = new SosmedModel();
        $sosmed = $sosmedModel->findAll();

        $marketplaceModel = new MarketplaceModel();
        $marketplace = $marketplaceModel->findAll();

        $kontakModel = new KontakModel();
        $kontak = $kontakModel->first();

        return view('aktivitas', compact(
            'lang',
            'canonical',
            'allAktivitas',
            'categories',
            'metaCategory',
            'categoryId',
            'meta',
            'data',
            'dataProfil',
            'kategori_teratas',
            'sosmed',
            'marketplace',
            'kontak',
            'categoriess',
            'categoriesAktivitas'
        ));
    }

    public function detail($categorySlug, $slug)
    {
        $data['activeMenu'] = 'activity';
        $lang = session()->get('lang') ?? 'id';

        $activityModel = new ActivityModel();
        $metaModel = new MetaModel();
        $profilModel = new ProfilModel();
        $kategoriAktivitasModel = new CategoryActivityModel();

        $dataProfil = $profilModel->first();
        $categoriesAktivitas = $kategoriAktivitasModel->findAll();
        $aktivitas = $activityModel->getActivityWithCategory($slug);
        $dataMeta = $metaModel->where('id_meta', '8')->first();

        if (!$aktivitas) {
            return redirect()->to('/')->with('error', 'artikel tidak ditemukan');
        }

        $categoryModel = new CategoryActivityModel();
        $category = $categoryModel->find($aktivitas['id_kategori_aktivitas']);
        if (!$category) {
            return redirect()->to('/')->with('error', 'Kategori artikel tidak ditemukan');
        }

        // Redirect jika slug tidak sesuai bahasa
        if (($lang === 'id' && $slug !== $aktivitas['slug_aktivitas_id']) || ($lang === 'en' && $slug !== $aktivitas['slug_aktivitas_en'])) {
            $correctedSlug = $lang === 'id' ? $aktivitas['slug_aktivitas_id'] : $aktivitas['slug_aktivitas_en'];
            $categorySlug = $lang === 'id' ? $category['slug_kategori_id'] : $category['slug_kategori_en'];
            $urlmenu = $lang === 'id' ? 'aktivitas' : 'activity';
            return redirect()->to("$lang/$urlmenu/$categorySlug/$correctedSlug");
        }

        $allAktivitas = $activityModel
            ->join('tb_kategori_aktivitas', 'tb_kategori_aktivitas.id_kategori_aktivitas = tb_aktivitas.id_kategori_aktivitas', 'left')
            ->where('tb_aktivitas.id_aktivitas !=', $aktivitas['id_aktivitas'])
            ->where('tb_aktivitas.id_kategori_aktivitas', $aktivitas['id_kategori_aktivitas'])
            ->orderBy('tb_aktivitas.created_at', 'DESC')
            ->findAll(5);

        $kategoriModel = new CategoryArtikelModel();
        $categories = $kategoriModel->findAll();
        $kategori_teratas = $kategoriModel->getKategoriTerbanyak();

        $sosmedModel = new SosmedModel();
        $sosmed = $sosmedModel->findAll();

        $marketplaceModel = new MarketplaceModel();
        $marketplace = $marketplaceModel->findAll();

        $kontakModel = new KontakModel();
        $kontak = $kontakModel->first();

        $metaCategory = [
            'title_id' => $aktivitas['title_aktivitas_id'] ?? '',
            'title_en' => $aktivitas['title_aktivitas_en'] ?? '',
            'meta_desc_id' => $aktivitas['meta_desc_id'] ?? '',
            'meta_desc_en' => $aktivitas['meta_desc_en'] ?? ''
        ];

        $categorySlugCheck = $lang === 'id' ? $category['slug_kategori_id'] : $category['slug_kategori_en'];
        $slugCheck = $lang === 'id' ? $aktivitas['slug_aktivitas_id'] : $aktivitas['slug_aktivitas_en'];
        $canonical = base_url("$lang/" . ($lang === 'id' ? 'aktivitas' : 'activity') . "/$categorySlugCheck/$slugCheck");

        if (current_url() !== $canonical) {
            return redirect()->to($canonical);
        }

        return view('detail_aktivitas', compact(
            'lang',
            'canonical',
            'aktivitas',
            'metaCategory',
            'category',
            'dataMeta',
            'allAktivitas',
            'data',
            'dataProfil',
            'kategori_teratas',
            'sosmed',
            'marketplace',
            'kontak',
            'categories',
            'categoriesAktivitas'
        ));
    }
}

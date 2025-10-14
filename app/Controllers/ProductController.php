<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;
use App\Models\CategoryActivityModel;
use App\Models\CategoryArtikelModel;
use App\Models\KategoriModel;
use App\Models\KontakModel;
use App\Models\MarketplaceModel;
use App\Models\MetaModel;
use App\Models\ProductModel;
use App\Models\ProfilModel;
use App\Models\SosmedModel;
use CodeIgniter\HTTP\ResponseInterface;

class ProductController extends BaseController
{
    public function index()
    {
        $metaModel = new MetaModel();
        $productModel = new ProductModel();
        $lang = session()->get('lang') ?? 'id';

        $canonical = base_url("$lang/" . ($lang === 'id' ? 'produk' : 'product'));

        // if (current_url() !== $canonical) {
        //     return redirect()->to($canonical);
        // }
        // Tentukan segment URL berdasarkan bahasa
        $productSegment = ($lang === 'id') ? 'produk' : 'product';



        // Ambil data produk dari database
        $products = $productModel->findAll();

        $profilModel = new ProfilModel();
        $dataProfil = $profilModel->first();

        $kategoriModel = new CategoryArtikelModel();
        $kategoriTeratas = $kategoriModel->getKategoriTerbanyak();
        $categories = $kategoriModel->findAll();

        $kategoriAktivitasModel = new CategoryActivityModel();
        $categoriesAktivitas = $kategoriAktivitasModel->findAll();

        // Ambil metadata halaman
        $dataMeta = $metaModel->where('id_meta', '3')->first();

        // Ambil data sosial media
        $sosmedModel = new SosmedModel();
        $sosmed = $sosmedModel->findAll();

        // Ambil data marketplace
        $marketplaceModel = new MarketplaceModel();
        $marketplace = $marketplaceModel->findAll();

        // Ambil data kontak
        $kontakModel = new KontakModel();
        $kontak = $kontakModel->first();


        $data = [
            'lang' => $lang,
            'meta' => $dataMeta,
            'canonical' => $canonical,
            'product' => $products,
            'productLink' => $productSegment,
            'activeMenu' => 'product',
            'profil' => $dataProfil,
            'kategori_teratas' => $kategoriTeratas,
            'sosmed' => $sosmed,
            'marketplace' => $marketplace,
            'kontak' => $kontak,
            'categories' => $categories,
            'categoriesAktivitas' => $categoriesAktivitas,
        ];

        return view('produk', $data);
    }

    // Method untuk menampilkan halaman detail produk
    public function detail($slug)
    {
        $lang = session()->get('lang') ?? 'id';
        $productModel = new ProductModel();

        // Cari produk berdasarkan slug ID atau EN
        $product = $productModel->where('slug_id', $slug)
            ->orWhere('slug_en', $slug)
            ->first();

        if (!$product) {
            log_message('error', 'Produk tidak ditemukan dengan slug: ' . $slug);
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Ambil data profil dan lainnya
        $profilModel = new ProfilModel();
        $dataProfil = $profilModel->first();

        $kategoriModel = new CategoryArtikelModel();
        $kategoriTeratas = $kategoriModel->getKategoriTerbanyak();
        $categories = $kategoriModel->findAll();

        $kategoriAktivitasModel = new CategoryActivityModel();
        $categoriesAktivitas = $kategoriAktivitasModel->findAll();

        $sosmedModel = new SosmedModel();
        $sosmed = $sosmedModel->findAll();

        $marketplaceModel = new MarketplaceModel();
        $marketplace = $marketplaceModel->findAll();

        $kontakModel = new KontakModel();
        $kontak = $kontakModel->first();

        $metaModel = new MetaModel();
        $metaData = $metaModel->where('id_meta', '7')->first();

        // Buat meta data khusus untuk produk
        $metaProduct = [
            'meta_title_id' => $product['title_id'],
            'meta_title_en' => $product['title_en'],
            'meta_desc_id'  => $product['meta_desc_id'],
            'meta_desc_en'  => $product['meta_desc_en'],
        ];

        // Canonical URL
        $slugCheck = ($lang === 'id') ? $product['slug_id'] : $product['slug_en'];
        $canonical = base_url("$lang/" . ($lang === 'id' ? 'produk' : 'product') . '/' . $slugCheck);

        // Kirim semua data ke view
        $data = [
            'canonical' => $canonical,
            'product' => $product,
            'lang' => $lang,
            'meta' => $metaData,
            'metaProduct' => $metaProduct,
            'activeMenu' => 'product',
            'profil' => $dataProfil,
            'kategori_teratas' => $kategoriTeratas,
            'sosmed' => $sosmed,
            'marketplace' => $marketplace,
            'kontak' => $kontak,
            'categories' => $categories,
            'categoriesAktivitas' => $categoriesAktivitas,
        ];

        return view('detail_produk', $data);
    }
}

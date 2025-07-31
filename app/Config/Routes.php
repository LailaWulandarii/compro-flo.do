<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', function () {
    return redirect()->to('/id/'); // Default redirect ke /en/home
});



$routes->group('id', function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('kontak', 'ContactController::index');
    $routes->get('tentang', 'AboutController::index');
    $routes->get('artikel', 'ArticleeController::index');
    $routes->get('artikel/(:segment)', 'ArticleeController::index/$1');
    $routes->get('artikel/(:segment)/(:segment)', 'ArticleeController::detail/$1/$2');

    $routes->get('aktivitas', 'ActivityController::index');
    $routes->get('aktivitas/(:segment)', 'ActivityController::index/$1');
    $routes->get('aktivitas/(:segment)/(:segment)', 'ActivityController::detail/$1/$2');

    $routes->get('produk', 'ProductController::index');
    $routes->get('produk/(:segment)', 'ProductController::detail/$1');
    $routes->get('(:segment)', 'ContentController::index');
    $routes->get('(:segment)/(:segment)', 'ContentController::category');
    $routes->get('(:segment)/(:segment)/(:segment)', 'ContentController::detail');
});

$routes->group('en', function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('contact', 'ContactController::index');
    $routes->get('about', 'AboutController::index');
    $routes->get('article', 'ArticleeController::index');
    $routes->get('article/(:segment)', 'ArticleeController::index/$1');
    $routes->get('article/(:segment)/(:segment)', 'ArticleeController::detail/$1/$2');

    $routes->get('activity', 'ActivityController::index');
    $routes->get('activity/(:segment)', 'ActivityController::index/$1');
    $routes->get('activity/(:segment)/(:segment)', 'ActivityController::detail/$1/$2');

    $routes->get('product', 'ProductController::index');
    $routes->get('product/(:segment)', 'ProductController::detail/$1');
    $routes->get('(:segment)', 'ContentController::index');
    $routes->get('(:segment)/(:segment)', 'ContentController::category');
    $routes->get('(:segment)/(:segment)/(:segment)', 'ContentController::detail');
});

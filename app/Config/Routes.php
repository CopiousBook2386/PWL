<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/produk', 'ProdukController::index');
$routes->get('produk', 'ProdukController::index');
$routes->get('/keranjang', 'TransaksiController::index');
$routes->get('main', 'Main::index');
$routes->get('main/(:any)', 'Main::index/$1');
$routes->get('front/(:any)', 'Main::front/$1');

$routes->get('/login', 'Login::index');
$routes->post('login-auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');

$routes->get('/test', function() {
    return 'CI4 OK';
});
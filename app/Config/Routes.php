<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Pages::index');
$routes->get('cari', 'Pages::cari');
$routes->get('tentang', 'Pages::tentang');
$routes->get('kontak', 'Pages::kontak');
$routes->get('bantuan', 'Pages::bantuan');
$routes->get('user/(:segment)', 'Pages::user/$1');

// users
$routes->group('users', ['filter' => 'noauth'], function ($routes) {
	$routes->match(['get', 'post'], '/', 'Users');
	$routes->get('index', 'Users::index');
	$routes->match(['get', 'post'], 'daftar', 'Users::daftar');
});

$routes->match(['get', 'post'], 'users/profile', 'Users::profile', ['filter' => 'auth']);

// barang
$routes->group('barang', ['filter' => 'auth'], function ($routes) {
	$routes->match(['get', 'post'], '/', 'Barang');
	$routes->match(['get', 'post'], 'index', 'Barang::index');

	$routes->get('tambah', 'Barang::tambah');
	$routes->get('edit/(:segment)', 'Barang::edit/$1');
	$routes->delete('(:num)', 'Barang::delete/$1');
});

$routes->get('barang/(:any)', 'Barang::detail/$1');


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');
$routes->get('/dashboard', 'Admin\Home::index', ['filter' => 'role:admin']);
$routes->get('/admin/home/index', 'Admin\Home::index', ['filter' => 'role:admin']);
$routes->get('/home', 'User\Home::index');
$routes->get('/artikel', 'User\Artikel::index');
$routes->get('/artikel-detail/(:num)', 'User\Artikel::artikel/$1');


$routes->get('/admin/gejala', 'Admin\Gejala::index', ['filter' => 'role:admin']);
$routes->get('/gejala/tambah', 'Admin\Gejala::tambah', ['filter' => 'role:admin']);
$routes->get('/admin/penyakit', 'Admin\Penyakit::index', ['filter' => 'role:admin']);
$routes->get('/penyakit/tambah', 'Admin\Penyakit::tambah', ['filter' => 'role:admin']);
$routes->get('/admin/artikel', 'Admin\Artikel::index', ['filter' => 'role:admin']);
$routes->get('/artikel/tambah', 'Admin\Artikel::tambah', ['filter' => 'role:admin']);
$routes->get('/admin/diagnosis', 'Admin\Diagnosis::index', ['filter' => 'role:admin']);

$routes->get('/admin/basispengetahuan', 'Admin\BasisPengetahuan::index', ['filter' => 'role:admin']);
$routes->add('/admin/basispengetahuan/index', 'Admin\BasisPengetahuan::index', ['filter' => 'role:admin']);
$routes->add('/admin/basispengetahuan/simpan', 'Admin\BasisPengetahuan::simpan', ['filter' => 'role:admin']);
$routes->add('/admin/basispengetahuan/update', 'Admin\BasisPengetahuan::update', ['filter' => 'role:admin']);
$routes->add('/basispengetahuan/fetch_penyakit', 'Admin\BasisPengetahuan::fetch_penyakit');
$routes->add('/basispengetahuan/fetch_gejala', 'Admin\BasisPengetahuan::fetch_gejala');
$routes->add('/basispengetahuan/hapus', 'Admin\BasisPengetahuan::hapus');
$routes->get('/diagnosis/laporan', 'Admin\Diagnosis::report');

$routes->get('/basispengetahuan/tambah', 'Admin\BasisPengetahuan::tambah', ['filter' => 'role:admin']);
$routes->get('/admin/auth', 'Admin\Auth::index', ['filter' => 'role:admin']);

$routes->get('/user/riwayat', 'User\Diagnosis::riwayat');
$routes->get('/unlogged', 'User\Diagnosis::index');
// $routes->get('/user/riwayat/detail/(:num)', 'User/Diagnosis::riwayatDetail');
// $routes->get('/gejala/ubah/(:num)', 'Admin/Gejala::ubah/$1');


// $routes->get('/komik/edit/(:segment)', 'Comics::edit/$1');
// $routes->delete('/komik/(:num)', 'Comics::delete/$1');
// $routes->get('/komik/(:any)', 'Comics::detail/$1');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

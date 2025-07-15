<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Dashboard utama
$routes->get('/', 'Inventaris::index');
$routes->get('/dashboard', 'Dashboard::index');

// Barang
$routes->get('/barang', 'Inventaris::barang');
$routes->post('/barang/tambah', 'Inventaris::tambahBarang');
$routes->get('/barang/edit/(:num)', 'Inventaris::editBarang/$1');
$routes->post('/barang/update/(:num)', 'Inventaris::updateBarang/$1');
$routes->get('/barang/hapus/(:num)', 'Inventaris::hapusBarang/$1');

// Peminjaman
$routes->get('/peminjaman', 'Inventaris::peminjaman');
$routes->post('/peminjaman/tambah', 'Inventaris::tambahPeminjaman');
$routes->get('/peminjaman/edit/(:num)', 'Inventaris::editPeminjaman/$1');
$routes->post('/peminjaman/update/(:num)', 'Inventaris::updatePeminjaman/$1');
$routes->get('/peminjaman/hapus/(:num)', 'Inventaris::hapusPeminjaman/$1');

// Pengembalian
$routes->get('/pengembalian', 'Inventaris::pengembalian');
$routes->post('/pengembalian/tambah', 'Inventaris::tambahPengembalian');
$routes->get('/pengembalian/edit/(:num)', 'Inventaris::editPengembalian/$1');
$routes->post('/pengembalian/update/(:num)', 'Inventaris::updatePengembalian/$1');
$routes->get('/pengembalian/hapus/(:num)', 'Inventaris::hapusPengembalian/$1');

// Laporan
$routes->get('/laporan', 'Laporan::index');
$routes->post('/laporan/verifikasi', 'Laporan::verifikasi');

// Login & Logout - gunakan controller Auth
$routes->get('/login', 'Auth::login'); // menampilkan form login
$routes->post('/login', 'Auth::prosesLogin'); // proses login
$routes->get('/logout', 'Auth::logout');
$routes->post('/proses-login', 'Auth::prosesLogin');

// Log Aktivitas 
$routes->get('/log', 'Log::index');

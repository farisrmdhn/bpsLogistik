<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['hapus/(:any)'] = 'berita/hapus/$1';
$route['tambah'] = 'berita/tambah';
$route['edit/(:any)'] = 'berita/edit/$1';
$route['berita'] = 'berita/index';
$route['baca/(:any)'] = 'pesan/baca/$1';
$route['semua_pesan'] = 'pesan/semua_pesan';
$route['pesan_belum_terbaca'] = 'pesan/pesan_belum_terbaca';
$route['default_controller'] = 'admin/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

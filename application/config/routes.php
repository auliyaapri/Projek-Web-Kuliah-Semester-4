<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['hapus/(:any)'] = 'admin/Data_produk/hapus/$1';
$route['edit/(:any)'] = 'admin/Data_produk/edit/$1';

$route['update'] = 'admin/Data_produk/update';



$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

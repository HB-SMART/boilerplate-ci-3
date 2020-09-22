<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';

// routers admin
$route['administracao/login'] = 'administrativo/login';
$route['administracao/home'] = 'administrativo/aiska';
$route['administracao/home/(:any)'] = 'administrativo/paginas/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

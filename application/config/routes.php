<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'landing';
$route['team'] = 'team';
$route['about'] = 'about';
$route['kegiatan'] = 'kegiatan';



/*---SIGNIN---*/

$route['signin'] = 'signin';
$route['signin/(:any)'] = 'signin/$1';
$route['signin/dologin'] = 'signin/login';


/*---Beranda---*/
$route['beranda'] = 'beranda';
$route['beranda/logout'] = 'beranda/logout';





$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

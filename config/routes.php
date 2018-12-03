<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['provider'] = 'provider/view';
$route['provider/accept_request'] = 'provider/accept_request';
$route['provider/accepted_request'] = 'provider/accepted_request';
$route['provider/logout'] = 'provider/logout';
$route['provider/(:any)']= 'provider/view/$1';
$route['costumer'] = 'costumer/view';
$route['costumer/request_list'] = 'costumer/request_list';
$route['costumer/add_request'] = 'costumer/add_request';
$route['costumer/service'] = 'costumer/service';
$route['costumer/logout'] = 'costumer/logout';
$route['costumer/(:any)']= 'costumer/view/$1';
$route['default_controller'] = 'main/view';
$route['(:any)']= 'main/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

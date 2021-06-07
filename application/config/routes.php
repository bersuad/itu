<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['dashboard'] = 'welcome';
$route['packages'] = 'pages/packages';
$route['account'] = 'pages/account';
$route['wallet'] = 'pages/wallet';
$route['recharge'] = 'pages/recharge';
$route['global-constant'] = 'pages/global_constants';
$route['countries'] = 'pages/countries';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

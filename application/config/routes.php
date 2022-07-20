<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'nsmall] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['nsmall'] = 'nsmall/nsmall';
$route['nsmall/about'] = 'nsmall/nsmall/about';
$route['nsmall/get/(:num)'] = 'nsmall/nsmall/get/$1';
$route['nsmall/call/(:num)'] = 'nsmall/nsmall/call/$1';
$route['nsmall/faq'] = 'nsmall/nsmall/faq';

$route['booknlife'] = 'booknlife/booknlife';
$route['booknlife/about'] = 'booknlife/booknlife/about';
$route['booknlife/get/(:num)'] = 'booknlife/booknlife/get/$1';
$route['booknlife/call/(:num)'] = 'booknlife/booknlife/call/$1';
$route['booknlife/faq'] = 'booknlife/booknlife/faq';

$route['ad01'] = 'ad01/ad01';
$route['ad01/about'] = 'ad01/ad01/about';
$route['ad01/get/(:num)'] = 'ad01/ad01/get/$1';
$route['ad01/call/(:num)'] = 'ad01/ad01/call/$1';
$route['ad01/faq'] = 'ad01/ad01/faq';

$route['ad02'] = 'ad02/ad02';
$route['ad02/about'] = 'ad02/ad02/about';
$route['ad02/get/(:num)'] = 'ad02/ad02/get/$1';
$route['ad02/call/(:num)'] = 'ad02/ad02/call/$1';
$route['ad02/faq'] = 'ad02/ad02/faq';

$route['ad03'] = 'ad03/ad03';
$route['ad03/about'] = 'ad03/ad03/about';
$route['ad03/get/(:num)'] = 'ad03/ad03/get/$1';
$route['ad03/call/(:num)'] = 'ad03/ad03/call/$1';
$route['ad03/faq'] = 'ad03/ad03/faq';

$route['ad04'] = 'ad04/ad04';
$route['ad04/about'] = 'ad04/ad04/about';
$route['ad04/get/(:num)'] = 'ad04/ad04/get/$1';
$route['ad04/call/(:num)'] = 'ad04/ad04/call/$1';
$route['ad04/faq'] = 'ad04/ad04/faq';


$route['ad05'] = 'ad05/ad05';
$route['ad05/about'] = 'ad05/ad05/about';
$route['ad05/get/(:num)'] = 'ad05/ad05/get/$1';
$route['ad05/call/(:num)'] = 'ad05/ad05/call/$1';
$route['ad05/faq'] = 'ad05/ad05/faq';

$route['ad06'] = 'ad06/ad06';
$route['ad06/about'] = 'ad06/ad06/about';
$route['ad06/get/(:num)'] = 'ad06/ad06/get/$1';
$route['ad06/call/(:num)'] = 'ad06/ad06/call/$1';
$route['ad06/faq'] = 'ad06/ad06/faq';

$route['ad07'] = 'ad07/ad07';
$route['ad07/about'] = 'ad07/ad07/about';
$route['ad07/get/(:num)'] = 'ad07/ad07/get/$1';
$route['ad07/call/(:num)'] = 'ad07/ad07/call/$1';
$route['ad07/faq'] = 'ad07/ad07/faq';

$route['ad08'] = 'ad08/ad08';
$route['ad08/about'] = 'ad08/ad08/about';
$route['ad08/get/(:num)'] = 'ad08/ad08/get/$1';
$route['ad08/call/(:num)'] = 'ad08/ad08/call/$1';
$route['ad08/faq'] = 'ad08/ad08/faq';

$route['ad09'] = 'ad09/ad09';
$route['ad09/about'] = 'ad09/ad09/about';
$route['ad09/get/(:num)'] = 'ad09/ad09/get/$1';
$route['ad09/call/(:num)'] = 'ad09/ad09/call/$1';
$route['ad09/faq'] = 'ad09/ad09/faq';


$route['jpgroup'] = 'jpgroup/jpgroup';
$route['jpgroup/about'] = 'jpgroup/jpgroup/about';
$route['jpgroup/get/(:num)'] = 'jpgroup/jpgroup/get/$1';
$route['jpgroup/call/(:num)'] = 'jpgroup/jpgroup/call/$1';
$route['jpgroup/faq'] = 'jpgroup/jpgroup/faq';


$route['syrup'] = 'syrup/syrup';
$route['syrup/about'] = 'syrup/syrup/about';
$route['syrup/get/(:num)'] = 'syrup/syrup/get/$1';
$route['syrup/call/(:num)'] = 'syrup/syrup/call/$1';
$route['syrup/faq'] = 'syrup/syrup/faq';


$route['wemakeprice'] = 'wemakeprice/wemakeprice';
$route['wemakeprice/about'] = 'wemakeprice/wemakeprice/about';
$route['wemakeprice/get/(:num)'] = 'wemakeprice/wemakeprice/get/$1';
$route['wemakeprice/call/(:num)'] = 'wemakeprice/wemakeprice/call/$1';
$route['wemakeprice/faq'] = 'wemakeprice/wemakeprice/faq';

$route['tmon'] = 'tmon/tmon';
$route['tmon/about'] = 'tmon/tmon/about';
$route['tmon/get/(:num)'] = 'tmon/tmon/get/$1';
$route['tmon/call/(:num)'] = 'tmon/tmon/call/$1';
$route['tmon/faq'] = 'tmon/tmon/faq';

<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "go";
$route['404_override'] = '';


$route['admin/dashboard'] 	= 'go/dashboard';
$route['admin'] 			= 'go/dashboard';


// AUTH
$route['auth/login'] = ($_SERVER['REQUEST_METHOD'] == 'GET') ? 'auth/login' : 'auth/authenticate';
$route['auth/logout'] = 'auth/logout';

$route['admin/user'] = ($_SERVER['REQUEST_METHOD'] == 'GET') ? 'auth/index' : 'auth/store';
$route['admin/user/create'] = 'auth/create';
$route['admin/user/(:num)'] = ($_SERVER['REQUEST_METHOD'] == 'GET') ? 'auth/edit/$1' : 'auth/update/$1';
$route['admin/user/(:num)/edit'] = 'auth/edit/$1';
$route['admin/user/(:num)/delete'] = 'auth/destroy/$1';

$route['admin/domain'] = ($_SERVER['REQUEST_METHOD'] == 'GET') ? 'domain/index' : 'domain/store';
$route['admin/domain/create'] = 'domain/create';
$route['admin/domain/(:num)'] = ($_SERVER['REQUEST_METHOD'] == 'GET') ? 'domain/edit/$1' : 'domain/update/$1';
$route['admin/domain/(:num)/edit'] = 'domain/edit/$1';
$route['admin/domain/(:num)/delete'] = 'domain/destroy/$1';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	$route['translate_uri_dashes'] = FALSE;
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
$route['default_controller'] = 'welcome';

$route['admin/dashboard'] = 'admin/admin';

//brands routes
$route['admin/brands'] = 'admin/brands';
$route['admin/brands/create'] = 'admin/brands/create';
$route['admin/brands/edit/(:any)'] = 'admin/brands/edit/$1';
$route['admin/brands/delete/(:any)'] = 'admin/brands/delete/$1';

//categories routes
$route['admin/categories'] = 'admin/categories';
$route['admin/categories/create'] = 'admin/categories/create';
$route['admin/categories/edit/(:any)'] = 'admin/categories/edit/$1';
$route['admin/categories/delete/(:any)'] = 'admin/categories/delete/$1';

//products routes
$route['admin/departments'] = 'admin/departments';
$route['admin/departments/create'] = 'admin/departments/create';
$route['admin/departments/edit/(:any)'] = 'admin/departments/edit/$1';
$route['admin/departments/delete/(:any)'] = 'admin/departments/delete/$1';

// user groups routes
$route['admin/user-groups'] = 'admin/userGroups';
$route['admin/user-groups/create'] = 'admin/userGroups/create';
$route['admin/user-groups/edit/(:any)'] = 'admin/userGroups/edit/$1';
$route['admin/user-groups/delete/(:any)'] = 'admin/userGroups/delete/$1';

// users routes
$route['admin/users'] = 'admin/users';
$route['admin/users/create'] = 'admin/users/create';
$route['admin/users/edit/(:any)'] = 'admin/users/edit/$1';
$route['admin/users/delete/(:any)'] = 'admin/users/delete/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

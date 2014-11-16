<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
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
 
 
include_once (APPPATH . 'helpers/inflector_helper.php');

$path = explode('/', $_SERVER['REQUEST_URI']);
$controller = @$path[3];


$route['admin/'.$controller] = 'admin/'.plural($controller) . "/view" . ucwords($controller);
$route['admin/'.$controller . '/list'] = 'admin/'.plural($controller) . "/view" . ucwords($controller);
$route['admin/'.$controller . '/view/(:num)'] = 'admin/'.plural($controller) . "/view" . ucwords($controller) . "/$1";
$route['admin/'.$controller . '/view/(:num)/(:any)'] = 'admin/'.plural($controller) . "/view" . ucwords($controller) . "/$1/$2";
$route['admin/'.$controller . '/add'] = 'admin/'.plural($controller) . "/add" . ucwords($controller);
$route['admin/'.$controller . '/edit/(:num)'] = 'admin/'.plural($controller) . "/edit" . ucwords($controller) . "/$1";
$route['admin/'.$controller . '/edit/(:num)/notification'] = plural($controller) . "/edit" . ucwords($controller) . "/$1/notification";
$route['admin/'.$controller . '/delete/(:num)'] = 'admin/'.plural($controller) . "/delete" . ucwords($controller) . "/$1";
$route['admin/'.$controller . '/getjson'] = 'admin/'. plural($controller) .'/get'. ucwords(plural($controller)) . "JsonData";
$route['admin/'.$controller . '/getjson/(:any)'] = 'admin/'. plural($controller) .'/get'. ucwords(plural($controller)) . "JsonData/$1";
$route['admin/'.$controller . '/getjson/(:any)/(:any)'] = 'admin/'. plural($controller) .'/get'. ucwords(plural($controller)) . "JsonData/$1/$2";

$route['default_controller'] = "frontend/home/index";
$route['404_override'] = '';

/* * ******************************************************
 * ******************* FRONT END URL *********************
 * ****************************************************** */


$route['z'] = "frontend/home/viewProductCategory/$1";
$route['read_more/(:any)/(:num)'] = "frontend/home/readMoreContent/$1/$2";
$route['market'] = "frontend/home/viewMarket";
$route['about-us'] = "frontend/home/viewAboutUs";
$route['contact-us'] = "frontend/home/viewContactUs";
$route['send_mail'] = "frontend/home/sendMail";
$route['send_chemotech_mail'] = "frontend/home/sendChemotechMail";
$route['certificates'] = "frontend/home/viewCertificates";
$route['category/(:num)'] = "frontend/home/viewCategory/$1";
$route['product/(:num)'] = "frontend/home/product/$1";

/* * ******************************************************
 * ******************* BACK END URL *********************
 * ****************************************************** */

//Authenticate
$route['admin'] = "admin/dashboard/index";
$route['admin/dashboard'] = "admin/dashboard/index";
$route['admin/login'] = "admin/authenticate/index";
$route['admin/validate'] = "admin/authenticate/validateUser";
$route['admin/logout'] = "admin/authenticate/logout";

//settings
$route['admin/setting/(:any)'] = "admin/settings/editSetting/$1";

//Category
$route['admin/category/image_remove/(:num)'] = "admin/categories/removeCategoryImage/$1";
$route['admin/product/image_remove/(:num)'] = "admin/products/removeProductImage/$1";

//Profile
$route['admin/profile'] = "admin/profile/index";
$route['admin/change_password'] = "admin/profile/changePassword";

/* End of file routes.php */
/* Location: ./application/config/routes.php */
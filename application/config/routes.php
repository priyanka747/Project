<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| RESERVED ROUTES
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['view-products'] = 'welcome/viewProducts';
$route['authenticate'] = 'Signin/verify_admin';
$route['signin'] = 'signin';
$route['forget-password'] = 'user';
$route['forget-password-verify'] = 'signin/check_email';
$route['viewcategories'] = 'categorycontroller';
$route['addcategory'] = 'categorycontroller/addcategory';
$route['add-new-category'] = 'categorycontroller/add';


/*=========================API ROUTES================================*/

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

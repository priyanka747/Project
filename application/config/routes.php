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
//category
$route['viewcategories'] = 'categorycontroller';
$route['addcategory'] = 'categorycontroller/addcategory';
$route['add-new-category'] = 'categorycontroller/add';
$route['category/edit/(:any)'] = 'categorycontroller/edit/$1';
$route['category/delete/(:any)'] = 'categorycontroller/delete/$1';
//sub category
$route['viewsubcategories'] = 'subcategorycontroller';
$route['addsubcategory'] = 'subcategorycontroller/addSubSategory';
$route['add-new-subcategory'] = 'subcategorycontroller/add';
$route['subcategory/edit/(:any)'] = 'subcategorycontroller/edit/$1';
$route['subcategory/delete/(:any)'] = 'subcategorycontroller/delete/$1';
//product
$route['viewproducts'] = 'productcontroller';
$route['addproduct'] = 'productcontroller/addproduct';
$route['add-new-product'] = 'productcontroller/add';
$route['product/edit/(:any)'] = 'productcontroller/edit/$1';
$route['product/delete/(:any)'] = 'productcontroller/delete/$1';


/*=========================API ROUTES================================*/

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

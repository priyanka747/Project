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
$route['category/edit/(:any)'] = 'categorycontroller/edit/$1';
$route['category/delete/(:any)'] = 'categorycontroller/delete/$1';


/*=========================API ROUTES================================*/

//----------------------------------------------------------------

//http://localhost/Project/api/Getorderbyuser
//$route['createorder']['GET'] = 'createorder/index_get';//initial call to getorderbyuser index

//http://localhost/Project/api/Getorderbyuser/2
/** overrides the above **/
//$route['createorder/(:num)']['GET'] = 'createorder/index_get/$1';//Changing defaults index

//http://localhost/Project/api/Getorderbyuser/2/2
/** overrides the above **/
//$route['createorder/(:num)/(:any)']['GET'] = 'createorder/order/$1/$2';//Changing type,limit,offset

//All routes that are similar, like above that follow the previous, override the preceding one. 


/*//http://localhost/Project/api/Getorderbyuser/create

//overrides $route['players/(:any)']
$route['getorderbyuser/create'] = 'getorderbyuser/index_post';*/

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

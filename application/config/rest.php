<?php
/*
|--------------------------------------------------------------------------
| REST Login
|--------------------------------------------------------------------------
|
| Is login required and if so, which type of login?
|
|   '' = no login required, 'basic' = relatively secure login, 'digest' = secure login
|
*/
$config['rest_enable_keys'] = TRUE;
$config['rest_logs_table'] = 'logs';
$config['rest_auth'] = 'basic';
$config['auth_source'] = '';
/*
|--------------------------------------------------------------------------
| REST Login usernames
|--------------------------------------------------------------------------
|
| Array of usernames and passwords for login
|
|   array('admin' => '1234')
|
*/
$config['rest_valid_logins'] = array('admin' => '1234');
?>
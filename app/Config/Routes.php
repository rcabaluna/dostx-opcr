<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Auth::index');
$routes->post('/sign-in', 'Auth::auth_signin');

$routes->get('/sign-out', 'Auth::logout');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/projects', 'Dashboard::projects');
$routes->get('/registry', 'Dashboard::registry');
$routes->get('/profile', 'Dashboard::Profile');

// $routes->get('/dashboard', 'Dashboard::index', ['filter' => 'authGuard']);

//REGISTRY ROUTES
$routes->get('/registry/perspective', 'Registry::perspective');
$routes->post('/registry/add-perspective', 'Registry::add_perspective');
$routes->post('/registry/edit-perspective', 'Registry::edit_perspective');
$routes->get('/registry/delete-perspective/(:num)', 'Registry::delete_perspective/$1');


//INDICATOR ROUTES
$routes->get('/registry/indicator', 'Registry::indicator');
$routes->post('/registry/add-indicator', 'Registry::add_indicator');
$routes->post('/registry/edit-indicator', 'Registry::edit_indicator');
$routes->get('/registry/delete-indicator/(:num)', 'Registry::delete_indicator/$1');

//MODULES-TARGET
$routes->get('/module/target', 'Modules::target');
$routes->post('/module/add-target', 'Modules::add_target');
$routes->post('/module/edit-target', 'Modules::edit_target');
$routes->get('/module/delete-target/(:num)', 'Modules::delete_target/$1');
// In app/Config/Routes.php



$routes->get('/modules/test', 'Modules::test');


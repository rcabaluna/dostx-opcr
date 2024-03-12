<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Auth::index');
$routes->post('/sign-in', 'Auth::auth_signin');

$routes->get('/sign-out', 'Auth::logout');
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'authGuard']);
$routes->get('/projects', 'Dashboard::projects', ['filter' => 'authGuard']);
$routes->get('/registry', 'Dashboard::registry', ['filter' => 'authGuard']);
$routes->get('/profile', 'Dashboard::Profile', ['filter' => 'authGuard']);

// $routes->get('/dashboard', 'Dashboard::index', ['filter' => 'authGuard']);

//PERSPECTIVE ROUTES
$routes->get('/registry/perspective', 'Registry::perspective', ['filter' => 'authGuard']);
$routes->post('/registry/add-perspective', 'Registry::add_perspective', ['filter' => 'authGuard']);
$routes->post('/registry/edit-perspective', 'Registry::edit_perspective', ['filter' => 'authGuard']);
$routes->get('/registry/delete-perspective/(:num)', 'Registry::delete_perspective/$1', ['filter' => 'authGuard']);
$routes->get('/registry/location', 'Registry::location', ['filter' => 'authGuard']);

//INDICATOR ROUTES
$routes->get('/registry/indicator', 'Registry::indicator', ['filter' => 'authGuard']);
$routes->post('/registry/add-indicator', 'Registry::add_indicator', ['filter' => 'authGuard']);
$routes->post('/registry/edit-indicator', 'Registry::edit_indicator', ['filter' => 'authGuard']);
$routes->get('/registry/delete-indicator/(:num)', 'Registry::delete_indicator/$1', ['filter' => 'authGuard']);

//MODULES-TARGET
$routes->get('/module/target', 'Modules::target', ['filter' => 'authGuard']);
$routes->post('/module/add-target', 'Modules::add_target', ['filter' => 'authGuard']);
$routes->post('/module/edit-target', 'Modules::edit_target', ['filter' => 'authGuard']);
$routes->get('/module/delete-target/(:num)', 'Modules::delete_target/$1', ['filter' => 'authGuard']);
// In app/Config/Routes.php



$routes->get('/modules/test', 'Modules::test', ['filter' => 'authGuard']);


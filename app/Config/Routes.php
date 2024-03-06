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
$routes->get('/registry/add-perspective', 'Registry::add_perspective');
$routes->put('/registry/edit-perspective', 'Registry::edit_perspective');
$routes->get('/registry/delete-perspective/(:num)', 'Registry::delete_perspective/$1');


//INDICATOR ROUTES
$routes->get('/registry/indicator', 'Registry::indicator');

$routes->get('/signin', 'Dashboard::Signin');

//MODULES-TARGET
$routes->get('/module/target', 'Module::target');

<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Auth::signin');
$routes->post('/sign-in', 'Auth::auth_signin');
$routes->get('/sign-out', 'Auth::logout');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/projects', 'Dashboard::projects');
$routes->get('/registry', 'Dashboard::registry');
$routes->get('/add-registry', 'Dashboard::add_registry');
// $routes->get('/dashboard', 'Dashboard::index', ['filter' => 'authGuard']);



//REGISTRY ROUTES
$routes->get('/registry/perspective', 'Registry::perspective');
$routes->get('/profile', 'Dashboard::Profile');

//INDICATOR ROUTES
$routes->get('/registry/indicator', 'Registry::indicator');


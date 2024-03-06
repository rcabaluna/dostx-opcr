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
$routes->get('/registry/add-registry', 'Registry::add_registry');
$routes->put('/registry/edit-registry', 'Registry::edit_registry');
$routes->delete('/registry/delete-registry', 'Registry::delete_registry');


//INDICATOR ROUTES
$routes->get('/registry/indicator', 'Registry::indicator');

$routes->get('/signin', 'Dashboard::Signin');


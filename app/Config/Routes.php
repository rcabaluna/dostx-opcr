<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::signin');
$routes->post('/sign-in', 'Auth::auth_signin');

$routes->get('/dashboard', 'Dashboard::index');


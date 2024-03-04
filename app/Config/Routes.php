<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::signin');
$routes->get('/signin', 'Auth::signin');

$routes->get('/dashboard', 'Dashboard::index');

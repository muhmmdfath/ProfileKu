<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('', function ($routes) {
    // Rute pengguna
    $routes->get('/', 'User::index');
    $routes->get('/user', 'User::index');
    // $routes->get('/login', 'AuthController::login');
    // $routes->post('/login', 'AuthController::attemptLogin');
});

$routes->group('admin', ['filter' => 'role:admin'], function ($routes) {
    $routes->get('/', 'Admin::index');
    // $routes->get('/index', 'Admin::index');
});

$routes->get('/admin', ['filter' => 'role:admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);

$routes->get('/user/edit/(:num)', 'Edit::edit/$1');
$routes->post('/user/update/(:num)', 'Edit::update/$1');

$routes->get('/admin/edit/(:num)', 'Edit::edit/$1');
$routes->post('admin/update/(:num)', 'Edit::update/$1');
$routes->delete('/admin/delete/(:num)', 'Admin::delete/$1', ['filter' => 'role:admin']);

// $routes->get('/register', 'Home::register');
// $routes->get('/myprofile', 'Home::myprofile');
// $routes->get('/profile', 'Home::profile');

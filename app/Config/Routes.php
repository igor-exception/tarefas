<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('user/create', 'UserController::create');
$routes->get('user/form', 'UserController::form');
$routes->post('user/store', 'UserController::store');
$routes->get('login', 'UserController::loginForm');
$routes->post('login', 'UserController::login');
$routes->get('logout', 'UserController::logout');
$routes->get('dashboard', 'UserController::dashboard', ['filter' => 'auth']);
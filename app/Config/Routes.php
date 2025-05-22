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
$routes->get('tasks', 'TaskController::index', ['filter' => 'auth']);
$routes->get('tasks/create', 'TaskController::create', ['filter' => 'auth']);
$routes->post('tasks/store', 'TaskController::store', ['filter' => 'auth']);
$routes->get('task/edit/(:num)', 'TaskController::edit/$1', ['filter' => 'auth']);
$routes->post('task/update', 'TaskController::update', ['filter' => 'auth']);
$routes->post('task/delete/(:num)', 'TaskController::delete/$1', ['filter' => 'auth']);
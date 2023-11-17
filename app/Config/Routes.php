<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('dashboard','DashboardController::index');

$routes->post('authors/list','AuthorController::list');
$routes->post('posts/list','PostController::list');

$routes->resource('authors',['controller' => 'AuthorController', 'except' => ['new','edit']]);
$routes->resource('posts',['controller' => 'PostController', 'except' => ['new','edit']]);



service('auth')->routes($routes);
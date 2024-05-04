<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('listar', 'Usuarios::index');
$routes->get('crear', 'Usuarios::crear');
$routes->post('guardar', 'Usuarios::guardar');
$routes->get('eliminar/(:num)', 'Usuarios::eliminar/$1');
$routes->get('editar/(:num)', 'Usuarios::editar/$1');
$routes->post('actualizar', 'Usuarios::actualizar');
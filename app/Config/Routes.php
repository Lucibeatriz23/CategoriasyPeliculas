<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */




$routes->get('/', 'Home::index');
//$routes->get('/saludo', 'Home::saludo');
//$routes->get('/saludar/(:num)', 'Home::saludopersona/$1');
//$routes->get('/saludar/(:any)', 'Home::saludopersona/$1');

//parametros
//$routes->get('/saludar/(:any)/(:num)', 'Home::saludopersona/$1/$2');
//routes->get('url','controlador::funcion')
$routes->get('/dashboard/pelicula', 'Dashboard\Pelicula::index');
$routes->get('/dashboard/categoria', 'Dashboard\Categoria::index');
$routes->presenter('/dashboard/pelicula', ['controller' => 'Dashboard\Pelicula']);
$routes->presenter('/dashboard/categoria', ['controller' => 'Dashboard\Categoria']);
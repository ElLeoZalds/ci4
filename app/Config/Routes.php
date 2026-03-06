<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


/**
 * El Slash "/" representa el HOME de tu aplicación 
 * Es decir "www.miweb.com"
 */
$routes->get('/', 'Home::dashboard');
$routes->get('/senati', 'Home::dashboard');

/**
 * ¿Cómo funciona una ruta?
 * $routes->verbo('ruta', 'Controlador::MetodoAccion')
 * Nota: Es posible crear más de una ruta para una vista
 */
$routes->get('/programador', 'Carrera::showIngenieria');
$routes->get('/coder', 'Carrera::showDesign');

$routes->get('/creativo', 'Carrera::showDesign');
$routes->get('/marketing', 'Carrera::showDesign');

//Nuevas rutas para navegar desde el Dashboard
$routes->get('/clientes', 'Cliente::index');
$routes->get('/productos', 'Producto::index');
$routes->get('/proveedores', 'Proveedor::index');


$routes->get('/diario', 'Reportes::index');
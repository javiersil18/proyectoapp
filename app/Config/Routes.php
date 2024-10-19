<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Empleados', 'Empleados::index');
$routes->get('/logincontrolador', 'logincontrolador::index');
$routes->get('/Departamento', 'Departamento::index');
$routes->get('/Empleados', 'ID_Empleado::show');
$routes->get('/Departamento', 'ID_Departamento::Departamento');
$routes->get('pages', 'Pages::class::index');
$routes->get('(:segment)', 'Pages::class::view');

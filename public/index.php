<?php
// Carga el autoload de Composer para cargar las clases automáticamente
require_once __DIR__ . '/../vendor/autoload.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Core\Router;

// Inicia la sesión 
session_start();

// Crea el router
$router = new Router();

// Define las rutas de la aplicación (URL => Controlador@Método)
$router->agregar('', 'HomeController@index');
$router->agregar('nosotros', 'HomeController@nosotros');
$router->agregar('propiedades', 'PropiedadController@listar');
$router->agregar('propiedades/ver', 'PropiedadController@ver');
$router->agregar('blog', 'BlogController@listar');
$router->agregar('blog/ver', 'BlogController@ver');
$router->agregar('login', 'AuthController@login');
$router->agregar('logout', 'AuthController@logout');
$router->agregar('admin/dashboard', 'AdminController@dashboard');


// Ejecuta el router para cargar el controlador y método según la URL
$router->ejecutar();
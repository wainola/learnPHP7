<?php

/*
namespaces a usar 
*/
use Bookstore\Core\Router;
use Bookstore\Core\Request;
use Bookstore\Utils\DependencyInjector;
use Bookstore\Core\Config;
use Bookstore\Models\CustomerModel;
use Bookstore\Core\Db;
//use Bookstore\Controllers\BookController;
require_once __DIR__ . '/vendor/autoload.php';

// Carga de la clase de configuracion
$configuracion = new Config();

// Obtencion de la instancia PDO
$db_configuracion = $configuracion->getInstance('db');

// instancia de la vista 
$loader = new Twig_Loader_Filesystem(__DIR__ . '/views');
$view = new Twig_Environment($loader);

// Instanciado en Inyector de Dependencias
$di = new DependencyInjector();

// Seteando las dependencias a inyectar
$di->set('PDO', $db_configuracion);
$di->set('Twig_Enviroment', $view);
$di->set('Utils\Config', $configuracion);

// Instancia de router para manejar los request que van entrando.
$router = new Router($di);

// Ejecutando el router para probar funcionalidades
$respuesta = $router->route(new Request());

// $router = new Router();
// $request = new Request();
// $db = new Db();
// $conexion = $db->connect();

// // $url = $_SERVER['REQUEST_URI'];
// // echo substr($request->getRuta(), 1);

// $router->route($request);
// // Seteo del inyector de dependencias.
// $di = new DependencyInjector();

// $customerModel = new CustomerModel($conexion);
// $c1 = $customerModel->get(1);
// // $c = 'Bookstore\Controllers\BookController';
// // $d = new $c();


// // Cargando Twig para las vistas.
// $loader = new Twig_Loader_Filesystem(__DIR__ . '/views');
// $twig = new Twig_Environment($loader);

// $parametros_twig = ['customer' => $c1];
// echo $twig->loadTemplate('customer.twig')->render($parametros_twig);
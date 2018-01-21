<?php

use Bookstore\Core\Router;
use Bookstore\Core\Request;
use Bookstore\Models\CustomerModel;
use Bookstore\Core\Db;
//use Bookstore\Controllers\BookController;
require_once __DIR__ . '/vendor/autoload.php';

$router = new Router();
$request = new Request();
$db = new Db();
$conexion = $db->connect();

// $url = $_SERVER['REQUEST_URI'];
// echo substr($request->getRuta(), 1);

$router->route($request);
$customerModel = new CustomerModel($conexion);
var_dump($customerModel);
// $c = 'Bookstore\Controllers\BookController';
// $d = new $c();
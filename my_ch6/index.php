<?php

use Bookstore\Core\Router;
use Bookstore\Core\Request;
//use Bookstore\Controllers\BookController;
require_once __DIR__ . '/vendor/autoload.php';

$router = new Router();
$request = new Request();

// $url = $_SERVER['REQUEST_URI'];
// echo substr($request->getRuta(), 1);

$router->route($request);

// $c = 'Bookstore\Controllers\BookController';
// $d = new $c();
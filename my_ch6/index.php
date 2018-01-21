<?php

use Bookstore\Core\Router;
use Bookstore\Core\Request;
use Bookstore\Core\Db;
//use Bookstore\Controllers\BookController;
require_once __DIR__ . '/vendor/autoload.php';

$router = new Router();
$request = new Request();
$db = new Db();

// $url = $_SERVER['REQUEST_URI'];
// echo substr($request->getRuta(), 1);

$router->route($request);
$db->connect();

// $c = 'Bookstore\Controllers\BookController';
// $d = new $c();
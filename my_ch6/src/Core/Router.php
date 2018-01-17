<?php

// Este es el archivo de codigo mas complicado de toda la aplicacion
/*
Pegas del router:
1.- recibir un objeto request.
2.- decidir que controlador deberia manejar ese request.
3.- retornar la respuesta a ese respectivo controlador
*/

namespace Bookstore\Core;

// usando namespaces definidos en otras clases
use Bookstore\Controllers\ErrorController;
use Bookstore\Controllers\CustomerController;

class Router{
    private $routeMap;

    private static $regexPatterns = [
        'number' => '\d+',
        'string' => '\w'
    ];

    public function __construct(){
        // cargando el json con las rutas
        $json = file_get_contents(__DIR__ . '/../../config/routes.json');
        // seteamos el atributo privado y con true indicamos que es un arreglo asociativo.
        $this->routeMap = json_decode($json, true);
    }
}

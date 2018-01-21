<?php

// Este es el archivo de codigo mas complicado de toda la aplicacion
/*
Pegas del router:
1.- recibir un objeto request.
2.- decidir que controlador deberia manejar ese request.
3.- retornar la respuesta a ese respectivo controlador
*/

namespace Bookstore\Core;

use Bookstore\Core\Request;
use Bookstore\Controllers\BookController;

//require_once '../../vendor/autoload.php';

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

    public function getRouteMap(){
        return $this->routeMap;
    }

    // funcion que reconoce la ruta que se esta pidiendo desde el request.
    public function route(Request $request){
        // le quitamos el / para comparar en el json
        $ruta = substr($request->getRuta(), 1);
        // notar que se retorna la ruta. Como tenemos aca la ruta del request, entonces podemos compararla con las rutas pre-establecidas en nuestro archivo json.
        foreach($this->routeMap as $r => $info){
            // var_dump($r == $ruta);
            if($r == $ruta){
                //print_r("match en $ruta");
                // Extraemos los datos del json y los pasamos a ExecuteController.
                $controlador = $info['controller'];
                $metodo = $info['method'];
                //print_r([$controlador, $metodo]);
                print_r($this->executeController($ruta, $controlador, $metodo));

            } else {
                // print_r("no hay match para la ruta requerida");
                // NOTE: aca va a ir la ejecucion del 404
            }
        }
    }

    /*
    Si hay match entonces ejecutamos la funcion ExecuteController que es privada.
    */

    private function executeController(string $ruta, string $controlador, string $metodo){

        // Primer paso: ejecutar el controlador
        $controllerName = 'Bookstore\Controllers\\' . $controlador . 'Controller';
        $controller = new $controllerName();
        var_dump($controllerName);

    }
}


// $r = new Router();
// $request = new Request();
// $r->route($request);

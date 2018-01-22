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
use Bookstore\Controllers\CustomerController;
use Bookstore\Utils\DependencyInjector;

class Router{
    /*
    Mapeo de las rutas a traves de la carga del json
    */
    private $routeMap;
    /*
    Inyector de dependencias
    */
    private $di;

    public function __construct(DependencyInjector $di){
        // cargando el json con las rutas
        $json = file_get_contents(__DIR__ . '/../../config/routes.json');
        // seteamos el atributo privado y con true indicamos que es un arreglo asociativo.
        $this->routeMap = json_decode($json, true);
        $this->di = $di;
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
            //var_dump($r == $ruta);
            if($r == $ruta){
                //print_r("match en $ruta");
                // Extraemos los datos del json y los pasamos a ExecuteController.
                $controlador = $info['controller'];
                $metodo = $info['method'];
                // print_r([$controlador, $metodo]);

                // Se ejecutar el contador que se obtiene del json en razon de la ruta generada
                $this->executeController($ruta, $controlador, $metodo, $request);

            } else {
                // print_r("no hay match para la ruta requerida");
                // NOTE: aca va a ir la ejecucion del 404
            }
        }
    }

    /*
    Si hay match entonces ejecutamos la funcion ExecuteController que es privada.
    */

    private function executeController(string $ruta, string $controlador, string $metodo, Request $request){

        // Primer paso: ejecutar el controlador
        $controllerName = 'Bookstore\Controllers\\' . $controlador . 'Controller';
        $controller = new $controllerName($this->di, $request);
        
        // si el metodo es login, entonces pedimos las cookies
        // si la cookie no tiene el usuario, entonces debemos logear al usuario para generar la cookie
        // Esta es una condicion especial para renderear el login de la pagina.
        if($metodo == "login"){
            if($request->getCookies()->has('user')){
                print_r("Existe la cookie");
            } else {
                // inicializamos el customer controller. 
                // retornamos el seteo del login
                $errorController = new CustomerController($this->di, $request);
                echo $errorController->login();
                //var_dump($errorController);
            }
        } else {
            // si no esta pidiendo el login, entonces carga el controlador que corresponde
            // asi le podemos pasar parametros a la funcion
            //return call_user_func([$controller, $metodo], "nicolas");
            echo call_user_func([$controller, $metodo]);
        }

    }
}

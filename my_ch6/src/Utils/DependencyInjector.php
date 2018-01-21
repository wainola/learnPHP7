<?php

/*
Inyector de dependencias que se usa en el AbstractController para hacer todas las cargas por defecto de las clases que vamos a usar
*/

namespace Bookstore\Utils;

class DependencyInjector{
    // Arreglo con strings de los nombres de las clases que vamos a inyectar
    private $dependencies = [];

    // Setea dependencia para luego ser inyectada
    public function set(string $name, $object){
        // Insercion en el arreglo asociativo del objeto pasado al inyector.
        $this->dependencies[$name] = $object;
    }

    // Obtiene dependnecia inyectada en el arreglo asociativo
    public function get(string $name){
        if(isset($this->dependencies[$name])){
            return $this->dependencies[$name];
        }
        print_r("Dependencia no encontrada");
    }

}
<?php
/*
Clase que setea parametros basicos de configuracion
*/

namespace Bookstore\Core;

class Config{
    private $data_config;
    public function __construct(){
        $json = file_get_contents(__DIR__ . '/../../config/app.json');
        $this->data_config = json_decode($json, true);
    }
    public function getInstance(string $key){
        return $this->data_config[$key];
    }
}
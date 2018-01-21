<?php
/*
Clase que se conecta a la base de datos implementando el patron singleton
*/

namespace Bookstore\Core;

use PDO;
use Bookstore\Core\Config;

class Db{

    // instancia a retornar cuando logremos la conexion
    private static $instance;

    public static function connect(){
        $config = new Config();
        $dbConfig = $config->getInstance("db");
        var_dump($dbConfig);
    }
}
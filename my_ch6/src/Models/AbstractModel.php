<?php

/*
Esta clase abstrae la instancia que generamos de la base de datos en nuestra clase DB
*/

namespace Bookstore\Models;
use PDO;

abstract class AbstractModel{
    protected $db;

    public function __construct(PDO $db){
        $this->db = $db;
    }
}
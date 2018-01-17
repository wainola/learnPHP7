<?php

// usando ṕs4 para hacer autoload de clases
namespace MVCNiklas\Core;

use MVCNiklas\Core\Util;

require_once '../../vendor/autoload.php';

class Request{
    public function __construct(){
        print_r("Clase Request");
    }
}

$u = new Util();
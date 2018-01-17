<?php

// Esta clase es la que procesa tres los componentes principales del request al servidor.

namespace Bookstore\Core;

use Bookstore\Core\FilteredMap;

class Request{

    const GET = "GET";
    const POST = "POST";

    private $dominio;
    private $ruta;
    private $metodo;
    private $parametros;
    private $cookies;

    // Se inicializa la clase seteando los parametros adecuados.
    public function __construct(){
        $this->dominio = $_SERVER['HTTP_HOST'];
        $this->ruta = explode('?', $_SERVER['REQUEST_URI'])[0];
        $this->metodo = $_SERVER['REQUEST_METHOD'];
        // el resto de los elementos se setearan a posteriori
        $this->params = new FilteredMap(array_merge($_POST, $_GET));
        $this->cookie = new FilteredMap($_COOKIE);
    }

    public function getUrl():string{
        return $this->dominio . $this->ruta;
    }
    
    public function getDominio():string{
        return $this->dominio;
    }

    public function getRuta():string{
        return $this->ruta;
    }

    public function getMetodo():string{
        return $this->metodo;
    }

    public function isPost():bool{
        return $this->metodo === self::POST;
    }

    public function isGet():bool{
        return $this->metodo === self::GET;
    }

}

$d = new Request();
var_dump($d);
<?php

namespace Bookstore\Controllers;

class CustomerController extends AbstractController{

    // funcion que crea el login
    public function login(){
        print_r($this->request->isGet() ? "true" : "false");
        // si no es un metodo post, entonces no esta pidiendo logearse, por lo que tenemos que enviarlo a la pagina del login
        if(!$this->request->isPost()){
            print_r("post, por ende esta pidiendo logearse");
        }
    }
}
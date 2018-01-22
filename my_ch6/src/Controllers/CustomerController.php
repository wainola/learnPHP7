<?php

namespace Bookstore\Controllers;

class CustomerController extends AbstractController{

    // funcion que crea el login
    // notar que la funcion login solo carga y esta siendo filtrada desde el router
    public function login(){
        // si el request no es un POST de datos entonces, enviar la login
        if(!$this->request->isPost()){
            // retornamos la funcion render que esta definida en el AbstractController
            return $this->render('login.twig', []);
        }
        print_r($this->request->isGet() ? "true" : "false");
    }
}
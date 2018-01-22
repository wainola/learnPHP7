<?php

/*
Main controller que carga cuando se va al root de la aplicacion
*/

namespace Bookstore\Controllers;

class MainController extends AbstractController{
    public function index(){
        return $this->render('index.twig', []);
        //print_r("index method");
    }
}
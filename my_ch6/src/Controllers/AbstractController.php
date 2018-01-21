<?php
/*
AbstractController: implementa algunos metodos abstractos que son posteriormente heredados por todos nuestros controladores
*/

namespace Bookstore\Controllers;

use Bookstore\Core\Request;
use Bookstore\Utils\DependencyInjector;

abstract class AbstractController{
    protected $request;
    protected $db;
    protected $config;
    // vista para la carga de los templates en twig
    protected $view;
    // Dependency injector;
    protected $di;
    protected $customerId;

    public function __construct(DependencyInjector $di, Request $request){
        $this->request = $request;
        $this->di = $di;
    }

    public function setCustomerId(int $customerId){
        $this->customerId = $customerId;
    }
}
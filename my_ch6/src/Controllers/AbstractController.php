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

        // Seteo de las propiedades 
        $this->db = $di->get('PDO');
        $this->view = $di->get('Twig_Environment');
        $this->config = $di->get('Utils\Config');
    }

    public function setCustomerId(int $customerId){
        $this->customerId = $customerId;
    }

    // funcion que renderear los templates segun corresponda.
    protected function render(string $template, array $parametros){
        return $this->view->loadTemplate($template)->render($parametros);
    }
}
<?php
/*
AbstractController: implementa algunos metodos abstractos que son posteriormente heredados por todos nuestros controladores
*/

namespace Bookstore\Controllers;

use Booskstore\Core\Request;

abstract class AbstractController{
    protected $request;
    // Dependency injector;
    protected $di;
    protected $customerId;

    public function __contruct(Request $request){
        $this->request = $request;
        $this->di = "di";
    }

    public function setCustomerId(int $customerId){
        $this->customerId = $customerId;
    }
}
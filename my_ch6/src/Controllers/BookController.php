<?php
namespace Bookstore\Controllers;
/*
Controlador de los Libros.
*/

class BookController extends AbstractController{

    public function getAll(){
        return $this->render('allBooks.twig', []);
        //print_r("getAll function" . " $str");
    }
}
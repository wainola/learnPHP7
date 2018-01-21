<?php

/*
Entidad Customer que modela la tabla en la base de datos
*/

namespace Bookstore\Entities;

class Customer{
    public $type;
    public $id;
    public $firstname;
    public $surname;
    public $email;

    public function __construct(string $type, int $id, string $firstname, string $surname, string $email){
        $this->type = $type;
        $this->id = $id;
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
    }


}
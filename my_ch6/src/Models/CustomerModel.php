<?php

namespace Bookstore\Models;
use Bookstore\Entities\Customer;

class CustomerModel extends AbstractModel{

    public function get(int $userId){
        // generacion del query para consulta la base de datos.
        $query = 'SELECT * FROM customer WHERE id = :user';
        // preparacion de la sentencia.
        $sth = $this->db->prepare($query);
        $sth->execute(['user' => $userId]);

        // fetcheado de la sentencia de los datos.
        $row = $sth->fetch();

        if(empty($row)){
            print_r("No hay datos con ese id");
        }

        $customer = new Customer($row['type'], $row['id'], $row['firstname'], $row['surname'], $row['email']);

        return $customer;
    }
}
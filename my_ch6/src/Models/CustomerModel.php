<?php

namespace Bookstore\Models;
use Bookstore\Entities\Customer;

class CustomerModel extends AbstractModel{

    public function get(int $userId){
        $query = 'SELECT * FROM customer WHERE customer_id = :user';
        $sth = $this->db->prepare($query);
        $sth->execute(['user' => $userId]);

        $row = $sth->fetch();

        if(empty($row)){
            print_r("No hay datos con ese id");
        }

        $customer = new Customer($row['type'], $row['id'], $row['firstname'], $row['surname'], $row['email']);

        return $customer;
    }
}
<?php

class Admin extends User
{
    public function __construct($id, $firstName, $lastName, $email, $password)
    {
        parent::__construct($id, $firstName, $lastName, $email, $password);
    }


}
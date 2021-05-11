<?php

namespace App\Core\Domain\UseCase\User;

class RequestModel
{
    public $name;
    public $email;
    public $login;
    public $password;

    public function __construct($name, $email, $login, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->login = $login;
        $this->password = $password;
    }
}

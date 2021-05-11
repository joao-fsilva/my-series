<?php

namespace App\Core\Adapter;

use App\Core\Domain\Entity\User;

class UserAdapter
{
    public static function create(string $name)
    {
        return new User($name);
    }
}

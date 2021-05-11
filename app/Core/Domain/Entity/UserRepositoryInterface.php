<?php

namespace App\Core\Domain\Entity;

interface UserRepositoryInterface
{
    public function create(User $user): int;
}

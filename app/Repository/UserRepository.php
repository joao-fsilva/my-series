<?php

namespace App\Repository;

use App\Models\User as UserModel;
use App\Core\Domain\Entity\User;
use App\Core\Domain\Entity\UserRepositoryInterface;

class UserRepository extends AbstractRepository implements UserRepositoryInterface
{
    protected $model = UserModel::class;

    public function create(User $user): int
    {
        $newUser = $this->model->updateOrCreate([
            'id' => $user->getId()
        ], [
            'name' => $user->getName()
        ]);

        return $newUser->id;
    }
}

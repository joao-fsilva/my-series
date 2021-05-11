<?php

namespace App\Core\Domain\UseCase\User;

use App\Core\Domain\Entity\User;
use App\Core\Domain\Entity\UserRepositoryInterface;

class CreateUserUseCase
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(RequestModel $userRequest): ResponseModel
    {
        $user = new User($userRequest->name);

        $this->userRepository->create($user);

        return $user;
    }
}

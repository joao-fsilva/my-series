<?php

namespace App\Http\Controllers;

use App\Core\Domain\UseCase\User\CreateUserUseCase;
use App\Core\Domain\UseCase\User\RequestModel;

class UserController extends Controller
{
    public function findAll()
    {
        //TODO
    }

    public function store(CreateUserUseCase $createUserUseCase)
    {
        $request = new RequestModel(
            $this->request->name,
            $this->request->email,
            $this->request->login,
            $this->request->password
        );

        try {

            $responseModel = $createUserUseCase->execute($request);

        } catch (\Exception $e) {

            return response()->json(['error' => $e->getMessage()], 400);
        }

    }
}

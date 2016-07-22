<?php

namespace Examples\DIP\Good;


use Examples\DIP\General\UserRepository;

class UserController
{
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function doRegister($data)
    {
        $newUser = $this->repository->save($data);
        return "Welcome " . $newUser->email;
    }
}
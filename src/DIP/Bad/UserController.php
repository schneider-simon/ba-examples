<?php

namespace Examples\DIP\Bad;


use Examples\DIP\General\MysqlUserRepository;

class UserController
{
    public function __construct()
    {
        $this->repository = new MysqlUserRepository();
    }

    public function doRegister($data)
    {
        $newUser = $this->repository->save($data);
        return "Welcome " . $newUser->email;
    }
}
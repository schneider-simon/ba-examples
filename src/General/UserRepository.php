<?php

namespace Examples\General;


class UserRepository
{

    public function findByEmail($email)
    {
        logAction("UserRepository->hasEmail");
        return false;
    }

    public function register($params)
    {
        logAction("UserRepository->register");
        return true;
    }
}
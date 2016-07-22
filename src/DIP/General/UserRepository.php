<?php

namespace Examples\DIP\General;


interface UserRepository
{
    public function save(array $data) : User;

    public function findByEmail(string $email) : User;
    
    public function all() : array;
}
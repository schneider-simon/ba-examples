<?php

namespace Examples\DIP\General;


class MysqlUserRepository implements UserRepository
{

    public function save(array $data) : User
    {
        logAction('Save to MySql database.');
        return new User();
    }

    public function findByEmail(string $email) : User
    {
        logAction('Retrieve from MySql database: SELECT * from users where email = $email');
        return new User();
    }

    public function all() : array
    {
        logAction('Retrieve from MySql database: SELECT * from users');
        return [];
    }
}
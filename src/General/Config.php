<?php

namespace Examples\General;


use Examples\OCP\Good\Validations\EmailNotUsed;
use Examples\OCP\Good\Validations\HasEmailAndPassword;
use Examples\OCP\Good\Validations\ValidEmail;

class Config
{
    public function __construct()
    {
        $this->config = [
            'validations.register' => [
                HasEmailAndPassword::class,
                ValidEmail::class,
                EmailNotUsed::class
            ]
        ];
    }

    public function get($key)
    {
        return $this->config[$key];
    }
}
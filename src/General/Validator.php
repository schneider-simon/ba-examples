<?php

namespace Examples\General;


class Validator
{
    public function isValidEmail($email)
    {
        logAction("Validator->isValidEmail");
        return true;
    }
}
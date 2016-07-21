<?php

namespace Examples\OCP\Good\Validations;


use Klein\Request;

class HasEmailAndPassword extends Validation
{
    public function handle(Request $request)
    {
        if (!$request->param('email') || !$request->param('password')) {
            $this->setError("No email or password given.");
        }
    }
}
<?php

namespace Examples\OCP\Good\Validations;


use Examples\General\UserRepository;
use Examples\General\Validator;
use Klein\Request;

class ValidEmail extends Validation
{
    protected $validator;

    /**
     * UserController constructor.
     * @param UserRepository $userRepository
     * @param Validator $validator
     */
    public function __construct(UserRepository $userRepository, Validator $validator)
    {
        $this->validator = $validator;
    }
    
    public function handle(Request $request)
    {
        if (!$this->validator->isValidEmail($request->param('email'))) {
            $this->setError("Invalid email.");
        }        
    }
}
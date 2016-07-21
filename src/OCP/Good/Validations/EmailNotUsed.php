<?php

namespace Examples\OCP\Good\Validations;


use Examples\General\UserRepository;
use Examples\General\Validator;
use Klein\Request;

class EmailNotUsed extends Validation
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * UserController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    
    public function handle(Request $request)
    {
        if ($this->userRepository->findByEmail($request->param('email'))) {
            $this->setError("Email is already used.");
        }       
    }
}
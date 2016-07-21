<?php

namespace Examples\OCP\Bad\Classes;


use Examples\General\Controller;
use Examples\General\Validator;
use Klein\Request;

class UserController extends Controller
{
    /**
     * @var UserRepository
     */
    private $repository;
    /**
     * @var Validator
     */
    private $validator;

    /**
     * UserController constructor.
     * @param UserRepository $repository
     * @param Validator $validator
     */
    public function __construct(UserRepository $repository, Validator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }
    
    function register(Request $request)
    {
        $this->view('register', ['foo' => 'bar']);
    }

    function doRegister(Request $request)
    {
        $this->validator->isValidEmail($request->param('email'));
    }
}
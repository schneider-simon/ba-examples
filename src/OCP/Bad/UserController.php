<?php

namespace Examples\OCP\Bad;


use Examples\General\Controller;
use Examples\General\NewsletterService;
use Examples\General\UserRepository;
use Examples\General\Validator;
use Klein\Request;

class UserController extends Controller
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * @var NewsletterService
     */
    private $newsletterService;

    /**
     * UserController constructor.
     * @param UserRepository $userRepository
     * @param Validator $validator
     * @param NewsletterService $newsletterService
     */
    public function __construct(UserRepository $userRepository, Validator $validator, NewsletterService $newsletterService)
    {
        $this->userRepository = $userRepository;
        $this->validator = $validator;
        $this->newsletterService = $newsletterService;
    }

    function register(Request $request)
    {
        $this->view('register', ['foo' => 'bar']);
    }

function doRegister(Request $request)
{
    if (!$request->param('email') || !$request->param('password')) {
        return $this->fail("No email or password given.");
    }

    if (!$this->validator->isValidEmail($request->param('email'))) {
        return $this->fail("Invalid email.");
    }

    if ($this->userRepository->findByEmail($request->param('email'))) {
        return $this->fail("Email is already used.");
    }

    $this->userRepository->register($request->params());

    return "Registered";
}

    
}
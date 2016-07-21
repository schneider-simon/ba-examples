<?php

namespace Examples\OCP\Good;


use DI\Container;
use Examples\General\Config;
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
     * @var Config
     */
    private $config;


    /**
     * UserController constructor.
     * @param UserRepository $userRepository
     * @param Validator $validator
     * @param Config $config
     * @param Container $container
     * @internal param NewsletterService $newsletterService
     */
    public function __construct(UserRepository $userRepository, Validator $validator, Config $config, Container $container)
    {
        $this->userRepository = $userRepository;
        $this->validator = $validator;
        $this->config = $config;
        $this->container = $container;
    }

    function register(Request $request)
    {
        $this->view('register', []);
    }

    function doRegister(Request $request)
    {
        foreach($this->config->get('validations.register') as $class){
            $validation = $this->makeValidation($class);
            $validation->handle($request);

            if($validation->failed){
                return $this->fail($validation->message);
            }
        }       

        $this->userRepository->register($request->params());
                
        return "Registered";
    }

    
}
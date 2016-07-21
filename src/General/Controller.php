<?php

namespace Examples\General;


use DI\Container;
use Examples\OCP\Good\Validations\Validation;
use Klein\Request;

class Controller
{
    /**
     * @var Validator
     */
    protected $validator;

    /**
     * @var Container
     */
    protected $container;

    protected function view(string $template, array $variables){
        include __DIR__ . '\..\..\views\\'. $template . '.php';
    }

    protected function fail($string)
    {
        echo '<pre>Fail: '. $string .'</pre>';
        return 'Failed';
    }

    /**
     * @param $validation
     * @param $request
     * @return Validation
     * @throws \DI\NotFoundException
     */
    protected function makeValidation($validation)
    {
        return $this->container->get($validation);
    }

    /**
     * @param $validation
     * @param $request
     * @return Validation
     * @throws \DI\NotFoundException
     */
    protected function runValidation($validation, Request $request)
    {
        $instance = $this->makeValidation($validation);

        $instance->handle($request);

        return !$instance->failed;
    }
}
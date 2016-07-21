<?php

namespace Examples\OCP\Good\Validations;

/**
 * Class Validation
 * @package Examples\OCP\Good\Validations
 *
 * @method handle($param)
 */
abstract class Validation 
{
    public $failed = false;

    public $message = "";

    protected function setError($message)
    {
        $this->failed = true;
        $this->message = $message;
    }
}
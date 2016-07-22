<?php

namespace Examples\LSP\Good;


use Examples\LSP\General\Rectangle;
use Examples\LSP\General\Shape;

class Square extends Shape
{
    protected $length;

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

}
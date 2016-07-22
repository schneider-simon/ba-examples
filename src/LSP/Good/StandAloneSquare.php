<?php

namespace Examples\LSP\Good;


use Examples\LSP\General\Shape;

class StandAloneSquare extends Shape implements Square
{
    protected $length;

    public function getLength() : float
    {
        return $this->length;
    }
    
    public function setLength(float $length)
    {
        $this->length = $length;
    }

    public function area() : float
    {
        return $this->length ^ 2;
    }
}
<?php

namespace Examples\LSP\Good;


use Examples\LSP\General\Rectangle;
use Examples\LSP\General\Shape;

class DelegatingSquare extends Shape implements Square
{
    private $rectangle;

    public function __construct()
    {
        $this->rectangle = new Rectangle();
    }

    public function setLength(float $length)
    {
        $this->rectangle->setWidth($length);
        $this->rectangle->setHeight($length);
    }

    public function getLength() : float
    {
        return $this->rectangle->getHeight();
    }

    public function area() : float
    {
        return $this->rectangle->area();
    }
}
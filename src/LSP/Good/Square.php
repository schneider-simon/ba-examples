<?php

namespace Examples\LSP\Good;


interface Square
{
    public function setLength(float $length);

    public function getLength() : float;

}
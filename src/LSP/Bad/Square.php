<?php

namespace Examples\LSP\Bad;


use Examples\LSP\General\Rectangle;

class Square extends Rectangle
{
    public function setWidth($width)
    {
        $this->width = $width;
        $this->height = $width;
    }


    public function setHeight($height)
    {
        $this->width = $height;
        $this->height = $height;
    }


}
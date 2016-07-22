<?php

namespace Examples\LSP\Bad;


use Examples\LSP\General\Rectangle;

class ShapeProgram
{
    public function run()
    {
        $rectangle = new Square();
        $this->f($rectangle);
    }

    private function f(Rectangle $rectangle)
    {
        $rectangle->setHeight(5);
        $rectangle->setWidth(4);

        if($rectangle->area() != 20)
            throw new \Exception('Wrong area.');
    }
}
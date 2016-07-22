<?php

namespace Examples\LSP\Tests;


use Examples\LSP\Bad\Square as BadSquare;
use Examples\LSP\General\Rectangle;
use PHPUnit\Framework\TestCase;

class RectangleTest extends TestCase
{
    public function testAreaIsMathematicallyCorrect()
    {
        $list = $this->listOfRectangles();

        /** @var Rectangle $rectangle */
        foreach($list as $rectangle){
            $this->assertEquals(50, $rectangle->area());
        }
    }

    private function listOfRectangles()
    {
        $rectangle = new Rectangle();
        $rectangle->setHeight(10);
        $rectangle->setWidth(5);

        $square = new BadSquare();
        $square->setHeight(10);
        $square->setWidth(5);

        return [
            $rectangle, $square
        ];
    }
}
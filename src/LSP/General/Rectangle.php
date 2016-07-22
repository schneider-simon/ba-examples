<?php

namespace Examples\LSP\General;


class Rectangle extends Shape
{
    /**
     * @var float
     */
    protected $width;

    /**
     * @var float
     */
    protected $height;

    public function area() : float
    {
        return $this->width * $this->height;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param float $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param float $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }
}
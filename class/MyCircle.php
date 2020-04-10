<?php

class MyCircle
{
    protected $radius;
    protected $color;

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function toString()
    {
        return 'Hinh tron co ban kinh ' . $this->getRadius() . ' , mau ' . $this->getColor();
    }

    public function calculateArea()
    {
        return M_PI * $this->getRadius();
    }

    public function calculatePerimeter()
    {
        return 2 * M_PI * pow($this->getRadius(), 2);
    }

}
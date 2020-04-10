<?php
include_once ('MyCircle.php');

class MyCylinder extends MyCircle
{
    protected $height;

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function calculateArea()
    {
        return $this->calculatePerimeter() * ($this->radius + $this->height);
    }

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->getHeight();
    }
}
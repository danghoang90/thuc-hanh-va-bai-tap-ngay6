<?php
class Rectangle
{
    private $width;
    private $height;
    public function __construct($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea()
    {
        return $this->width * $this->height;
    }
    public function __toString()
    {
       return "Rectangle: Width:".$this->width."Height: ". $this->height. "Rectangle Area: ".$this->getArea();
    }
}

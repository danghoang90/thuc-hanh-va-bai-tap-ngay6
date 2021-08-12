<?php
class Circle
{
    public $name;
    public $radius;
    public function __construct($radius,$name) {
        $this->radius = $radius;
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getRadius() {
        return $this->radius;
    }
    public function setRadius($radius) {
        $this->radius = $radius;
    }
    public function getArea() {
        return $this->radius * $this->radius * PI();
    }
    public function __toString()
    {
        return "Circle Radius: ". $this->radius. "Circle Area: ". $this->getArea();
    }
}
//$circle = new Circle(6,'One');
//echo $circle->getArea();
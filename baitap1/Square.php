<?php
class Square
{
    private $edge;
   public function __construct($edge)
   {
       $this->edge = $edge;
   }
   public function getArea()
   {
       return $this->edge * $this->edge;
   }
   public function __toString()
   {
       return "Square Edge: ". $this->edge." Square Area:". $this->getArea();
   }
}

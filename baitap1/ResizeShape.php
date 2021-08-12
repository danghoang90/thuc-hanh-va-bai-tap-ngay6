<?php
include ('Circle.php');
include ('Resizeable.php');
include ('Rectangle.php');
include ('Square.php');


class ResizeShape implements Resizeable
{
    public function resize($ojb){
        $newShape = $ojb->getArea() * rand(1,100) ;
        return $newShape;
    }
}

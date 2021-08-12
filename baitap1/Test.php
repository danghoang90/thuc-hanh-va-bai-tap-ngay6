<?php
include('ResizeShape.php');

$circleOne = new Circle(7,'CircleOne');
 echo $circleOne->__toString();
 echo "<br>";
$circleResize = new ResizeShape();
echo ("New CircleArea Area: ".$circleResize->resize($circleOne));
echo "<br>";
$rectangleOne= new Rectangle(9,9);
 echo $rectangleOne->__toString();
 echo "<br>";
$rectangleOneResize = new ResizeShape();
echo ("New Rectangle Area: ".$rectangleOneResize->resize($rectangleOne));
echo "<br>";
 $squareOne = new Square(8);
 echo $squareOne->__toString();
 echo "<br>";
$squareOneResize = new ResizeShape();
 echo ("New Square Area: ". $squareOneResize->resize($squareOne));


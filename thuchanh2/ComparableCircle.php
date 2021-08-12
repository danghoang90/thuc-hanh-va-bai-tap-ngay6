<?php
include ('Circle.php');
include ('Comparable.php');

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($radius, $name)
    {
        parent::__construct($radius, $name);
    }
    public function compareTo($circleOne)
    {
        $circleOneRadius = $circleOne->getRadius();
        if ($this->getRadius() > $circleOneRadius) {
            return 1;
        } else if ($this->getRadius() < $circleOneRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}

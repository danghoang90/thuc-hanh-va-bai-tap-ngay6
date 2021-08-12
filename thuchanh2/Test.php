<?php
include "ComparableCircle.php";

$circleOne = new ComparableCircle(8, 'circleOne');
$circleTwo = new ComparableCircle(9, 'circleTwo');

$test = $circleOne->compareTo($circleTwo);
echo ('Comparable: '. $test);
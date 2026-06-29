<?php

$length = 10;
$width = 5;

function calculateAre($length,$width){
    $area = $length * $width;
    return $area;
}
function calculatePerimeter($length,$width){
    $perimeter = 2 * ($length + $width);
    return $perimeter;
}
$area = calculateAre($length,$width);
$perimeter = calculatePerimeter($length,$width);    
echo "Area: $area <br>";
echo "Perimeter: $perimeter"; 

?>
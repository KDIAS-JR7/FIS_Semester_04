<?php
$x = 8;
$y = 12;
for($i = 0; $i < 5; $i++){
    echo "X : $x <br> \n Y : $y <br>";
if($x < $y && $y > 5){
    echo "Condition x < y is true.";
}
else if($x == $y){
    echo "Condition x == y is true.";
}
else if($x > $y || $x == 12){
    echo "Condition x >= y is true.";
}
else
{
    echo "Condition x > y is false.";
}
$x++;
echo "<br> ------------------------------ <br>";

}

?>
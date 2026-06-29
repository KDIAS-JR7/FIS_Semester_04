# Code
~~~php
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <form action="MathFunc.php" method="post">
        <label >X:</label>
        <input type="text" name="x">
        <label >Y:</label>
        <input type="text" name="y">
        <label >Z:</label>
        <input type="text" name="z">
        <input type="submit" name="total" value="total">
    </form>
	
</body>
</html>

<?php

$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];

$total = null;

echo "<br>Absolute number: ";
$total = abs($x);
echo $total; 

echo "<br>Rounded number: ";
$total = round($x);
echo $total; 

echo "<br>Rounded to lower number: ";
$total = floor($x);
echo $total; 

echo "<br>Rounded to higher number: ";
$total = ceil($x);
echo $total; 

echo "<br>Square root of number: ";
$total = sqrt($x);
echo $total; 

echo "<br>Power of numbers: ";
$total = pow($x,$y);
echo $total; 

echo "<br>Maximum of numbers: ";
$total = max($x,$y,$z);
echo $total; 

echo "<br>Minimum of numbers: ";
$total = min($x,$y,$z);
echo $total; 

echo "<br>Value of pi: ";
$total = pi();
echo $total; 

echo "<br>Random numbers from 1 to 6: ";
$total = min(1,6);
echo $total; 

?>
~~~

# Output
- When x = 4.2, y = 6 and z = 10;
```
Absolute number: 4.2  
Rounded number: 4  
Rounded to lower number: 4  
Rounded to higher number: 5  
Square root of number: 2.0493901531919  
Power of numbers: 17.64  
Maximum of numbers: 10  
Minimum of numbers: 2  
Value of pi: 3.1415926535898  
Random numbers from 1 to 6: 1
```

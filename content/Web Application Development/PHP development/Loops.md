# FOR
~~~php
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <form action="forLoop.php" method="post">
        <label>Enter a number to count up to: </label><br>
        <input type="text" name="counter" >
        <input type="submit" value="submit">
    </form>
    
</body>
</html>

<?php

$count = $_POST["counter"];

for($i = 1; $i<= $count; $i++ ){
    echo $i . "<br>";
}

?>
~~~

~~~php
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <form action="forLoop.php" method="post">
        <label>Enter a number to count down from: </label><br>
        <input type="text" name="counter" >
        <input type="submit" value="submit">
    </form>
    
</body>
</html>

<?php

$count = $_POST["counter"];

for($i = $count; $i >= 0 ; $i-- ){
    echo $i . "<br>";
}

?>
~~~

# WHILE
~~~php
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <form action="whileLoop.php" method="post">
    <label >Press start to start the stop watch</label><br>
    <input type="submit" name="start" value="start"><br>
    <label >Starting stop watch. Press stop to stop the countdown</label><br>
    <input type="submit" name="stop" value="stop"><br>
    </form>
</body>
</html>

<?php

$seconds = 0; 
$isRunning = false;

if(isset($_POST["start"])){
    $isRunning = true;
    while($isRunning){
        if(isset($_POST["stop"])){
            $isRunning = false;
        }
        else{
            $seconds++;
            echo $seconds . "<br>";
        }
    }
}

?>
~~~


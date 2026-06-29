```php
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <form action="radio.php" method="post">
        <input type="radio" name="foods" value="Pizza">Pizza <br>
        <input type="radio" name="foods" value="Ice-cream">Ice-cream <br>
        <input type="radio" name="foods" value="Chocolate">Chocolate <br>
        <input type="submit" name="order" value="order">
        
    </form>
</body>
</html>

<?php

if(isset($_POST["order"])){
    if(isset($_POST["foods"])){
        $food = $_POST["foods"];
        echo "You ordered {$food}";
    }
    else{
        echo "You have not selected any food!";
    }
}
else{
    echo "Order away!";
}


?>
```
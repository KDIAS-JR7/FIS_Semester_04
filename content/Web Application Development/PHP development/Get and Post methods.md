**GET** and **POST** are the two most common HTTP request methods used for communication between a client (like a web browser) and a server. The primary distinction is that ==**GET is used to retrieve data from a server**, while **POST is used to send data to a server to create or update a resource**==.

## HTTP GET

The HTTP GET method is used to retrieve data from the server without modifying it. In this method, data is sent through the URL as query parameters and is mainly used for fetching information from web servers.

- Parameters are visible in the browser URL.
- GET requests can be bookmarked and stored in browser history.
- Mainly used for reading or fetching data from the server.

### Syntax
~~~php
form action="getmethod.php" method="GET"
~~~
### Example
~~~php
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

    <form action="getPost.php" method="get">
    <label>username</label><br>
    <input type="text" name="username" value=""><br>
    <label>password</label><br>
    <input type="password" name="password" value=""><br>
    <input type="submit" value="Log in">
    </form>
    
</body>
</html>

<?php

echo "{$_GET["username"]} <br>";
echo "{$_GET["password"]} <br>";

?>
~~~

- Here, we're using the GET method to get the values of username and password fields. But, there's an issue in this approach.
```
http://localhost/php_brocode/getPost.php?username=Kaveesh&password=123
```
- GET appends this data into the URL, therefore GET is not suitable for sensitive data.
## HTTP POST

The HTTP POST method is used to send data from the client to the server for creating or updating resources. In this method, data is transferred through the request body, making it suitable for sending sensitive or large amounts of data.

- Data is not visible in the browser URL.
- Supports sending large amounts of data and files.
- Commonly used for form submissions and data modification tasks.

### Syntax
~~~php
 <form action="postmethod.php" method="POST">
~~~
### Example
~~~php
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

    <form action="getPost.php" method="post">
    <label>username</label><br>
    <input type="text" name="username" value=""><br>
    <label>password</label><br>
    <input type="password" name="password" value=""><br>
    <input type="submit" value="Log in">
    </form>
    
</body>
</html>

<?php

echo "{$_POST["username"]} <br>";
echo "{$_POST["password"]} <br>";

?>
~~~
- With POST method,
```
  http://localhost/php_brocode/getPost.php
```
- The credentials are no longer appended to the URL, making it ideal for sensitive data.

## Real world example
~~~php
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

    <form action="getPost.php" method="post">
        <label >Quantitiy: </label><br>
        <input type="text" name="quantity" value="value">
        <input type="submit" value="total">
    </form>
    
</body>
</html>

<?php

$item = "pizza";
$price = 5.99;
$quantity = $_POST["quantity"];
$total = null;

$total = $quantity * $price;

echo "You have ordered {$quantity} pizzas<br>";
echo "Your bill is {$total}";

?>
~~~

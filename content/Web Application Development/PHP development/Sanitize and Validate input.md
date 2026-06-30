
# SANITIZE input
```php
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <form action="sanitize.php" method="post">
        <label for="">Username:</label> <br>
        <input type="text" name="username" value=""> <br><br>
        <input type="submit" name="login" value="login">
    </form>
	
</body>
</html>

<?php

$username = $_POST["username"];
echo $username;

?>
```

- This code snippet allows us to enter a username which it will then echo at us.
- But, rather than a name, we enter
```javascript
<script> alert("You have a virus!"); </script>)
```

- This is a `xss`(cross site script) attack which will execute a malicious Javascript code; in this case, create an alert saying "You have a virus!" once login is clicked.
>[!tip]
>==Cross-Site Scripting== (XSS) is a web security vulnerability where an attacker injects malicious client-side scripts into trusted websites. When a user visits the compromised page, the injected script executes in their browser, potentially stealing session tokens, hijacking user accounts, or transferring sensitive data.

To stop this, we will sanitize the input.

```PHP
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
	
```

- This replaces any SPECIAL characters, nullifying the attack.
- Furthermore,
```php
$age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
```
- Can be used to replace everything except integer numbers in an input.
- So, for example, an age value such as `ceqvedq23dŗbr` becomes just `23`.

- Similarly,
```php
$email = filter_input( INPUT_POST,"email", FILTER_SANITIZE_EMAIL);
```
- Can be used to remove any special characters from an email input. 
# Validate input
```php
$age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
if(empty($age)){
    echo "That was not a valid number <br>";
}
else{
    echo "You are {$age} years old <br>";
}

$email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
if(empty($age)){
    echo "That was not a valid email address <br>";
}
else{
    echo "You're email is  {$email} <br>";
}
?>
```
- The syntax is similar to `FILTER_SANITIZE`, but as `FILTER_VALIDATE`.
- `VALIDATE` returns and empty string into the `POST` variable if the input does not match validation criteria.
## isset
The [isset() function](https://www.geeksforgeeks.org/php/php-isset-function/) in PHP checks whether a variable is set and is not NULL. It returns true if the variable has a value other than NULL, and false if it's unset or NULL.

**Syntax:**

>bool isset( mixed $var [, mixed $... ] )

**Parameters:** This function accepts one or more parameters as mentioned above and described below.

- $var: It contains the variable which needs to check.
- $…: It contains the list of other variables.
/
**Return Value:** It returns TRUE if var exists and its value is not equal to NULL and FALSE otherwise.
- Returns `true` if the variable is set and not `NULL`.
- Returns `true` for `0`, `"0"`, `false`, and empty strings.
```php
if(isset($username)){
    echo "Variable is set";
}
```
## empty
The [empty() function](https://www.geeksforgeeks.org/php/php-empty-function/) in PHP checks whether a variable is considered "empty." It returns true for values like 0, "0", false, NULL, empty arrays, empty strings, or if the variable is not set.

**Syntax:**

>bool empty ( $var )

**Parameter:** This function accepts a single parameter as shown in above syntax and described below.

- $var: Variable to check whether it is empty or not.
- empty Returns `true` if the variable is empty (`0`, `null`, etc.).
- Returns `true` for `0`, `"0"`, `false`, `null`, and empty strings.
~~~php
if(empty($username)){
    echo "Variable is empty";
}
~~~

| Variable State / Value         | `isset($var)` | `empty($var)` |
| ------------------------------ | ------------- | ------------- |
| **Undefined / Unset Variable** | `false`       | `true`        |
| `null`                         | `false`       | `true`        |
| `""` (Empty string)            | `true`        | `true`        |
| `0` (Integer zero)             | `true`        | `true`        |
| `"0"` (String zero)            | `true`        | `true`        |
| `false` (Boolean)              | `true`        | `true`        |
| `[]` (Empty array)             | `true`        | `true`        |
| `"text"` (Filled string)       | `true`        | `false`       |
## Example
```php
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <form action="issetForm.php" method="post">
    <label for="">Username</label><br>
    <input type="text" name="username" value=""><br>
    <label for="">Password</label><br>
    <input type="password" name="password" value=""><br><br>
    <input type="submit" name="enter" value="enter"><br>
    </form>
</body>
</html>

<?php

// foreach($_POST as $key => $value){
//     echo " {$key} = {$value} <br>";
// }
$username = $_POST["username"];
$password = $_POST["password"];
if(isset($_POST["enter"])){
    if(empty($username)){
        echo "Username empty!";
    }
    elseif(empty($password)){
    echo "Password empty!";
    }
    else{
        echo "Hello {$username}!";
    }
}

?>

```
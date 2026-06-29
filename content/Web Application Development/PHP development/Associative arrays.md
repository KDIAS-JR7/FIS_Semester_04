- Associative arrays are special arrays made of `key-value` pairs.
- Ex: countries => capitals

```php

$capitals = array(
                            "USA" => "Washington DC",
                            "Japan" => "Kyoto",
                            "Sri Lanka" => "Sri Jayawardanapura Kotte",
                            "India" => "New Delhi");
```

## Display an element
### Display a single key/value 
```php
echo $capitals["Sri Lanka"] . "<br>";
```
### Using a for-each loop 
```php
foreach($capitals as $key => $value){
echo "Capital of {$key} is {$value} <br>";
}
```
## Assign an element 
```php
$capitals["China"] = "Beijing";
```
## Remove the last key-value pair 
```php
array_pop($capitals);
foreach($capitals as $key => $value){
```
## Remove the first key-value pair 
```php
array_shift($capitals);
foreach($capitals as $key => $value){
```
## Print just the keys
```php
$keys = array_keys($capitals);
foreach($keys as $key ){
echo "{$key} <br>";
}
```
## Print just the values
```php
$values = array_values($capitals);
foreach($values as $value ){
echo "{$value} <br>";
}
```
## Flip keys and values 
```php
$capitalis = array_flip($capitals);
foreach($capitalis as $key => $value){
echo "{$key} is  the capital of {$value} <br>";
}
```
## Reverse the array 
```php
$recapitalis = array_reverse($capitals);
foreach($recapitalis as $key => $value){
echo "Capital of {$key} is {$value} <br>";
}
```
## Count the elements 
```php
$count = count($capitals);
echo $count;
```

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
    <form action="capitalCountry.php" method="post">
        <label for="country">Country: </label><br>
        <input type="text" name="capital" value="">
        <input type="submit" name="Enter" value="Enter">
    </form>
</body>
</html>

<?php
$capitals = [
    "USA" => "Washington DC",
    "Japan" => "Kyoto",
    "Sri Lanka" => "Sri Jayawardanapura Kotte",
    "India" => "New Delhi",
];

$capital = $capitals[$_POST["capital"]];
echo "The capital of {$_POST["capital"]} is {$capital}";

?>

```

>[!tip]
>The `superglobal` variables `$_POST` and `$_GET` are associative arrays. 
>You can echo the values of the GET or POST associative arrays as key value pairs.
>
>
>
```php
foreach($_POST as $key => $value){
    echo " {$key} = {$value} <br>";
}
```












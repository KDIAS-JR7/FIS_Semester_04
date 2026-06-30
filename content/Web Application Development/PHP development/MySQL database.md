## Connecting to a MySQL database
- Connecting to a MySQL database can be done with several methods, but we're going to user the `mysqli` function.
`database.php`
```php
<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "php_test";
$connection = "";

$connection = mysqli_connect(
                                                $db_server, 
                                                $db_user, 
                                                $db_pass, 
                                                $db_name);

if($connection){
    echo "You are connected";
}
else{
    echo "Could not connect";
}



 
?>
```

- The if block is used to check the connection.
## Inserting Data 
```php
<?php

include("database.php");

$sql = "INSERT INTO Users (user, password)
                                    VALUES ('Ernest','321')";

mysqli_query($connection, $sql);

mysqli_close($connection);
?>
```

## Retrieving data 
### A single row
```php
<?php

include("database.php");

$qur = "SELECT * FROM Users WHERE  user = 'Po' ";
$data = mysqli_query($connection, $qur);

if(mysqli_num_rows($data) > 0){
    $row = mysqli_fetch_assoc($data);
    echo $row["id"] . "<br>";
    echo $row["user"] . "<br>";
    echo $row["reg_date"] . "<br>";

}
else{
    echo "No user found";
}

?>
```

### Multiple rows
```php
<?php

include("database.php");

$qur = "SELECT * FROM Users ";
$data = mysqli_query($connection, $qur);

if(mysqli_num_rows($data) > 0){
    while($row = mysqli_fetch_assoc($data)){
        echo $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["reg_date"] . "<br>";
    }
    

}
else{
    echo "No user found";
}

?>
```
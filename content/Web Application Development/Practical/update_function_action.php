<?php
require_once "dbconnection.php";

$id = $_POST['id'];
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

$sql = "UPDATE item SET name='$name', quantity='$quantity', price='$price' WHERE id='$id'";
if ($connect->query($sql) == TRUE) {
    header("Location: update_form.php");
} else {
    header("Location: update_error.php");
}
?>
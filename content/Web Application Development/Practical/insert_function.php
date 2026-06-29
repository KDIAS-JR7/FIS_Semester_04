<?php
require_once "dbconnection.php";

// Validate input
if (!isset($_POST['name']) || !isset($_POST['quantity']) || !isset($_POST['price'])) {
    echo "Missing required fields";
    exit;
}

// Check if fields are empty
if (empty($_POST['name']) || empty($_POST['quantity']) || empty($_POST['price'])) {
    echo "Please fill all fields";
    exit;
}

// Use prepared statements to prevent SQL injection
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

$sql = "INSERT INTO item (name, quantity, price) VALUES (?, ?, ?)";
$stmt = $connect->prepare($sql);

if (!$stmt) {
    echo "Prepare failed: " . $connect->error;
    exit;
}

$stmt->bind_param("sss", $name, $quantity, $price);
$result = $stmt->execute();

if ($result) {
    $stmt->close();
    header("Location: form.php");
    exit;
} else {
    echo "Data Storing failed: " . $stmt->error;
    $stmt->close();
}
?>
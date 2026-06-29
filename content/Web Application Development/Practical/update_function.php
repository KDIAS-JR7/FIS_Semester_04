<?php
require_once "dbconnection.php";
$name = "";
$quantity = "";
$price = "";
$id = $_GET['id'];
$sql = "SELECT * FROM item WHERE id='$id'";
$result = $connect->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $quantity = $row["quantity"];
        $price = $row["price"];
    }
} else {
    echo "0 results";
}
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Update function</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">
    .wrapper {
        width: 500px;
        margin: 0 auto;
    }
</style>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-md-12">
                    <div class="page-header">
                        <h2>PHP/MySQL Update function</h2>
                    </div>
                    <?php
                    // Initialize variables
                    $id = $name = $quantity = $price = "";
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        // Fetch item details from database
                        require_once "dbconnection.php";
                        $stmt = $connect->prepare("SELECT name, quantity, price FROM item WHERE id = ?");
                        $stmt->bind_param("i", $id);
                        $stmt->execute();
                        $stmt->bind_result($name, $quantity, $price);
                        $stmt->fetch();
                        $stmt->close();
                        $connect->close();
                    }
                    ?>
                    <form action="update_function_action.php" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                            <label for="name">Item Name</label>
                            <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Item Quantity</label>
                            <input type="number" name="quantity" value="<?php echo htmlspecialchars($quantity); ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Item Price</label>
                            <input type="text" name="price" value="<?php echo htmlspecialchars($price); ?>" class="form-control" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="submit" name="update" value="Submit" class="btn btn-primary">
                            <p align="right"><a href=" home.php">Go Home page</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
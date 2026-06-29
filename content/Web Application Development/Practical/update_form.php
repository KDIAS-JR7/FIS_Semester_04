<!DOCTYPE html>
<html>

<head>
    <title>Update Item</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<?php
require_once "dbconnection.php";
?>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>PHP/MySQL Update function</h2>
                    </div>

                    <?php

                    $sql = "SELECT * FROM item";
                    $result = $connect->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<table align=\"center\" border =\"1\" 
        width=\"100%\">
            <tr align=\"center\">
            <td><b> No.</b></td>
            <td><b> Name</b></td>
            <td><b>Quantity</b></td>
            <td><b>Price(Rs.)</b></td>
            <td><b>Update Item</b></td>
            </tr>";
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr align=\"center\">
        <td>" . $row["id"] . "</td>
        <td>" . $row["name"] . "</td>
        <td>" . $row["quantity"] . "</td>
        <td>" . $row["price"] . "</td>
        <td><a href='update_function.php?id= " . $row['id'] . "'title='Update Item' data-toggle='tooltip'><span
         class='glyphicon glyphicon-pencil'></span></a></td>
        </tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }
                    $connect->close();

                    ?>
                </div>
            </div>
            <p align='right'><a href="home.php">Go Home page</a></p>
        </div>
    </div>

</body>


</html>
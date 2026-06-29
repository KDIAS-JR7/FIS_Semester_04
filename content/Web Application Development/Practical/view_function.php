<!DOCTYPE htmI>
<html>
<head>
<title>View Item</title>
</head>
<body>
<div class="Wrapper">
<div class="container-fiuid">
<div class="row'>
<div class="col-md-12'>
<div class="page-header">
<h2>PHP/MySQL View function</h2>
</div>

<?php
require_once "dbconnection.php";
$sql = "SELECT * FROM item ORDER BY name ASC";
$result = $connect->query ($sql);
if ($result->num_rows> 0) {
echo "<table align=\"center\" border =\"1\" width=\"100%\">
    <tr align=\"center\">
        <td><b>No.</b></td>
        <td><b>Name</b></td>
        <td><b>Quantity</b></td>
        <td><b>Price(Rs.)</b></td>
    </tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr align=\"center\">
        <td>".$row["id"]."</td>
        <td>".$row["name"]. "</td>
        <td>".$row["quantity"]."</td>
        <td align=\"right\">".$row["price"]. "</td>
    </tr>";
}
echo "</table>";
}
else {
echo "0 results";
}
$connect->close();
?>
</div>
</div><p align="right"><a href="home.php">Go Home page</a></p>
</div>
</div>
</body>
</html>
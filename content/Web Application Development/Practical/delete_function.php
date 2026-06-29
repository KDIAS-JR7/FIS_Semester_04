<?php
require_once 'dbconnection.php';
if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = intval($_POST['id']);
    $sql_delete = "DELETE FROM item WHERE Id=$id";
    $result_delete = mysqli_query($connect, $sql_delete);
    if ($result_delete) {
        header("Location: delete_form.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($connect);
        exit();
    }
} else {
    if (empty(trim($_GET['id'] ?? ''))) {
        header("location: error.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
<div class= "container-fluid">
        <div class="row">
            <div class=" col-md-12'>
            <div class=" page-header">
                <h1>Delete Record</h1>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="alert alert-danger fade in">
                    <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>" />
                    <p>Are you sure you want to delete this record?</p><br>
                    <p>
                        <input type="submit" value="Yes" class="btn btn-danger">
                        <a href="delete_form.php" class="btn btn-default">No </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>
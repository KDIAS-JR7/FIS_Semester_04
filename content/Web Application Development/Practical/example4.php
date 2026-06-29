<?php
    if (isset($_REQUEST['name']) && isset($_REQUEST['age'])) {
        if ($_REQUEST['name'] || $_REQUEST['age']) {
            echo $_REQUEST['name'] . "<br />";
            echo $_REQUEST['age'];
            exit();
        }
    }
?>
<html>
<head></head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Name: <input type="text" name='name' />
        Age: <input type="text" name='age' />
        <input type="submit" />
    </form>
</body>
</html>
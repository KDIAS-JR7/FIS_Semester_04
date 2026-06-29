<?php
if (isset($_POST['location'])) {
    if ($_POST['location']) {
        $location = $_POST['location'];
        header("Location: $location");
        exit();
    }
}
?>
<html>
<body>
    <p>Choose a site to visit :</p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <select name="location">
            <option value="http://www.yahoo.com">Yahoo Search Page</option>
            <option value="http://www.google.lk">Google Search Page</option>
        </select>
        <input type="submit" />
    </form>
</body>
</html>

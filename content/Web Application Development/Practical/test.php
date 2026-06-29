<?php
if (isset($_REQUEST['name']) && isset($_REQUEST['age'])) {
    if ($_REQUEST['name'] || $_REQUEST['age']) {
        echo "Hi, " . $_REQUEST['name'] . ". !!<br />";
        echo $_REQUEST['age'];
        exit();
    }
}
?>

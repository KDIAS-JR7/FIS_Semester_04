<?php
// Start the session
session_start();
// Access session variables
if (isset($_SESSION['loggedin']) && $_SESSION["loggedin"] === true) {
echo "Welcome " . $_SESSION["username"] . "!<br>";
echo "Your email address is " . $_SESSION["email"] . ".";
} else {
echo "Please log in first.";
}
?>


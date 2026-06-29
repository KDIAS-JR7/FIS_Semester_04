<?php
// Start the session
session_start();
// Set session variables
$_SESSION['username'] = "admin";
$_SESSION['email'] = "admin@example.com";
$_SESSION['loggedin'] = true;
echo "Session variables are set.";

?>
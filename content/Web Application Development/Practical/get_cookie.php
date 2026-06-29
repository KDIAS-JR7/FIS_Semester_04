<?php
// Check if the cookie is set
if(isset($_COOKIE["user"])) {
echo "User is " . $_COOKIE["user"] . "<br>";
} else {
echo "User cookie is not set.<br>";
}
if(isset($_COOKIE["email"])) {
echo "Email is " . $_COOKIE["email"] . "<br>";
} else {
echo "Email cookie is not set.";
}
?>
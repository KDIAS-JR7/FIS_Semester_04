<?php
// Delete the "user" cookie by setting its expiration date to one hour ago
setcookie("user", "", time() - 3600, "/");
// Delete the "email" cookie by setting its expiration date to one hour ago
setcookie("email","" , time() - 3600, "/");
echo "Cookies are deleted.";

?>
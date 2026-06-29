<?php

// Set a cookie named "user' with the value "John"
setcookie("user", "John", time() + (86400 * 30), "/"); // 86400 = 1 day;

setcookie("email", "john@example.com'", time() + (86400 * 30), "/");
echo "Cookies are set.";

?>
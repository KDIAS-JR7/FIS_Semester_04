### 01.

In PHP, the ternary operator `? :` serves as a shorthand for `if-else` statements. To find the largest of three numbers ($a$, $b$, and $c$), we can nest these operators to evaluate multiple conditions in a single line.
~~~php
<?php
$a = 15;
$b = 27;
$c = 10;

$largest = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c);

echo "The largest number is: " . $largest;
?>

~~~

### 02.
The variable `$_PHP_SELF` is a superglobal variable that returns the **filename of the currently executing script**  ( similar to $USER in Linux or UNIX).

* **Usage in Forms:** It is most commonly used in the `action` attribute of an HTML `<form>`. By setting `action="<?php echo $_SERVER['PHP_SELF']; ?>"`, the form data is submitted back to the same page instead of a different script.
* **Dynamic Nature:** 
	* It allows one to move or rename a file without having to manually update every form link within said file.
	* This is also useful when managing a large number of files with different names, as no matter what file is used, this superglobal variable will always provide the correct name.

---

### 03.

| Feature        | GET Method                                                                             | POST Method                                                                     |
| :------------- | :------------------------------------------------------------------------------------- | :------------------------------------------------------------------------------ |
| **Visibility** | Data is included in the URL (e.g., `?name=value`), making it visible to everyone.      | Data is sent within the HTTP request body and is not visible in the URL.        |
| **Security**   | Less secure; sensitive data like passwords should never be sent via GET.               | More secure for sensitive data as parameters are not stored in browser history. |
| **Data Limit** | Has a limit on the amount of data (usually ~2000 characters depending on the browser). | Has no specific limit on the amount of data that can be sent.                   |
| **Caching**    | Can be cached and bookmarked by the browser.                                           | Cannot be cached or bookmarked.                                                 |

---

### 04. 

```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Close connection
$conn->close();
?>
[cite_start]
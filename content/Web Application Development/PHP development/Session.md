A session in PHP is a mechanism that allows data to be stored and accessed across multiple pages on a website. When a user visits a website, PHP creates a unique session ID for that user. This session ID is then stored as a cookie in the user's browser (by default) or passed via the URL. The session ID helps the server associate the data stored in the session with the user during their visit.

- PHP sessions are used to maintain state, meaning they allow data to persist as users navigate through a site, which would otherwise be stateless (i.e., each request is independent).
- **Example:** If a user logs in to a website, their login status can be stored in a session variable. As the user moves through different pages, the login status can be checked using the session variable.
## How Do PHP Sessions Work?

- **Session Start:** When a user accesses a [PHP](https://www.geeksforgeeks.org/php/php-introduction/) page, the session gets started with the session_start() function. This function initiates the session and makes the session data available through the $_SESSION superglobal array.
- **Session Variables**: Data that needs to be carried across different pages is stored in the $_SESSION array. **For example**, a user’s name or login status can be stored in this array.
- **Session ID:** PHP assigns a unique session ID to every user. This session ID is stored in a cookie in the user's browser by default. The session ID is used to retrieve the user-specific data on each page load.
- **Session Data Storage:** The session data is stored on the server, not the client side. By default, PHP stores session data in a temporary file on the server. The location of this storage is determined by the session.save_path directive in the php.ini file.
- **Session Termination**: Sessions can be terminated by calling session_destroy(), which deletes the session data. Alternatively, a session can be closed using session_write_close() to save the session data and free up server resources.

## How to Use PHP Sessions?

Using PHP sessions involves several key steps: starting a session, storing data in session variables, retrieving data, and eventually destroying the session when no longer needed.

### 1. Starting a Session

To begin using sessions in PHP, you need to start the session with session_start() at the very beginning of the PHP script. This function ensures that the session is available and creates a unique session ID if it doesn’t already exist.

```php
<?php  
session_start(); // Start the session  
?>
```

> **Note:** Always call session_start() before any HTML output in your PHP script. If you output HTML or whitespace before calling session_start(), it will cause an error.

### 2. Storing Data in Sessions

Once the session is started, you can store any information in the $_SESSION superglobal array. This allows you to carry data across different pages on the website.

```php
<?php  
session_start();  
$_SESSION['username'] = 'GFG'; // Store session data  
$_SESSION['user_id'] = 123;  
?>
```

The username and user ID are stored in the session for use on other pages.

### 3. Retrieving Session Data

Once data is stored in a session, it can be accessed on any page where the session is started.

```php
<?php  
session_start();  
echo $_SESSION['username']; // Output: GFG  
?>
```

You can use the session variables to display user-specific information, check login statuses, and perform various operations.

### 4. Checking if Session Variables Exist

Before using session data, it’s a good practice to check if the session variable exists to avoid errors.

```php
<?php  
session_start();  
if (isset($_SESSION['username'])) {  
    echo "Welcome, " . $_SESSION['username'];  
} else {  
    echo "Please log in.";  
}  
?>
```

### 5. Destroying Sessions

When a session is no longer needed, you can terminate it by using session_destroy(). This function removes all session data from the server. However, it does not automatically unset session variables; you need to manually clear them using unset() if needed.

```php
<?php  
session_start();  
unset($_SESSION['username']); // Remove specific session variable  
session_destroy(); // Destroy the session  
?>
```

If you want to log out the user, destroying the session will remove all user-specific data and effectively "log them out."

## Why Use PHP Sessions?

- **Maintaining User State:** In web development, each page request is stateless, meaning the server doesn’t remember any previous interaction. Sessions allow you to store and retrieve user data (like login status or shopping cart contents) across multiple pages, making the web experience feel seamless.
- **Secure Data Storage:** Unlike cookies, which store data on the client side (in the browser), sessions store data on the server. This makes sessions more secure for handling sensitive information, as the data is not exposed to the user or tampered with on the client side.
- **Personalized User Experience:** Sessions enable you to personalize user experiences by remembering details such as user preferences, authentication status, and choices made on previous pages. For example, a logged-in user’s name can be displayed on every page they visit.
- **E-commerce and Shopping Carts:** For e-commerce websites, sessions are crucial to keep track of items in a shopping cart. Without sessions, the cart would be reset each time the user navigates to a different page, leading to a frustrating experience.
- **Security:** PHP sessions help to prevent unauthorized access. Sensitive data such as authentication tokens or user credentials can be stored securely in session variables, reducing the risk of exposure.

## Advantages of PHP Sessions

The advantages of PHP Sessions are mentioned below:

- **Security**: Unlike cookies, which store data on the client side, sessions store data on the server, making them more secure for sensitive information.
- **Data Persistence:** Sessions allow data to persist across multiple pages during a user’s visit to a site, making it ideal for tracking user activities like login status, shopping cart contents, etc.
- **Efficiency:** Sessions do not require constant data transfer between the client and server, unlike cookies that send data with each request.
- **Automatic Expiration:** PHP sessions can be configured to automatically expire after a certain time of inactivity, which helps in maintaining session security.

## PHP Sessions vs. Cookies

Below is the following difference between PHP Session and [PHP Cookies](https://www.geeksforgeeks.org/php/php-cookies/).

| Sessions                                                                                 | Cookies                                                                             |
| ---------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- |
| Data is stored on the server.                                                            | Data is stored on the client-side (in the browser).                                 |
| More secure as session data is not stored on the client-side.                            | Less secure as data is stored on the client-side and can be changed or stolen.      |
| Sessions usually expire when the browser is closed or after a specified inactivity time. | Cookies can have an expiration date set to stay persistent across browser sessions. |
## Example
- Let's look at an example where we use `session` to create a login/logout functionality.

### `index.php`
```php
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	This is the login page <br>
	<hr>
	<form action="index.php" method="post">
	<label for="">Username: </label><br><br>
	<input type="text" name="username" value=""><br>
	<label for="">Passowrd: </label><br><br>
	<input type="password" name="password" value=""><br><br>
	<input type="submit" name="login" value="login"><br><br>
	</form>
	<hr>
	<a href="home.php">This goes to the home page </a> <br>
</body>
</html>

<?php

if(isset($_POST["login"])){
    
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        header("Location: home.php");
    } 
    else {
        echo "Missing username/password";
    }

}

echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br>";


?>

```
### `home.php`
```php
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>

<?php
echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br>";

if(isset($_POST["logout"])){
    session_destroy();
    header("Location: index.php");
}

?>
```
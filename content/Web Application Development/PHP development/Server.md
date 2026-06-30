## PHP `$_SERVER`

The `$_SERVER` superglobal holds information about the web server including headers, paths, and script locations.

PHP superglobals are built-in variables that are always accessible in all scopes!

**Note:** The entries in `$_SERVER` are created by the web server, so there is no guarantee that every entry is available across different servers or environments.

The example below shows how to use some of the elements in `$_SERVER`:

```php
echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['HTTP_HOST'];
echo $_SERVER['HTTP_REFERER'];
echo $_SERVER['HTTP_USER_AGENT'];
echo $_SERVER['SCRIPT_NAME'];
```

The following table lists the most important elements that can go inside `$_SERVER`:

| Element/Code                    | Description                                                                                                                                                                                                            |
| ------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| $_SERVER['PHP_SELF']            | Returns the filename of the currently executing script                                                                                                                                                                 |
| $_SERVER['GATEWAY_INTERFACE']   | Returns the version of the Common Gateway Interface (CGI) the server is using                                                                                                                                          |
| $_SERVER['SERVER_ADDR']         | Returns the IP address of the host server                                                                                                                                                                              |
| $_SERVER['SERVER_NAME']         | Returns the name of the host server (such as www.w3schools.com)                                                                                                                                                        |
| $_SERVER['SERVER_SOFTWARE']     | Returns the server identification string (such as Apache/2.2.24)                                                                                                                                                       |
| $_SERVER['SERVER_PROTOCOL']     | Returns the name and revision of the information protocol (such as HTTP/1.1)                                                                                                                                           |
| $_SERVER['REQUEST_METHOD']      | Returns the request method used to access the page (such as POST)                                                                                                                                                      |
| $_SERVER['REQUEST_TIME']        | Returns the timestamp of the start of the request (such as 1377687496)                                                                                                                                                 |
| $_SERVER['QUERY_STRING']        | Returns the query string if the page is accessed via a query string                                                                                                                                                    |
| $_SERVER['HTTP_ACCEPT']         | Returns the Accept header from the current request                                                                                                                                                                     |
| $_SERVER['HTTP_ACCEPT_CHARSET'] | Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)                                                                                                                                  |
| $_SERVER['HTTP_HOST']           | Returns the Host header from the current request                                                                                                                                                                       |
| $_SERVER['HTTP_REFERER']        | Returns the complete URL of the current page (not reliable because not all user-agents support it)                                                                                                                     |
| $_SERVER['HTTPS']               | Is the script queried through a secure HTTP protocol                                                                                                                                                                   |
| $_SERVER['REMOTE_ADDR']         | Returns the IP address from where the user is viewing the current page                                                                                                                                                 |
| $_SERVER['REMOTE_HOST']         | Returns the Host name from where the user is viewing the current page                                                                                                                                                  |
| $_SERVER['REMOTE_PORT']         | Returns the port being used on the user's machine to communicate with the web server                                                                                                                                   |
| $_SERVER['SCRIPT_FILENAME']     | Returns the absolute pathname of the currently executing script                                                                                                                                                        |
| $_SERVER['SERVER_ADMIN']        | Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com) |
| $_SERVER['SERVER_PORT']         | Returns the port on the server machine being used by the web server for communication (such as 80)                                                                                                                     |
| $_SERVER['SERVER_SIGNATURE']    | Returns the server version and virtual host name which are added to server-generated pages                                                                                                                             |
| $_SERVER['PATH_TRANSLATED']     | Returns the file system based path to the current script                                                                                                                                                               |
| $_SERVER['SCRIPT_NAME']         | Returns the path of the current script                                                                                                                                                                                 |
| $_SERVER['SCRIPT_URI']          | Returns the URI of the current page                                                                                                                                                                                    |
## example
```php
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="">Username:</label><br><br>
        <input type="text" name="username" value=""><br><br>
        <input type="submit" name="login" value="login"><br><br>
    </form>
</body>
</html>

<?php

if(isset($_POST["login"])){
    if(!empty($_POST["username"])){
        echo "Your username is: {$_POST["username"]}";
    }
    else{
        echo "Username filed empty!";
    }
}



?>
```
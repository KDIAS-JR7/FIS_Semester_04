A cookie is a small text file that is stored in the user's browser. Cookies are used to store information that can be retrieved later, making them ideal for scenarios where you need to remember user preferences, such as:

- User login status (keeping users logged in between sessions)
- Language preferences
- Shopping cart contents
- Tracking user activity for analytics purposes

Cookies in [PHP](https://www.geeksforgeeks.org/php/php-introduction/) are created using the setcookie() function. When a cookie is set, the data is stored in the user’s browser and sent to the server with each subsequent request made by the browser.

**Syntax:**

>setcookie(name, value, expire, path, domain, security);

**In this syntax:**

- **Name:** It is used to set the name of the cookie.
- **Value:** It is used to set the value of the cookie.
- **Expire:** It is used to set the expiry timestamp of the cookie, after which the cookie can't be accessed.
- **Path:** It is used to specify the path on the server for which the cookie will be available.
- **Domain:** It is used to specify the domain for which the cookie is available.
- **Security:** It indicates that the cookie should be sent only if a secure HTTPS connection exists.

## How Do Cookies Work?

Cookies work in the following ways:

- **Setting Cookies:** A cookie is set using the setcookie() function in PHP. The cookie data is stored on the user’s browser and sent along with each HTTP request to the server.
- **Reading Cookies**: Once a cookie is set, it can be accessed using the $_COOKIE superglobal array. This allows you to retrieve cookie values that were set on the user’s browser.
- **Expiration of Cookies:** Cookies can be set to expire after a certain period. When a cookie expires, it is automatically deleted by the browser. Cookies can also be manually deleted by calling the setcookie() function with a past expiration date.
- **Sending Cookies to the Browser:** Cookies are sent to the browser as HTTP headers. Since HTTP headers must be sent before any actual content (HTML, etc.), setcookie() must be called before any output is sent to the browser.


```php
<?php

setcookie("food","Pizza",time() + 3600);

?>
```

- The above code snippet creates a` cookie named food` with the `value Pizza `that `expires in 1 hour`.
- You can see any stored cookies using the browser developer tools.
![[cookie.png]]

## `$_COOKIE` variable 
- `$_COOKIE` is a `superglobal` variable that stores values as key value pairs just like `GET and POST`.
- Therefore, we can use a`foreach` loop to print the contents of some cookies.
```php
<?php

setcookie("food","Pizza",time() + 3600);
setcookie("drink","Coffee",time() + 3600);
setcookie("animal","Cat",time() + 3600);


foreach($_COOKIE as $key => $value){
    echo $key . " = ". $value . "<br>";
}

?>
```

- It outputs in the browser as,
```
food = Pizza  
drink = Coffee  
animal = Cat
```

## Use Cases for Cookies

Cookies are used in various scenarios, including:

- **User Authentication:** Cookies can be used to keep users logged in between sessions. **For example**, when a user logs in, a session ID or a token can be stored in a cookie. On later visits, the website can check the cookie and log the user in automatically.

```php
<?php  
// Store login token in a cookie (for example, after a successful login)  
setcookie("login_token", $token, time() + 3600, "/"); // Expires in 1 hour  
?>
```

- **User Preferences:** Cookies are useful for remembering user settings, such as theme preferences, language settings, or page layout preferences.

```php
<?php  
// Store theme preference in a cookie  
setcookie("theme", "dark", time() + 3600, "/");  
?>
```

- **Shopping Carts**: For e-commerce sites, cookies are commonly used to store the contents of a user’s shopping cart. This allows users to continue shopping after they leave the site and return later.

```php
<?php  
// Store shopping cart items in a cookie (as a serialized array or JSON string)  
$cart = json_encode(["item1" => 2, "item2" => 1]);  
setcookie("cart", $cart, time() + 3600, "/");  
?>
```

- **Tracking and Analytics**: Cookies can be used to track user behavior on a website. This data can be used for analytics or to provide personalized content based on past interactions.

```php
<?php  
// Set a cookie to track user visits  
setcookie("visit_count", ++$_COOKIE["visit_count"], time() + 3600, "/");  
?>
```
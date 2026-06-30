Internet cookies are ==small text files sent by a website and stored on your device's web browser==. They help websites remember your preferences, keep you logged into accounts, track your activity for targeted advertising, and keep items in your online shopping cart.

Here is a quick breakdown of how they work and the main types:

## Types of Cookies

- **First-Party Cookies:** Created by the specific website you are visiting. They store functional data to make your browsing experience smoother. 
- **Third-Party Cookies:** Created by a website other than the one you are currently visiting (often advertisers). They track your behavior across multiple sites to serve you personalized ads. 
- **Session Cookies:** Temporary files that are automatically deleted the moment you close your browser or leave the website.
- **Persistent Cookies:** Files that remain on your device for a predetermined period (or until you delete them). They remember your logins and site settings for future visits. 

## Why Cookies Are Used

- **Authentication:** They identify you so you do not have to log in to the same website on every new page you open.
- **Personalization:** They remember your preferences, such as your dark mode settings, language choices, and local weather.
- **Analytics:** They help website owners understand how many visitors they have and which pages are most popular. 

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
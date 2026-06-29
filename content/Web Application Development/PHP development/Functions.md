- Functions are used to reuse a block of code anywhere else in the file.
```php
<?php

function happyBirthday($name,$age){
    echo "Happy Birthday {$name}! <br>"; 
    echo "Happy Birthday to you! <br>"; 
    echo "Happy Birthday {$name}! <br>"; 
    echo "You are {$age} years old! <br>"; 
}

happyBirthday("Spongebob",69);

?>
```

- This function prints a birthday song once invoked.
- It also `takes two arguments`, `defined in the function as two parameters` name and age.
```php
happyBirthday("Spongebob",69);
```
- This line invokes the happyBirthday function with the arguments spongebob and 69.
- Once the function is invoked, within the function, these arguments get substituted into the values of the parameters name and age.
```
Happy Birthday Spongebob!  
Happy Birthday to you!  
Happy Birthday Spongebob!  
You are 69 years old!
```


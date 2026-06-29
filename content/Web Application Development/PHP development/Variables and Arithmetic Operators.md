# Variables 
## Variable Notation
- Variables in PHP are denoted with a *$* symbol.
~~~ php
$name = "JR7";
$food = "Pizza";
$price = 5;
~~~
- In PHP, variable data types aren't explicitly noted.
## Variable data types
1. String 
	Words or letters, encapsulated with double quotes
2. Integer
	Numbers without decimal points
3. Float
	Numbers with decimal points
4. Boolean
	True or False values
~~~php
// String
$name = "JR7";
$food = "Pizza";
// Integer
$price = 5;
//Float
$gpa = 3.45;
//Boolean
$student = true;
~~~
## Display a variable
- A variable can be displayed in two different ways.
1. Echo a message directly(String Literal)

~~~php
echo $name . "<br>";
~~~
2.  Using a placeholder ex: {}
~~~php
echo "Hello {$name} <br>";
echo "You like {$food}";
~~~

> [!TIP]
> In PHP, the dot (`.`) symbol serves as the **string concatenation operator**, which is used to combine two or more strings together.
> ~~~php 
> $firstName = "John";
$lastName = "Doe";
// Combines the first name, a space, and the last name
$fullName = $firstName . " " . $lastName; 
echo $fullName; // Outputs: John Doe

>[!TIP]
>*$* is used to denote a variable. But what if we want to use this symbol for another purpose such as indicating USD? There, we can use the *escape sequence* \ like so,
>~~~php
> echo "Your pizza is \${$price}";
# Arithmetic Operators
for;
~~~php
$x = 10;
$y = 2;
$z =null;
~~~
## 1. Addition
~~~php
$z = $x + $y;
echo "$z <br>"; // answer 12
~~~
## 2. Subtraction
~~~php
$z = $x - $y;
echo "$z <br>"; // answer 8
~~~
## 3. Multiplication
~~~php
$z = $x * $y;
echo "$z <br>"; // answer 20
~~~
## 4. Division
~~~php
$z = $x / $y;
echo "$z <br>"; // answer 5
~~~
## 5. Power
~~~php
$z = $x ** $y;
echo "$z <br>"; // answer 100
~~~
## 6. Remainder
~~~php
$z = $x % $y;
echo "$z <br>"; // answer 0
~~~
## 7. Increment/Decrement
~~~php
$y++;
echo "$x <br>"; //answer 3
$x--;
echo $x; //answer 9
~~~

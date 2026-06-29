## Creating an Array
~~~php
$foods = array("apple","mango","papaya","coconut");
~~~

## Listing Elements
### By index
```php
echo "List an element by index: ";
echo $foods[0] . "<br>";
```
### Using a for-each loop 
```php
echo "List elemets using a for each loop: ". "<br>";
$numb1 = 0;
foreach($foods as $food) {
    echo $numb1.". " .$food . "<br>";
    $numb1++;
}
```

## Inserting elements 
### Direct assignment 
```php
echo "Insert an element by index: ". "<br>";
$foods[4] = "Cherry";
echo $foods[4] . "<br>";

```
### Pushing an element to the end of the array 
```php
echo "Insert an element to the end of the array with push: ". "<br>";
array_push($foods, "pinnaple","orange");
```

## Removing Elements 
### Using pop
```php
echo "Pop the last element of the array with pop: ". "<br>";
array_pop($foods);
```
### Using shift
```php
echo "Shift the first element out of the array with shift: ". "<br>";
array_shift($foods);
```
## Reversing an array 
```php
echo "Reverse the array elements: ". "<br>";
$sdoof = array_reverse($foods);
```
## Counting elements 
```php
echo "Count the array elements: ";
echo count($foods);
```
~~~php
<?php

$date = date("l");
$date = "Pizza";

switch ($date) {
    case "Monday":
        echo "I hate Monday";
        break;

    case "Tuesday":
        echo "It's taco tuesday";
        break;

    case "Wednesday":
        echo "Half of the week done";
        break;

    case "Thursday":
        echo " Two more days to weekend";
        break;

    case "Friday":
        echo "Weekend Tomorrow!";
        break;

    case "Saturday":
        echo "Let's Party!";
        break;

    case "Sunday":
        echo "Let's relax";
        break;

    default:
        echo "{$date} is not a valid day.";
        break;
}

?>

~~~

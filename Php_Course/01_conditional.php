<?php
// Example of If statement
$number = 10;
if ($number > 0) {
    echo "The number is positive.<br>";
}

// Example of If-Else statement
$age = 18;
if ($age >= 18) {
    echo "You are an adult.<br>";
} else {
    echo "You are not an adult.<br>";
}

// Example of Switch statement
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Today is Monday.<br>";
        break;
    case "Tuesday":
        echo "Today is Tuesday.<br>";
        break;
    case "Wednesday":
        echo "Today is Wednesday.<br>";
        break;
    case "Thursday":
        echo "Today is Thursday.<br>";
        break;
    case "Friday":
        echo "Today is Friday.<br>";
        break;
    case "Saturday":
        echo "Today is Saturday.<br>";
        break;
    case "Sunday":
        echo "Today is Sunday.<br>";
        break;
    default:
        echo "Invalid day.<br>";
        break;
}
?>

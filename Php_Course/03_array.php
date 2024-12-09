<!-- a) Indexed array -->

<?php
// Creating an indexed array
$fruits = array("Apple", "Banana", "Orange", "Grapes");

// Adding an element to the array
$fruits[] = "Mango";

// Accessing elements
echo "First fruit: " . $fruits[0] . "<br>";
echo "All fruits:<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>

<!-- b) Associative array -->

<?php
// Creating an associative array
$age = array("John" => 25, "Jane" => 30, "Sam" => 22);

// Adding an element to the array
$age["Tom"] = 27;

// Accessing elements
echo "Jane's age: " . $age["Jane"] . "<br>";
echo "All ages:<br>";
foreach ($age as $name => $age_value) {
    echo $name . " is " . $age_value . " years old.<br>";
}
?>

<!-- c) Multidimensional array -->

<?php
// Creating a multidimensional array
$students = array(
    "John" => array("Math" => 85, "Science" => 90),
    "Jane" => array("Math" => 78, "Science" => 85),
    "Sam" => array("Math" => 82, "Science" => 88)
);

// Adding an element to the array
$students["Tom"] = array("Math" => 80, "Science" => 87);

// Accessing elements
echo "John's Math score: " . $students["John"]["Math"] . "<br>";
echo "All students' scores:<br>";
foreach ($students as $name => $subjects) {
    echo $name . "'s scores:<br>";
    foreach ($subjects as $subject => $score) {
        echo $subject . ": " . $score . "<br>";
    }
}
?>

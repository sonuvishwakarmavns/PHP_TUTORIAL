<!-- <?php
// Calculate length of string
function calculateStringLength($str) {
    $length = 0;
    while (isset($str[$length])) {
        $length++;
    }
    return $length;
}

$string = "Hello World";
echo "Length of the string: " . calculateStringLength($string) . "<br>";

// Count the number of words in string without using string functions
function countWords($str) {
    $words = 0;
    $inWord = false;

    for ($i = 0; $i < calculateStringLength($str); $i++) {
        if ($str[$i] != ' ' && !$inWord) {
            $words++;
            $inWord = true;
        } elseif ($str[$i] == ' ') {
            $inWord = false;
        }
    }
    return $words;
}

echo "Number of words in the string: " . countWords($string);
?> -->


<?php
$string = "Hello World! Welcome to PHP string functions.";

// Calculate length of string
echo "Length of the string: " . strlen($string) . "<br>";

// Count the number of words in the string
echo "Number of words in the string: " . str_word_count($string) . "<br>";

// Convert the string to uppercase
echo "Uppercase string: " . strtoupper($string) . "<br>";

// Convert the string to lowercase
echo "Lowercase string: " . strtolower($string) . "<br>";

// Reverse the string
echo "Reversed string: " . strrev($string) . "<br>";

// Find the position of a word in the string
$word = "Welcome";
echo "Position of '$word' in the string: " . strpos($string, $word) . "<br>";
?>

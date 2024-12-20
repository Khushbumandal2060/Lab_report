<?php
function findStringIndex($array, $string) {
    // Use array_search to find the index of the string in the array
    $index = array_search($string, $array);
    
    // Check if the string was found and return the index, or false if not found
    if ($index !== false) {
        return $index;
    } else {
        return "String not found in the array.";
    }
}

// Example usage
$array = ["apple", "banana", "cherry", "date"];
$string = "banana";

echo "The index of '$string' is: " . findStringIndex($array, $string);
?>

<?php
function getValueByIndex($array, $index) {
    // Check if the index exists in the array
    if (isset($array[$index])) {
        return $array[$index];
    } else {
        return "Index not found.";
    }
}

// Example usage
$array = ["apple", "banana", "cherry", "date"];
$index = 2;

echo "The value at index $index is: " . getValueByIndex($array, $index);
?>

<?php
function findLargest($num1, $num2, $num3) {
    // Check for the largest number using max() function
    $largest = max($num1, $num2, $num3);
    return $largest;
}

// Example inputs
$num1 = 10;
$num2 = 25;
$num3 = 7;

// Display the inputs
//echo "Input Numbers: $num1, $num2, $num3\n";

// Find and display the largest number
$largest = findLargest($num1, $num2, $num3);
echo "The largest number is: $largest\n";
?>

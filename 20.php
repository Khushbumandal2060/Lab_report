<?php
function createNewString($str) {
    // Check if the string length is less than 2
    if (strlen($str) < 2) {
        return $str; // Return the original string if its length is less than 2
    } else {
        // Get the first 2 characters and repeat them 4 times
        $frontTwoChars = substr($str, 0, 2);
        return str_repeat($frontTwoChars, 4); // Return 4 copies of the first 2 characters
    }
}

// Example usage
$input1 = "C Sharp";
$input2 = "JS";
$input3 = "a";

echo createNewString($input1) . "\n"; // Output: "CCCC"
echo createNewString($input2) . "\n"; // Output: "JSJSJSJS"
echo createNewString($input3) . "\n"; // Output: "a"
?>

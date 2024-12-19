<?php
function stringLength($str) {
    // Base case: if the string is empty, its length is 0
    if ($str === '') {
        return 0;
    } else {
        // Recursive case: remove the first character and add 1 to the length
        return 1 + stringLength(substr($str, 1));
    }
}

// Example usage
$string = "Hello";
echo "The length of the string '$string' is " . stringLength($string) . ".";
?>

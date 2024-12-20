<?php
function addIfPrefix($str) {
    // Check if the string already starts with "if"
    if (substr($str, 0, 2) === "if") {
        return $str; // Return the string unchanged
    } else {
        return "if " . $str; // Add "if" to the front of the string
    }
}

// Example usage
$input1 = "if else";
$input2 = "else";
$input3 = "if";

echo addIfPrefix($input1) . "\n"; // Output: "if else"
echo addIfPrefix($input2) . "\n"; // Output: "if else"
echo addIfPrefix($input3) . "\n"; // Output: "if"
?>

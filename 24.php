<?php
function convertString($input) {
    if (strlen($input) < 3) {
        return strtoupper($input); // If less than 3, convert the whole string to uppercase
    }
    return substr($input, 0, -3) . strtoupper(substr($input, -3)); // Convert the last 3 chars
}

// Test cases
echo convertString("Nepal") . "<br>";
echo convertString("NPL") . "<br>";
echo convertString("Bca") . "<br>";
echo convertString("Bachelor") . "<br>";
?>

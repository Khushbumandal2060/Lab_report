<?php
function absoluteDifference($n) {
    // Calculate the absolute difference between n and 51
    $difference = abs($n - 51);
    
    // If n is greater than 51, return triple the difference
    if ($n > 51) {
        return 3 * $difference;
    } else {
        return $difference;
    }
}

// Example usage
$n = 70;
echo "The result is: " . absoluteDifference($n);
?>

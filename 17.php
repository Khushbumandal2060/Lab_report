<?php
function computeSum($a, $b) {
    // Check if the two values are the same
    if ($a == $b) {
        // Return triple their sum if they are the same
        return 3 * ($a + $b);
    } else {
        // Return the normal sum if they are not the same
        return $a + $b;
    }
}

// Example usage
$a = 5;
$b = 5;

echo "The result of adding $a and $b is: " . computeSum($a, $b);
?>

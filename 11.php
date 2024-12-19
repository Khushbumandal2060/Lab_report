<?php
function isDivisibleByFive($number) {
    // Check if the number is divisible by 5
    return $number % 5 == 0;
}

// Example usage
$number = 11;
if (isDivisibleByFive($number)) {
    echo "$number is evenly divisible by 5.";
} else {
    echo "$number is not evenly divisible by 5.";
}
?>

<?php
function calculateCarsNeeded($n) {
    // A car can hold 5 people, so divide the number of people by 5 and round up
    return ceil($n / 5);
}

// Example usage
$people = 17;
echo "For $people people, you need " . calculateCarsNeeded($people) . " cars.";
?>

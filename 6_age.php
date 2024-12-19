<?php
function convertAgeToDays($ageInYears) {
    // Assume 1 year = 365 days
    $ageInDays = $ageInYears * 365;
    return $ageInDays;
}

// Example usage
$ageInYears = 25;
echo "An age of $ageInYears years is approximately " . convertAgeToDays($ageInYears) . " days.";
?>

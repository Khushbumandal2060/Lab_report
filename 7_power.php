<?php
function calculatePower($voltage, $current) {
    // Calculate power using the formula P = V × I
    $power = $voltage * $current;
    return $power;
}

// Example usage
$voltage = 220; // Voltage in volts
$current = 5;   // Current in amperes
echo "The power with voltage $voltage V and current $current A is " . calculatePower($voltage, $current) . " watts.";
?>

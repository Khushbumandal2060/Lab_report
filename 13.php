<?php
function calculateArea($base, $height, $shape) {
    // Check the shape and calculate area accordingly
    if ($shape === "triangle") {
        // Area of triangle: (base * height) / 2
        return ($base * $height) / 2;
    } elseif ($shape === "parallelogram") {
        // Area of parallelogram: base * height
        return $base * $height;
    } else {
        // Invalid shape
        return "Invalid shape!";
    }
}

// Example usage
$base = 10;  // base value
$height = 5; // height value
$shape = "triangle"; // shape type

echo "The area of the $shape is " . calculateArea($base, $height, $shape) . ".";
?>

<?php
function calculateTriangleArea($base, $height) {
    // Calculate the area of the triangle
    $area = 0.5 * $base * $height;
    return $area;
}

// Example usage
$base = 10;
$height = 5;
echo "The area of a triangle with base $base and height $height is " . calculateTriangleArea($base, $height) . ".";
?>

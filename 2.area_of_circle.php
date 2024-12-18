<?php
// Define the value of PI as a constant
define("PI", 3.14159);

// Take radius as input (e.g., via form or hardcoded)
$radius = 5; // You can replace this with dynamic input

// Calculate the area of the circle
$area = PI * $radius * $radius;

// Display the result
echo "<h3>Area of Circle</h3>";
echo "Radius: $radius<br>";
echo "PI: " . PI . "<br>";
echo "Area: $area";
?>

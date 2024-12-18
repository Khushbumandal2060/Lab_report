<?php
// Part C: Variables with different data types
$intVar = 25;       // Integer
$floatVar = 3.14;   // Float
$stringVar = "Hello, PHP!"; // String
$boolVar = true;    // Boolean
$arrayVar = array("PHP", 7.4, true, 100);

// Check and display data types
echo "<h3>Checking Data Types</h3>";
echo "Is \$intVar an integer? " . (is_int($intVar) ? "Yes" : "No") . "<br>";
echo "Is \$floatVar a float? " . (is_float($floatVar) ? "Yes" : "No") . "<br>";
echo "Is \$stringVar a string? " . (is_string($stringVar) ? "Yes" : "No") . "<br>";
echo "Is \$boolVar a boolean? " . (is_bool($boolVar) ? "Yes" : "No") . "<br>";
echo "Is \$arrayVar an array? " . (is_array($arrayVar) ? "Yes" : "No") . "<br>";
?>

<?php
// Variables with different data types
$integerVar = 10; // Integer
$floatVar = 20.5; // Float
$stringVar = "Hello, PHP!"; // String
$booleanVar = true; // Boolean
$arrayVar = array(1, 2, 3, "PHP");

// Printing variables using echo
echo "Integer: $integerVar <br>";
echo "Float: $floatVar <br>";
echo "String: $stringVar <br>";
echo "Boolean: " . ($booleanVar ? 'true' : 'false') . "<br>";

// Printing variables using print
print "Array: ";
print_r($arrayVar);
print "<br>";

?>

<?php
function addFirstThreeChars($str) {
    $firstThreeChars = (strlen($str) < 3) ? $str : substr($str, 0, 3);
    return $firstThreeChars . $str . $firstThreeChars;
}

// Test cases
echo addFirstThreeChars("Python") . "\n";  // Output: PytPythonPyt
echo addFirstThreeChars("JS") . "\n";      // Output: JSJSJS
echo addFirstThreeChars("Code") . "\n";    // Output: CodCodeCod
?>

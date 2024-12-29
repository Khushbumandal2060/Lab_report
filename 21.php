<?php
function addLastCharToFrontAndBack($str) {
    if (strlen($str) > 0) {
        $lastChar = substr($str, -1);
        return $lastChar . $str . $lastChar;
    }
    return $str;
}

// Test cases
echo addLastCharToFrontAndBack("Red") . "\n";   // Output: dRedd
echo addLastCharToFrontAndBack("Green") . "\n"; // Output: nGreenn
echo addLastCharToFrontAndBack("1") . "\n";     // Output: 111
?>
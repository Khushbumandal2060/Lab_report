<?php
function areStringsEqualLength($string1, $string2) {
    // Compare the lengths of the two strings
    return strlen($string1) === strlen($string2);
}

// Example usage
$string1 = "hello";
$string2 = "world";
if (areStringsEqualLength($string1, $string2)) {
    echo "The strings '$string1' and '$string2' have equal lengths.";
} else {
    echo "The strings '$string1' and '$string2' do not have equal lengths.";
}
?>

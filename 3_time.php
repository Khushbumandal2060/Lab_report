<?php
function convertMinutesToSeconds($minutes) {
    // Convert minutes to seconds
    $seconds = $minutes * 60;
    return $seconds;
}

// Example usage
$minutes = 5;
echo $minutes . " minutes is equal to " . convertMinutesToSeconds($minutes) . " seconds.";
?>

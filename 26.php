<?php
// Multidimensional array for marks
$students = [
    ['name' => 'John', 'math' => 85, 'science' => 90, 'english' => 88],
    ['name' => 'Alice', 'math' => 78, 'science' => 82, 'english' => 80],
    ['name' => 'Bob', 'math' => 92, 'science' => 89, 'english' => 94],
    ['name' => 'Eve', 'math' => 70, 'science' => 75, 'english' => 72]
];

// Display table
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr style='background-color: lightblue;'><th>Name</th><th>Math</th><th>Science</th><th>English</th></tr>";
foreach ($students as $index => $student) {
    $bgColor = ($index % 2 == 0) ? 'lightgreen' : 'white'; // Alternate row colors
    echo "<tr style='background-color: $bgColor;'>";
    echo "<td>" . $student['name'] . "</td>";
    echo "<td>" . $student['math'] . "</td>";
    echo "<td>" . $student['science'] . "</td>";
    echo "<td>" . $student['english'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

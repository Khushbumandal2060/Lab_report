<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $marks = [
        'English' => $_POST['english'],
        'Math' => $_POST['math'],
        'Science' => $_POST['science']
    ];

    $total = array_sum($marks);
    $percentage = $total / count($marks);
    $grade = $percentage >= 90 ? 'A+' : ($percentage >= 80 ? 'A' : ($percentage >= 70 ? 'B' : ($percentage >= 50 ? 'C' : 'F')));
}
?>

<form method="post">
    Name: <input type="text" name="name" required><br>
    Roll No: <input type="text" name="rollno" required><br>
    English: <input type="number" name="english" required><br>
    Math: <input type="number" name="math" required><br>
    Science: <input type="number" name="science" required><br>
    <input type="submit" value="Generate Marksheet">
</form>

<?php if (isset($name)) { ?>
<h3>Marksheet</h3>
<p>Name: <?= $name ?></p>
<p>Roll No: <?= $rollno ?></p>
<p>Total Marks: <?= $total ?></p>
<p>Percentage: <?= $percentage ?>%</p>
<p>Grade: <?= $grade ?></p>
<?php } ?>
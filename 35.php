<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Interest Calculator</title>
</head>
<body>
    <h1>Simple Interest Calculator</h1>
    <form method="POST" action="">
        <label for="principal">Principal Amount:</label><br>
        <input type="number" id="principal" name="principal" step="0.01" required><br><br>

        <label for="rate">Rate of Interest (%):</label><br>
        <input type="number" id="rate" name="rate" step="0.01" required><br><br>

        <label for="time">Time (in years):</label><br>
        <input type="number" id="time" name="time" step="0.01" required><br><br>

        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve form inputs
        $principal = $_POST['principal'];
        $rate = $_POST['rate'];
        $time = $_POST['time'];

        // Validate inputs
        if ($principal > 0 && $rate > 0 && $time > 0) {
            // Calculate simple interest
            $simpleInterest = ($principal * $rate * $time) / 100;
            echo "<h2>Result:</h2>";
            echo "Principal: $" . number_format($principal, 2) . "<br>";
            echo "Rate of Interest: " . number_format($rate, 2) . "%<br>";
            echo "Time: " . number_format($time, 2) . " years<br>";
            echo "<strong>Simple Interest: $" . number_format($simpleInterest, 2) . "</strong>";
        } else {
            echo "<p style='color: red;'>Please enter valid positive values for all fields.</p>";
        }
    }
    ?>
</body>
</html>

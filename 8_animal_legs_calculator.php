<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Legs Calculator</title>
</head>
<body>
    <h2>Animal Legs Calculator</h2>
    <form method="POST">
        <label for="chickens">Number of Chickens:</label>
        <input type="number" id="chickens" name="chickens" min="0" value="0" required><br><br>
        
        <label for="cows">Number of Cows:</label>
        <input type="number" id="cows" name="cows" min="0" value="0" required><br><br>
        
        <label for="pigs">Number of Pigs:</label>
        <input type="number" id="pigs" name="pigs" min="0" value="0" required><br><br>
        
        <button type="submit">Calculate Total Legs</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get input values from the form
        $chickens = intval($_POST['chickens']);
        $cows = intval($_POST['cows']);
        $pigs = intval($_POST['pigs']);

        // Calculate total legs
        $totalLegs = ($chickens * 2) + ($cows * 4) + ($pigs * 4);

        // Display result
        echo "<h3>Total Number of Legs: $totalLegs</h3>";
    }
    ?>
</body>
</html>

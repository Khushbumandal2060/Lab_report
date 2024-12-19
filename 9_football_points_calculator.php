<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Team Points Calculator</title>
</head>
<body>
    <h2>Football Team Points Calculator</h2>
    <form method="POST">
        <label for="wins">Number of Wins:</label>
        <input type="number" id="wins" name="wins" min="0" value="0" required><br><br>
        
        <label for="draws">Number of Draws:</label>
        <input type="number" id="draws" name="draws" min="0" value="0" required><br><br>
        
        <label for="losses">Number of Losses:</label>
        <input type="number" id="losses" name="losses" min="0" value="0" required><br><br>
        
        <button type="submit">Calculate Total Points</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get input values from the form
        $wins = intval($_POST['wins']);
        $draws = intval($_POST['draws']);
        $losses = intval($_POST['losses']);

        // Calculate total points
        $totalPoints = ($wins * 3) + ($draws * 1) + ($losses * 0);

        // Display result
        echo "<h3>Total Points: $totalPoints</h3>";
    }
    ?>
</body>
</html>

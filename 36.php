<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $income = $_POST["income"];
    $marital_status = $_POST["marital_status"];
    $gender = $_POST["gender"];
    $tax = 0;

    if ($marital_status == "Married") {
        if ($income <= 450000) {
            $tax = $income * 0.01;
        } elseif ($income <= 550000) {
            $tax = 4500 + ($income - 450000) * 0.1;
        } elseif ($income <= 750000) {
            $tax = 14500 + ($income - 550000) * 0.2;
        } elseif ($income <= 1300000) {
            $tax = 54500 + ($income - 750000) * 0.3;
        } else {
            $tax = 220000 + ($income - 1300000) * 0.35;
        }
    } else { // Unmarried
        if ($income <= 400000) {
            $tax = $income * 0.01;
        } elseif ($income <= 500000) {
            $tax = 4000 + ($income - 400000) * 0.1;
        } elseif ($income <= 750000) {
            $tax = 14000 + ($income - 500000) * 0.2;
        } elseif ($income <= 1300000) {
            $tax = 64000 + ($income - 750000) * 0.3;
        } else {
            $tax = 229000 + ($income - 1300000) * 0.35;
        }
    }

    if ($gender == "Female") {
        $tax *= 0.9; // 10% discount
    }

    echo "Your calculated tax is: " . number_format($tax, 2);
}
?>
<form method="post">
    Annual Income: <input type="number" name="income" required><br>
    Marital Status:
    <select name="marital_status">
        <option value="Married">Married</option>
        <option value="Unmarried">Unmarried</option>
    </select><br>
    Gender:
    <select name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select><br>
    <input type="submit" value="Calculate Tax">
</form>
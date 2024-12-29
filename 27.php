<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded credentials for validation
    $validUsername = "admin";
    $validPassword = "password123";

    if ($username === $validUsername && $password === $validPassword) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>
<form method="post">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" value="Login">
</form>
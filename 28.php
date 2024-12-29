<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded credentials
    if ($username === 'user' && $password === 'pass') {
        $_SESSION['username'] = $username;
        setcookie('username', $username, time() + 3600); // 1-hour cookie
        echo "Login successful!";
    } else {
        echo "Invalid credentials.";
    }
} elseif (isset($_SESSION['username'])) {
    echo "Welcome back, " . $_SESSION['username'];
} else {
?>
<form method="post">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" value="Login">
</form>
<?php
}
?>
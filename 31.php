<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];

    if (strlen($username) >= 8 && filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/^\d{10}$/', $phone)) {
        echo "Registration successful!";
    } else {
        echo "Invalid inputs. Please check the requirements.";
    }
}
?>
<form method="post">
    Username: <input type="text" name="username" required><br>
    Email: <input type="email" name="email" required><br>
    Date of Birth: <input type="date" name="dob" required><br>
    Phone: <input type="text" name="phone" required><br>
    <input type="submit" value="Register">
</form>
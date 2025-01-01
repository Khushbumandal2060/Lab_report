<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
            color: #333;
        }
        h1{
            text-align: center;
        }
        form {
            max-width: 400px;
            margin: auto;
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }
        input, select, button {
            width: 95%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="radio"] {
            width: auto;
            margin-right: 10px;
        }
        button {
            background-color: #5cb85c;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

<h1>Registration Form</h1>
<form id="registrationForm">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <span class="error" id="nameError"></span><br>

    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address"><br>
    <span class="error" id="addressError"></span><br>

    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <span class="error" id="usernameError"></span><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <span class="error" id="emailError"></span><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <span class="error" id="passwordError"></span><br>

    <label for="website">Website:</label><br>
    <input type="url" id="website" name="website"><br><br>

    <label for="phone">Phone:</label><br>
    <input type="text" id="phone" name="phone"><br>
    <span class="error" id="phoneError"></span><br>

    <label>Gender:</label><br>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female<br>
    <span class="error" id="genderError"></span><br>

    <label for="course">Course:</label><br>
    <select id="course" name="course">
        <option value="">Select</option>
        <option value="course1">Course 1</option>
        <option value="course2">Course 2</option>
    </select><br>
    <span class="error" id="courseError"></span><br><br>

    <button type="submit">Register</button>
</form>

<script>
$(document).ready(function() {
    $("#registrationForm").submit(function(e) {
        e.preventDefault();
        let valid = true;

        // Name Validation
        const name = $("#name").val();
        if (name === "" || /\d/.test(name)) {
            valid = false;
            $("#nameError").text("Name cannot be empty or contain numbers.");
        } else {
            $("#nameError").text("");
        }

        // Address Validation
        const address = $("#address").val();
        if (address === "") {
            valid = false;
            $("#addressError").text("Address cannot be empty.");
        } else {
            $("#addressError").text("");
        }

        // Username Validation
        const username = $("#username").val();
        if (username === "" || /[^a-zA-Z0-9_]/.test(username)) {
            valid = false;
            $("#usernameError").text("Username cannot be empty or contain spaces/special characters except '_'.");
        } else {
            $("#usernameError").text("");
        }

        // Email Validation
        const email = $("#email").val();
        if (email === "" || !/@/.test(email)) {
            valid = false;
            $("#emailError").text("Email cannot be empty and must contain '@'.");
        } else {
            $("#emailError").text("");
        }

        // Password Validation
        const password = $("#password").val();
        if (password === "" || !/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}/.test(password)) {
            valid = false;
            $("#passwordError").text("Password must be at least 8 characters long and include a digit, uppercase letter, lowercase letter, and special character.");
        } else {
            $("#passwordError").text("");
        }

        // Phone Validation
        const phone = $("#phone").val();
        if (phone === "" || !/^9[876]\d{8}$/.test(phone)) {
            valid = false;
            $("#phoneError").text("Phone must start with 98, 97, or 96 and contain 10 digits.");
        } else {
            $("#phoneError").text("");
        }

        // Gender Validation
        const gender = $("input[name='gender']:checked").val();
        if (!gender) {
            valid = false;
            $("#genderError").text("Please select a gender.");
        } else {
            $("#genderError").text("");
        }

        // Course Validation
        const course = $("#course").val();
        if (course === "") {
            valid = false;
            $("#courseError").text("Please select a course.");
        } else {
            $("#courseError").text("");
        }

        if (valid) {
            alert("Form submitted successfully!");
        }
    });
});
</script>

</body>
</html>

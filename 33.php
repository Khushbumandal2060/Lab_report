<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// CRUD Operations
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];

    if ($action === 'create_course') {
        $title = $_POST['title'];
        $duration = $_POST['duration'];
        $status = $_POST['status'];
        $sql = "INSERT INTO courses (title, duration, status, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $title, $duration, $status);
        $stmt->execute();
        echo "Course created successfully.";
    }

    if ($action === 'update_course') {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $duration = $_POST['duration'];
        $status = $_POST['status'];
        $sql = "UPDATE courses SET title = ?, duration = ?, status = ?, updated_at = NOW() WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssii", $title, $duration, $status, $id);
        $stmt->execute();
        echo "Course updated successfully.";
    }

    if ($action === 'delete_course') {
        $id = $_POST['id'];
        $sql = "DELETE FROM courses WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        echo "Course deleted successfully.";
    }

    if ($action === 'create_student') {
        $name = $_POST['name'];
        $course_id = $_POST['course_id'];
        $fee = $_POST['fee'];
        $rollno = $_POST['rollno'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];
        $status = $_POST['status'];
        $sql = "INSERT INTO students (name, course_id, fee, rollno, phone, address, dob, status, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("siissssi", $name, $course_id, $fee, $rollno, $phone, $address, $dob, $status);
        $stmt->execute();
        echo "Student created successfully.";
    }

    if ($action === 'update_student') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $course_id = $_POST['course_id'];
        $fee = $_POST['fee'];
        $rollno = $_POST['rollno'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];
        $status = $_POST['status'];
        $sql = "UPDATE students SET name = ?, course_id = ?, fee = ?, rollno = ?, phone = ?, address = ?, dob = ?, status = ?, updated_at = NOW() WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("siissssii", $name, $course_id, $fee, $rollno, $phone, $address, $dob, $status, $id);
        $stmt->execute();
        echo "Student updated successfully.";
    }

    if ($action === 'delete_student') {
        $id = $_POST['id'];
        $sql = "DELETE FROM students WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        echo "Student deleted successfully.";
    }
}

// Fetch all courses
$courses = $conn->query("SELECT * FROM courses");

// Fetch all students
$students = $conn->query("SELECT students.*, courses.title AS course_title FROM students JOIN courses ON students.course_id = courses.id");
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Operations</title>
</head>
<body>
<h1>Courses</h1>
<form method="post">
    <input type="hidden" name="action" value="create_course">
    <input type="text" name="title" placeholder="Course Title">
    <input type="text" name="duration" placeholder="Duration">
    <input type="number" name="status" placeholder="Status">
    <button type="submit">Add Course</button>
</form>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Duration</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = $courses->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['duration']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
                <form method="post" style="display:inline;">
                    <input type="hidden" name="action" value="delete_course">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>

<h1>Students</h1>
<form method="post">
    <input type="hidden" name="action" value="create_student">
    <input type="text" name="name" placeholder="Name">
    <input type="number" name="course_id" placeholder="Course ID">
    <input type="text" name="fee" placeholder="Fee">
    <input type="text" name="rollno" placeholder="Roll No">
    <input type="text" name="phone" placeholder="Phone">
    <input type="text" name="address" placeholder="Address">
    <input type="date" name="dob" placeholder="Date of Birth">
    <input type="number" name="status" placeholder="Status">
    <button type="submit">Add Student</button>
</form>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Course</th>
        <th>Fee</th>
        <th>Roll No</th>
        <th>Phone</th>
        <th>Address</th>
        <th>DOB</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = $students->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['course_title']; ?></td>
            <td><?php echo $row['fee']; ?></td>
            <td><?php echo $row['rollno']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
                <form method="post" style="display:inline;">
                    <input type="hidden" name="action" value="delete_student">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>

<?php
$conn->close();
?>


<?php
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = "";     // Your MySQL password
$dbname = "php_db"; // Your database name

// Connect to MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to validate input
function validateData($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? validateData($_POST['id']) : null;
    $name = validateData($_POST['name']);
    $rank = validateData($_POST['rank']);
    $status = validateData($_POST['status']);
    $image = validateData($_POST['image']);
    $created_by = validateData($_POST['created_by']);
    $updated_by = validateData($_POST['updated_by']);

    if (isset($_POST['create'])) {
        $sql = "INSERT INTO users (name, rank, status, image, created_by, updated_by) 
                VALUES ('$name', '$rank', '$status', '$image', '$created_by', '$updated_by')";
    } elseif (isset($_POST['update'])) {
        $sql = "UPDATE users SET 
                name='$name', rank='$rank', status='$status', 
                image='$image', updated_by='$updated_by' 
                WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Record " . (isset($_POST['create']) ? "created" : "updated") . " successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// List all records
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Application</title>
</head>
<body>
    <h1>CRUD Application</h1>

    <!-- Form for create/update -->
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo isset($_GET['edit']) ? $_GET['edit'] : ''; ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="rank">Rank:</label><br>
        <input type="text" id="rank" name="rank" required><br><br>

        <label for="status">Status:</label><br>
        <select id="status" name="status" required>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select><br><br>

        <label for="image">Image:</label><br>
        <input type="text" id="image" name="image" required><br><br>

        <label for="created_by">Created By:</label><br>
        <input type="text" id="created_by" name="created_by" required><br><br>

        <label for="updated_by">Updated By:</label><br>
        <input type="text" id="updated_by" name="updated_by" required><br><br>

        <button type="submit" name="<?php echo isset($_GET['edit']) ? 'update' : 'create'; ?>">
            <?php echo isset($_GET['edit']) ? 'Update' : 'Create'; ?>
        </button>
    </form>

    <!-- Display records -->
    <h2>Records</h2>
    <?php if ($result->num_rows > 0): ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Rank</th>
                <th>Status</th>
                <th>Image</th>
                <th>Created By</th>
                <th>Updated By</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['rank']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['image']; ?></td>
                    <td><?php echo $row['created_by']; ?></td>
                    <td><?php echo $row['updated_by']; ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                    <td><?php echo $row['updated_at']; ?></td>
                    <td>
                        <a href="?edit=<?php echo $row['id']; ?>">Edit</a> | 
                        <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No records found.</p>
    <?php endif; ?>

    <?php $conn->close(); ?>
</body>
</html>

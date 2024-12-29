<?php
// Set the directory to save uploaded images
$target_dir = "uploads/"; // Ensure this directory is writable
$uploadOk = 1;
$imageFileType = "";

// Check if the form has been submitted and a file is uploaded
if (isset($_FILES["profile_image"])) {
    $imageFileType = strtolower(pathinfo($_FILES["profile_image"]["name"], PATHINFO_EXTENSION));

    // Check if file is an image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["profile_image"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".<br>";
            $uploadOk = 1;
        } else {
            echo "File is not an image.<br>";
            $uploadOk = 0;
        }
    }

    // Check if file type is allowed (PNG, JPEG)
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
        echo "Sorry, only JPG, JPEG, and PNG files are allowed.<br>";
        $uploadOk = 0;
    }

    // Check file size (less than 500 KB)
    if ($_FILES["profile_image"]["size"] > 500000) { // 500 KB limit
        echo "Sorry, your file is too large. Max size allowed is 500 KB.<br>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.<br>";
    } else {
        // Generate a unique file name to prevent overwriting
        $target_file = $target_dir . uniqid() . '.' . $imageFileType;

        // Attempt to upload the file
        if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["profile_image"]["name"]) . " has been uploaded successfully.<br>";
            echo "File path: " . $target_file . "<br>";
        } else {
            echo "Sorry, there was an error uploading your file.<br>";
        }
    }
}
?>

<!-- HTML Form for uploading profile image -->
<form action="" method="post" enctype="multipart/form-data">
    <label for="profile_image">Choose Profile Image (JPG, JPEG, PNG, Max 500 KB):</label><br>
    <input type="file" name="profile_image" id="profile_image" required><br><br>
    <button type="submit" name="submit">Upload Image</button>
</form>

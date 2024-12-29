<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_FILES['cv'];

    if (($file['type'] === 'application/pdf' || $file['type'] === 'application/msword') && $file['size'] <= 1048576) {
        move_uploaded_file($file['tmp_name'], 'uploads/' . $file['name']);
        echo "CV uploaded successfully!";
    } else {
        echo "Invalid file type or size.";
    }
}
?>
<form method="post" enctype="multipart/form-data">
    Upload CV: <input type="file" name="cv" required><br>
    <input type="submit" value="Upload">
</form>
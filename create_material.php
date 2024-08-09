<?php
include 'db.php';

// Debugging: Tampilkan data POST
error_log(print_r($_POST, true));

$title = isset($_POST['title']) ? $_POST['title'] : '';
$description = isset($_POST['description']) ? $_POST['description'] : '';
$embed_link = isset($_POST['embed_link']) ? $_POST['embed_link'] : '';

if (empty($title) || empty($description) || empty($embed_link)) {
    die("Error: Missing required fields.");
}

$sql = "INSERT INTO materials (title, description, embed_link) VALUES ('$title', '$description', '$embed_link')";

if ($conn->query($sql) === TRUE) {
    echo "New material added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

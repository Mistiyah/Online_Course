<?php
include 'db.php';

// Debugging: Tampilkan data POST
error_log(print_r($_POST, true));

$title = isset($_POST['title']) ? $_POST['title'] : '';
$description = isset($_POST['description']) ? $_POST['description'] : '';
$duration = isset($_POST['duration']) ? $_POST['duration'] : '';

// Periksa apakah semua data yang diperlukan ada
if (empty($title) || empty($description) || empty($duration)) {
    die("Error: Missing required fields.");
}

// Persiapkan dan jalankan query
$stmt = $conn->prepare("INSERT INTO courses (title, description, duration) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $title, $description, $duration);

if ($stmt->execute()) {
    echo "New course created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

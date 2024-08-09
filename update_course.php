<?php
include 'db.php';

// Debugging: Tampilkan data POST
error_log(print_r($_POST, true));

$id = isset($_POST['course_id']) ? intval($_POST['course_id']) : 0;
$title = isset($_POST['title']) ? $_POST['title'] : '';
$description = isset($_POST['description']) ? $_POST['description'] : '';
$duration = isset($_POST['duration']) ? $_POST['duration'] : '';

// Periksa apakah semua data yang diperlukan ada
if (empty($id) || empty($title) || empty($description) || empty($duration)) {
    die("Error: Missing required fields.");
}

// Persiapkan dan jalankan query
$stmt = $conn->prepare("UPDATE courses SET title=?, description=?, duration=? WHERE id=?");
$stmt->bind_param("sssi", $title, $description, $duration, $id);

if ($stmt->execute()) {
    echo "Course updated successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

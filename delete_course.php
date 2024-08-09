<?php
include 'db.php';

// Menggunakan $_GET untuk mengambil id
$id = $_GET['id'];

// Pastikan id adalah angka untuk mencegah SQL injection
$id = intval($id);

$sql = "DELETE FROM courses WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Course deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


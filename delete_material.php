<?php
include 'db.php';

$material_id = $_GET['id'];

// Menghapus materi dari tabel 'materials'
$sql = "DELETE FROM materials WHERE id='$material_id'";

if ($conn->query($sql) === TRUE) {
    echo "Material deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

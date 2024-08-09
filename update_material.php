<?php
include 'db.php';

$material_id = $_POST['material_id'];
$title = $_POST['title'];
$description = $_POST['description'];
$embed_link = $_POST['embed_link'];

$sql = "UPDATE materials SET title='$title', description='$description', embed_link='$embed_link' WHERE id='$material_id'";

if ($conn->query($sql) === TRUE) {
    echo "Material updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

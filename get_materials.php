<?php
include 'db.php';

$sql = "SELECT * FROM materials";
$result = $conn->query($sql);

$materials = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $materials[] = $row;
    }
}

echo json_encode($materials);

$conn->close();
?>

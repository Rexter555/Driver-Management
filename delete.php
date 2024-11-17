<?php
include 'db.php';

$driver_id = $_GET['driver_id'];
$sql = "DELETE FROM drivers WHERE driver_id = '$driver_id'";

if ($conn->query($sql) === TRUE) {
    echo "Driver deleted successfully! <a href='read.php'>Go Back</a>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

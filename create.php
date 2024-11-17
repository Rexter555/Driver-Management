<?php
include 'db.php';

$driver_id = $_POST['driver_id'];
$name = $_POST['name'];
$license_number = $_POST['license_number'];
$phone_number = $_POST['phone_number'];
$vehicle_type = $_POST['vehicle_type'];
$experience_level = $_POST['experience_level'];

$sql = "INSERT INTO drivers (driver_id, name, license_number, phone_number, vehicle_type, experience_level)
        VALUES ('$driver_id', '$name', '$license_number', '$phone_number', '$vehicle_type', '$experience_level')";

if ($conn->query($sql) === TRUE) {
    header("Location: read.php?message=Driver added successfully!");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

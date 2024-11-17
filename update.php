<?php
include 'db.php';

$driver_id = $_POST['driver_id'];
$name = $_POST['name'];
$license_number = $_POST['license_number'];
$phone_number = $_POST['phone_number'];
$vehicle_type = $_POST['vehicle_type'];
$experience_level = $_POST['experience_level'];

$sql = "UPDATE drivers SET 
        name='$name', 
        license_number='$license_number', 
        phone_number='$phone_number', 
        vehicle_type='$vehicle_type', 
        experience_level='$experience_level' 
        WHERE driver_id='$driver_id'";

if ($conn->query($sql) === TRUE) {
    echo "Driver details updated successfully! <a href='read.php'>Go Back</a>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

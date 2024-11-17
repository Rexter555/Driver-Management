<?php
include 'db.php';

$sql = "SELECT * FROM drivers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Driver Records</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Driver ID</th>
                    <th>Name</th>
                    <th>License Number</th>
                    <th>Phone Number</th>
                    <th>Vehicle Type</th>
                    <th>Experience Level</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['driver_id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['license_number']}</td>
                                <td>{$row['phone_number']}</td>
                                <td>{$row['vehicle_type']}</td>
                                <td>{$row['experience_level']}</td>
                                <td>
                                    <a href='edit.php?driver_id={$row['driver_id']}' class='btn btn-warning btn-sm'>Edit</a>
                                    <a href='delete.php?driver_id={$row['driver_id']}' class='btn btn-danger btn-sm'>Delete</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="index.html" class="btn btn-secondary">Add New Driver</a>
    </div>
</body>
</html>

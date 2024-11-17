<?php
include 'db.php';

$driver_id = $_GET['driver_id'];
$sql = "SELECT * FROM drivers WHERE driver_id = '$driver_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Driver</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Driver Details</h2>
        <form action="update.php" method="post">
            <input type="hidden" name="driver_id" value="<?php echo $row['driver_id']; ?>">

            <div class="mb-3">
                <label>Full Name:</label>
                <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" required>
            </div>

            <div class="mb-3">
                <label>License Number:</label>
                <input type="text" name="license_number" class="form-control" value="<?php echo $row['license_number']; ?>" required>
            </div>

            <div class="mb-3">
                <label>Phone Number:</label>
                <input type="text" name="phone_number" class="form-control" value="<?php echo $row['phone_number']; ?>" required>
            </div>

            <div class="mb-3">
                <label>Vehicle Type:</label>
                <select name="vehicle_type" class="form-select">
                    <option value="Truck" <?php if ($row['vehicle_type'] == 'Truck') echo 'selected'; ?>>Truck</option>
                    <option value="Van" <?php if ($row['vehicle_type'] == 'Van') echo 'selected'; ?>>Van</option>
                    <option value="Car" <?php if ($row['vehicle_type'] == 'Car') echo 'selected'; ?>>Car</option>
                    <option value="Bike" <?php if ($row['vehicle_type'] == 'Bike') echo 'selected'; ?>>Bike</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Experience Level:</label><br>
                <input type="radio" name="experience_level" value="Beginner" <?php if ($row['experience_level'] == 'Beginner') echo 'checked'; ?>> Beginner
                <input type="radio" name="experience_level" value="Intermediate" <?php if ($row['experience_level'] == 'Intermediate') echo 'checked'; ?>> Intermediate
                <input type="radio" name="experience_level" value="Expert" <?php if ($row['experience_level'] == 'Expert') echo 'checked'; ?>> Expert
            </div>

            <button type="submit" class="btn btn-primary">Update Driver</button>
        </form>
    </div>
</body>
</html>

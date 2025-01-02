<?php include '../db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <h3>Donor List</h3>
    <?php
    $sql = "SELECT * FROM donors";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Name: " . $row['name'] . " | Blood Group: " . $row['blood_group'] . " | City: " . $row['city'] . "<br>";
        }
    } else {
        echo "No donors found.";
    }
    ?>
</body>
</html>

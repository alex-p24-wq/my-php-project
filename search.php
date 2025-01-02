<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Search for Blood</title>
</head>
<body>
    <h1>Search for Blood</h1>
    <form method="post" action="">
        <input type="text" name="blood_group" placeholder="Enter Blood Group" required>
        <button type="submit" name="search">Search</button>
    </form>
    <?php
    if (isset($_POST['search'])) {
        $blood_group = $_POST['blood_group'];
        $sql = "SELECT * FROM donors WHERE blood_group = '$blood_group'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Name: " . $row['name'] . " | City: " . $row['city'] . " | Phone: " . $row['phone'] . "<br>";
            }
        } else {
            echo "No donors found for blood group $blood_group.";
        }
    }
    ?>
</body>
</html>

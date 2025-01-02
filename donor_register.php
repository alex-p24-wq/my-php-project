<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Donor Registration</title>
</head>
<body>
    <h1>Register as a Donor</h1>
    <form method="post" action="">
        <input type="text" name="name" placeholder="Full Name" required><br>
        <input type="text" name="blood_group" placeholder="Blood Group (e.g., A+)" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="phone" placeholder="Phone Number" required><br>
        <input type="text" name="city" placeholder="City" required><br>
        <button type="submit" name="register">Register</button>
    </form>
    <?php
    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $blood_group = $_POST['blood_group'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];

        $sql = "INSERT INTO donors (name, blood_group, email, phone, city) VALUES ('$name', '$blood_group', '$email', '$phone', '$city')";
        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>
</body>
</html>

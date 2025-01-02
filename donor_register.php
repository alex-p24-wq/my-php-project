<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(240, 240, 240);
            margin: 0;
            padding: 0;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .form-container h1 {
            text-align: center;
            margin-bottom: 30px;
            color: rgb(33, 55, 130);
        }
        .form-container .btn-primary {
            width: 100%;
        }
        .message {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <?php if (!isset($_POST['register'])): ?>
                <h1>Register as a Donor</h1>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="blood_group" class="form-label">Blood Group</label>
                        <input type="text" name="blood_group" class="form-control" id="blood_group" placeholder="Blood Group (e.g., A+)" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" name="city" class="form-control" id="city" placeholder="City" required>
                    </div>
                    <button type="submit" name="register" class="btn btn-primary">Register</button>
                </form>
            <?php else: ?>
                <?php
                $name = $_POST['name'];
                $blood_group = $_POST['blood_group'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $city = $_POST['city'];

                $sql = "INSERT INTO donors (name, blood_group, email, phone, city) VALUES ('$name', '$blood_group', '$email', '$phone', '$city')";
                if ($conn->query($sql) === TRUE) {
                    echo "<h1 class='text-success'>Registration Successful!</h1>";
                    echo "<p class='message text-success'>Thank you for registering as a donor.</p>";
                } else {
                    echo "<h1 class='text-danger'>Error Occurred</h1>";
                    echo "<p class='message text-danger'>Error: " . $conn->error . "</p>";
                }
                ?>
            <?php endif; ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

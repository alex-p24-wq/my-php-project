<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank & Donor Management System</title>
    <!-- Add Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(33, 170, 12);
            margin: 0;
            padding: 0;
        }
        .hero {
            background: url('https://source.unsplash.com/1600x900/?blood-donation') no-repeat center center/cover;
            height: 100vh;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .hero h1 {
            font-size: 3.5rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.2rem;
            margin: 20px 0;
        }
        .btn-primary {
            padding: 10px 20px;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <div class="hero">
        <h1>Welcome to the Blood Bank System</h1>
        <p>Connecting donors and recipients, saving lives together.</p>
        <a href="donor_register.php" class="btn btn-primary">Become a Donor</a>
        <a href="search.php" class="btn btn-primary">find donor</a>
        <a href="admin/admin_login.php" class="btn btn-outline-light">Admin Login</a>
    </div>

    <!-- About Section -->
    <div class="container mt-5">
        <h2 class="text-center">About Us</h2>
        <p class="text-center">
            The Blood Bank & Donor Management System is an innovative solution to help hospitals, donors, and recipients 
            manage blood donations efficiently. Our platform ensures seamless interaction between donors and those in need.
        </p>
    </div>

    <!-- Features Section -->
    <div class="container mt-5">
        <h2 class="text-center">Features</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <h4>Find Donors Nearby</h4>
                <p>Quickly search for available blood donors near you.</p>
            </div>
            <div class="col-md-4">
                <h4>Admin Dashboard</h4>
                <p>Manage donor and recipient records easily with our admin panel.</p>
            </div>
            <div class="col-md-4">
                <h4>Secure System</h4>
                <p>Your data is safe and securely stored with advanced encryption.</p>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="text-center mt-5 py-3 bg-dark text-light">
        <p>&copy; <?php echo date("Y"); ?> Blood Bank System. All Rights Reserved.</p>
    </footer>

    <!-- Add Bootstrap JS for functionality -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

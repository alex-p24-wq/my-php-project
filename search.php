<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search for Blood</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(240, 240, 240);
            margin: 0;
            padding: 0;
        }
        .search-container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .search-container h1 {
            text-align: center;
            margin-bottom: 20px;
            color: rgb(33, 55, 130);
        }
        .search-container .form-control {
            margin-bottom: 15px;
        }
        .result {
            margin-top: 20px;
        }
        .donor {
            background: #f8f9fa;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .donor h5 {
            margin: 0;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="search-container">
            <h1>Search for Blood</h1>
            <form method="post" action="">
                <input type="text" name="blood_group" class="form-control" placeholder="Enter Blood Group (e.g., A+)" required>
                <button type="submit" name="search" class="btn btn-primary w-100">Search</button>
            </form>
            <div class="result">
                <?php
                if (isset($_POST['search'])) {
                    $blood_group = $_POST['blood_group'];
                    $sql = "SELECT * FROM donors WHERE blood_group = '$blood_group'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<h4 class='mt-4'>Available Donors:</h4>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='donor'>";
                            echo "<h5>" . htmlspecialchars($row['name']) . "</h5>";
                            echo "<p>City: " . htmlspecialchars($row['city']) . "<br>Phone: " . htmlspecialchars($row['phone']) . "</p>";
                            echo "</div>";
                        }
                    } else {
                        echo "<p class='text-danger'>No donors found for blood group <strong>" . htmlspecialchars($blood_group) . "</strong>.</p>";
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

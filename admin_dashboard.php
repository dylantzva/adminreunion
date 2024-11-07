<?php
    session_start();
    if (!isset($_SESSION['admin'])) {
        header("Location: admin_login.html");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

        .dashboard {
            background-color: #444;
            padding: 40px;
            border-radius: 8px;
            width: 400px;
        }

        h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #555;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            margin: 10px 0;
            border-radius: 4px;
            text-decoration: none; /* For <a> tags styled as buttons */
        }

        .btn:hover {
            background-color: #777;
        }
    </style>
</head>
<body>

    <div class="dashboard">
        <h2>Welcome, Admin</h2>
        <p>You are now logged in.</p>
        <!-- Manage Products Button -->
        <a href="manageProducts.html" class="btn">Manage Products</a><br><br>
        <!-- View Orders Button -->
        <button class="btn">View Orders</button>
        <!-- Logout Button -->
        <button class="btn" onclick="logout()">Logout</button>
    </div>

    <script>
        function logout() {
            window.location.href = 'admin_logout.php';
        }
    </script>
</body>
</html>

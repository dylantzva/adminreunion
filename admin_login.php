<?php
    $correct_username = "admin";
    $correct_password = "password123";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

    
        if ($username === $correct_username && $password === $correct_password) {
           
            session_start();
            $_SESSION['admin'] = $username;
            header("Location: admin_dashboard.php");
            exit();
        } else {
            
            echo "<script>
                alert('Invalid password, Please try again.');
                window.location.href='admin_login.html';
                </script>";
        }
    }
?>

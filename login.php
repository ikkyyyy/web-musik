<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cek apakah email dan password cocok dengan yang diinginkan
    $adminEmail = 'admin@gmail.com';
    $adminPassword = 'ikiwgans19';

    if ($email === $adminEmail && $password === $adminPassword) {
        $_SESSION['loggedin'] = true; // Set session logged in
        header("Location: index.html");
        exit();
    } else {
        echo "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            overflow: hidden;
            height: 100vh;
            background: #000; /* Fallback color */
        }

        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; /* Ensure video is behind content */
        }

        .login-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.6); /* Semi-transparent background for text readability */
            padding: 20px;
            border-radius: 8px;
            color: white;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-container h2 {
            margin: 0 0 20px;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
        }

        .login-container button {
            background-color: #1DB954;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #1aab4a;
        }
    </style>
</head>
<body>
    <video class="video-background" autoplay muted loop>
        <source src="videos/aot.mp4" type="video/mp4">
        Browsermu tidak mendukung tag ini, upgrade donk!
    </video>

    <div class="login-container">
        <h2>Login</h2>
        <form id="login-form" action="login.php" method="POST">
            <label for="login-email">Email:</label>
            <input type="email" id="login-email" name="email" required>
            <label for="login-password">Password:</label>
            <input type="password" id="login-password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

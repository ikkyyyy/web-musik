<?php
session_start(); // Mulai sesi

// Mendapatkan data dari form login
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

// Email dan password khusus yang diizinkan
$allowed_email = "ikiw@gmail.com";
$allowed_password = "ikiwgans";

// Cek email dan password
if ($email === $allowed_email && $password === $allowed_password) {
    $_SESSION['loggedin'] = true; // Set session login
    header("Location: index.php"); // Arahkan ke halaman utama
    exit();
} else {
    echo "Email atau password salah!";
}
?>

<?php
// Mendapatkan data dari form login
$email = $_POST['email'];
$password = $_POST['password'];
// Mendapatkan data dari form login
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

// Email yang diizinkan dan password yang di-hash
$allowed_email = "ikiw@gmail.com";
$hashed_password = password_hash("ikiwgans", PASSWORD_DEFAULT);

// Cek email dan password
if ($email === $allowed_email && password_verify($password, $hashed_password)) {
    // Login berhasil, arahkan ke index.html
    header("Location: index.html");
    exit();
} else {
    // Email atau password salah
    echo "Email atau password salah!";
}
?>

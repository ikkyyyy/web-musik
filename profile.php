<?php
session_start();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['email'])) {
    // Jika tidak ada session email, redirect ke halaman login
    header("Location: index.html"); // Ganti dengan halaman login Anda
    exit();
}

// Ambil email dari session
$email = $_SESSION['email'];

// Di sini Anda bisa menampilkan informasi atau konten profil
// Misalnya, menampilkan email pengguna
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">Spotify kiwz</div>
        <nav>
            <ul>
                <li><a href="#">Premium</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Download</a></li>
                <li class="divider">|</li>
                <li><a href="#" id="sign-up-btn">Sign up</a></li>
                <li><a href="#" id="login-btn">Log in</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1>Welcome to Your Profile</h1>
            <p>Email: <?php echo $email; ?></p>
            <a href="logout.php" class="btn">Logout</a>
        </section>
    </main>

    <footer>
        <div class="footer-links">
            <!-- Footer links here -->
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Spotify ikiw gans</p>
        </div>
    </footer>

    <!-- Modal Login and other modals -->
    <!-- Include modals if needed -->
    
    <script src="play.js"></script>
</body>
</html>

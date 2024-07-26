<?php
session_start();
session_unset(); // Hapus semua sesi
session_destroy(); // Hancurkan sesi
header("Location: login.html"); // Arahkan kembali ke halaman login
exit();
?>

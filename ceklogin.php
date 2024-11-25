<?php
session_start();
include 'koneksi.php'; // Pastikan file koneksi database sudah benar

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mengecek username dan password di database
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) === 1) {
        // Login berhasil
        $user = mysqli_fetch_assoc($result);
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $user['username'];

        header('Location: index.php'); // Redirect ke halaman utama
        exit;
    } else {
        // Username atau password salah
        echo "<script>alert('Username atau password salah!'); window.location.href='login.php';</script>";
    }
}
?>

<?php
session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: Tprak3_tabel-makanan.html'); // Redirect ke halaman utama jika sudah login
    exit;
}
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Login Aplikasi</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <div class="container">
 <section class="login-box">
 <h2>Login Aplikasi</h2>
 <form method="post" action="ceklogin.php">
 <input type="text" placeholder="username" name="username"
id="username">
 <input type="password" placeholder="password" name="password"
id="password">
 <input type="submit" value="Login">
 </form>
 </section>
 </div>
 </body>
</html>
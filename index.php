<?php
 session_start();
 ob_start();
 // Mengecek session
 if(empty($_SESSION['username'])){
 echo "<script>alert('Anda harus login terlebih dahulu')</script>";
 echo "<meta http-equiv='refresh' content='0; url=login.php'>";
 } else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Daftar Makanan Khas Sulawesi Selatan</title>
 <link rel="stylesheet" href="Tp3_syle-makanan.css">
</head>
<body>
    <header> Makanan Khas </header>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <nav>
                <ul>
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="Tprak3_tabel-makanan.html">Makanan Khas</a></li>
                    <li><a href="wisata.html">Objek Wisata</a></li>
                    <li><a href="logout.php">Keluar</a></li>
                </ul>
            </nav>
        </aside>
        <section class="content">
            
 <?php
 $username = $_SESSION['username'];
 echo "<center>";
 echo "<h3>Selamat Datang </h3>";
 echo "<p>Anda login sebagai <b>".$username."</b></p>";
 ?>
        </section>
    </div>
    <footer>
        Copyright &copy; 2024
    </footer>
</body>

</html>
<?php
 }
?>
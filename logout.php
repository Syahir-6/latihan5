<?php
 session_start();
 session_destroy();
 echo "<script>alert('Anda telah logout')</script>";
 echo "<meta http-equiv='refresh' content='0;url=login.php'>";
?>

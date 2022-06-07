<?php 
// Mengaktifkan session
session_start();
 
// Menghapus semua session
session_destroy();
 
// Mengalihkan ke halaman index.php
header("location:login.php?pesan= Anda berhasil logout");
?>
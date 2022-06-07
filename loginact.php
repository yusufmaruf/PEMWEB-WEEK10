<?php
    //koneksi database
    include 'conn.php';

    //mengambil data dari form dan menampung ke variabel penampung
    $username = $_POST['username'];
    $password = $_POST['password'];
    //memvalidasi data dari user dengan data di dbs
    $sql = "SELECT * FROM user where ussername='$username' and password='$password'";
    $result = mysqli_query($conn, $sql);
    $rowcount=mysqli_num_rows($result);
   
    // menampung hasil pengecekan dan menghitung jumlah baris 
    //validasi
    if($rowcount > 0){
    // Menyimpan session username dan password
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['status'] = "sudah_login";
    $_SESSION['id_login'] = $data['id'];
    // meneruskan ke beranda jika benar 
    header("location:beranda.php");
    // menampilkan pesan error jika error 
    }else { header("location:login.php?pesan= Gagal login data tidak ditemukan !");}



?>
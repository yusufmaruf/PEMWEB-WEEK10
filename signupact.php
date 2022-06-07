<?php
//koneksi database
include 'conn.php';
//menangkap data yang dikirim user
$nama = $_POST['nama'];
$address = $_POST['addres'];
$email = $_POST['email'];
$homepage = $_POST ['homepage'];
$username =$_POST ['username'];
$password =$_POST ['password'];

// input ke db
$q = mysqli_query($conn,"INSERT INTO `user` (`id`, `name`, `address`, `email`, `homepage`, `ussername`, `password`) VALUES (NULL, '$nama', '$alamat', '$email', '$homepage', '$username', '$password');");
//kembali ke index atau halaman awal
if($q){
    // meneruskan ke halaman login 
    header("location:login.php");
}else{
    // menampilkan pesan galat 
    echo "Galat";
}

?>
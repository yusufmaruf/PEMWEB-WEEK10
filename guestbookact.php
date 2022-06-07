<?php
// melakukan pemanggilan file koneksi 
include 'conn.php';
// memberiniali pada variabel tanggal dan mengubah tipe tanggal 
$posted=date('Y-m-d', strtotime($_POST['posted']));
// pemberian nilai pada variabel
$nama = $_POST['nama'];
$address = $_POST['addres'];
$email = $_POST['email'];
$city = $_POST['city'];
$message = $_POST['Message'];
// input ke db
$q = mysqli_query($conn,"INSERT INTO `guestbook` (`id`, `posted`, `name`, `email`, `address`, `city`, `message`) VALUES (NULL, '$posted', '$nama', '$email', '$address', '$city', '$message');");
//kembali ke index atau halaman awal
if($q){
    // mengalihkan ke file guestbookindex.php 
    header("location:guestbookindex.php");
}else{
    echo "Galat";
}


?>
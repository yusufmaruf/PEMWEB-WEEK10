<?php 
// memanggil file conn.php 
include 'conn.php';
// melakukan pemberian nilai dari method post  di fileedit 
$id = $_POST['id'];
$posted=date('Y-m-d', strtotime($_POST['posted']));
$nama = $_POST['nama'];
$address = $_POST['addres'];
$email = $_POST['email'];
$city = $_POST['city'];
$message = $_POST['Message'];
 
// update data ke database
mysqli_query($conn,"UPDATE `guestbook` SET `posted` = '$posted', `name` = '$nama', `email` = '$email', `address` = '$address', `city` = '$city', `message` = '$message' WHERE `guestbook`.`id` = '$id' "); 
// mengalihkan halaman kembali ke index.php
header("location:guestbookindex.php");

?>
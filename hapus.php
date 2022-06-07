<?php
// import koneksi 
include 'conn.php';
// memberikan  nilai var id 
$id = $_GET['id'];
// melakukan query hapus data 
mysqli_query($conn, "DELETE FROM `guestbook` WHERE `guestbook`.`id` = '$id'");
// meneruskan ke guestbookindex.php 
header("location: guestbookindex.php");
?>
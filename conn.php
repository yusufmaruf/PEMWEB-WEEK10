<!DOCTYPE html>
<html>
<head>
	<title> Koneksi Database MySQL </title>
</head>
<body>
	<?php
	// melakukan koneksi ke database 
	$conn = mysqli_connect("localhost","root","","myweb"); 

	// Cek koneksi
	// mencetak pesan error jika koneksi gagal 
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: ". mysqli_connect_error(); 
		exit(); 
	}
	?>
</body>
</html>
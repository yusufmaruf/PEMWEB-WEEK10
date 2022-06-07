
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
<?php
    // memulai session 
    session_start();
    // mengecek status apakah user sudah login atau belum
    if($_SESSION['status']=="sudah_login"){
        echo '
            <div class="container">
            <div class="row">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Selamat Datang Sayang
                </div>
                <div class="card-body text-center">

                    <h5 class="card-title"> Hay';
?>
                    <!-- melakukan cetak nama user yang sudah login  -->
                    <?php    echo  $_SESSION['username'];?> <?php echo '</h5>
                    <br>';?>
                    <?php
                        // mengatur lokasi zona waktu 
                        date_default_timezone_set("Asia/Jakarta");
                        echo 'Anda login pada ';
                        //  mencetak waktu saat user sudah login 
                        echo "\t".date("l,m-F-Y, g:i:s a");
                        echo '<br>';
                        echo '<br>';
                        // meneruskan ke halaman beranda
                        echo '
                            <a href="guestbook.php" class="btn btn-primary">Input Guestbook</a>
                            <a href="guestbookindex.php" class="btn btn-primary">Lihat Guestbook</a>
                            <a href="logout.php" class="btn btn-primary">Lihat Guestbook</a>
                        </div>
                    </div>
                    </div>
                    </div>
               
        
        
     
    ';}?>
    
</body>
</html>

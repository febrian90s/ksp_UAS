<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:login.php");
} 
?>
<!DOCTYPE html>
	<html lang="en">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style...css">
    <title>Koperasi Simpan Pinjam</title>
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<head>
<div class="sidebar">
    <header><i class="fas fa-university"></i>&nbsp;KSP</header>
    <ul>
        <li><a href="anggota.php"><i class="fas fa-user"></i>Anggota</a></li>
        <li><a href="home.php"><i class="fas fa-wallet"></i>Simpanan</a></li>
        <li><a href="home.php"><i class="fas fa-dollar-sign"></i>Pinjaman</a></li>
        <li><a href="home.php"><i class="fas fa-cog"></i>Pengaturan</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
    </ul>
    </div>
        <div class="content">
            <h1 align="center">Koperasi Simpan Pinjam</h1>
            <br><hr align="left" width="100%" height="0,4px" color="white" size="1"><br>
        </div>
</head>
<body>	
</body>
</html>
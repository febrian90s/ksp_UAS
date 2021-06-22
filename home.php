<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:login.php");
} 
?>
<?php
include "function.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>koperasi simpan pinjam</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

<h1><a<i class="fas fa-globe"></i>Koperasi Simpan Pinjam</a></h1>
<hr>

<div class="menu">
<ul id="navigasi">
	<li><a href="home.php">HOME</a></li>
    <li><a href="#">ANGGOTA</a>
		<ul>
			<li><a href="home.php?m=tambah_anggota">Tambah Anggota</a></li>
			<li><a href="home.php?m=list_anggota">Daftar Anggota</a></li>
		</ul>

	<li><a href="home.php?m=simpan">SIMPAN</a></li>
	<li><a href="#">PINJAM</a>
		<ul>
			<li><a href="home.php?m=pinjaman_baru">Pinjaman Baru</a></li>
			<li><a href="home.php?m=daftar_pinjaman">Daftar Pinjaman</a></li>
		</ul>
    <li><a href="logout.php">LOGOUT</a></li>
	</li>
</ul>
</div>
<div class="content">
<?php
//menampilkan content yang diinginkan
$file = content($_GET['m']);
include "page/$file";
?>

<div class="footer">
Copyright &copy; 2018 
</div>

</body>
</html>
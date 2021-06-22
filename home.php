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
        <nav>
	        <li><a href="beranda.php">HOME</a></li>
            <li><a href="anggota/tambah_anggota.php">ANGGOTA</a>
	        <li><a href="simpan/daftar_simpanan.php">SIMPAN</a></li>
	        <li><a href="pinjaman/daftar_pinjaman.php">PINJAM</a>
            <li><a href="logout.php" onclick="return confirm('anda yakin akan keluar?')">LOGOUT</a></li>
     <nav>
    </ul>
</div>
<?php
// include "header.php";
?>


<!-- include "function.php"; -->
<!-- <div class="content"> -->
<?php
//menampilkan content yang diinginkan
?>

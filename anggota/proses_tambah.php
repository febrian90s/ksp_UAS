<?php
session_start();
// ... jika belum login, alihkan ke halaman login
if (! isset($_SESSION['login'])) {
    header('Location: ../login.php');
    exit();
}

include '../koneksi.php';

$id_anggota = $_POST['id_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$jenis_kelamin = $_POST['jk_kelamin'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$pengurus = $_POST['pengurus'];

$query = "INSERT INTO tb_mahasiswa (id_anggota, nama_anggota, jk_kelamin, alamat, kota, telepon, email, pengurus) 
    VALUES ('$id_anggota', '$nama_anggota', '$jenis_kelamin', '$alamat', '$kota', '$telepon', '$email', '$pengurus')";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: list_anggota.php');
} else {
    header('Location: tambah_anggota.php');
}
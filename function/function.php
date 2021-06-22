<?php

function content($m)
{
	$cek = trim($m);
	if($cek == "home") 				{ $file = "beranda.php"; }
	if($cek == "simpan") 		{ $file = "simpan.php"; }
    if($cek == "anggota") 		{ $file = "anggota/anggota.php"; }
    if($cek == "pinjaman") 		{ $file = "pinjaman/dahtar.php"; }
	/*if($cek == "pinjaman_baru") { $file = "pinjaman_baru.php"; }
	if($cek == "daftar_pinjaman") 		{ $file = "daftar_pinjaman.php"; }*/
    
	return $file;
}
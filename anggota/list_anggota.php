<?php

// ... ambil data dari database
include 'proses_list_anggota.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kategori</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container clearfix">

        <?php include '../sidebars.php' ?>

        <div class="content">
            <h1>Daftar Anggota</h1>
            <div class="btn-tambah-div">
                <a href="tambah_anggota.php"><button class="btn btn-tambah">Tambah Data</button></a>
            </div>
            <?php if (empty($data_anggota)) : ?>
            Tidak ada data.
            <?php else : ?>
            <table class="data">
                <tr>
                    <th>Id Anggota</th>
                    <th>Nama Anggota</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Pengurus</th>
                    <th width="20%">Pilihan</th>
                </tr>
                <?php foreach ($data_anggota as $tb_mahasiswa) : ?>
                <tr>
                    <td><?php echo $tb_anggota['id_anggota'] ?></td>
                    <td><?php echo $tb_anggota['nama_anggota'] ?></td>
                    <td><?php echo $tb_anggota['jk_anggota'] ?></td>
                    <td><?php echo $tb_anggota['alamata'] ?></td>
                    <td><?php echo $tb_anggota['kota'] ?></td>
                    <td><?php echo $tb_anggota['telepon'] ?></td>
                    <td><?php echo $tb_anggota['email'] ?></td>
                    <td><?php echo $tb_anggota['pengurus'] ?></td>
                    <td>
                        <a href="edit_anggota.php?id_anggota=<?php echo $tb_anggota['id_anggota']; ?>" class="btn btn-edit">Edit</a>
                        <a href="delete_anggota.php?id_anggota=<?php echo $tb_anggota['id_anggota']; ?>" class="btn btn-hapus" onclick="return confirm('anda yakin akan menghapus data?');">Hapus</a>
                    </td>
                </tr>
                <?php  endforeach ?>
            </table>
            <?php endif ?>
        </div>

    </div>
</body>
</html>

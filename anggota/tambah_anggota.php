
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Anggota</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container clearfix">

        <?php include '../header.php' ?>

        <div class="content">
            <h3>Tambah Data Anggota</h3>
            <form method="post" action="proses-tambah-anggota.php">
                <p>Id Anggota</p>
                <p><input type="int" name="id_anggota"></p>
                <p>Nama Anggota</p>
                <p><input type="text" name="nama_anggota"></p>
                <p>Jenis Kelamin</p>
                <p><input type="text" name="jk_kelamin"></p>
                <p>Alamat</p>
                <p><input type="text" name="alamat"></p>
                <p>kota</p>
                <p><input type="text" name="kota"></p>
                <p>Telepon</p>
                <p><input type="text" name="telepon"></p>
                <p>Email</p>
                <p><input type="text" name="email"></p>
                <p>Pengurus</p>
                <p><input type="text" name="pengurus"></p>

                <p>
                    <input type="submit" class="btn btn-submit" value="Simpan">
                    <input type="reset" class="btn btn-submit" value="Batal" onclick="self.history.back();">
                </p>
            </form>
        </div>

    </div>
</body>
</html>

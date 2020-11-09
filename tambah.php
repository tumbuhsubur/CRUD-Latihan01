<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <a href="index.php">Kembali ke index / home</a>
    <br/>
    <br/>
    <form action="proses-tambah.php" method="post" name="proses-tambah">
        <p>
            <label for="nama">Nama: </label>
            <input type="varchar" name="nama" placeholder="nama">
        </p>
        <p>
            <label for="nim">NIM: </label>
            <input type="varchar"name="nim" placeholder="nama">
        </p>
        <p>
            <label for="opsi">OPSI: </label>
            <input type="varchar" name="opsi" placeholder="opsi">
        </p>
        <p>
            <input type="submit" name="tambah" value="tambah"></td>
        </p>
    </form>
</body>
</html>
<a href="index.php">Kembali ke index / home</a>
<br/>
<?php
include("koneksi.php");
// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-mahasiswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$query = mysqli_query($koneksi, $sql);
$mhs = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Data Mahasiswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

<!--         <fieldset> -->

            <input type="hidden" name="id" value="<?php echo $mhs['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama" value="<?php echo $mhs['nama'] ?>" />
        </p>
        <p>
            <label for="nim">NIM: </label>
            <input name="nim" value="<?php echo $mhs['nim'] ?>">
        </p>
        <p>
            <label for="opsi">OPSI: </label>
            <input name="opsi" value="<?php echo $mhs['opsi'] ?>">
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        <!-- </fieldset> -->


    </form>

    </body>
</html>
<a href="index.php">Kembali ke index / home</a>
<br/>
<?php 

include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <header>
        <h3>Mahasiswa Terdaftar</h3>
    </header>

    <nav>
        <a href="tambah.php">[+] Tambah Data Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Opsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM mahasiswa";
        $query = mysqli_query($koneksi, $sql);

        while($mhs = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$mhs['id']."</td>";
            echo "<td>".$mhs['nama']."</td>";
            echo "<td>".$mhs['nim']."</td>";
            echo "<td>".$mhs['opsi']."</td>";
            
            echo "<td>";
            echo "<a href='edit.php?id=".$mhs['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$mhs['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>
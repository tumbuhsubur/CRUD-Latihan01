<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM mahasiswa WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-mahasiswa.php');
    } else {
        die("Gagal menghapus...");
    }

} else {
    die("Akses dilarang...");
}

?>
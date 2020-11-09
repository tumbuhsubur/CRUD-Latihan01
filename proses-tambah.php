<?php
	//tambah.php
	//Nama Eka Januard Firdaus
	//NIM  19510006
	//Prodi Sistem Informasi 2019 
	//Universitas Gajayana Malang
	//PromnetR2
	//Create Read Update and Delete

    include ("koneksi.php");
    //cek form submit

    if(isset($_POST['tambah'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $opsi = $_POST['opsi'];

    //buat query
    $sql = "INSERT INTO mahasiswa (nama, nim, opsi) VALUE ('$nama', '$nim', '$opsi')";
    $query = mysqli_query($koneksi, $sql);

	// apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }

	} else {
    	die("Akses dilarang...");
	}
?>
<?php
	//koneksi.php
	//Nama Eka Januard Firdaus
	//NIM  19510006
	//Prodi Sistem Informasi 2019 
	//Universitas Gajayana Malang
	//PromnetR2
	//Create Read Update and Delete
	$servername = "localhost";
	$database = "perkuliahan";
	//$table = "mahasiswa";
	$username = "root";
	$password = "";
		// membuat koneksi
		$koneksi = mysqli_connect($servername, $username, $password, $database);
		// mengecek koneksi
		if (!$koneksi) {
    		die("Koneksi gagal: " . mysqli_connect_error());
		}
		echo "Koneksi berhasil";
		//mysqli_close($koneksi);

?>

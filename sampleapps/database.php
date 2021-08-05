<?php 
// isi nama host, username mysql, dan password mysql anda
$DBHost	= 'localhost';
$DBName	= 'sampleapps';
$DBUser	= 'root';
$DBPass	= '';

$koneksi = mysqli_connect($DBHost,$DBUser,$DBPass,$DBName);

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
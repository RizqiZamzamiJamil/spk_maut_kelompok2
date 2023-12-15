<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "maut_kelompok2";

// Buat koneksi
$koneksi = mysqli_connect($host, $user, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
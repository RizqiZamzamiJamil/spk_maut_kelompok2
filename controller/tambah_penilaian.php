<?php
//koneksi
session_start();
include("koneksi.php");

$alternatif = $_POST['alter'];
$kriteria   = $_POST['krit'];
$poin       = $_POST['nilai'];

$query = "INSERT INTO penilaian (id_alternatif, id_kriteria, nilai) VALUES ('$alternatif', '$kriteria', '$poin')";
$buat  = $koneksi->query($query);

if ($buat) {
  echo "<script>alert('Input Data Berhasil') </script>";
  echo "<script>window.location.href = \"../views/data_penilaian.php\" </script>";
} else {
  echo "<script>alert('Input Data Gagal') </script>";
}
?>
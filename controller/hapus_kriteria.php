<?php
include ("koneksi.php");

$id_alter = $_GET['id_alter'];
$query   = "DELETE FROM kriteria WHERE id_kriteria = '$id_alter' ";
$hapus = $koneksi->query($query);

if ($hapus === TRUE) {
echo "<script>alert('Hapus ID = ".$id_alter." Berhasil') </script>";
echo "<script>window.location.href = \"../views/data_kriteria.php\" </script>";
} else {
echo "Maaf Tidak Dapat Menghapus !";
}

?>
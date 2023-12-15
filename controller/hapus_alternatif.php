<?php
include ("koneksi.php");

$id_alter = $_GET['id_alter'];
$query   = "DELETE FROM alternatif WHERE id_alternatif = '$id_alter' ";
$hapus = $koneksi->query($query);

if ($hapus === TRUE) {
echo "<script>alert('Hapus ID = ".$id_alter." Berhasil') </script>";
echo "<script>window.location.href = \"../views/data_alternatif.php\" </script>";
} else {
echo "Maaf Tidak Dapat Menghapus !";
}

?>
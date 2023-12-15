<?php
include 'koneksi.php';
// Mendapatkan daftar kriteria
$query_kriteria = "SELECT * FROM kriteria";
$result_kriteria = mysqli_query($koneksi, $query_kriteria);

if (!$result_kriteria) {
    die("Query error: " . mysqli_error($koneksi));
}

$kriteria = array();
while ($row_kriteria = mysqli_fetch_assoc($result_kriteria)) {
    $kriteria[] = $row_kriteria;
}

// Mendapatkan data penilaian dengan join tabel kriteria
$query_penilaian = "SELECT penilaian.id_alternatif, penilaian.id_kriteria, penilaian.nilai, alternatif.nama 
FROM penilaian JOIN alternatif ON penilaian.id_alternatif = alternatif.id_alternatif 
JOIN kriteria ON penilaian.id_kriteria = kriteria.id_kriteria";

$result_penilaian = mysqli_query($koneksi, $query_penilaian);

if (!$result_penilaian) {
    die("Query error: " . mysqli_error($koneksi));
}

// Menginisialisasi nilai minimum dan maksimum
$min_values = array_fill(0, count($kriteria), PHP_FLOAT_MAX);
$max_values = array_fill(0, count($kriteria), PHP_FLOAT_MIN);

$matrix_keputusan = array(); // Tambahkan inisialisasi untuk $matrix_keputusan

while ($row_penilaian = mysqli_fetch_assoc($result_penilaian)) {
    $nilai = (float)$row_penilaian['nilai'];

    // Mendapatkan indeks kriteria
    $id_kriteria = $row_penilaian['id_kriteria'];
    $index_kriteria = array_search($id_kriteria, array_column($kriteria, 'id_kriteria'));

    // Menghitung nilai minimum dan maksimum untuk setiap kriteria
    $min_values[$index_kriteria] = min($min_values[$index_kriteria], $nilai);
    $max_values[$index_kriteria] = max($max_values[$index_kriteria], $nilai);

    // Membuat matriks keputusan
    $matrix_keputusan[$row_penilaian['id_alternatif']][$kriteria[$index_kriteria]['keterangan']] = $nilai;
}

// Normalisasi Matriks (X)
$matrix_normalisasi = array();
foreach ($matrix_keputusan as $alternatif => $kriteriaValues) {
    $matrix_normalisasi[$alternatif] = array();
    foreach ($kriteriaValues as $kriteriaName => $nilai) {
        $index_kriteria = array_search($kriteriaName, array_column($kriteria, 'keterangan'));
        // Rumus Normalisasi
        $normalized_value = ($nilai - $min_values[$index_kriteria]) / ($max_values[$index_kriteria] - $min_values[$index_kriteria]);
        $matrix_normalisasi[$alternatif][$kriteriaName] = $normalized_value;
    }
}

// Perkalian Matriks Normalisasi * Bobot Kriteria
$matrix_perkalian = array();
foreach ($matrix_normalisasi as $alternatif => $kriteriaValues) {
    $matrix_perkalian[$alternatif] = array();
    foreach ($kriteriaValues as $kriteriaName => $normalizedValue) {
        $index_kriteria = array_search($kriteriaName, array_column($kriteria, 'keterangan'));
        $bobot_kriteria = $kriteria[$index_kriteria]['bobot'];
        $matrix_perkalian[$alternatif][$kriteriaName] = $normalizedValue * $bobot_kriteria;
    }
}
?>
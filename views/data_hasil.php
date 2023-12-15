<?php
include 'template/header.php';
include '../controller/koneksi.php';
include '../controller/perhitungan.php';


$ranking_data = array();
foreach ($matrix_perkalian as $alternatif => $kriteriaValues) {
    $total_nilai_preferensi = array_sum($kriteriaValues);
    $ranking_data[] = array(
        'indeks_alternatif' => $alternatif,
        'nilai_preferensi' => $total_nilai_preferensi,
        'ranking' => 0
    );
}

usort($ranking_data, function ($a, $b) {
    return $b['nilai_preferensi'] <=> $a['nilai_preferensi'];
});

$ranking = 1;
foreach ($ranking_data as &$data) {
    $data['ranking'] = $ranking++;
}



mysqli_close($koneksi);
?>

<!----------------------------------------------------------------- CONTENT ------------------------------------------------------------->
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h2 class="page-title">Hasil Perhitungan</h2>
            </div>

            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
    <!------------------------------------------------ Start Content --------------------------------------------->
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Hasil Perhitungan Akhir dan Perangkingan</h5>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Alternatif</th>
                        <th scope="col">Nilai Preferensi</th>
                        <th scope="col">Ranking</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php foreach ($ranking_data as $data): ?>
                    <tr>
                        <th scope="row"><?php echo $nomor++; ?></th>
                        <td><?php echo $data['indeks_alternatif']; ?></td>
                        <td><?php echo number_format($data['nilai_preferensi'], 3, '.', ''); ?></td>
                        <td><?php echo $data['ranking']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- Remaining content ... -->

    </div>

    <!---------------------------------------------------------------- FOOTER ------------------------------------------------------->

    <?php include 'template/footer.php'; ?>
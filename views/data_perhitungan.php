<?php
include 'template/header.php';
include '../controller/koneksi.php';
include '../controller/perhitungan.php';


mysqli_close($koneksi);
?>

<!----------------------------------------------------------------- CONTENT ------------------------------------------------------------->
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h2 class="page-title">Data Perhitungan</h2>
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
                <h5 class="card-title">Bobot Kriteria</h5>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <?php foreach ($kriteria as $kriteriaItem): ?>
                        <th scope="col"><?php echo $kriteriaItem['keterangan']; ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach ($kriteria as $kriteriaItem): ?>
                        <td><?php echo $kriteriaItem['bobot']; ?></td>
                        <?php endforeach; ?>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Matriks Keputusan (X)</h5>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Alternatif</th>
                        <?php foreach ($kriteria as $kriteriaItem): ?>
                        <th scope="col"><?php echo $kriteriaItem['keterangan']; ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php foreach ($matrix_keputusan as $alternatif => $kriteriaValues): ?>
                    <tr>
                        <th scope="row"><?php echo $nomor++; ?></th>
                        <td><?php echo $alternatif; ?></td>
                        <?php foreach ($kriteria as $kriteriaItem): ?>
                        <td><?php echo $kriteriaValues[$kriteriaItem['keterangan']]; ?></td>
                        <?php endforeach; ?>
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="2">Nilai Min</td>
                        <?php foreach ($min_values as $minValue): ?>
                        <td><?php echo $minValue?></td>
                        <?php endforeach; ?>
                    </tr>
                    <tr>
                        <td colspan="2">Nilai Max</td>
                        <?php foreach ($max_values as $maxValue): ?>
                        <td><?php echo $maxValue?></td>
                        <?php endforeach; ?>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Normalisasi Matriks (X)</h5>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Alternatif</th>
                        <?php foreach ($kriteria as $kriteriaItem): ?>
                        <th scope="col"><?php echo $kriteriaItem['keterangan']; ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php foreach ($matrix_normalisasi as $alternatif => $kriteriaValues): ?>
                    <tr>
                        <th scope="row"><?php echo $nomor++; ?></th>
                        <td><?php echo $alternatif; ?></td>
                        <?php foreach ($kriteriaValues as $normalizedValue): ?>
                        <td><?php echo number_format($normalizedValue, 3, '.', ''); ?></td>
                        <?php endforeach; ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Perkalian Matriks Normalisasi * Bobot Kriteria</h5>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Alternatif</th>
                        <?php foreach ($kriteria as $kriteriaItem): ?>
                        <th scope="col"><?php echo $kriteriaItem['keterangan']; ?></th>
                        <?php endforeach; ?>
                        <th scope="col">Nilai Preferensi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $nomor = 1;
                        foreach ($matrix_perkalian as $alternatif => $kriteriaValues):
                        $total_nilai_preferensi = array_sum($kriteriaValues);
                    ?>
                    <tr>
                        <th scope="row"><?php echo $nomor++; ?></th>
                        <td><?php echo $alternatif; ?></td>
                        <?php foreach ($kriteriaValues as $perkalianValue): ?>
                        <td><?php echo number_format($perkalianValue, 3, '.', ''); ?></td>
                        <?php endforeach; ?>
                        <td><?php echo number_format($total_nilai_preferensi, 3, '.', ''); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

    <!---------------------------------------------------------------- FOOTER ------------------------------------------------------->

    <?php include 'template/footer.php'; ?>
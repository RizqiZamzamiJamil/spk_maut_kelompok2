<?php
include 'template/header.php';
include '../controller/koneksi.php';

$query = "SELECT * FROM alternatif";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query error: " . mysqli_error($koneksi));
}

if (isset($_POST['simpan'])) {
    $indeks_alternatif = $_POST['indeks_alternatif'];
    $nama = $_POST['nama'];

    $query = "INSERT INTO alternatif (indeks_alternatif, nama) VALUES ('$indeks_alternatif', '$nama')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        
    } else {
        die("Query error: " . mysqli_error($koneksi));
    }
}
?>


<!----------------------------------------------------------------- CONTENT ------------------------------------------------------------->
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center justify-content-between">
                <h2 class="page-title">Data Peniliaian</h2>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inputK">
                    Tambah Nilai
                </button>
            </div>
            <br>
            <br>
            <br>
        </div>
    </div>

    <!-- Modal Input -->
    <div class="modal fade" id="inputK" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Input Nilai</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../controller/tambah_penilaian.php" method="post">
                        <div class="form-group my-4">
                            <select class="form-control" name="alter">
                                <option>Nama Alternatif</option>
                                <?php
 
                                $nama = $koneksi->query('SELECT * FROM alternatif ORDER BY nama');
                                    while ($datalter = $nama->fetch_array()) {
                                    echo "<option value=\"$datalter[id_alternatif]\">$datalter[nama]</option>\n";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group my-4">
                            <select class="form-control" name="krit">
                                <option>Nama Kriteria</option>
                                <?php
                                    $krit = $koneksi->query('SELECT * FROM kriteria ORDER BY keterangan');
                                        while ($datakrit = $krit->fetch_array()) {
                                        echo "<option value=\"$datakrit[id_kriteria]\">$datakrit[keterangan]</option>\n";
                                    }
                                    ?>
                            </select>
                        </div>
                        <div class="form-group my-4">
                            <input class="form-control" type="text" name="nilai" placeholder="Nilai">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary mb-3" type="submit" class="btn btn-success">Proses</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!------------------------------------------------ Start Content --------------------------------------------->
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Petunjuk</h3>
                    <p>
                        1. Tekan tombol tambah untuk menambahkan data penilaian
                        <br>
                        2. Tambah penilaian dengan memasukkan Alternatif, Kriteria, dan Bobotnya
                        <br>
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Alternatif (C)</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Indeks Alternatif</th>
                                <th>Nama Alternatif</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                    $query = "SELECT * FROM alternatif";
                    $result = mysqli_query($koneksi, $query);

                    if (!$result) {
                        die("Query error: " . mysqli_error($koneksi));
                    }

                    $nomor = 1;

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $nomor . '</td>';
                        echo '<td>' . $row["indeks_alternatif"] . '</td>';
                        echo '<td>' . $row["nama"] . '</td>';
                        echo '<td class="center-column">';
                        echo '</td>';
                        echo '</tr>';
                        
                        $nomor++;
                    }

                    mysqli_close($koneksi);
                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <style>
    .center-column {
        text-align: center;
        vertical-align: middle;
    }
    </style>
    <!---------------------------------------------------------------- FOOTER ------------------------------------------------------->


    <?php include 'template/footer.php' ?>
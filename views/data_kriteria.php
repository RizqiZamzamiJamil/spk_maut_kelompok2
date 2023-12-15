<?php
include 'template/header.php';
include '../controller/koneksi.php';

$query = "SELECT * FROM kriteria";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query error: " . mysqli_error($koneksi));
}

if (isset($_POST['simpan'])) {
    $indeks_kriteria = $_POST['indeks_kriteria'];
    $nama_kriteria = $_POST['nama_kriteria'];
    $bobot_kriteria = $_POST['bobot_kriteria'];

    $query = "INSERT INTO kriteria (kode_kriteria, keterangan, bobot) VALUES ('$indeks_kriteria', '$nama_kriteria', '$bobot_kriteria')";
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
                <h2 class="page-title">Data Kriteria</h2>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahK">
                    Tambah
                </button>

            </div>
            <br>
            <br>
            <br>
        </div>
    </div>

    <!-- Button trigger modal -->


    <!-- Modal Tambah -->
    <div class="modal fade" id="tambahK" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kriteria</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="field1">Indeks Kriteria</label>
                            <input type="text" class="form-control" name="indeks_kriteria" id="field1"
                                placeholder="Masukkan Indeks Kriteria">
                        </div>
                        <div class="form-group">
                            <label for="field2">Nama Kriteria</label>
                            <input type="text" class="form-control" name="nama_kriteria" id="field2"
                                placeholder="Masukkan Nama Kriteria">
                        </div>
                        <div class="form-group">
                            <label for="field3">Bobot Kriteria</label>
                            <input type="text" class="form-control" name="bobot_kriteria" id="field3"
                                placeholder="Masukkan Bobot Kriteria">
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-info">Reset</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal Hapus -->
    <div class="modal fade" id="hapusK" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Kriteria</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3>Apakah anda yakin akan menghapus data kriteria?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <a id="hapusLink" href="#" class="btn btn-danger">Hapus</a>
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
                        1. Tekan tombol tambah untuk menambahkan data kriteria baru
                        <br>
                        2. Tekan tombol edit untuk mengedit data kriteria
                        <br>
                        3. Tekan tombol hapus untuk menghapus data kriteria
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Kriteria (C)</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Indeks Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Bobot</th>
                                <th class="center-column">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../controller/koneksi.php';

                            $query = "SELECT * FROM kriteria";
                            $result = mysqli_query($koneksi, $query);

                            if (!$result) {
                                die("Query error: " . mysqli_error($koneksi));
                            }

                            $nomor = 1;

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<td>' . $nomor . '</td>';
                                echo '<td>' . $row["kode_kriteria"] . '</td>';
                                echo '<td>' . $row["keterangan"] . '</td>';
                                echo '<td>' . $row["bobot"] . '</td>';
                                echo '<td class="center-column">';
                                echo '<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editK">Edit</button>';
                                echo '<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusK" onclick="setDeleteUrl(' . $row['id_kriteria'] . ')">Hapus</button>';
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

        <script>
        function setDeleteUrl(id_kriteria) {
            document.getElementById('hapusLink').href = "../controller/hapus_kriteria.php?id_kriteria=" + id_kriteria;
        }
        </script>

    </div>
    <style>
    .center-column {
        text-align: center;
        vertical-align: middle;
    }
    </style>
    <!---------------------------------------------------------------- FOOTER ------------------------------------------------------->


    <?php include 'template/footer.php'; ?>
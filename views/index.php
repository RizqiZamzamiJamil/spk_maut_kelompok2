<?php
include 'template/header.php';
include '../controller/koneksi.php';
include '../controller/perhitungan.php';

$query = "SELECT keterangan FROM kriteria";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query error: " . mysqli_error($koneksi));
}
?>
<!-- Page wrapper  -->

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h2 class="page-title">Dashboard</h2>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Library
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <br>
            <br>
            <br>
            <br>
        </div>
    </div>

    <div class="container-fluid">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Halo Admin...</h4>
            <p>
                Selamat datang di website untuk Perhitungan
                Sistem Pendukung Keputusan dengan menggunakan
                metode Multi Attribute Utility Theory (MAUT)
            </p>
            <hr />
            <p class="mb-0">
                Kamu bisa mulai melakukan perhitungan dengan mengikuti
                step berikut dan menekan menu-menu pada sidebar.
            </p>
        </div>
        <!-- Sales Cards  -->
        <div class="row">

            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-warning text-center d-flex flex-column justify-content-center align-items-center"
                        style="height: 150px;">
                        <h1 class="font-light text-white">
                            <i class="fas fa-columns"></i>
                        </h1>
                        <h6 class="text-white">Data Kriteria</h6>
                    </div>
                </div>
            </div>

            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-danger text-white d-flex flex-column justify-content-center align-items-center"
                        style="height: 150px;">
                        <h1 class="font-light">
                            <i class="fa fa-star"></i>
                        </h1>
                        <h6>Data Penilaian</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-primary text-white d-flex flex-column justify-content-center align-items-center"
                        style="height: 150px;">
                        <h1 class="font-light">
                            <i class="fas fa-users"></i>
                        </h1>
                        <h6>Data Alternatif</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-info text-white d-flex flex-column justify-content-center align-items-center"
                        style="height: 150px;">
                        <h1 class="font-light">
                            <i class="fas fa-calculator"></i>
                        </h1>
                        <h6>Data Perhitungan</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-success text-white d-flex flex-column justify-content-center align-items-center"
                        style="height: 150px;">
                        <h1 class="font-light">
                            <i class="fab fa-wpforms"></i>
                        </h1>
                        <h6>Hasil Perhitungan</h6>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <?php

mysqli_close($koneksi);

include 'template/footer.php';
?>
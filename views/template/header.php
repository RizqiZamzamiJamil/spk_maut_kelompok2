<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>SPK MAUT</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/extra-libs/multicheck/multicheck.css" />
    <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />
    <link href="../dist/css/style.min.css" rel="stylesheet" />

</head>

<body>
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b class="logo-icon ps-2">
                        </b>
                        <span class="logo-text ms-2">
                            <h2>SPK MAUT</h2>
                        </span>

                    </a>
                    <!-- Toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
                        </li>
                    </ul>
                    <!-- Right side toggle and nav items -->
                    <ul class="navbar-nav float-end">
                        <li class="nav-item dropdown">
                            <a class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated"
                                aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="mdi mdi-account me-1 ms-1"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="mdi mdi-wallet me-1 ms-1"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="mdi mdi-email me-1 ms-1"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="mdi mdi-settings me-1 ms-1"></i> Account
                                    Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="ps-4 p-10">
                                    <a href="javascript:void(0)"
                                        class="btn btn-sm btn-success btn-rounded text-white">View Profile</a>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php"
                                aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="data_kriteria.php"
                                aria-expanded="false"><i class="fas fa-columns"></i><span class="hide-menu">Data
                                    Kriteria</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="data_alternatif.php"
                                aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">Data
                                    Alternatif</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="data_penilaian.php"
                                aria-expanded="false"><i class="fa fa-star"></i><span class="hide-menu">Data
                                    Penilaian</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="data_perhitungan.php"
                                aria-expanded="false"><i class="fas fa-calculator"></i><span class="hide-menu">Data
                                    Perhitungan</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="data_hasil.php"
                                aria-expanded="false"><i class="fab fa-wpforms"></i><span class="hide-menu">Hasil
                                    Perhitungan</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
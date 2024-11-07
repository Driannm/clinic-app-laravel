<!doctype html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ $title ?? '' }} | {{ env('APP_NAME') }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <img src="../assets/img/favicon/favicon.ico" width="35" alt="">
                    <span class="app-brand-text demo menu-text fw-bold ms-2">Berkah Jaya</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">

                    <!-- Dashboards -->
                    <li class="menu-item {{ Request::is('dashboard') ? 'active open' : '' }}">
                        <a href="/dashboard" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-smile"></i>
                            <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
                            <span class="badge rounded-pill bg-danger ms-auto">5</span>
                        </a>
                    </li>

                    {{-- Pasien --}}
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Pasien</span>
                    </li>

                    {{-- Daftar Pasien --}}
                    <li class="menu-item {{ Request::is('pasien') ? 'active open' : '' }}">
                        <a href="/pasien" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div class="text-truncate" data-i18n="Pasien">Daftar Pasien</div>
                        </a>
                    </li>

                    {{-- Pendaftaran Pasien --}}
                    <li class="menu-item {{ Request::is('daftar') ? 'active open' : '' }}">
                        <a href="/daftar" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-clipboard"></i>
                            <div class="text-truncate" data-i18n="Pasien">Pendaftaran Pasien</div>
                        </a>
                    </li>

                    {{-- Riwayat Medis --}}
                    <li class="menu-item">
                        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-calendar.html"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div class="text-truncate" data-i18n="Calendar">Riwayat Medis</div>
                            <div class="badge rounded-pill bg-label-primary text-uppercase fs-tiny ms-auto">Pro</div>
                        </a>
                    </li>

                    {{-- Menu - Dokter --}}
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Dokter</span></li>

                    {{-- Daftar Dokter --}}
                    <li class="menu-item {{ Request::is('dokter') ? 'active open' : '' }}">
                        <a href="/dokter" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div class="text-truncate" data-i18n="Basic">Daftar Dokter</div>
                        </a>
                    </li>

                    {{-- Tambah Dokter --}}
                    <li class="menu-item {{ Request::is('dokter/create') ? 'active open' : '' }}">
                        <a href="/dokter/create" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-plus-circle"></i>
                            <div class="text-truncate" data-i18n="Basic">Tambah Dokter</div>
                        </a>
                    </li>

                    {{-- Jadwal Praktek --}}
                    <li class="menu-item">
                        <a href="cards-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-calendar"></i>
                            <div class="text-truncate" data-i18n="Basic">Jadwal Praktek</div>
                        </a>
                    </li>

                    {{-- Riwayat Tindakan --}}
                    <li class="menu-item">
                        <a href="icons-boxicons.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-clipboard"></i>
                            <div class="text-truncate" data-i18n="Boxicons">Riwayat Tindakan</div>
                        </a>
                    </li>

                    {{-- Janji Temu --}}
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Janji Temu</span></li>

                    {{-- Daftar Janji Temu --}}
                    <li class="menu-item">
                        <a href="tables-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-calendar-check"></i>
                            <div class="text-truncate" data-i18n="Tables">Daftar Janji Temu</div>
                        </a>
                    </li>

                    {{-- Tambah Janji Temu --}}
                    <li class="menu-item">
                        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/tables-datatables-basic.html"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-calendar-plus"></i>
                            <div class="text-truncate" data-i18n="Datatables">Tambah Janji Temu</div>
                        </a>
                    </li>

                    {{-- Batal Janji Temu --}}
                    <li class="menu-item">
                        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/tables-datatables-basic.html"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-calendar-x"></i>
                            <div class="text-truncate" data-i18n="Datatables">Batal Janji Temu</div>
                        </a>
                    </li>


                    {{-- Obat --}}
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Obat</span></li>

                    {{-- Daftar Obat --}}
                    <li class="menu-item">
                        <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-capsule"></i>
                            <div class="text-truncate" data-i18n="Support">Daftar Obat</div>
                        </a>
                    </li>

                    {{-- Tambah Obat --}}
                    <li class="menu-item">
                        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-plus-circle"></i>
                            <div class="text-truncate" data-i18n="Documentation">Tambah Obat</div>
                        </a>
                    </li>

                    {{-- Stok Obat --}}
                    <li class="menu-item">
                        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div class="text-truncate" data-i18n="Documentation">Stok Obat</div>
                        </a>
                    </li>

                    {{-- Keuangan --}}
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Laporan</span></li>

                    {{-- Pembayaran --}}
                    <li class="menu-item">
                        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-wallet"></i>
                            <div class="text-truncate" data-i18n="Documentation">Pembayaran</div>
                        </a>
                    </li>

                    {{-- Tagihan --}}
                    <li class="menu-item">
                        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-receipt"></i>
                            <div class="text-truncate" data-i18n="Documentation">Tagihan</div>
                        </a>
                    </li>

                    {{-- Laporan Keuangan --}}
                    <li class="menu-item">
                        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div class="text-truncate" data-i18n="Documentation">Laporan Keuangan</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                            <i class="bx bx-menu bx-md"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <!-- Breadcrumb -->
                        <div class="navbar-nav align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>

                                    <!-- Breadcrumb utama -->
                                    @if (Route::is('pasien.index', 'pasien.create'))
                                        <li class="breadcrumb-item"><a href="{{ route('pasien.index') }}">Pasien</a>
                                        </li>
                                    @elseif (Route::is('dokter.index', 'dokter.create'))
                                        <li class="breadcrumb-item"><a href="{{ route('dokter.index') }}">Dokter</a>
                                        </li>
                                    @elseif (Route::is('obat.index'))
                                        <li class="breadcrumb-item"><a href="{{ route('obat.index') }}">Obat</a></li>
                                    @elseif (Route::is('janji-temu.index'))
                                        <li class="breadcrumb-item"><a href="{{ route('janji-temu.index') }}">Janji
                                                Temu</a></li>
                                    @elseif (Route::is('keuangan.index'))
                                        <li class="breadcrumb-item"><a
                                                href="{{ route('keuangan.index') }}">Keuangan</a></li>
                                    @endif

                                    <!-- Sub-breadcrumb -->
                                    @if (isset($title))
                                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}
                                        </li>
                                    @endif
                                </ol>
                            </nav>
                        </div>


                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0">Yuda Andrian</h6>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/profile">
                                            <i class="bx bx-user bx-md me-3"></i><span>Profile Saya</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"> <i
                                                class="bx bx-cog bx-md me-3"></i><span>Pengaturan</span> </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            <a class="dropdown-item">
                                                <i class="bx bx-power-off bx-md me-3"></i><span>Keluar</span>
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">


                    <!-- Content -->
                    @yield('content')
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div
                                class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                                <div class="text-body">
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    , made with ❤️ by
                                    <a href="#" target="_blank" class="footer-link">Yuda Andrian</a>
                                </div>
                                <div class="d-none d-lg-inline-block">
                                    <a href="https://github.com/Driannm" class="footer-link me-4"
                                        target="_blank">GitHub</a>
                                    <a href="https://www.linkedin.com/in/yuda-andrian/" target="_blank"
                                        class="footer-link me-4">LinkedIn</a>
                                    <a href="https://www.behance.net/driannjaegar" target="_blank"
                                        class="footer-link me-4">Behance</a>
                                    <a href="https://dribbble.com/Driann_" target="_blank"
                                        class="footer-link">Dribble</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->

            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>

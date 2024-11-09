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

    <!-- Select 2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
                    <li class="menu-item {{ Request::is('home') ? 'active open' : '' }}">
                        <a href="/home" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                            <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
                        </a>
                    </li>

                    {{-- Pasien --}}
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Pasien</span>
                    </li>

                    {{-- Daftar Pasien --}}
                    <li class="menu-item {{ Request::is('pasien') ? 'active open' : '' }}">
                        <a href="/pasien" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-user"></i>
                            <div class="text-truncate" data-i18n="Pasien">Daftar Pasien</div>
                        </a>
                    </li>

                    {{-- Pendaftaran Pasien --}}
                    <li class="menu-item {{ Request::is('daftar') ? 'active open' : '' }}">
                        <a href="/daftar" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-food-menu"></i>
                            <div class="text-truncate" data-i18n="Pasien">Pendaftaran Pasien</div>
                        </a>
                    </li>

                    {{-- Riwayat Medis --}}
                    {{-- <li class="menu-item">
                        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-calendar.html"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div class="text-truncate" data-i18n="Calendar">Riwayat Medis</div>
                            <div class="badge rounded-pill bg-label-primary text-uppercase fs-tiny ms-auto">Pro</div>
                        </a>
                    </li> --}}

                    {{-- Menu - Dokter --}}
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Dokter</span></li>

                    {{-- Daftar Dokter --}}
                    <li class="menu-item {{ Request::is('dokter') ? 'active open' : '' }}">
                        <a href="/dokter" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-user"></i>
                            <div class="text-truncate" data-i18n="Basic">Daftar Dokter</div>
                        </a>
                    </li>

                    {{-- Jadwal Praktek --}}
                    <li class="menu-item {{ Request::is('dokter/jadwal') ? 'active open' : '' }}">
                        <a href="/dokter/jadwal" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-calendar"></i>
                            <div class="text-truncate" data-i18n="Basic">Jadwal Praktek</div>
                        </a>
                    </li>

                    {{-- Riwayat Tindakan --}}
                    <li class="menu-item {{ Request::is('dokter/riwayat') ? 'active open' : '' }}">
                        <a href="/dokter/riwayat" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-time"></i>
                            <div class="text-truncate" data-i18n="Boxicons">Riwayat Tindakan</div>
                        </a>
                    </li>

                    {{-- Tambah Janji Temu
                    <li class="menu-item {{ Request::is('janji-temu') ? 'active open' : '' }}">
                        <a href="/janji-temu" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-calendar-plus"></i>
                            <div class="text-truncate" data-i18n="Datatables">Tambah Janji Temu</div>
                        </a>
                    </li> --}}

                    {{-- Batal Janji Temu
                    <li class="menu-item">
                        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/tables-datatables-basic.html"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-calendar-x"></i>
                            <div class="text-truncate" data-i18n="Datatables">Batal Janji Temu</div>
                        </a>
                    </li> --}}


                    {{-- Obat --}}
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Lain - lain</span></li>

                    {{-- Daftar Janji Temu --}}
                    <li class="menu-item {{ Request::is('janji-temu') ? 'active open' : '' }}">
                        <a href="/janji-temu" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-calendar-check"></i>
                            <div class="text-truncate" data-i18n="Tables">Daftar Janji Temu</div>
                        </a>
                    </li>

                    {{-- Daftar Obat --}}
                    <li class="menu-item {{ Request::is('obat') ? 'active open' : '' }}">
                        <a href="/obat" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-capsule"></i>
                            <div class="text-truncate" data-i18n="Support">Daftar Obat</div>
                        </a>
                    </li>

                    {{-- Stok Obat --}}
                    <li class="menu-item {{ Request::is('obat/stok') ? 'active open' : '' }}">
                        <a href="/obat/stok" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-box"></i>
                            <div class="text-truncate" data-i18n="Documentation">Stok Obat</div>
                        </a>
                    </li>

                    {{-- Keuangan --}}
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Laporan</span></li>

                    {{-- Pembayaran --}}
                    <li class="menu-item {{ Request::is('laporan-pasien/create') ? 'active open' : '' }}">
                        <a href="/laporan-pasien/create" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-user-rectangle"></i>
                            <div class="text-truncate" data-i18n="Documentation">Data Pasien</div>
                        </a>
                    </li>

                    {{-- Tagihan --}}
                    <li class="menu-item {{ Request::is('laporan-daftar/create') ? 'active open' : '' }}">
                        <a href="/laporan-daftar/create" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-report"></i>
                            <div class="text-truncate" data-i18n="Documentation">Data Pendaftaran</div>
                        </a>
                    </li>

                    {{-- Laporan Keuangan --}}
                    {{-- <li class="menu-item">
                        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-file"></i>
                            <div class="text-truncate" data-i18n="Documentation">Laporan Keuangan</div>
                        </a>
                    </li> --}}
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
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>

                                    <!-- Breadcrumb utama -->
                                    {{-- Pasien --}}
                                    @if (Route::is('pasien.index', 'pasien.create', 'pasien.show',
                                                    'daftar.index','daftar.create','daftar.show'))
                                        <li class="breadcrumb-item"><a href="{{ route('pasien.index') }}">Pasien</a>
                                        </li>
                                        
                                    {{-- Dokter --}}
                                    @elseif (Route::is('dokter.index', 'dokter.create'))
                                        <li class="breadcrumb-item"><a href="{{ route('dokter.index') }}">Dokter</a>
                                        </li>

                                    {{-- Obat --}}
                                    @elseif (Route::is('obat.index'))
                                        <li class="breadcrumb-item"><a href="{{ route('obat.index') }}">Obat</a>
                                        </li>
                                    
                                    {{-- Janji Temu --}}
                                    @elseif (Route::is('janji-temu.index'))
                                        <li class="breadcrumb-item"><a href="{{ route('janji-temu.index') }}">Janji Temu</a>
                                        </li>

                                    {{-- Laporan --}}
                                    @elseif (Route::is('laporan-pasien.index','laporan-pasien.create',
                                                        'laporan-daftar.index','laporan-daftar.create'))
                                        <li class="breadcrumb-item"><a
                                                href="{{ route('laporan-pasien.index') }}">Laporan</a>
                                        </li>
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
                                        <a href="#"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"
                                            class="btn btn-outline-danger mx-3 mt-2 d-block"> Log Out
                                        </a>
                                        <form action="{{ route('logout') }}" id="logout-form" method="POST"
                                            class="d-none">
                                            @csrf
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

    <!-- Select 2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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

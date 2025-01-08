<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ $judul }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('admin') }}/img/favicon/logo.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('admin') }}/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('admin') }}/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/css/demo.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="{{ asset('admin') }}/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('admin') }}/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('admin') }}/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <i class="bx bxs-clinic" style="font-size: 30px;"></i>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Klinik</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item {{ Request::is('petugas') ? 'active' : '' }}">
                        <a href="{{ route('dashboardPetugas.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <!-- Data Dokter -->
                    <li class="menu-item {{ Request::is('petugas/dataPasien') ? 'active' : '' }}">
                        <a href="{{ route('dataPasien.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div data-i18n="Analytics">Data Pasien</div>
                        </a>
                    </li>

                    <!-- Data Petugas -->
                    <li class="menu-item {{ Request::is('petugas/pemeriksaan') ? 'active' : '' }}">
                        <a href="{{ route('pemeriksaan.index') }}" class="menu-link">
                            <i class="menu-icon tf-icon bx bx-clinic"></i>
                            <div data-i18n="Analytics">Pemeriksaan</div>
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
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                            <!-- Judul -->
                            <div class="navbar-nav align-items-center">
                                {{ $judul }}
                            </div>
                            <!-- /Judul -->

                            <ul class="navbar-nav flex-row align-items-center ms-auto">
                                <!-- User -->
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                        data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">
                                            <img src="{{ asset('admin') }}/img/avatars/1.png" alt
                                                class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar avatar-online">
                                                            <img src="{{ asset('admin') }}/img/avatars/1.png" alt
                                                                class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="fw-semibold d-block">John Doe</span>
                                                        <small class="text-muted">{{ Auth::user()->role }}</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}">
                                                <i class="bx bx-power-off me-2"></i>
                                                <span class="align-middle">Log Out</span>
                                            </a>
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
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            @yield('conten')
                        </div>
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
        <script src="{{ asset('admin') }}/vendor/libs/jquery/jquery.js"></script>
        <script src="{{ asset('admin') }}/vendor/libs/popper/popper.js"></script>
        <script src="{{ asset('admin') }}/vendor/js/bootstrap.js"></script>
        <script src="{{ asset('admin') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <script src="{{ asset('admin') }}/vendor/js/menu.js"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="{{ asset('admin') }}/vendor/libs/apex-charts/apexcharts.js"></script>

        <!-- Main JS -->
        <script src="{{ asset('admin') }}/js/main.js"></script>

        <!-- Page JS -->
        <script src="{{ asset('admin') }}/js/dashboards-analytics.js"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
        <script>
            new DataTable('#myTable', {
                info: false,
            });
            new DataTable('#myTable1', {
                info: false,
            });
            new DataTable('#myTable2', {
                info: false,
            });
            new DataTable('#myTable3', {
                info: false,
            });
        </script>
</body>

</html>

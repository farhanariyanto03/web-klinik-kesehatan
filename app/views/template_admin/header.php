<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="http://localhost/klinik_kesehatan/public/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title><?php echo $data['judul'] ?></title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="http://localhost/klinik_kesehatan/public/assets/img/favicon/favicon.ico" /> -->
    <link rel="icon" type="image/x-icon" href="http://localhost/klinik_kesehatan/public/assets/img/favicon/LOGOKLINIK.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- DATATABLE-->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="http://localhost/klinik_kesehatan/public/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="http://localhost/klinik_kesehatan/public/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="http://localhost/klinik_kesehatan/public/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="http://localhost/klinik_kesehatan/public/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="http://localhost/klinik_kesehatan/public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="http://localhost/klinik_kesehatan/public/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="http://localhost/klinik_kesehatan/public/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="http://localhost/klinik_kesehatan/public/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
          <a href="index.html" class="app-brand-link">
            <img src="http://localhost/klinik_kesehatan/public/assets/img/favicon/LOGOKLINIK.png" class="center" style="height: 50px;"
                      alt="Logo">
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Klinik</span>
          </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item <?php if (strpos($_SERVER['REQUEST_URI'], 'dashboardDokter') !== false) {
                                    echo 'active';
                                  } ?>">
                <a href="dashboardDokter" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>

            <!-- Data Petugas -->
            <li class="menu-item <?php if (strpos($_SERVER['REQUEST_URI'], 'dataDokter') !== false) {
                                    echo 'active';
                                  } ?>">
                <a href="dataDokter" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div data-i18n="Analytics">Data Dokter</div>
                </a>
            </li>

            <!-- Data Petugas -->
            <li class="menu-item <?php if (strpos($_SERVER['REQUEST_URI'], 'dataPetugas') !== false) {
                                    echo 'active';
                                  } ?>">
                <a href="dataPetugas" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div data-i18n="Analytics">Data Petugas</div>
                </a>
            </li>

            <!-- Data Pasien -->
            <li class="menu-item <?php if (strpos($_SERVER['REQUEST_URI'], 'dataPasien') !== false) {
                                    echo 'active';
                                  } ?>">
                <a href="dataPasien" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user-plus"></i>
                    <div data-i18n="Analytics">Data Pasien</div>
                </a>
            </li>

            <!-- Laporan Pemeriksaan -->
            <li class="menu-item <?php if (strpos($_SERVER['REQUEST_URI'], 'laporanPemeriksaan') !== false) {
                                    echo 'active';
                                  } ?>">
                <a href="laporanPemeriksaan" class="menu-link">
                    <i class="menu-icon tf-icons bx bbx bxs-report"></i>
                    <div data-i18n="Analytics">Laporan Pemeriksaan</div>
                </a>
            </li>
        </ul>

        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <div div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Judul -->
              <div class="navbar-nav align-items-center">
                <?php echo $data['judul'] ?>
              </div>
              <!-- /Judul -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a href="login" class="menu-link">
                <i class="menu-icon btn btn-icon btn-outline-danger tf-icons bx bx-log-out"></i>
            </a>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->
            <!-- / Content -->
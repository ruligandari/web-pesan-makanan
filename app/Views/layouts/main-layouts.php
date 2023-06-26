<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url()?>assets/img/favicon.png" rel="icon">
  <link href="<?= base_url()?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">

  <?= $this->renderSection('head');?>

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="<?= base_url()?>assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Crab1818</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?= base_url()?>assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>K. Anderson</h6>
              <span>Head Chef</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
              <a class="dropdown-item d-flex align-items-center" href="<?= base_url('logout')?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link <?= ($title == 'Dashboard')? '' : 'collapsed'?>" href="<?= base_url('chef/dashboard')?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->
      <li class="nav-heading">Menu</li>
      <li class="nav-item">
        <a class="nav-link <?= ($title == 'List Menu')? '' : 'collapsed'?>" href="<?= base_url('chef/list-menu')?>">
          <i class="bi bi-menu-button-fill"></i>
          <span>List Menu</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->
      <li class="nav-heading">Pesanan</li>
      <li class="nav-item">
        <a class="nav-link <?= ($title == 'List Pesanan')? '' : 'collapsed'?>" href="<?= base_url('chef/list-pesanan')?>">
          <i class="bi bi-chat-square-text"></i>
          <span>List Pesanan</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->
      
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1><?= $title?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('chef/dashboard')?>">Home</a></li>
          <li class="breadcrumb-item active"><?= $title?></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?= $this->renderSection('content')?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Crab 1818</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url()?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?= base_url()?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url()?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url()?>assets/js/main.js"></script>

  <?= $this->renderSection('script');?>

</body>

</html>
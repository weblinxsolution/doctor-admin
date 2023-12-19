<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- custom CSS -->
  <link rel="stylesheet" href="dist/css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- Fontawsome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <button class="btn btn-secondary" data-toggle="dropdown">
            <i class="fa-solid fa-user"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="profile.php" class="dropdown-item">
              Profile
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link text-decoration-none">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <i class="fa-solid fa-gauge"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="dashboard.php" class="nav-link">
                <i class="fa-solid fa-gauge"></i>
                <p>
                  Doctors
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="timetable.php" class="nav-link">
                <i class="fa-solid fa-clock"></i>
                <p>
                  Instant Time slots
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="experience.php" class="nav-link">
                <i class="fa-solid fa-pen-to-square"></i>
                <p>
                  Experience
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="acheivements.php" class="nav-link">
                <i class="fa-solid fa-star"></i>
                <p>
                  Acheivements
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <i class="fa-solid fa-lock"></i>
                <p>
                  Content
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="about-content.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>About Content</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="terms-condition.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Terms and Condition</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="privacy-policy.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Privacy Policy</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="package.php" class="nav-link">
                <i class="fa-solid fa-hand-holding-heart"></i>
                <p>
                  Packages
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="subscribtion.php" class="nav-link">
                <i class="fa-solid fa-money-bill"></i>
                <p>
                  Subscription
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="patient.php" class="nav-link">
                <i class="fa-solid fa-hospital-user"></i>
                <p>
                  Patient
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="complain.php" class="nav-link">
                <i class="fa-solid fa-envelope"></i>
                <p>
                  Complain
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="settings.php" class="nav-link">
                <i class="fa-solid fa-gear"></i>
                <p>
                  Settings
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="appointment.php" class="nav-link">
                <i class="fa-solid fa-calendar-check"></i>
                <p>
                  Appointments
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
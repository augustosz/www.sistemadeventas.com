<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema De Ventas</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $URL;?>public/templates/AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL;?>public/templates/AdminLTE-3.1.0/dist/css/adminlte.min.css">
  <!-- Sweetalert2 -->
  <link rel="stylesheet" href="<?php echo $URL;?>public/templates/AdminLTE-3.1.0/plugins/sweetalert2/sweetalert2.min.css">
<!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $URL;?>public/templates/AdminLTE-3.1.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>public/templates/AdminLTE-3.1.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>public/templates/AdminLTE-3.1.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


</head>

<body class="hold-transition sidebar-mini">

  <script src="<?php echo $URL;?>public/templates/AdminLTE-3.1.0/plugins/sweetalert2/sweetalert2.min.js"></script>

  <?php

  if (isset($_SESSION['mostrar_alerta']) && $_SESSION['mostrar_alerta'] === true) {
    $sesion_email = $_SESSION['sesion_email'];
    echo "
    <script>
      Swal.fire({
        title: 'Inicio exitoso!',
        text: 'Bienvenido $sesion_email',
        icon: 'success',
        showConfirmButton: false,
        timer: 1500,
      });
    </script>
    ";
    // Eliminar la variable de sesión para evitar que la alerta se muestre nuevamente
    unset($_SESSION['mostrar_alerta']);
  }
  ?>


  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">SIS VENTAS</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?php echo $URL; ?>" class="brand-link">
        <img src="<?php echo $URL; ?>public/images/logo.jpg" alt="STO Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">STO Solutions</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo $URL;?>public/templates/AdminLTE-3.1.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $sesion_nombre; ?></a>
          </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Usuarios
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo $URL;?>usuarios/index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listado de usuarios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo $URL;?>usuarios/create.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Creación de usuarios</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Botón de Cerrar sesión -->
            <li class="nav-item">
              <a href="<?php echo $URL; ?>app/controllers/login/cerrar_sesion.php" class="nav-link btn btn-danger">
                <i class="fas fa-sign-out-alt nav-icon"></i>
                <p>Cerrar sesión</p>
              </a>
            </li>
          </ul>
        </nav>

        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
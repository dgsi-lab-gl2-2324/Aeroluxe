<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aeroluxe - Inicio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo URL ?>/assets/img/favicon.ico" rel="icon">
  <link href="<?php echo URL ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
-->
  <link href="https://fonts.googleapis.com/css?family=Lexend Peta:300,300i,400,400i,600,600i,700,700i|Questrial:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="<?php echo URL ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo URL ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo URL ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo URL ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo URL ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo URL ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo URL ?>/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="main-layout">


  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?php echo URL; ?>/inicio" class="logo d-flex align-items-center">
        <img src="<?php echo URL ?>/logo" alt="">
        <span>AEROLUXE</span>
      </a>



      <nav id="navbar" class="navbar">
        <ul>

        <?php
          if (isset($_SESSION["USER_NOMBRE"]) && !empty($_SESSION["USER_NOMBRE"])) {

            // Obtener la hora actual del servidor
            $hora = date("H");

            // Determinar el mensaje según la hora del día
            if ($hora >= 6 && $hora < 12) {
              $saludo = "Buenos días";
            } elseif ($hora >= 12 && $hora < 20) {
              $saludo = "Buenas tardes";
            } else {
              $saludo = "Buenas noches";
            }

            // Mostrar el mensaje con el nombre del usuario
            if (isset($_SESSION["IS_ADMIN"]) && ($_SESSION["IS_ADMIN"] == true)) {
            ?>
              <li><a class="nav-link scrollto" href="<?php echo URL . '/admin' ?>"><?php echo "<strong>". $saludo ." ". $_SESSION["USER_NOMBRE"] . "</strong>"; ?></a></li>

          <?php
            } else {
          ?>
            <li><a class="nav-link scrollto" href="<?php echo URL . '/perfil' ?>"><?php echo "<strong>". $saludo ." " . $_SESSION["USER_NOMBRE"] . "</strong>"; ?></a></li>
          <?php
            }
          }
          ?>


          <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
          <li><a class="nav-link scrollto" href="<?php echo URL . '/compra'?>">Compra de entradas</a></li>
          <?php
          if (isset($_SESSION["IS_ADMIN"]) && ($_SESSION["IS_ADMIN"] == true)) {
          ?>
            <li><a class="nav-link scrollto" href="<?php echo URL . '/admin' ?>">Admin</a></li>
          <?php
          } else if (isset($_SESSION["USER_NOMBRE"]) && !empty($_SESSION["USER_NOMBRE"])) {
          ?>
            <li><a class="nav-link scrollto" href="<?php echo URL . '/perfil' ?>">Mi perfil</a></li>
          <?php
          }
          ?>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

          <?php
          if (isset($_SESSION["USER_NOMBRE"]) && !empty($_SESSION["USER_NOMBRE"])) {
          ?>

            <li><a class="getstarted scrollto" href="<?php echo URL . '/cerrarsesion' ?>">Cerrar Sesión</a></li>

          <?php
          } else {
          ?>

            <li><a class="getstarted scrollto" href="<?php echo URL . '/registro' ?>">¡Registrate!</a></li>

          <?php
          }
          ?>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Fisioterapia Dermatofuncional Pryscilla Stéfano</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bocor - v2.1.0
  * Template URL: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    
</head>

<body>

  <!-- ======= Header ======= -->
<header id="header">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
<a href="../index.php"><img src="assets/img/logohorizontal.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="../index.php">Home</a></li>
          <li><a href="../index.php#about">Conheça mais</a></li>
          <li><a href="../index.php#services">Serviços</a></li>
          <li><a href="../index.php#portfolio">Resultados</a></li>
            <li><a href="../dicas.php">Dicas</a></li>

          <li class="get-started"><a href="../faleconosco.php">Entre em contato</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Agendamento</h2>
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li>Agendamento</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->


<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>



<?php

require __DIR__.'/vendor/autoload.php';



use \Classes\identidade\consultas;

/** validação do ID */
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: gerenciamento.php?status=error');
    exit;
}

$obConsulta = Consultas::getConsulta($_GET['id']);

/** Validação da consulta */
if(!$obConsulta instanceof Consultas){
    header('location: gerenciamento.php?status=error');
    exit;
}



/** validação do POST */
 if(isset($_POST['desmarcar'])){
     $obConsulta->desmarcar();

     header('location: gerenciamento.php?status=success');
     exit;
     
 }

include __DIR__.'/páginas/confirmar-exclusao.php';
?>

<footer id="footer">

    <div class="footer-top">
<div class="container footer-bottom clearfix">
  <div class="copyright">
    &copy; Copyright <strong><span>Pryscilla Stéfano</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    Design por <a class="linkrodape" href="https://bootstrapmade.com/">BootstrapMade</a> Desenvolvido por <a class="linkrodape" href="https://www.instagram.com/naya.tech/">NayaTech</a> 
  </div>
  </div>
</div>  
</footer>
</body>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BMKG Tunggul Wulung Cilacap | 404</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="assets/img/bmkg.ico">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">

  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Green - v4.9.1
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar/Wadah Jam ======= -->
 <!--- --->
<div class="face text-center" style="margin-top: 100px;">
    <img class="img img-responsive"  src="<?= base_url('assets/img/mega.png') ?>" width="200"  focusable="false"></img>
</div>
<h1 class="my-1 text-center">Oops! Something went wrong!</h1>
<div class="text-center">
    <h1 class="display-1 fw-bold">404</h1>
    <p class="lead">
        Halaman yang anda cari tidak dapat ditemukan <br>
        <?php if (ENVIRONMENT !== 'production') : ?>
            <?= nl2br(esc($message)) ?>
        <?php else : ?>
           <i>Sorry! Cannot seem to find the page you were looking for.</i> 
        <?php endif ?>
    </p>
    <a href="<?= base_url() ?>" class="btn btn-primary mt-0">Beranda</a>
</div>
</body>

</html>

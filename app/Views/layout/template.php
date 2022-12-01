<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BMKG Tunggul Wulung Cilacap</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="assets/img/bmkg.ico">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/animate.css/animate.min.css')?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/card.gempaterkini.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/prakicu-card.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/loader.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
</head>

<body>

<!-- ======= Top Bar/Wadah Jam ======= -->
    <?= $this->include('_partials/navbar') ?>

    <!-- CONTENT -->
    <?= $this->renderSection('content') ?>

    <!-- ======= Footer ======= -->
    <?= $this->include('_partials/footer') ?>

</body>
<!-- Vendor JS Files -->
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src=" <?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?> "></script>
  <script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
  <script type="text/javascript">
  window.$crisp=[];
  window.CRISP_WEBSITE_ID="7c80e45d-0b3b-4137-92d4-4e0e35dad9f5";
  $crisp.push(["set", "message:text", ["Hi! I'd like to get help."]]);
  (function () {
    d = document;
    s = d.createElement("script");
    s.src = "https://client.crisp.chat/l.js";
    s.async = 1;
    d.getElementsByTagName("head")[0].appendChild(s);
  })();
  s;
</script>

  <!-- Get BMKG Data -->
  <script src="<?= base_url('assets/js/jam.js') ?>"></script>
  <script src="<?= base_url('assets/js/earthquake.js') ?>"></script>
  <script src="<?= base_url('assets/js/weather.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>

</html>
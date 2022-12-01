<!-- ======= Top Bar/Wadah Jam ======= -->
<section id="topbar" class="d-flex align-items-center text-white bg-dark">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center date-txt"> </div>
      <div class="contact-info d-flex align-items-center date-txt-m mx-3"> </div>
      <div class="social-links clock-txt"></div>
    </div>
  </section>
  <nav class="navbar bg-light">
  <div class="container d-flex justify-content-center justify-content-sm-between">
    <div class="container-sm d-flex align-items-center">
      <a class="navbar-brand" href="<?= base_url() ?>">
        <img src="<?= base_url('assets/img/bg_header2.png') ?>" alt="Logo" width="100%" height="100" class="d-inline-block align-text-top banner">
      </a>
    </div>
    </div>
  </div>
</nav>

  <!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
  <div class="container d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-sm-between " style="background-color: #ffffff;">
      <!-- .navbar -->
      <nav id="navbar" class="navbar navbar-expand-lg" style="background-color: #ffffff;">
        <ul>
          <li><a class="nav-link scrollto active" href="<?= base_url() ?>">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="<?= base_url('page/visi-misi') ?>">Visi dan Misi</a></li>
                <li><a href="<?= base_url('page/tugas-fungsi') ?>">Fungsi dan Tugas</a></li>
                <li><a href="<?= base_url('page/sejarah') ?>">Sejarah</a></li>
              </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Prakiraan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url('page/prakicu') ?>">Prakiraan Cuaca</a></li>
              <li><a href="<?= base_url('page/prakicu-maritim') ?>">Prakiraan Cuaca Maritim</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?= base_url('page/kontak') ?>">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <!--- Searchbar-->
      <div class="position-relative">
        <form class="d-flex" role="search" method ="post" action="<?= base_url('search') ?>">
        <?= csrf_field() ?>
          <input class="form-control me-2" name="keyword" type="search" placeholder="Cari" aria-label="Search" required>
          <button class="btn btn-outline-success" type="submit">Cari</button>
        </form>
      </div>
      <!--- Searchbar-->
    </div>

  </div>
</header><!-- End Header -->

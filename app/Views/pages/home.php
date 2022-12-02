<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
 <!-- ======= Galeri Section ======= -->
 <section id="hero">
    <div id="heroCarousel" data-bs-interval="3000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(img/1.jpeg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang <span>di</span></h2>
              <h3 class="animate__animated animate__fadeInDown">Stasiun Meteorologi Tunggul Wulung <span>Cilacap</span></h3>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(img/2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 >Selamat Datang <span>di</span></h2>
              <h3 >Stasiun Meteorologi Tunggul Wulung <span>Cilacap</span></h3>
              <a href="#about" class="btn-get-started ">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 >Selamat Datang <span>di</span></h2>
              <h3 >Stasiun Meteorologi Tunggul Wulung <span>Cilacap</span></h3>
              <a href="#about" class="btn-get-started ">Read More</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End galeri section -->

<main id="main">

    <!-- ======= Prakiraan Cuaca ======= -->
    <section id="featured-services" class="featured-services section-bg" >
      <div class="container" >
        <main class="container border">
          <div class="row" style="padding: 10px;">
                  <div class="col-lg-8 col-md-12 mb-3">
                    <div class="section-title">
                      <h2>Prakiraan Cuaca Kecamatan Di Kabupaten Cilacap</h2>
                    </div>
                      <div class="swiper">
                        <div class="swiper-wrapper" id="forecast-slider" style="">
                          <!-- Slides Prakicu-->
                          <div class="swiper-slide card-forecast">
                            <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                            <div class="f-link"><a href="#">Selengkapnya</a></div>
                          </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-pagination"></div>
                      </div>
                    </div>
                    <!--------gempaaa-------------->
                    <div class="col-lg-4 col-md-12" style="text-align: justify;">
                      <div class="section-title">
                        <h2>Informasi Gempa Bumi Terkini</h2>
                      </div>
                      <div class="card-gempa">
                        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                      </div>
                      </div>
                      <!--------gempaaa-------------->
                      <div class="peringatan-dini-home owl-carousel-v1 md-margin-bottom-20">
                        <div class="clearfix row">
                          <div class="peringatan-dini-home-head col-md-2 no-padding">
                          <h4><span></span>Peringatan Dini</h4>
                          </div>
                          <div class="peringatan-dini-home-bg col-md-10">
                              <div class="owl-peringatan-dini">
                                <strong class="perdin-title"><?= $perdin->post_title ?></strong>
                                <span class="post-content"><?=$perdin->post_excerpt?></span>
                                <a href="<?=base_url('post/'.$perdin->post_name)?>" class='moree'> <i> Selengkapnya&rarr; </i></a>
                              </div>
                          </div>
                          </div>
                        </div>
                      </div>
            </div>
          </main>
        </div>
      </section>
      <!-- End Prakicu -->
    <!-- ======= Berita & Artikel Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Berita & Artikel</h2>
        </div>

        <div id="carouselExampleCaptions" class="carousel slide mb-0" data-bs-ride="true">
          <div class="carousel-indicators">
          <?php for($i=0;$i <= sizeof($featured);$i++):?>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?=$i?>" class="active width="100%" height="100%"" aria-current="true" aria-label="Slide <?=$i?>"></button>
          <?php endfor; ?>
          </div>
          <div class="carousel-inner" role="listbox">
            <?php 
            $i = 0;
            foreach($featured as $ft):
              if($ft->main_category != "Peringatan Dini" && $ft->main_category != "Uncategorized"):
            ?>
            <div class="carousel-item <?= $i==0 ? 'active':''?>" >
            <div class="carousel-container">
              <div class="container">
                <a href="<?= base_url('post/'.$ft->slug) ?>"> 
                <div class="carousel-filter"></div>
                  <img src="<?= $ft->thumbnail == null ? base_url('assets/img/no-image.png'):$ft->thumbnail ?>" class="d-block w-100 tales" alt="berita1">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="post-title"><b><?= $ft->post_title ?></b></h5>
                    <span class="post-content"><?= $ft->post_excerpt ?></span> 
                  </div>
                </a>
              </div>
            </div>
            </div>
            <?php 
              endif;
            $i++;
            endforeach; ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <hr style="border-width:0;color:rgb(255, 255, 255);background-color:rgb(255, 255, 255)">

  <div class="container border p-3">
    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2">
        <h6 class="mb-0"><b>Artikel</b></h6>
        <hr>
        <!----artikel 1-->
        <?php foreach($artikel as $ar): ?>
        <div class="row">
          <div class="col">
            <div class="well mb-3">
              <a href="<?=base_url('artikel/'.$ar->slug)?>">
              <h6 class="mb-1 post-title"><b><?=$ar->post_title?></b></h6>
              <small class="opacity-50 text-nowrap"><i><?= date_format(date_create(explode(" ",$ar->updated_at)[0]),"j F Y"); ?></i></small>
              </a>
              <p class="post-content"><?=$ar->post_excerpt?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <!--end artikel -->
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h6 class="mb-0"><b>Berita</b></h6>
        <hr>
        <!----berita -->
        <?php foreach($post as $p): ?>
        <div class="row">
          <div class="col-sm-3">
            <div class="well">
            <img src="<?=$p->thumbnail=="" ? base_url('assets/img/no-image.png'):$p->thumbnail ?>" class="thumbnail" width="55" alt="Avatar">
            </div>
          </div>
          <div class="col-sm-9">
            <div class="well mb-3">
              <a href="<?=base_url('post/'.$p->slug)?>">
              <h6 class="post-title"><b><?=$p->post_title?></b></h6>
              <small class="opacity-50 text-nowrap"><i><?= date_format(date_create(explode(" ",$p->updated_at)[0]),"j F Y"); ?></i></small>
              </a>
              <p class="post-content"><?=$p->post_excerpt?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
</section>
</main>

<!-- End #main -->
<?= $this->endSection() ?>
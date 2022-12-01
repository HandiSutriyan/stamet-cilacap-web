<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<section id="featured-services" class="featured-services section-bg" >
    <div class="container" >
        <main class="container border">
            <div class="row">
              <div class="col-md-8"> <!---bagian kiri------>
                <article class="blog-post">
                    <hr style="border-width:0;color:rgb(255, 255, 255);background-color:rgb(255, 255, 255)">
                    <div class="section-title">
                        <h2><?= $postdata->post_title?></h2>
                    </div> 
                    <small class="opacity-50 text-nowrap"><?= date_format(date_create(explode(" ",$postdata->updated_at)[0]),"j M Y"); ?> by <?= $post_author->display_name ?></small>
                    <hr style="border-width:0;color:rgb(255, 255, 255);background-color:rgb(255, 255, 255)">
                    <p><?= $postdata->post_content?></p>
                </article>
              </div>
              <!---bagian kanan-->
              <div class="col-md-4">
                <div class="p-4 mb-0 bg-light rounded">
                  <h4>Gempa Bumi Tekini</h4>
                  <hr>
                    <div class="card-gempa">
                      <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                    </div>
                </div>

                <div class="p-4 mb-3 bg-light rounded">
                    <h4 >Berita</h4>
                    <hr>
                    <div class="list-group w-auto">
                      <?php foreach($postFeed as $pf): ?>
                          <a href="<?= base_url('post/'.$pf->slug) ?>" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                            <img src="<?= $pf->thumbnail != "" ? $pf->thumbnail:base_url('assets/img/no-image.png') ?>" alt="twbs" width="110" height="70">
                            <div class="d-flex gap-2 w-100 justify-content-between">
                              <div>
                                <h6 class="mb-0"><?= $pf->title ?></h6>
                                <small class="opacity-50 text-nowrap"><?= date_format(date_create(explode(" ",$pf->updated_at)[0]),"j M Y"); ?></small>
                              </div>
                            </div>
                          </a>
                      <?php endforeach; ?>
                    </div>

                         <!---Artikel samping-->
                <div class="my-3 bg-light rounded">
                    <h4 >Artikel</h4>
                    <hr>
                    <div class="list-group w-auto">
                      <?php foreach($artikelFeed as $af): ?>
                          <a href="<?= base_url('artikel/'.$af->slug) ?>" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                          <img src="<?= $af->thumbnail != "" ? $pf->thumbnail:base_url('assets/img/no-image.png') ?>" alt="twbs" width="110" height="70">
                            <div class="d-flex gap-2 w-100 justify-content-between">
                              <div>
                                <h6 class="mb-0"><?= $af->title ?></h6>
                                <small class="opacity-50 text-nowrap"><?= date_format(date_create(explode(" ",$af->updated_at)[0]),"j M Y"); ?></small>
                              </div>
                            </div>
                          </a>
                      <?php endforeach; ?>
                    </div>
                  </div>
              </div>    
            </div>        
        </main>
    </div>
</section>
<?= $this->endSection() ?>
<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<section id="featured-services" class="featured-services section-bg" >
    <div class="container" >
        <main class="container border">
            <div class="row">
              <div class="col">
                <article class="blog-post">
                    <hr style="border-width:0;color:rgb(255, 255, 255);background-color:rgb(255, 255, 255)">
                    <div class="section-title">
                        <h2>Hasil Pencarian Anda</h2>
                    </div> 
                    <hr style="border-width:0;color:rgb(255, 255, 255);background-color:rgb(255, 255, 255)">
                    <div class="p-4 mb-3 bg-light rounded">
                    <small class="opacity-50 text-nowrap"><i>Terdapat (<?= sizeof($results) ?>) hasil pencarian dengan kata kunci "<?= $keyword ?>"</i></small>
                    <hr>
                    <div class="list-group w-auto">
                      <?php foreach($results as $res): ?>
                          <a href="<?= base_url('post/'.$res['post_name']) ?>" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                            <div class="d-flex gap-2 w-100 justify-content-between">
                              <div>
                                <h4 class="mb-0"><b><?= $res['post_title'] ?></b></h4>
                                <small class="opacity-50 text-nowrap"><?= date_format(date_create(explode(" ",$res['post_date'])[0]),"j M Y"); ?></small>
                                <p><?= $res['post_excerpt'] ?></p>
                              </div>
                            </div>
                          </a>
                      <?php endforeach; ?>
                    </div>
                    <div class="pagination text-center w-auto mt-2">
                        <!-- PAGINATION BUTTON -->
					    <?= $pager->links('results','custom-template') ?>  
                    </div>
                </article>
              </div>  
            </div>        
        </main>
    </div>
</section>
<?= $this->endSection() ?>
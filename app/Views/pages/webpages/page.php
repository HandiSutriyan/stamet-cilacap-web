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
                        <h2><?= $page->title?></h2>
                    </div> 
                    <hr style="border-width:0;color:rgb(255, 255, 255);background-color:rgb(255, 255, 255)">
                    <p><?= $page->content?></p>
                </article>
              </div>  
            </div>        
        </main>
    </div>
</section>
<?= $this->endSection() ?>
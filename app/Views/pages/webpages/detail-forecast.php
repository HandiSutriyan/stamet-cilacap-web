<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<section id="featured-services" class="featured-services section-bg" >
    <div class="container" >
        <main class="container border">
            <div class="row">
                <div class="section-title">
                    <h2>Detail Prakiraan Cuaca</h2>
                    <h3 id="kec-txt"></h3>
                </div>      
                   <!-- ======= Contact Section ======= -->
                <section id="tabel-cuaca">
                    <div class="container table-responsive">
                        <table class="table table-bordered">
                            <thead class="text-center">
                              <tr class="table-dark">
                                <th scope="col" rowspan="2">Waktu</th>
                                <th scope="col" rowspan="2">Cuaca</th>
                                <th scope="col" rowspan="2">Deskripsi</th>
                                <th scope="col" rowspan="2">Suhu Udara</th>
                                <th scope="col" rowspan="2">Kelembaban</th>
                                <th scope="col" colspan="2">Angin</th>
                              </tr>
                              <tr class="table-dark">
                                <th scope="col">Arah</th>
                                <th scope="col">Kecepatan</th>
                              </tr>
                            </thead>
                            <tbody class="text-center" id="fdetail">
                              <tr>
                                <td colspan="7"><i>Memuat data ...</i></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </section> 
            </div>               
        </main>
    </div>
</section>
<?= $this->endSection() ?>
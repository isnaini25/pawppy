<?php $this->extend('layout/layout-user'); ?>

<?php $this->section('content'); ?>



<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="row article-image">
                        <img src="/img/<?= $artikel['gambar']; ?>" alt="<?= $artikel['gambar']; ?>" class="rounded img-fluid mx-auto d-block">
                    </div>
                    <div class="row article-desc">
                        <h4><?= $artikel['judul']; ?></h4>
                        <span class="text-secondary">
                            <?= date_format(date_create($artikel['tanggal']), 'D, d M Y'); ?>
                        </span>
                    </div>
                    <div class="article-content">

                        <p><?= $artikel['teks']; ?></p>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <h2 class="section-title">Baca artikel lain</h2>
    <div class="row">

        <?php
        foreach ($rekomendasi as $r) : ?>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article article-style-b">
                    <div class="article-header">
                        <div class="article-image" data-background="/img/<?= $r['gambar']; ?>">
                        </div>
                        <!-- <div class="article-badge">
                        <div class="article-badge-item bg-danger"><i class="fas fa-fire"></i> Terbaru</div>
                    </div> -->
                    </div>
                    <div class="article-details">
                        <div class="article-category">
                            <a><?= $r['fullname']; ?></a>
                            <div class="bullet"></div>
                            <a href="#"><?= date_format(date_create($r['tanggal']), 'd/M/Y'); ?></a>
                        </div>
                        <div class="article-title">
                            <h2 data-toggle="tooltip" data-placement="left" title="<?= $r['judul']; ?>"><a href="<?= base_url('artikel-detail/' . $r['id_artikel']) ?>"><?php
                                                                                                                                                                        $judul = strip_tags($r['judul']);
                                                                                                                                                                        if (strlen($judul) > 50) {
                                                                                                                                                                            $stringCut = substr($judul, 0, 50);
                                                                                                                                                                            $endPoint = strrpos($stringCut, ' ');
                                                                                                                                                                            $judul = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                                                                                                                                            $judul .= '...';
                                                                                                                                                                        }
                                                                                                                                                                        echo $judul; ?>
                                </a></h2>
                        </div>
                        <p><?php
                            $teks = strip_tags($r['teks']);
                            if (strlen($teks) > 100) {
                                $stringCut = substr($teks, 0, 50);
                                $endPoint = strrpos($stringCut, ' ');
                                $teks = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                $teks .= '...';
                            }
                            echo $teks; ?> </p>
                        <div class="article-cta">
                            <a href="<?= base_url('artikel-detail/' . $r['id_artikel']) ?>" class="btn btn-primary">Read
                                More</a>
                        </div>
                    </div>
                </article>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<?php $this->endSection(); ?>
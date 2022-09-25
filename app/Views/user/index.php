<?php $this->extend('layout/layout-user'); ?>

<?php $this->section('content'); ?>



<div class="section-body">
    <?php if (session()->getFlashdata('warning')) : ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('warning'); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <?php
        $no = 1 + (10 * ($currentPage - 1));
        foreach ($artikel as $a) : ?>
            <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                    <div class="article-header">
                        <div class="article-image" data-background="/img/<?= $a['gambar']; ?>">
                        </div>
                        <!-- <div class="article-badge">
                        <div class="article-badge-item bg-danger"><i class="fas fa-fire"></i> Terbaru</div>
                    </div> -->
                    </div>
                    <div class="article-details">
                        <div class="article-category">
                            <a><?= $a['fullname']; ?></a>
                            <div class="bullet"></div>
                            <a href="#"><?= date_format(date_create($a['tanggal']), 'd/M/Y'); ?></a>
                        </div>
                        <div class="article-title">
                            <h2><a href="#"><?= $a['judul']; ?></a></h2>
                        </div>
                        <p><?php
                            $teks = strip_tags($a['teks']);
                            if (strlen($teks) > 100) {
                                $stringCut = substr($teks, 0, 100);
                                $endPoint = strrpos($stringCut, ' ');
                                $teks = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                $teks .= '...';
                            }
                            echo $teks; ?> </p>
                        <div class="article-cta">
                            <a href="<?= base_url('user/home/artikel/' . $a['id_artikel']) ?>" class="btn btn-primary">Read
                                More</a>
                        </div>
                    </div>
                </article>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<?= $pager->links('artikel', 'admin_pagination'); ?>

<?php $this->endSection(); ?>
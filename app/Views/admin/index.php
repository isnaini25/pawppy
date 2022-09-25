<?php $this->extend('layout/layout-admin'); ?>

<?php $this->section('content'); ?>



<div class="section-body">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Pengguna</h4>
                    </div>
                    <div class="card-body">
                        <?= $users; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Artikel</h4>
                    </div>
                    <div class="card-body">
                        <?= $artikel; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Diagnosis</h4>
                    </div>
                    <div class="card-body">
                        <?= $diagnosis; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-paw"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Penyakit</h4>
                    </div>
                    <div class="card-body">
                        <?= $penyakit; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-7 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Artikel Terbaru</h4>
                    <div class="card-header-action">
                        <a href="/admin/artikel" class="btn btn-primary">Lihat Semua</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Penulis</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($latestArtikel as $a) : ?>
                                    <tr>
                                        <td>
                                            <?= $a['judul']; ?>
                                            <div class="table-links">
                                                <a href="#"><?= date_format(date_create($a['created_at']), 'D, d M Y'); ?></a>
                                                <div class="bullet"></div>
                                                <a href="<?= base_url('admin/artikel/detail/' . $a['id_artikel']) ?>">Lihat</a>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="font-weight-600"><img src="/img/<?= $a['user_image']; ?>" alt="avatar" width="30" class="rounded-circle mr-1"><?= $a['fullname']; ?></a>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Diagnosis Terbaru</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled list-unstyled-border">
                        <?php
                        foreach ($latestDiagnosis as $d) : ?>
                            <li class="media">
                                <img class="mr-3 rounded-circle" width="50" height="50" src="/img/<?php if ($d['id_user'] == 0) {
                                                                                                        echo 'default.png';
                                                                                                    } else {
                                                                                                        echo $d['user_image'];
                                                                                                    }; ?>" alt="avatar">
                                <div class="media-body">
                                    <div class="float-right text-primary">
                                        <?= date_format(date_create($d['tanggal']), 'D, d M Y'); ?></div>
                                    <div class="media-title">
                                        <div><?php if ($d['id_user'] == 0) {
                                                    echo "Guest";
                                                } else {
                                                    echo $d['fullname'];
                                                }; ?><div>
                                                <span class="text-small"><?= $d['nama']; ?></span>
                                            </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="text-center pt-1 pb-1">
                        <a href="/admin/diagnosis" class="btn btn-primary btn-lg btn-round">
                            Lihat Semua
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $this->endSection(); ?>
<?php $this->extend('layout/layout-user'); ?>

<?php $this->section('content'); ?>

<div class="section-body" id="printArea">

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Gejala</h4>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>Gejala yang dialami</th>
                                    <th>Keterangan</th>
                                </tr>
                                <?php foreach ($gejala as $g) : ?>
                                <tr>
                                    <td><?= $g[0]; ?></td>
                                    <td><?php
                                            $val = [
                                                [0, 'Tidak'],
                                                [0.4, 'Kurang Yakin'],
                                                [0.8, 'Cukup Yakin'],
                                                [1, 'Yakin'],

                                            ];

                                            foreach ($val as $v) {
                                                if ($g[1] == $v[0]) {
                                                    echo $v[1];
                                                }
                                            }

                                            ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Diagnosis</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-12 col-sm-12">
                            <div class="chocolat-parent d-flex justify-content-center">
                                <a href="/img/<?= $hasilPenyakit['gambar']; ?>" class="chocolat-image"
                                    title="<?= $hasilPenyakit['gambar']; ?>">
                                    <div data-crop-image="200">
                                        <img alt="image" src="/img/<?= $hasilPenyakit['gambar']; ?>"
                                            class="img-fluid gambar-penyakit-detail">
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-lg-9 col-md-12 col-sm-12 mt-2">
                            <small>Penyakit kucing yang diderita adalah :</small>
                            <h5><?= $hasilPenyakit['nama'] . " " . $nilai * 100 . "%"; ?></h5>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div id="accordion">
                                <div class="accordion">
                                    <div class="accordion-header" role="button" data-toggle="collapse"
                                        data-target="#panel-body-1" aria-expanded="true">
                                        <h4>Penjelasan</h4>

                                    </div>
                                    <div class="accordion-body collapse show" id="panel-body-1"
                                        data-parent="#accordion">
                                        <b>Kenapa Penyakit <?= $hasilPenyakit['nama']; ?>?</b>
                                        <p>Kesimpulan penyakit <?= $hasilPenyakit['nama']; ?> adalah penyakit yang
                                            diderita kucing Anda
                                            karena gejala penyakit yang
                                            Anda pilih
                                            adalah gejala yang ada pada penyakit <?= $hasilPenyakit['nama']; ?>. </p>
                                        <p>Gejala <?= $hasilPenyakit['nama']; ?> : </p>

                                        <ul>
                                            <?php foreach ($gejalaPenyakit as $gp) : ?>
                                            <li><?= $gp['keterangan']; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>

                                <div class="accordion">
                                    <div class="accordion-header" role="button" data-toggle="collapse"
                                        data-target="#panel-body-1" aria-expanded="true">
                                        <h4>Deskripsi</h4>
                                    </div>
                                    <div class="accordion-body collapse show" id="panel-body-1"
                                        data-parent="#accordion">
                                        <p class="mb-0"><?= $hasilPenyakit['deskripsi']; ?></p>
                                    </div>
                                </div>

                                <div class="accordion">
                                    <div class="accordion-header" role="button" data-toggle="collapse"
                                        data-target="#panel-body-2" aria-expanded="true">
                                        <h4>Saran</h4>
                                    </div>
                                    <div class="accordion-body collapse show" id="panel-body-2"
                                        data-parent="#accordion">
                                        <p class="mb-0"><?= $hasilPenyakit['saran']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Kemungkinan Penyakit Lain</h4>
                </div>

                <div class="card-body">
                    <ul>
                        <?php if (isset($penyakitLain)) :
                            foreach ($penyakitLain as $p) : ?>
                        <li><?= $p[0] . " " . $p[1] * 100 . "%"; ?></li>
                        <?php
                            endforeach;
                        else : ?>
                        <p>Tidak ada</p>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<div id="btn-diagnosis">
    <a href="" id="print" class="btn btn-lg btn-danger"><i class="fas fa-print"></i> Cetak</a>
</div>



<?php $this->endSection(); ?>
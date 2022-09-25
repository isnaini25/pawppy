<?php $this->extend('layout/layout-admin'); ?>

<?php $this->section('content'); ?>


<div class="section-body">
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Detail Basis Pengetahuan</h4>

                    <div class="card-header-action">
                        <a href="<?= base_url('admin/basisPengetahuan/ubah/' . $basisPengetahuan['id_pengetahuan']) ?>" class="btn btn-warning">Ubah
                            <i class="far fa-edit"></i></a>
                        <a href="<?= base_url('admin/basisPengetahuan/hapus/' . $basisPengetahuan['id_pengetahuan']) ?>" class="btn btn-danger ml-4 tombol-hapus">Hapus <i class="far fa-trash-alt"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row ">
                        <div class="col-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="chocolat-parent d-flex justify-content-center">
                                <a href="/img/<?= $basisPengetahuan['gambar']; ?>" class="chocolat-image" title="<?= $basisPengetahuan['gambar']; ?>">
                                    <div data-crop-image="200">
                                        <img alt="image" src="/img/<?= $basisPengetahuan['gambar']; ?>" class="img-fluid gambar-penyakit-detail">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-6 col-md-6 col-sm-12">
                            <h6><?= $basisPengetahuan['nama']; ?></h6>
                            <div id="accordion">
                                <div class="accordion">
                                    <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-1" aria-expanded="true">
                                        <h4>Gejala</h4>
                                    </div>
                                    <div class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion">
                                        <p class="mb-0"><?= $basisPengetahuan['keterangan']; ?>
                                            <span class="badge badge-info ml-2">MB :
                                                <?= $basisPengetahuan['mb']; ?></span>
                                            <span class="badge badge-warning">MD :
                                                <?= $basisPengetahuan['md']; ?></span>
                                        </p>




                                    </div>

                                    <?php if (!empty($gejalaLain)) : ?>
                                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-2" aria-expanded="true">
                                            <h4>Gejala Lainnya</h4>
                                        </div>
                                        <div class="accordion-body collapse show" id="panel-body-2" data-parent="#accordion">
                                            <table id="table1" class="table table-bordered table-md">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>#</th>
                                                        <th>Gejala</th>
                                                        <th>MB</th>
                                                        <th>MD</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($gejalaLain as $g) : ?>

                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $g['keterangan']; ?></td>
                                                            <td><span class="badge badge-info">
                                                                    <?= $g['mb']; ?></span></td>
                                                            <td><span class="badge badge-warning">
                                                                    <?= $g['md']; ?></span></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>

                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2 mx-3 ">
                        <div class="col">

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
</div>


<?php $this->endSection(); ?>
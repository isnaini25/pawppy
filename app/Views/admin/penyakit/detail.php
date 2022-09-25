<?php $this->extend('layout/layout-admin'); ?>

<?php $this->section('content'); ?>



<div class="section-body">
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Detail Penyakit</h4>

                    <div class="card-header-action">
                        <a href="<?= base_url('admin/penyakit/ubah/' . $penyakit['id_penyakit']) ?>"
                            class="btn btn-warning">Ubah
                            <i class="far fa-edit"></i></a>
                        <a href="<?= base_url('admin/penyakit/hapus/' . $penyakit['id_penyakit']) ?>"
                            class="btn btn-danger ml-4 tombol-hapus">Hapus <i class="far fa-trash-alt"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row ">
                        <div class="col-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="chocolat-parent d-flex justify-content-center">
                                <a href="/img/<?= $penyakit['gambar']; ?>" class="chocolat-image"
                                    title="<?= $penyakit['gambar']; ?>">
                                    <div data-crop-image="200">
                                        <img alt="image" src="/img/<?= $penyakit['gambar']; ?>"
                                            class="img-fluid gambar-penyakit-detail">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-6 col-md-6 col-sm-12">
                            <h6><?= $penyakit['nama']; ?></h6>
                            <div id="accordion">
                                <div class="accordion">
                                    <div class="accordion-header" role="button" data-toggle="collapse"
                                        data-target="#panel-body-1" aria-expanded="true">
                                        <h4>Deskripsi</h4>
                                    </div>
                                    <div class="accordion-body collapse show" id="panel-body-1"
                                        data-parent="#accordion">
                                        <p class="mb-0"><?= $penyakit['deskripsi']; ?></p>
                                    </div>
                                </div>

                                <div class="accordion">
                                    <div class="accordion-header" role="button" data-toggle="collapse"
                                        data-target="#panel-body-2" aria-expanded="true">
                                        <h4>Saran</h4>
                                    </div>
                                    <div class="accordion-body collapse show" id="panel-body-2"
                                        data-parent="#accordion">
                                        <p class="mb-0"><?= $penyakit['saran']; ?></p>
                                    </div>
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
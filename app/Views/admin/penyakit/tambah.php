<?php $this->extend('layout/layout-admin'); ?>

<?php $this->section('content'); ?>



<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <form action="/admin/penyakit/simpan" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>

                        <div class="form-group">
                            <label>Nama Penyakit</label>
                            <input type="text"
                                class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?> "
                                name="nama" placeholder="Masukkan nama penyakit kucing" autofocus>
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="summernote textAreaPenyakit"
                                    name="deskripsi"><?= old('deskripsi'); ?></textarea>
                            </div>
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Saran Pertolongan Pertama</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="summernote textAreaPenyakit"
                                    name="saran"><?= old('saran'); ?></textarea>
                            </div>
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Gambar</label>
                            <input class="form-control <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?> "
                                type="file" id="gambar" name="gambar" onchange="previewImg()">

                            <div class="invalid-feedback">
                                <?= $validation->getError('gambar'); ?>
                            </div>
                            <small class="form-text text-muted">
                                Gambar berukuran maksimal 2 MB dengan ekstensi .png .jpeg .jpg
                            </small>
                            <div class="mt-3">
                                <img src="/img/default.png" class="img-thumbnail img-preview" alt="">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan</button>

                    </form>
                </div>
            </div>



        </div>
    </div>
</div>



<?php $this->endSection(); ?>
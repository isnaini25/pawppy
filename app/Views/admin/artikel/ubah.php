<?php $this->extend('layout/layout-admin'); ?>

<?php $this->section('content'); ?>



<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <form action="/admin/artikel/update/<?= $artikel['id_artikel']; ?>" method="POST"
                        enctype="multipart/form-data">
                        <?= csrf_field(); ?>

                        <input type="hidden" name="id_artikel" id="id_artikel"
                            value="<?= (old('id_artikel')) ? old('id_artikel') : $artikel['id_artikel']; ?>">
                        <input type="hidden" name="gambarLama" value="<?= $artikel['gambar']; ?>">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text"
                                    class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>"
                                    name="judul" value="<?= (old('judul')) ? old('judul') : $artikel['judul']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('judul'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Konten</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="summernote" name="teks"
                                    id="editorkonten"><?= (old('teks')) ? old('teks') : $artikel['teks']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                            <div class="col-sm-12 col-md-7">
                                <input
                                    class="form-control <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?> "
                                    type="file" id="gambar" name="gambar" onchange="previewImg()"
                                    accept="image/png, image/gif, image/jpeg">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('gambar'); ?>
                                </div>
                                <small class="form-text text-muted">
                                    Gambar berukuran maksimal 2 MB dengan ekstensi .png .jpeg .jpg
                                </small>
                                <div class="mt-3">
                                    <img src="/img/<?= (old('gambar')) ? old('gambar') : $artikel['gambar']; ?>"
                                        class="img-thumbnail img-preview" alt="">
                                </div>
                            </div>

                        </div>

                        <button class="btn btn-primary" type="submit" id="btnArtikel">Simpan Perubahan</button>

                    </form>
                </div>
            </div>



        </div>
    </div>
</div>



<?php $this->endSection(); ?>
<?php
if ($user['group_id'] == 1) {

    $this->extend('layout/layout-admin');
} else if ($user['group_id'] == 2) {

    $this->extend('layout/layout-user');
}
?>
<?php $this->section('content'); ?>



<div class="section-body">
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <form action="/profile/update/<?= $user['id']; ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>

                        <input type="hidden" name="id" value="<?= $user['id']; ?>">
                        <input type="hidden" name="gambarLama" value="<?= $user['user_image']; ?>">

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                            <div class="col-sm-12 col-md-7">

                                <div class="mb-3">
                                    <img src="/img/<?= $user['user_image']; ?>" class="img-thumbnail img-preview" alt="">
                                </div>
                                <input class="form-control <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?> " type="file" id="gambar" name="gambar" onchange="previewImg()" accept="image/x-png,image/jpeg">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('gambar'); ?>
                                </div>
                                <small class="form-text text-muted">
                                    Gambar berukuran maksimal 2 MB dengan ekstensi .png .jpeg .jpg
                                </small>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="nama" disabled value="<?= $user['username']; ?>">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Lengkap</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control <?= ($validation->hasError('fullname')) ? 'is-invalid' : ''; ?> " name="fullname" placeholder="Masukkan nama lengkap" autofocus value="<?= (old('fullname')) ? old('fullname') : $user['fullname']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('fullname'); ?>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?> " name="email" placeholder="Masukkan nama lengkap" value="<?= (old('email')) ? old('email') : $user['email']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <div class="col-6 col-sm-12 col-md-6">
                                <button class="btn btn-primary ml-4" type="submit">Simpan Perubahan</button>

                            </div>

                        </div>


                    </form>

                </div>
            </div>



        </div>
    </div>
</div>



<?php $this->endSection(); ?>
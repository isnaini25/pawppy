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
                    <?php if (session()->getFlashdata('message')) : ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('message'); ?>
                    </div>
                    <?php endif; ?>
                    <form action="/profile/changePassword/<?= $user['id']; ?>" method="POST"
                        enctype="multipart/form-data">
                        <?= csrf_field(); ?>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kata Sandi Baru</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="password"
                                    class="form-control <?= ($validation->hasError('new_password')) ? 'is-invalid' : ''; ?> "
                                    name="new_password" placeholder="Masukkan kata sandi baru" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('new_password'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ulangi Kata
                                Sandi</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="password"
                                    class="form-control <?= ($validation->hasError('repeat_password')) ? 'is-invalid' : ''; ?> "
                                    name="repeat_password" placeholder="Ulangi kata sandi baru">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('repeat_password'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kata Sandi</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="password"
                                    class="form-control <?= ($validation->hasError('current_password')) ? 'is-invalid' : ''; ?> "
                                    name="current_password" placeholder="Masukkan kata sandi saat ini">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('current_password'); ?>
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
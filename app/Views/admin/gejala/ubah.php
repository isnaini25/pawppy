<?php $this->extend('layout/layout-admin'); ?>

<?php $this->section('content'); ?>



<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <form action="/admin/gejala/update/<?= $gejala['id_gejala']; ?>" method="POST">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id_gejala" value="<?= $gejala['id_gejala']; ?>">
                        <div class="form-group">
                            <label>Keterangan Gejala</label>
                            <input type="text" class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?> " name="keterangan" placeholder="Masukkan keterangan gejala" autofocus value="<?= (old('keterangan')) ? old('keterangan') : $gejala['keterangan']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('keterangan'); ?>
                            </div>
                        </div>


                        <button class="btn btn-primary" type="submit">Simpan Perubahan</button>

                    </form>
                </div>
            </div>



        </div>
    </div>
</div>



<?php $this->endSection(); ?>
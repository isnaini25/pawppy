<?php $this->extend('layout/layout-admin'); ?>

<?php $this->section('content'); ?>



<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <form action="/admin/gejala/simpan" method="POST">
                        <?= csrf_field(); ?>

                        <div class="form-group">
                            <label>Keterangan Gejala</label>
                            <input type="text" class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?> " name="keterangan" placeholder="Masukkan keterangan gejala" autofocus>
                            <div class="invalid-feedback">
                                <?= $validation->getError('keterangan'); ?>
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
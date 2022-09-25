<?php $this->extend('layout/layout-admin'); ?>

<?php $this->section('content'); ?>


<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">

                    <h4><?= $artikel['judul']; ?> <span class="text-secondary"> <br>
                            <?= date_format(date_create($artikel['tanggal']), 'D, d M Y'); ?>
                        </span>
                    </h4>

                    <div class="card-header-action float-right">
                        <a href="<?= base_url('admin/artikel/ubah/' . $artikel['id_artikel']) ?>"
                            class="btn btn-warning">Ubah
                            <i class="far fa-edit"></i></a>
                        <a href="<?= base_url('admin/artikel/hapus/' . $artikel['id_artikel']) ?>"
                            class="btn btn-danger ml-4 tombol-hapus">Hapus <i class="far fa-trash-alt"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row article-image">
                        <img src="/img/<?= $artikel['gambar']; ?>" alt="<?= $artikel['gambar']; ?>"
                            class="rounded img-fluid mx-auto d-block">
                    </div>

                    <div class="article-content">

                        <p><?= $artikel['teks']; ?></p>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>


<?php $this->endSection(); ?>
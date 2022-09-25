<?php $this->extend('layout/layout-admin'); ?>

<?php $this->section('content'); ?>


<div class="section-body">
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Artikel</h4>
                    <div class="card-header-form">
                        <form action="/admin/artikel/index" method="POST">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari artikel.." name="keyword">
                                <div class="input-group-btn">
                                    <button name="cariartikel" class="btn btn-primary"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mt-2 ml-4">
                            <a href="/artikel/tambah" class="btn btn-primary">Tambah Artikel &nbsp; &nbsp;<i
                                    class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('message_artikel')) : ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('message_artikel'); ?>
                    </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table id="table1" class="table table-bordered table-md">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th width="400">Judul</th>
                                    <th>Gambar</th>
                                    <th width="200" colspan="2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1 + (10 * ($currentPage - 1));
                                foreach ($artikel as $a) : ?>
                                <tr>

                                    <td><?= $no++; ?></td>
                                    <td><span
                                            class="text-secondary"><?= date_format(date_create($a['tanggal']), 'D, d M Y'); ?>
                                        </span>
                                        <br><b><?= $a['judul']; ?></b>
                                    </td>
                                    <td>
                                        <div class="chocolat-parent">
                                            <a href="/img/<?= $a['gambar']; ?>" class="chocolat-image"
                                                title="<?= $a['gambar']; ?>">
                                                <div data-crop-image="100">
                                                    <img alt="image" src="/img/<?= $a['gambar']; ?>"
                                                        class="img-fluid gambar-penyakit">
                                                </div>
                                            </a>
                                        </div>

                                    </td>
                                    <td><a href="<?= base_url('admin/artikel/detail/' . $a['id_artikel']) ?>"
                                            class="btn btn-outline-primary">Detail</a></td>
                                    <td><a href="<?= base_url('admin/artikel/ubah/' . $a['id_artikel']) ?>"
                                            class="btn btn-warning"><i class="far fa-edit"></i></a>
                                        <a href="<?= base_url('admin/artikel/hapus/' . $a['id_artikel']) ?>"
                                            class="btn btn-danger ml-4 tombol-hapus" data-position="artikel"
                                            data-id="<?= $a['id_artikel']; ?>"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="card-footer text-right">

                    <?= $pager->links('artikel', 'admin_pagination'); ?>


                </div>
            </div>

        </div>
    </div>
</div>



<?php $this->endSection(); ?>
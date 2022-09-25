<?php $this->extend('layout/layout-admin'); ?>

<?php $this->section('content'); ?>


<div class="section-body">
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Gejala</h4>
                    <div class="card-header-form">
                        <form action="/admin/gejala/index" method="POST">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari gejala.." name="keyword">
                                <div class="input-group-btn">
                                    <button name="carigejala" class="btn btn-primary"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <div class="mt-2 ml-4">
                            <a href="/gejala/tambah" class="btn btn-primary">Tambah Gejala &nbsp; &nbsp;<i
                                    class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('message_gejala')) : ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('message_gejala'); ?>
                    </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tr class="text-center">
                                <th>#</th>
                                <th>Gejala</th>
                                <th width="200">Aksi</th>
                            </tr>
                            <?php
                            $no = 1 + (10 * ($currentPage - 1));
                            foreach ($gejala as $g) : ?>
                            <tr>

                                <td><?= $no++; ?></td>
                                <td><?= $g['keterangan']; ?></td>

                                <td><a href="<?= base_url('admin/gejala/ubah/' . $g['id_gejala']) ?>"
                                        class="btn btn-warning"><i class="far fa-edit"></i></a>
                                    <a href="<?= base_url('admin/gejala/hapus/' . $g['id_gejala']) ?>"
                                        class="btn btn-danger ml-4 tombol-hapus" data-position="gejala"
                                        data-id="<?= $g['id_gejala']; ?>"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">

                    <?= $pager->links('gejala', 'admin_pagination'); ?>

                </div>
            </div>

        </div>
    </div>
</div>



<?php $this->endSection(); ?>
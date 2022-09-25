<?php $this->extend('layout/layout-admin'); ?>

<?php $this->section('content'); ?>


<div class="section-body">
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Profile</h4>
                    <div class="card-header-form">
                        <form action="/admin/auth/index" method="POST">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari pengguna.." name="keyword">
                                <div class="input-group-btn">
                                    <button name="carigejala" class="btn btn-primary"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
                <!-- <div class="row">
                    <div class="col">
                        <div class="mt-2 ml-4">
                            <a href="/gejala/tambah" class="btn btn-primary">Tambah Gejala &nbsp; &nbsp;<i
                                    class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div> -->
                <div class="card-body">
                    <?php if (session()->getFlashdata('message_auth')) : ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('message_auth'); ?>
                    </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tr class="text-center">
                                <th>#</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Tanggal Daftar</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                            $no = 1 + (10 * ($currentPage - 1));
                            foreach ($profile as $p) : ?>
                            <tr>

                                <td><?= $no++; ?></td>
                                <td> <img alt="image" src="/img/<?= $p['user_image']; ?>" class="rounded-circle mr-1"
                                        width="40" height="40">
                                </td>
                                <td><?= $p['fullname']; ?></td>
                                <td><?= $p['username']; ?></td>
                                <td><?= $p['email']; ?></td>
                                <td>
                                    <?= date_format(date_create($p['created_at']), 'D, d M Y'); ?></td>
                                <td>
                                    <div class="badge badge-pill <?php if ($p['name'] == 'admin') {
                                                                            echo 'badge-primary';
                                                                        } else {
                                                                            echo 'badge-success';
                                                                        } ?> "><?= $p['description']; ?></div>
                                </td>
                                <td><?php if ($p['id'] != 1) { ?>
                                    <a href="#" class="btn btn-warning" id="change-role" data-id="<?= $p['id']; ?>">
                                        <i class="far fa-edit"></i></a>
                                    <?php }; ?>

                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">

                    <?= $pager->links('users', 'admin_pagination'); ?>

                </div>
            </div>

        </div>
    </div>
</div>



<?php $this->endSection(); ?>
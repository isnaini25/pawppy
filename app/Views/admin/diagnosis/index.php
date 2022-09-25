<?php $this->extend('layout/layout-admin'); ?>

<?php $this->section('content'); ?>


<div class="section-body">
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Diagnosis</h4>
                    <div class="card-header-form">
                        <form action="/admin/diagnosis/index" method="POST">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari diagnosis.." name="keyword">
                                <div class="input-group-btn">
                                    <button name="carigejala" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('message_diagnosis')) : ?>
                        <div class="alert alert-warning">
                            <?= session()->getFlashdata('message_diagnosis'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tr class="text-center">
                                <th>#</th>
                                <th>Hasil Diagnosis</th>
                                <th>Pengguna</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                            $no = 1 + (20 * ($currentPage - 1));
                            foreach ($diagnosis as $d) : ?>
                                <tr>

                                    <td><?= $no++; ?></td>
                                    <td><?php if ($d['id_user'] == 0) {
                                            echo "Guest";
                                        } else {
                                            echo $d['nama'];
                                        }; ?></td>
                                    <td><?php if ($d['id_user'] == 0) {
                                            echo "Guest";
                                        } else {
                                            echo $d['fullname'];
                                        }; ?></td>
                                    <td><?= date_format(date_create($d['tanggal']), 'D, d M Y'); ?></td>
                                    <td><a href="<?= base_url('admin/diagnosis/detail/' . $d['id_diagnosis']) ?>" class="btn btn-outline-primary">Detail</a></td>

                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>

                <div class="card-footer text-right">

                    <a class="btn btn-lg btn-danger" href="/diagnosis/laporan"><i class="fas fa-print"></i> Cetak
                        Laporan</a>

                    <?= $pager->links('diagnosis', 'admin_pagination'); ?>

                </div>
            </div>

        </div>
    </div>
</div>



<?php $this->endSection(); ?>
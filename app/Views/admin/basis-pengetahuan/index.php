<?php $this->extend('layout/layout-admin'); ?>

<?php $this->section('content'); ?>


<div class="section-body">
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Basis Pengetahuan</h4>
                    <div class="card-header-form">
                        <form action="/admin/basispengetahuan/index" method="POST">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari basis pengetahuan.."
                                    name="keyword">
                                <div class="input-group-btn">
                                    <button name="caripenyakit" class="btn btn-primary"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <div class="mt-2 ml-4">
                            <a href="/basispengetahuan/tambah" class="btn btn-primary">Tambah Basis Pengetahuan &nbsp;
                                &nbsp;<i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('message_basis')) : ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('message_basis'); ?>
                    </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table id="table1" class="table table-bordered table-md">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Penyakit</th>
                                    <th>Gejala</th>
                                    <th>Nilai CF</th>
                                    <th width="200">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $k = 0;
                                if (isset($first)) {

                                    $idLama = $first['id_penyakit'];
                                }

                                foreach ($group as $g) {

                                    $row[] = $g['jumlah'];
                                }

                                foreach ($basisPengetahuan as $b) :
                                ?>
                                <tr>
                                    <?php if ($idLama != $b['id_penyakit'] || $k == 0) {; ?>
                                    <td rowspan="<?= $row[$k]; ?>"><?= $no++; ?></td>
                                    <td rowspan="<?= $row[$k]; ?>"><?= $b['nama']; ?></td>
                                    <?php  }; ?>

                                    <td><?= $b['keterangan']; ?></td>
                                    <td><?= $b['cf']; ?></td>
                                    <?php if ($idLama != $b['id_penyakit'] || $k == 0) { ?>
                                    <td rowspan="<?= $row[$k]; ?>"><a
                                            href="<?= base_url('admin/basisPengetahuan/ubah/' . $b['id_penyakit']) ?>"
                                            class="btn btn-outline-primary">Detail</a>

                                        <a href="<?= base_url('admin/basisPengetahuan/deleteAll/' . $b['id_penyakit']) ?>"
                                            class="btn btn-danger ml-4 tombol-hapus" data-position="basisPengetahuan"
                                            data-id="<?= $b['id_penyakit']; ?>"><i class="far fa-trash-alt"></i></a>
                                    </td>

                                    <?php
                                            $k++;
                                        }; ?>
                                </tr>
                                <?php
                                    $idLama = $b['id_penyakit'];
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>



<?php $this->endSection(); ?>
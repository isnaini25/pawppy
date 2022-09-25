<?php $this->extend('layout/layout-user'); ?>

<?php $this->section('content'); ?>

<div class="section-body">

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="alert alert-danger alert-has-icon">
                <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                <div class="alert-body">
                    <div class="alert-title">Perhatian</div>
                    Silahkan memilih gejala sesuai dengan kondisi kucing Anda dengan menentukan nilai keyakinan gejala
                    tersebut
                    , jika sudah tekan tombol Proses Diagnosis di bawah untuk melihat
                    hasil.
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Gejala</h4>
                    <form class="card-header-form col-lg-6">
                        <div class="input-group">
                            <input type="text" name="gejalaInput" id="gejalaInput" class="form-control"
                                placeholder="Cari Gejala..">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-body">

                    <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                    <?php endif; ?>
                    <!-- <div class="table-responsive"> -->
                    <form action="/user/diagnosis/simpan" method="POST">

                        <table class="table table-striped table-md" id="daftarGejala">
                            <tr class="text-center header">
                                <th>#</th>
                                <th>Gejala</th>
                                <th>Pilih Kondisi</th>

                            </tr>
                            <?php
                            $no = 1;
                            foreach ($basisPengetahuan as $b) : ?>
                            <tr>

                                <td><?= $no++; ?></td>
                                <td><input type="hidden" name="id_gejala[]"
                                        value="<?= $b['id_gejala']; ?>"><?= $b['keterangan']; ?></td>
                                <td>


                                    <div class="form-group">

                                        <select class="form-control pilihkondisi" id="select<?= $no; ?>"
                                            data-id="<?= $no; ?>" name="nilai[]">
                                            <!-- <option value="0" data-id="0">Pilih jika sesuai</option> -->
                                            <?php for ($i = 0; $i < 4; $i++) {
                                                    $nilai = [1, 0.8, 0.4, 0];
                                                    $ket = [
                                                        'Yakin',
                                                        'Cukup Yakin',
                                                        'Kurang Yakin',
                                                        'Tidak Yakin'
                                                    ]; ?>
                                            <option value="<?= $nilai[$i]; ?>" data-id="<?= $i + 1; ?>" <?php if ($nilai[$i] == 0) {
                                                                                                                    echo 'selected';
                                                                                                                }; ?>>
                                                <?php

                                                        echo $ket[$i]; ?></option>

                                            <?php
                                                }; ?>
                                        </select>

                                    </div>


                                </td>

                            </tr>
                            <?php endforeach; ?>
                        </table>
                        <div id="btn-diagnosis">
                            <button class="btn btn-lg btn-primary"><i class="fas fa-paw"></i> Proses Diagnosis</button>
                        </div>

                    </form>
                    <!-- </div> -->
                </div>

            </div>

        </div>
    </div>
</div>



<?php $this->endSection(); ?>
<?php $this->extend('layout/layout-admin'); ?>

<?php $this->section('content'); ?>



<div class="section-body">
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <form action="/admin/basispengetahuan/update" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>

                        <input type="hidden" name="id_penyakit" id="id_penyakit"
                            value="<?= (old('id_penyakit')) ? old('id_penyakit') : $basisPengetahuan[0]['id_penyakit']; ?>">
                        <div class="form-group form-penyakit">
                            <label>Penyakit</label>
                            <input type="text"
                                class="form-control input-penyakit <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?> "
                                name="nama" placeholder="Masukkan penyakit kucing..." autofocus
                                onclick="modalpenyakit()" id="nama"
                                value="<?= (old('nama')) ? old('nama') : $basisPengetahuan[0]['nama']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                            <button class="btn btn-cari" type="button"><i class="fas fa-search"></i></button>
                        </div>

                        <div id="gejala-field">
                            <?php $no = 1; ?>
                            <?php foreach ($basisPengetahuan as $b) : ?>
                            <div class="row" id="row<?= $no; ?>">

                                <div class="col-lg-5 col-md-6 form-group form-penyakit ">
                                    <input type="hidden" name="id_pengetahuan[]" id="id_pengetahuan"
                                        value="<?= $b['id_pengetahuan']; ?>">
                                    <?php if ($no == 1) { ?><label class="mr-3 label-block">Gejala</label> <?php }; ?>
                                    <select class="form-control select2 pilih-gejala" name="gejala_old[]"
                                        id="gejala<?= $no; ?>">
                                        <?php
                                            foreach ($gejala as $g) : ?>
                                        <option value="<?= $g['id_gejala']; ?>" <?php if (old('gejala.0') == $g['id_gejala'] || $g['id_gejala'] == $b['id_gejala']) {
                                                                                            echo "selected";
                                                                                        }; ?>><?= $g['keterangan']; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="col-lg-5 col-md-6 form-group">
                                    <?php if ($no == 1) { ?> <label class="mr-3 label-block">Nilai
                                        Kepercayaan</label><?php }; ?>

                                    <select class="form-control" id="select<?= $no; ?>" data-id="<?= $no; ?>"
                                        name="nilai_old[]">
                                        <?php for ($i = 0; $i < 8; $i++) {
                                                $nilai = [-1, -0.8, -0.6, -0.4, 0.4, 0.6, 0.8, 1];
                                                $ket = [
                                                    'Pasti tidak',
                                                    'Hampir pasti tidak',
                                                    'Kemungkinan besar tidak',
                                                    'Mungkin tidak',
                                                    'Mungkin ya',
                                                    'Kemungkinan besar ya',
                                                    'Hampir  pasti ya',
                                                    'Pasti ya'
                                                ]; ?>
                                        <option value="<?= $nilai[$i]; ?>" <?php if (old('nilai.0') == $nilai[$i] || $nilai[$i] == $b['cf']) {
                                                                                        echo "selected";
                                                                                    }; ?> data-id="<?= $i + 1; ?>">
                                            <?php

                                                    echo $ket[$i]; ?></option>

                                        <?php
                                            }; ?>

                                    </select>

                                </div>



                                <div class="col-lg-2 form-group d-flex align-items-end">
                                    <?php if ($no == 1) { ?>
                                    <button class="btn btn-success mb-1 add" type="button"
                                        id="<?= sizeof($basisPengetahuan); ?>">+</button>
                                    <?php } else {; ?>
                                    <button class="btn btn-danger mb-1 remove" type="button" id="<?= $no; ?>"
                                        data-id="<?= $b['id_pengetahuan']; ?>">-</button>
                                    <?php
                                        }; ?>
                                </div>
                            </div>

                            <?php $no++;
                            endforeach; ?>

                            <?php if (old('gejala') && count(old('gejala')) > 1) :

                                for ($k = 1; $k < count(old('gejala')); $k++) { ?>
                            <div class="row" id="row<?= $k + 1; ?>">
                                <?php $no = 1; ?>
                                <div class="col-lg-5 col-md-6 form-group form-penyakit ">
                                    <select class="form-control select2 pilih-gejala" name="gejala[]"
                                        id="gejala<?= $no; ?>">
                                        <?php
                                                foreach ($gejala as $g) : ?>
                                        <option value="<?= $g['id_gejala']; ?>" <?php if (old('gejala.' . $k . '') == $g['id_gejala']) {
                                                                                                echo "selected";
                                                                                            }; ?>>
                                            <?= $g['keterangan']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="col-lg-5 col-md-6 form-group">
                                    <select class="form-control" id="select<?= $no; ?>" data-id="<?= $no; ?>"
                                        name="nilai[]">
                                        <?php for ($i = 0; $i < 8; $i++) {
                                                    $nilai = [-1, -0.8, -0.6, -0.4, 0.4, 0.6, 0.8, 1];
                                                    $ket = [
                                                        'Pasti tidak',
                                                        'Hampir pasti tidak',
                                                        'Kemungkinan besar tidak',
                                                        'Mungkin tidak',
                                                        'Mungkin ya',
                                                        'Kemungkinan besar ya',
                                                        'Hampir  pasti ya',
                                                        'Pasti ya'
                                                    ]; ?>
                                        <option value="<?= $nilai[$i]; ?>" <?php if (old('nilai.' . $k) == $nilai[$i]) {
                                                                                            echo "selected";
                                                                                        }; ?> data-id="<?= $i + 1; ?>">
                                            <?php

                                                        echo $ket[$i]; ?></option>

                                        <?php
                                                }; ?>

                                    </select>

                                </div>



                                <div class="col-lg-2 form-group d-flex align-items-end">
                                    <button class="btn btn-danger mb-1 remove" type="button"
                                        id="<?= $k + 1; ?>">-</button>
                                </div>
                            </div>

                            <?php };
                            endif; ?>
                        </div>


                        <button class="btn btn-primary" type="submit" id="submit-basis">Simpan Perubahan</button>

                    </form>


                </div>
            </div>


        </div>
    </div>

    <?php $this->endSection(); ?>
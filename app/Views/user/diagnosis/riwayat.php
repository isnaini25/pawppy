<?php $this->extend('layout/layout-user'); ?>

<?php $this->section('content'); ?>

<div class="section-body" id="printArea">

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <?php
                        foreach ($riwayat as $r) : ?>
                        <a href="<?= base_url('user/diagnosis/hasil/' . $r['id_diagnosis']) ?>"
                            class="list-group-item list-group-item-action">
                            <div class="text-secondary mb-2"><?= date_format(date_create($r['created_at']), 'd/M/Y'); ?>
                            </div> <?= $r['nama']; ?>
                        </a>
                        <?php endforeach; ?>

                    </div>
                </div>

            </div>
        </div>
    </div>





    <?php $this->endSection(); ?>
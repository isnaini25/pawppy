<?php $this->extend('layout/layout-admin'); ?>

<?php $this->section('content'); ?>



<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div
                    class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <img src="/img/logo.png" alt="logo" width="100">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <a href="/" class="btn"><i class="fas fa-arrow-left"></i></a>
                            <h4><?= $title; ?></h4>
                        </div>

                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <div class="card-body">
                            <form action="<?= route_to('register') ?>" method="post">
                                <?= csrf_field() ?>


                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input id="username" type="username"
                                        class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>"
                                        name="username" value="<?= old('username') ?>">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email"
                                        class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                        name="email" value="<?= old('email') ?>">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Kata Sandi</label>
                                        <div class="input-group">
                                            <input id="password" type="password"
                                                class="form-control pwstrength <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                                data-indicator="pwindicator" name="password" autocomplete="off">
                                            <span class="input-group-append icon-password">
                                                <div class="input-group-text bg-transparent "
                                                    style="border-radius: 0 4px 4px 0;">
                                                    <i class="fas fa-eye-slash" id="togglePassword"></i>
                                                </div>
                                            </span>
                                            <!-- <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Ulangi Kata Sandi</label>
                                        <div class="input-group">
                                            <input id="password2" type="password"
                                                class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                                name="pass_confirm" autocomplete="off">
                                            <span class="input-group-append icon-password">
                                                <div class="input-group-text bg-transparent "
                                                    style="border-radius: 0 4px 4px 0;">
                                                    <i class="fas fa-eye-slash" id="togglePassword2"></i>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-12">
                                        <p>Ketentuan Kata Sandi</p>
                                        <ul>
                                            <li>Kata sandi lebih dari 8 karakter</li>
                                            <li>Kata sandi tidak mengandung informasi pribadi seperti nama, email, atau
                                                username
                                            </li>
                                            <li>Kata sandi tidak boleh berupa kata sandi umum</li>
                                        </ul>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Daftar
                                    </button>
                                </div>
                                <div class="mt-5 text-center">
                                    Sudah punya akun? <a href="/login">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Pawppy 2022
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->endSection(); ?>
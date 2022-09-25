<?php $this->extend('layout/layout-admin'); ?>

<?php $this->section('content'); ?>


<div id="app">
    <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                <div class="p-4 m-3">
                    <div class="d-flex justify-content-between">
                        <a href="/" class="btn"><i class="fas fa-arrow-left"></i></a>
                        <img src="/img/logo.png" alt="logo" width="80" class=" mb-5 mt-2 mr-0">
                    </div>
                    <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Pawppy</span>
                    </h4>
                    <p class="text-muted">Sebelum memulai, Anda harus login atau mendaftar jika Anda belum memiliki
                        akun.</p>
                    <?= view('Myth\Auth\Views\_message_block') ?>
                    <form action="<?= route_to('login') ?>" method="post">
                        <?= csrf_field() ?>
                        <?php if ($config->validFields === ['email']) : ?>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" tabindex="1" required autofocus>
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" tabindex="1" required autofocus value="<?= old('login'); ?>">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">Kata Sandi</label>
                            </div>
                            <div class="input-group">
                                <input id="password" type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" tabindex="2" required>
                                <span class="input-group-append icon-password">
                                    <div class="input-group-text bg-transparent " style="border-radius: 0 4px 4px 0;">
                                        <i class="fas fa-eye-slash" id="togglePassword"></i>
                                    </div>
                                </span>
                                <div class="invalid-feedback">
                                    <?= session('errors.password') ?>
                                </div>
                            </div>

                        </div>

                        <?php if ($config->allowRemembering) : ?>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                    <label class="custom-control-label" for="remember-me">Ingat Saya</label>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="form-group text-right">
                            <?php if ($config->activeResetter) : ?>
                                <a href="/forgot" class="float-left mt-3">
                                    Lupa Kata Sandi?
                                </a>
                            <?php endif; ?>
                            <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                                Login
                            </button>
                        </div>
                        <?php if ($config->allowRegistration) : ?>
                            <div class="mt-5 text-center">
                                Belum punya akun? <a href="/register">Buat sekarang</a>
                            </div>
                            <div class="mt-5 text-center">
                                <a href="/user/diagnosis">Diagnosis tanpa login</a>
                            </div>
                        <?php endif; ?>
                    </form>

                    <div class="text-center mt-5 text-small">
                        Copyright &copy; Pawppy 2022
                        <!-- <div class="mt-2">
                            <a href="#">Privacy Policy</a>
                            <div class="bullet"></div>
                            <a href="#">Terms of Service</a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="/img/pexels/login-bg.jpg" style="object-fit: cover;">
                <div class="absolute-bottom-left index-2">
                    <div class="text-light p-5 pb-2">
                        <div class="mb-5 pb-3">
                            <?php date_default_timezone_set("Asia/Jakarta");
                            $Hour = date('G');
                            $greeting = '';
                            if ($Hour >= 5 && $Hour <= 11) {
                                $greeting = "Selamat Pagi";
                            } else if ($Hour >= 12 && $Hour <= 18) {
                                $greeting = "Selamat Siang";
                            } else if ($Hour >= 19 || $Hour <= 4) {
                                $greeting = "Selamat Malam";
                            }
                            ?>
                            <h1 class="mb-2 display-4 font-weight-bold"><?= $greeting; ?></h1>
                            <?php
                            $query = @unserialize(file_get_contents('http://ip-api.com/php/'));
                            if ($query && $query['status'] == 'success') {
                                $country = $query['country'];
                                $city = $query['city'];
                            } else {
                                $country = 'Indonesia';
                                $city = '';
                            };
                            ?>
                            <h5 class="font-weight-normal text-muted-transparent"><?= $city . ', ' . $country; ?></h5>
                        </div>
                        Photo by <a class="text-light bb" target="_blank" href="https://www.pexels.com/photo/mid-coated-brown-cat-982865/">Alena Koval </a> on <a class="text-light bb" target="_blank" href="https://pexels.com">Pexels</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->endSection(); ?>
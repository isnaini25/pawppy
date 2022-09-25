<?= $this->include('layout/header'); ?>

<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <a href="/" class="navbar-brand sidebar-gone-hide">Pawppy</a>
                <div class="navbar-nav">
                    <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
                </div>
                <!-- <div class="nav-collapse">
                    <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <ul class="navbar-nav">


                    </ul>
                </div> -->
                <form class="form-inline ml-auto" action="<?php if (logged_in()) {
                                                                echo "/user/home/index";
                                                            } else {
                                                                echo "/user/artikel/index";
                                                            } ?>" method="POST">
                    <?php if ($title == 'Home' || $title == "Artikel") : ?>
                        <ul class="navbar-nav">
                            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                        </ul>
                        <div class="search-element">
                            <input class="form-control" type="search" placeholder="Cari artikel.." name="keyword" aria-label="Search" data-width="250">
                            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            <div class="search-backdrop"></div>


                        </div>
                    <?php endif; ?>
                </form>
                <ul class="navbar-nav navbar-right">
                    <!-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Messages
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-message">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle">
                                        <div class="is-online"></div>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Kusnaedi</b>
                                        <p>Hello, Bro!</p>
                                        <div class="time">10 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle">
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Dedik Sugiharto</b>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="../assets/img/avatar/avatar-3.png" class="rounded-circle">
                                        <div class="is-online"></div>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Agung Ardiansyah</b>
                                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle">
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Ardian Rahardiansyah</b>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                        <div class="time">16 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle">
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Alfa Zulkarnain</b>
                                        <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                        <div class="time">Yesterday</div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li> -->
                    <!-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Notifications
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-icon bg-primary text-white">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Template update is available now!
                                        <div class="time text-primary">2 Min Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-info text-white">
                                        <i class="far fa-user"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                                        <div class="time">10 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-success text-white">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-danger text-white">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Low disk space. Let's clean it!
                                        <div class="time">17 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-info text-white">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Welcome to Stisla template!
                                        <div class="time">Yesterday</div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li> -->
                    <?php if (logged_in()) { ?>
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <img alt="image" src="/img/<?= user()->user_image; ?>" style="width:40px;
  height:40px;
  object-fit:cover;
  border-radius:50%;">
                                <div class="d-sm-none d-lg-inline-block">Hi, <?= user()->username; ?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- <div class="dropdown-title">Logged in 5 min ago</div> -->
                                <a href="/profile/index" class="dropdown-item has-icon">
                                    <i class="far fa-user"></i> Profile
                                </a>
                                <a href="/profile/password" class="dropdown-item has-icon">
                                    <i class="fas fa-key"></i> Ubah Kata Sandi
                                </a>
                                <!-- <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a> -->
                                <div class="dropdown-divider"></div>
                                <a href="<?= base_url('logout'); ?>" class="dropdown-item has-icon text-danger">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                            </div>
                        </li>
                    <?php } else {; ?>

                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-sm-none d-lg-inline-block" data-toggle="tooltip" data-placement="left" title="Masuk untuk menyimpan riwayat diagnosis"> <i class="far fa-user"></i> Masuk</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- <div class="dropdown-title">Logged in 5 min ago</div> -->
                                <a href="/login" class="dropdown-item has-icon">
                                    <i class="fas fa-sign-in-alt"></i> Masuk
                                </a>
                                <a href="/register" class="dropdown-item has-icon">
                                    <i class="fas fa-user-plus"></i>Daftar
                                </a>

                            </div>
                        </li>
                    <?php
                    }; ?>
                </ul>
            </nav>

            <nav class="navbar navbar-secondary navbar-expand-lg">
                <div class="container">
                    <ul class="navbar-nav">
                        <?php if (logged_in()) { ?>
                            <li class="nav-item <?php if ($title == 'Home') {
                                                    echo 'active';
                                                }; ?>">
                                <a href="/home" class="nav-link"><i class="fas fa-home"></i><span>
                                        Home</span></a>
                            </li>
                            <li class="nav-item <?php if ($title == 'Diagnosis') {
                                                    echo 'active';
                                                }; ?>">
                                <a href="/user/diagnosis" class="nav-link"><i class="fas fa-stethoscope"></i><span>
                                        Diagnosis</span></a>
                            </li>
                            <li class="nav-item <?php if ($title == 'Riwayat') {
                                                    echo 'active';
                                                }; ?>">
                                <a href="/user/riwayat" class="nav-link"><i class="fas fa-paw"></i><span>Riwayat
                                        Diagnosis</span></a>
                            </li>


                        <?php } else {  ?>
                            <li class="nav-item">
                                <a href="/" class="nav-link"><i class="fas fa-arrow-left"></i><span>
                                        Kembali</span></a>
                            </li>
                            <li class="nav-item <?php if ($title == 'Artikel') {
                                                    echo 'active';
                                                }; ?>">
                                <a href="/artikel" class="nav-link"><i class="fas fa-newspaper"></i><span>
                                        Artikel</span></a>
                            </li>
                            <li class="nav-item <?php if ($title == 'Diagnosis') {
                                                    echo 'active';
                                                }; ?>">
                                <a href="/user/diagnosis" class="nav-link"><i class="fas fa-stethoscope"></i><span>
                                        Diagnosis</span></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

            </nav>

            <!-- Main Content -->
            <div class="main-content">

                <section class="section">

                    <?php if ($title != 'Artikel Detail') : ?>
                        <div class="section-header">
                            <?php if (logged_in()) { ?>
                                <h1><?= $title; ?><?php if ($title == 'Riwayat Diagnosis') {
                                                        echo " — " . date_format(date_create($hasilPenyakit['created_at']), 'd M Y');
                                                    } ?>
                                </h1>

                                <div class="section-header-breadcrumb">
                                    <?php if ($title != 'Home') : ?>
                                        <div class="breadcrumb-item active"><a href="/">Home</a></div>
                                    <?php endif; ?>

                                    <?php if (!empty($parent)) : ?>
                                        <div class="breadcrumb-item active"><a href="<?= base_url() . '/user/' . str_replace(' ', '', strtolower($parent)); ?>"><?= $parent; ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="breadcrumb-item"><?= $title; ?></div>
                                </div>
                            <?php } else {; ?>
                                <h1><?= $title; ?></h1>

                                <div class="section-header-breadcrumb">


                                    <?php if (!empty($parent)) : ?>
                                        <div class="breadcrumb-item active"><a href="<?= base_url() . '/user/' . str_replace(' ', '', strtolower($parent)); ?>"><?= $parent; ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="breadcrumb-item"><?= $title; ?></div>
                                </div>
                            <?php }; ?>
                        </div>
                    <?php endif; ?>



                    <?= $this->renderSection('content'); ?>
                </section>
            </div>


            <?= $this->include('layout/footer'); ?>
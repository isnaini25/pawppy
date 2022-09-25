<?= $this->include('layout/header'); ?>


<body>
    <div id="app">
        <div class="main-wrapper">
            <?php if (logged_in(false)) : ?>

            <?= $this->include('layout/navbar'); ?>
            <?= $this->include('layout/sidebar'); ?>



            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1><?= $title; ?></h1>
                        <div class="section-header-breadcrumb">
                            <?php if ($title != 'Dashboard') : ?>
                            <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
                            <?php endif; ?>

                            <?php if (!empty($parent)) : ?>
                            <div class="breadcrumb-item active"><a
                                    href="<?= base_url() . '/admin/' . str_replace(' ', '', strtolower($parent)); ?>"><?= $parent; ?></a>
                            </div>
                            <?php endif; ?>
                            <div class="breadcrumb-item"><?= $title; ?></div>
                        </div>
                    </div>

                    <?php endif; ?>
                    <?= $this->renderSection('content'); ?>

                </section>
            </div>



            <?= $this->include('layout/footer'); ?>
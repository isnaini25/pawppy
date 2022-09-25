<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $title; ?> </title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <link rel="icon" type="image/x-icon" href="/img/logo-2.png">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/chocolat/dist/css/chocolat.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/selectric/public/selectric.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">

    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/custom.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/components.css">


    <!-- &mdash; -->
</head>
<?php

if (!logged_in()) {
    return redirect()->to('home/login');
};

?>
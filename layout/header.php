<?php

require_once('../function/helper.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IkhlasXYZ</title>
    <link rel="icon" href="<?= BASE_URL . '/img/icon/ikhlas-icon.svg' ?>">
    <link rel="stylesheet" href="<?= BASE_URL . '/style/bootstrap/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?= BASE_URL . '/style/style.css' ?>">
</head>

<body>
    <!-- HEADER -->
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <div class="container-xxl mx-auto p-0 position-relative header-2-1" style="font-family: 'Poppins', sans-serif">
            <!-- NAVIGASI -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="<?= BASE_URL ?>" target="_blank" class="brand-name">
                    <h1>IkhlasXYZ</h1>
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content bg-white border-0">
                            <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                                <a class="modal-title" id="targetModalLabel" class="brand-name" style="text-decoration: none; color: #2C92D5">
                                    <h1>IkhlasXYZ</h1>
                                </a>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="<?= BASE_URL ?>">Beranda</a>


                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= BASE_URL . '/pages/tabel-harga.php' ?>">Harga</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= BASE_URL . '/pages/tempat-wisata.php' ?>">Tempat Wisata</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= BASE_URL . '/pages/grafik.php' ?>">Grafik</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= BASE_URL . '/pages/kontak.php' ?>">Kontak</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
                                <button class="btn btn-fill text-white btn-login">
                                    Log In
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= BASE_URL ?>">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL . '/pages/tabel-harga.php' ?>">Harga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL . '/pages/tempat-wisata.php' ?>">Tempat Wisata</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL . '/pages/grafik.php' ?>">Grafik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL . '/pages/kontak.php' ?>">Kontak</a>
                        </li>
                    </ul>
                    <div class="gap-3">
                        <button class="btn btn-default btn-no-fill">Daftar</button>
                        <button class="btn btn-fill text-white btn-login">Masuk</button>
                    </div>
                </div>
            </nav>
        </div>
    </section>
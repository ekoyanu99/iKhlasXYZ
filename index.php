<?php

require_once('function/helper.php')

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
            <!-- KOLOM -->
            <div>
                <div class="mx-auto d-flex flex-lg-row flex-column hero">
                    <!-- Left Column -->
                    <div class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
                        <p class="text-caption"></p>
                        <h1 class="title-text-big">
                            Cepat, nyaman dan aman untuk liburan anda
                        </h1>
                        <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">

                            <button class="btn d-inline-flex mb-md-0 btn-try text-white btn-pesan">
                                <a href="<?= BASE_URL . '/pages/form-pemesanan.php' ?>" class="pesan-tiket">
                                    Pesan Tiket
                                </a>
                            </button>

                        </div>
                    </div>
                    <!-- Right Column -->
                    <div class="header-home right-column text-center d-flex justify-content-center pe-0">
                        <img id="img-fluid" class="h-auto mw-100" src="<?= BASE_URL . '/img/unggulan/ikhlas_header.jpg' ?>" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN -->
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <div class="content-2-1 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="text-center title-text">
                <h1 class="text-title">Pilihan Unggulan Tempat Wisata</h1>
                <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
                    Anda bisa memilih tempat wisata sesuai keinginan
                </p>
            </div>

            <div class="grid-padding text-center">
                <div class="row">
                    <div class="col-lg-4 column">
                        <div class="icon icon-pointer">
                            <img src="./img/unggulan/beach-umbrella.svg" alt="" srcset="">
                        </div>
                        <h3 class="icon-title">Pantai Widuri</h3>
                        <p class="icon-caption">
                            Pantai ini menjadi pantai dengan jarak paling
                            dekat dengan pusat kota. Hanya berjarak 3,4 km dari Alun-Alun
                            Pemalang dan dapat ditempuh dengan waktu hanya sekitar 7 menit saja.
                        </p>
                    </div>
                    <div class="col-lg-4 column">
                        <div class="icon icon-pointer">
                            <img src="./img/unggulan/swimming-pool.svg" alt="" srcset="">
                        </div>
                        <h3 class="icon-title">Kali Suci Moga</h3>
                        <p class="icon-caption">
                            Fasilitas di area pemandian ini masih sangat terbatas. Sarana pendukung
                            baru sebatas penyewaan ban. Ruang ganti masih seadanya serta toilet
                            yang masih sederhana. Tidak ada looker penyimpanan barang.
                        </p>
                    </div>
                    <div class="col-lg-4 column">
                        <div class="icon icon-pointer">
                            <img src="./img/unggulan/rafting.svg" alt="" srcset="">
                        </div>
                        <h3 class="icon-title">Rainbow Rafting</h3>
                        <p class="icon-caption">
                            Jarak atau track untuk rafting di Rainbow Rafting ada dua pilihan yaitu
                            sepanjang 6 km menjelajahi 18 jeram dengan waktu tempuh 1,5 jam dan 9 km
                            menjelajahi 27 jeram yang memakan waktu kurang lebih dua jam.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <div class="content-2-1 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="card-block">
                <div class="card">
                    <div class="d-flex flex-lg-row flex-column align-items-center">
                        <div class="me-lg-3">
                            <img src="./img/tiket.png" alt="tiket diskon" width="150px" />
                        </div>
                        <div class="flex-grow-1 text-lg-start text-center card-text">
                            <h3 class="card-title">
                                Dapatkan Promo <br />Spesial Awal Tahun hingga 30%
                            </h3>
                            <p class="card-caption">
                                Dapatkan promo spesial awal tahun untuk liburan anda
                                kemanapun seluruh wilayah Pemalang, promo berlaku tanggal 22 - 31
                                Januari 2023.
                            </p>
                        </div>
                        <div class="card-btn-space">
                            <button class="btn btn-card text-white btn-pesan-skrg">
                                <a href="<?= BASE_URL . '/pages/form-pemesanan.php' ?>" class="pesan-tiket-promo">
                                    Pesan Sekarang
                                </a>
                            </button>
                            <button class="btn btn-outline">Ingatkan nanti</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <div class="footer-2-1 container-xxl mx-auto position-relative p-0" style="font-family: 'Poppins', sans-serif">
            <div class="list-footer">
                <div class="row gap-md-0 gap-3 justify-content-between">
                    <div class="col-lg-3 col-md-6">
                        <div class="">
                            <div class="list-space">
                                <h3 style="color: #2C92D5">IkhlasXYZ</h3>
                            </div>
                            <nav class="list-unstyled">
                                <li class="list-space">
                                    <a href="<?= BASE_URL ?>" class="list-menu">Beranda</a>
                                </li>
                                <li class="list-space">
                                    <a href="<?= BASE_URL . '/pages/tabel-harga.php' ?>" class="list-menu">Harga</a>
                                </li>
                                <li class="list-space">
                                    <a href="<?= BASE_URL . '/pages/tempat-wisata.php' ?>" class="list-menu">Tempat Wisata</a>
                                </li>
                                <li class="list-space">
                                    <a href="<?= BASE_URL . '/pages/grafik.php' ?>" class="list-menu">Grafik</a>
                                </li>
                                <li class="list-space">
                                    <a href="<?= BASE_URL . '/pages/kontak.php' ?>" class="list-menu">Kontak</a>
                                </li>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h2 class="footer-text-title">Company</h2>
                        <nav class="list-unstyled">
                            <li class="list-space">
                                <a href="" class="list-menu">Contact Us</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Blog</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Culture</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Security</a>
                            </li>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h2 class="footer-text-title">Support</h2>
                        <nav class="list-unstyled">
                            <li class="list-space">
                                <a href="" class="list-menu">Getting Started</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Help Center</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">FAQ</a>
                            </li>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="border-color info-footer">
                <div class="">
                    <hr class="hr" />
                </div>
                <div class="mx-auto d-flex flex-column flex-lg-row align-items-center footer-info-space gap-4">
                    <div class="d-flex title-font font-medium align-items-center gap-4">
                        <a href="">
                            <img src="<?= BASE_URL . '/img/icon/fb-icon.svg' ?>" alt="fb-icon">
                        </a>
                        <a href="">
                            <img src="<?= BASE_URL . '/img/icon/twitter-icon.svg' ?>" alt="twitter-icon">
                        </a>
                        <a href="">
                            <img src="<?= BASE_URL . '/img/icon/ig-icon.svg' ?>" alt="ig-icon">
                        </a>
                    </div>
                    <nav class="mx-auto d-flex flex-wrap align-items-center justify-content-center gap-4">
                        <a href="" class="footer-link" style="text-decoration: none">Terms of Service</a>
                        <span>|</span>
                        <a href="" class="footer-link" style="text-decoration: none">Privacy Policy</a>
                        <span>|</span>
                        <a href="" class="footer-link" style="text-decoration: none">License</a>
                    </nav>
                    <nav class="d-flex flex-lg-row flex-column align-items-center justify-content-center">
                        <p style="margin: 0">Copyright © 2023 Yanuarso</p>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <script src="<?= BASE_URL . '/style/bootstrap/js/bootstrap.js' ?>"></script>
</body>

</html>
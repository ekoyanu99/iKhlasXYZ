<?php include '../layout/header.php' ?>

    <!-- MAIN -->
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <div class="content-2-1 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
            <?php
            //koneksi db dengan localhost
            $conn_db = mysqli_connect("localhost", "root", "", "db_ikhlas");
            //script query
            $query = "SELECT * FROM pengunjung_wisata";
            //melakukan query data dari db
            $result = mysqli_query($conn_db, $query);

            $rows = [];

            //memecah data menjadi array asosiatif
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }

            //store data untuk grafik dari db
            $data = array();
            foreach ($rows as $p) {
                if (!isset($data[$p['tempat_wisata']])) {
                    $data[$p['tempat_wisata']] = 0;
                }
                $data[$p['tempat_wisata']] += $p['pengunjung_dewasa'] + $p['pengunjung_anak'];
            }

            ?>


            <div class="container mt-5 mb-5 border rounded-3 p-4 shadow-lg container-mobile" style="width: 90%">
                <canvas id="myChart">

                </canvas>
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


    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script src="<?= BASE_URL . '/style/bootstrap/js/bootstrap.js' ?>"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode(array_keys($data)); ?>,
                datasets: [{
                    label: 'Jumlah Pengunjung',
                    data: <?php echo json_encode(array_values($data)); ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>
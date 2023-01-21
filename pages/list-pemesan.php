<?php include '../layout/header.php' ?>

    <!-- MAIN -->
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <div class="container">
            <div class="container mt-5 mb-5 border rounded-3 p-4 shadow-lg container-mobile" style="width: 90%">
                <h3>Daftar Pesanan</h3></br>
                
                <!-- script untuk menampilkan daftar pesanan -->
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

                //melakukan pengulangan untuk menampilkan data
                $i = 1;
                foreach ($rows as $p) {
                    echo        "<ul class='list-group'>";
                    echo          "<li class='list-group-item active' aria-current='true'><strong>NOMOR PEMESANAN</strong> : 0" . $i;
                    " </li>";
                    echo          "<li class='list-group-item'><strong>NAMA PEMESAN</strong>             :</br> " . $p['nama_pemesan'];
                    " </li>";
                    echo          "<li class='list-group-item'><strong>NOMOR IDENTITAS (NIK)</strong>    :</br> " . $p['nomor_identitas'];
                    " </li>";
                    echo          "<li class='list-group-item'><strong>NO. HP</strong>                   :</br> 0" . $p['no_hp'];
                    " </li>";
                    echo          "<li class='list-group-item'><strong>TEMPAT WISATA</strong>          :</br> " . $p['tempat_wisata'];
                    " </li>";
                    echo          "<li class='list-group-item'><strong>TANGGAL KEBERANGKATAN</strong>    :</br> " . $p['tgl_kunjungan'];
                    " </li>";
                    echo          "<li class='list-group-item'><strong>JUMLAH PENUGUNJUNG</strong>         :</br> " . $p['pengunjung_dewasa'];
                    " </li>";
                    echo          "<li class='list-group-item'><strong>JUMLAH PENGUNJUNG ANAK</strong>  :</br>(Khusus pengunjung anak diberikan diskon 50%)</br> " . $p['pengunjung_anak'];
                    " </li>";
                    echo          "<li class='list-group-item'><strong>HARGA TIKET</strong>              :</br> " . $p['harga_tiket'];
                    " </li>";
                    echo          "<li class='list-group-item'><strong>TOTAL BAYAR</strong>              :</br> " . $p['total_bayar'];
                    " </li>";
                    echo        "</ul></br></br>";
                    $i++;
                }
                ?>
            </div>
            <div class="container mt-5 mb-5 p-4 container-mobile" style="width: 90%">
                <a class="btn btn-warning" href="<?= BASE_URL . '/pages/form-pemesanan.php' ?>" role="button">Pesan Tiket</a>
            </div>
        </div>
    </section>

<?php include '../layout/footer.php' ?>
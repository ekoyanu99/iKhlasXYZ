<?php include '../layout/header.php' ?>

    <!-- MAIN -->
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <div class="container">
            <div class="container mt-5 mb-5 border rounded-3 p-4 shadow-lg container-mobile" style="width: 90%">
                <h3>Form Pemesanan Tiket</h3></br>
                <form class="mt-4" method="post" action="form-pemesanan.php">
                    <!-- nama -->
                    <div class="mb-4">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama-pemesan" placeholder="Eko Yanuarso Budi" required />
                    </div>
                    <!-- nik -->
                    <div class="mb-4">
                        <label for="noid" class="form-label">Nomor Identitas (KTP)</label>
                        <input type="int" class="form-control" id="noid" name="nomor-identitas" placeholder="3301234567892432" required maxlength="16" />
                        <div id="emailHelp" class="form-text">
                            Pastikan NIK berjumlah 16 digit
                        </div>
                    </div>
                    <!-- no. hp -->
                    <div class="mb-4">
                        <label for="nohp" class="form-label">No. HP</label>
                        <input type="number" class="form-control" id="nohp" name="no-hp" placeholder="082356497401" required />
                    </div>
                    <!-- tempat wisata -->
                    <div class="mb-4">
                        <label for="tempat" class="form-label">Tempat Wisata</label><br />
                        <select id="tempat" class="form-select form-select-sm" aria-label=".form-select-sm example" name="tempat-wisata">
                            <option selected>--Pilih tempat wisata--</option>
                            <option value="Widuri">Pantai Widuri</option>
                            <option value="Waterboom">Waterboom Zatobay</option>
                            <option value="Tangkeban">Bukit Tangkeban</option>
                            <option value="Rafting">Rainbow Rafting</option>
                            <option value="Benowo">Benowo Park</option>
                        </select>
                    </div>
                    <!-- tanggal kunjungan -->
                    <div class="mb-4">
                        <label for="tanggalkunjung" class="form-label">Tanggal Kunjungan</label>
                        <input type="date" class="form-control" id="tanggalkunjung" name="tanggal-kunjungan" style="width: 42%" required />
                    </div>
                    <!-- jumlah pengunujung -->
                    <div class="mb-4">
                        <label for="jpengunjung" class="form-label">Jumlah Pengunjung</label>
                        <input type="number" class="form-control" id="jpengunjung" placeholder="Jumlah pengunjung dewasa (lebih dari 12 tahun)" name="jumlah-pengunjung" required />
                    </div>
                    <!-- jumlah pengunjung anak -->
                    <div class="mb-4">
                        <label for="jpengunjung-anak" class="form-label">Jumlah Pengunjung Anak</label>
                        <input type="number" class="form-control" id="jpengunjung-anak" placeholder="Jumlah pengunjung anak (kurang dari 12 tahun)" name="jumlah-pengunjung-anak" required />
                        <div id="emailHelp" class="form-text">
                            Khusus pengunjung anak akan diberikan diskon 50%
                        </div>
                    </div>
                    <hr size="6" width="100%" align="left" color="darkblue">
                    <!-- script untuk memproses pesanan -->
                    <?php
                    // import fungsi dari file function
                    require('../function/function.php');
                    //memeriksa apakah tombol hitung sudah ditekan
                    if (isset($_POST['hitung-total-bayar'])) {
                        // inisialisasi variabel
                        $nama_pemesan = $_POST['nama-pemesan'];
                        $nomor_identitas = $_POST['nomor-identitas'];
                        $no_hp = $_POST['no-hp'];
                        $tempat_wisata = $_POST['tempat-wisata'];
                        $tanggal_kunjungan = $_POST['tanggal-kunjungan'];
                        $total_non_anak = $_POST['jumlah-pengunjung'];
                        $total_anak = $_POST['jumlah-pengunjung-anak'];

                        //menentukan harga tiket berdasarkan tempat wisata
                        if ($tempat_wisata === 'Widuri') {
                            $harga_tiket = 10000;
                            $harga_tiket_str = 'Rp. ' . number_format($harga_tiket, 0, ',', '.');
                        } elseif ($tempat_wisata === 'Waterboom') {
                            $harga_tiket = 25000;
                            $harga_tiket_str = 'Rp. ' . number_format($harga_tiket, 0, ',', '.');
                        } elseif ($tempat_wisata === 'Tangkeban') {
                            $harga_tiket = 10000;
                            $harga_tiket_str = 'Rp. ' . number_format($harga_tiket, 0, ',', '.'); 
                        } elseif ($tempat_wisata === 'Rafting') {
                            $harga_tiket = 110000;
                            $harga_tiket_str = 'Rp. ' . number_format($harga_tiket, 0, ',', '.'); 
                        } elseif ($tempat_wisata === 'Benowo') {
                            $harga_tiket = 3000;
                            $harga_tiket_str = 'Rp. ' . number_format($harga_tiket, 0, ',', '.'); 
                        } else {
                            $harga_tiket = 000000;
                        }
                        //menampilkan harga tiket sesuai dengan tempat wisata
                        echo "<label class='form-label'>Harga Tiket Wisata " . $tempat_wisata . " : <span name='harga-tiket'>" . $harga_tiket_str . "</span></label>";
                        //menginisialisasi variabel hasil dari perhitungan
                        $hasil_total_pembayaran = 'Rp. ' . number_format(hitungTotalBayar($total_non_anak, $total_anak, $harga_tiket, 0.5), 0, ',', '.');
                        echo "<br/><br/>";
                        //menampilkan total bayar sesuai dengan tempat wisata
                        echo "<label class='form-label'>Total Pembayaran : <span name='total-bayar'>" . $hasil_total_pembayaran . "</span></label>";

                        echo "<script>";
                        echo   "alert('Total pembayaran anda di Wisata $tempat_wisata sebesar : $hasil_total_pembayaran');";
                        echo "</script>";
                    } //memeriksa apakah tombol pesan-tiket sudah ditekan
                    elseif (isset($_POST['pesan-tiket'])) {

                        // inisialisasi variabel
                        $nama_pemesan = $_POST['nama-pemesan'];
                        $nomor_identitas = $_POST['nomor-identitas'];
                        $no_hp = $_POST['no-hp'];
                        $tempat_wisata = $_POST['tempat-wisata'];
                        $tanggal_kunjungan = $_POST['tanggal-kunjungan'];
                        $total_non_anak = $_POST['jumlah-pengunjung'];
                        $total_anak = $_POST['jumlah-pengunjung-anak'];

                        //menentukan harga tiket berdasarkan tempat wisata
                        if ($tempat_wisata === 'Widuri') {
                            $harga_tiket = 10000;
                            $harga_tiket_str = 'Rp. ' . number_format($harga_tiket, 0, ',', '.');
                        } elseif ($tempat_wisata === 'Waterboom') {
                            $harga_tiket = 25000;
                            $harga_tiket_str = 'Rp. ' . number_format($harga_tiket, 0, ',', '.');
                        } elseif ($tempat_wisata === 'Tangkeban') {
                            $harga_tiket = 10000;
                            $harga_tiket_str = 'Rp. ' . number_format($harga_tiket, 0, ',', '.'); 
                        } elseif ($tempat_wisata === 'Rafting') {
                            $harga_tiket = 110000;
                            $harga_tiket_str = 'Rp. ' . number_format($harga_tiket, 0, ',', '.'); 
                        } elseif ($tempat_wisata === 'Benowo') {
                            $harga_tiket = 3000;
                            $harga_tiket_str = 'Rp. ' . number_format($harga_tiket, 0, ',', '.'); 
                        } else {
                            $harga_tiket = 000000;
                        }
                        //menampilkan harga tiket sesuai dengan tempat wisata
                        echo "<label class='form-label'>Harga Tiket Wisata " . $tempat_wisata . " : <span name='harga-tiket'>" . $harga_tiket_str . "</span></label>";
                        //menginisialisasi variabel hasil dari perhitungan
                        $hasil_total_pembayaran = 'Rp. ' . number_format(hitungTotalBayar($total_non_anak, $total_anak, $harga_tiket, 0.5), 0, ',', '.');
                        echo "<br/><br/>";
                        //menampilkan total bayar sesuai dengan tempat wisata
                        echo "<label class='form-label'>Total Pembayaran : <span name='total-bayar'>" . $hasil_total_pembayaran . "</span></label>";

                        function alert($tempat_wisata, $hasil_total_pembayaran)
                        {
                            echo " <script>
                alert(`Total yang harus dibayarkan pada wisata $tempat_wisata : $hasil_total_pembayaran.`);
              </script>";
                        };

                        alert($tempat_wisata, $hasil_total_pembayaran);

                        // cek apakah data berhasil ditambahkan atau tidak
                        if (tambah($_POST, $harga_tiket_str, $hasil_total_pembayaran) > 0) {
                            echo "<script>
                  alert('Data pesanan berhasil disimpan.');
                </script>";
                        } else {
                            echo "<script>
                  alert('Data gagal disimpan.');
                </script>";
                        }
                    } else {
                        $harga_tiket_str = 0;
                        $hasil_total_pembayaran = 0;

                        echo "<label for='hargatiket' class='form-label'>Harga Tiket : " . $harga_tiket_str . "</label>";
                        echo "<br/><br/>";
                        echo "<label class='form-label'>Total Pembayaran : <span name='total-bayar'>" . $hasil_total_pembayaran . "</span></label>";
                    }
                    ?>
                    <br />
                    <!-- checkbox persetujuan -->
                    <hr size="6" width="100%" align="left" color="darkblue">
                    <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input" id="persetujuan" name="persetujuan" required />
                        <label class="form-check-label" for="persetujuan">Saya dan/atau rombongan telah membaca, memahami, dan setuju
                            berdasarkan syarat dan ketentuan yang telah ditetapkan</label>
                    </div>

                    <!-- tombol-tombol -->
                    <button type="submit" class="btn btn-primary mb-3 ms-1 btn-bawah" name="hitung-total-bayar">
                        Hitung Total Bayar
                    </button>
                    <button type="submit" class="btn btn-primary mb-3 ms-4 btn-bawah" name="pesan-tiket">
                        Pesan Tiket
                    </button>
                    <a class="btn btn-warning mb-3 ms-4 btn-bawah" href="<?php $_SERVER['PHP_SELF']; ?>" role="button" name="batal">Batal</a>
                </form>
                <br>
            </div>
            <div class="container mt-5 mb-5 p-4 container-mobile" style="width: 90%">
                <a class="btn btn-warning" href="<?= BASE_URL . '/pages/list-pemesan.php' ?>" role="button">Our Costumer</a>
            </div>
        </div>
    </section>

<?php include '../layout/footer.php' ?>
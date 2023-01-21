<?php include '../layout/header.php' ?>

    <!-- MAIN -->
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <div class="container">
            
            <h3>Daftar Harga Tiket Masuk</h3>
            <br />
            <table class="table table-striped table-hover border border-1 rounded tabel-harga shadow-sm">
                <tr>
                    <th>No.</th>
                    <th>Nama Tempat</th>
                    <th>Harga Tiket</th>
                </tr>

                <!-- mengakses database untuk menampilkan daftar wisata -->
                <?php require('../function/function.php'); ?>
                <?php $wisatas = query("SELECT * FROM daftar_wisata ORDER BY id DESC"); ?>
                <?php $i = 1; ?>
                <?php foreach ($wisatas as $wisata) : ?>

                    <tr>
                        <th><?= $i; ?></th>
                        <td><?= $wisata['nama_tempat']; ?></td>
                        <td><?= "Rp. " . number_format($wisata['harga_tiket'], 0, ',', '.'); ?></td>
                    </tr>

                    <?php $i++; ?>
                <?php endforeach; ?>

            </table>
            <br />
            <a class="btn btn-warning" href="<?= BASE_URL . '/pages/form-pemesanan.php' ?>" role="button">Pesan Tiket</a>
        </div>
    </section>

<?php include '../layout/footer.php' ?>
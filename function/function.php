<?php
// variabel koneksi database
$conn_db = mysqli_connect("localhost", "root", "", "db_ikhlas");

// fungsi untuk melakukan query menampilkan seluruh data
function query($query){
    //global berfungsi untuk mengakses variabel diluar blok fungsi
    global $conn_db;

    $result = mysqli_query($conn_db, $query);

    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}
// fungsi untuk menambahkan data ke database
function tambah($data, $harga_tiket_str, $hasil_total_pembayaran){
    global $conn_db;
    // data dari form dimasukan ke dalam variabel dan difilter dengan method
    $nama_pemesan = htmlSpecialChars($data['nama-pemesan']);
    $nomor_identitas = htmlSpecialChars($data['nomor-identitas']);
    $no_hp = htmlSpecialChars($data['no-hp']);
    $tempat_wisata = htmlSpecialChars($data['tempat-wisata']);
    $tanggal_kunjungan = htmlSpecialChars($data['tanggal-kunjungan']);
    $total_non_anak = htmlSpecialChars($data['jumlah-pengunjung']);
    $total_anak = htmlSpecialChars($data['jumlah-pengunjung-anak']);
    $harga_tiket_str;
    $hasil_total_pembayaran;

    // query insert data
    $query = "INSERT INTO pengunjung_wisata 
    VALUES
    ('', '$nama_pemesan','$nomor_identitas','$no_hp','$tempat_wisata','$tanggal_kunjungan','$total_non_anak','$total_anak','$harga_tiket_str','$hasil_total_pembayaran')";
    
    mysqli_query($conn_db, $query);

    // mengembalikan jika data berhasil masuk ke db akan menghasilkan 1, jika tidak -1
    return mysqli_affected_rows($conn_db);
}
//hitung total bayar berdasarkan tempat
function hitungTotalBayar($dewasa,$anak,$hargaTiket,$diskon ){
    $bayar_dewasa =  $dewasa*$hargaTiket;
    $bayar_anak = $anak*$hargaTiket*$diskon;
    $total_pembayaran = $bayar_dewasa+$bayar_anak;

    return $total_pembayaran;
}
?>
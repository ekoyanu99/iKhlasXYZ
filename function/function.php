<?php
// variabel koneksi database
$conn_db = mysqli_connect("localhost", "root", "", "db_ikhlas");

// fungsi untuk melakukan query menampilkan seluruh data mahasiswa
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
    $nama_lengkap = htmlSpecialChars($data['nama-lengkap']);
    $nomor_identitas = htmlSpecialChars($data['nomor-identitas']);
    $no_hp = htmlSpecialChars($data['no-hp']);
    $kelas_penumpang = htmlSpecialChars($data['kelas-penumpang']);
    $tanggal_keberangkatan = htmlSpecialChars($data['tanggal-keberangkatan']);
    $total_non_anak = htmlSpecialChars($data['jumlah-penumpang']);
    $total_anak = htmlSpecialChars($data['jumlah-penumpang-anak']);
    $harga_tiket_str;
    $hasil_total_pembayaran;

    // query insert data
    $query = "INSERT INTO penumpang_bus 
    VALUES
    ('', '$nama_lengkap','$nomor_identitas','$no_hp','$kelas_penumpang','$tanggal_keberangkatan','$total_non_anak','$total_anak','$harga_tiket_str','$hasil_total_pembayaran')";
    
    mysqli_query($conn_db, $query);

    // mengembalikan jika data berhasil masuk ke db akan menghasilkan 1, jika tidak -1
    return mysqli_affected_rows($conn_db);
}
//hitung total bayar berdasarkan kelas penumpang
function hitungTotalBayar($nonAnak,$anak,$hargaTiket,$diskon ){
    $bayar_non_anak =  $nonAnak*$hargaTiket;
    $bayar_anak = $anak*$hargaTiket*$diskon;
    $total_pembayaran = $bayar_non_anak+$bayar_anak;

    return $total_pembayaran;
}
?>
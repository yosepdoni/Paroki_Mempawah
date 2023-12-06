<?php 
// koneksi database
include '../koneksi.php';

// Menangkap data yang dikirim dari form
$id_user = $_POST['id_user'];
$nama_baptis = $_POST['nama'];
$tanggal_lahir = $_POST['tgl_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$alamat = $_POST['alamat'];
$telp =  "+62" . $_POST['telepon'];

// Lakukan pengecekan apakah id_user sudah terdaftar di tabel katekumen
$check_query = mysqli_query($conn, "SELECT id_user FROM katekumen WHERE id_user = '$id_user'");

if (mysqli_num_rows($check_query) > 0) {
    // id_user sudah terdaftar di tabel katekumen
    echo "<script>alert('anda sudah terdaftar sebagai katekumen!'); window.location.href='../index.php?p=katekumen'</script>";
}if (!preg_match("/^\+628[1-9][0-9]+$/", $telp) || strlen($telp) < 14 || strlen($telp) > 15) {
    echo "<script>alert('Nomor telepon tidak valid');window.location.href='../index.php?p=katekumen'</script>"; 
}else {
    // id_user belum terdaftar di tabel katekumen
    // Lakukan penambahan data ke tabel katekumen
    mysqli_query($conn,"INSERT INTO katekumen VALUES ('','$id_user','$nama_baptis','$tanggal_lahir','$tempat_lahir','$alamat','$telp')");

    // Lakukan penambahan data ke tabel presensi
    mysqli_query($conn, "INSERT INTO presensi (id_user) VALUES ('$id_user')");

    // Mengalihkan halaman kembali ke index.php
    echo "<script>alert('Pendaftaran katekumen berhasil disimpan'); window.location.href='../index.php?p=katekumen'</script>";
}
?>

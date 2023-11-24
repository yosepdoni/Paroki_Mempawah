<?php 
// koneksi database
include '../koneksi.php';

// Menangkap data yang dikirim dari form
$jenis_baptis = 'dewasa';
$nama_baptis = $_POST['nama'];
$tanggal_lahir = $_POST['tgl_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$alamat = $_POST['alamat'];
$telp = $_POST['telepon'];

// Mengambil data file gambar
$gambar = $_FILES['gambar'];
$gambarName = $gambar['name'];
$gambarTmpName = $gambar['tmp_name'];

// Direktori penyimpanan gambar
$uploadDir = '../uploads/';

// Memindahkan gambar ke direktori penyimpanan
move_uploaded_file($gambarTmpName, $uploadDir . $gambarName);

// Memasukkan data ke database
mysqli_query($conn,"insert into baptis values('','$jenis_baptis','$nama_baptis','$tanggal_lahir','$tempat_lahir', '','$alamat','$telp', '$gambarName','')");

// Mengalihkan halaman kembali ke index.php
echo "<script>alert('Pendaftaran berhasil disimpan'); window.location.href='../index.php?p=baptis_dewasa'</script>";
?>

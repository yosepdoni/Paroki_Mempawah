<?php 
// koneksi database
include '../koneksi.php';

// Menangkap data yang dikirim dari form
$id_user = $_POST['id_user'];
$nama_baptis = $_POST['nama'];
$tanggal_lahir = $_POST['tgl_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$alamat = $_POST['alamat'];
$telp = $_POST['telepon'];

// Mengambil data file gambar
// Direktori penyimpanan gambar
// Memindahkan gambar ke direktori penyimpanan
// Memasukkan data ke database
mysqli_query($conn,"insert into katekumen values('','$id_user','$nama_baptis','$tanggal_lahir','$tempat_lahir','$alamat','$telp')");

mysqli_query($conn, "INSERT INTO presensi (id_user) 
                    VALUES ('$id_user')");
// Mengalihkan halaman kembali ke index.php
echo "<script>alert('Pendaftaran katekumen berhasil disimpan'); window.location.href='../index.php?p=katekumen'</script>";
?>


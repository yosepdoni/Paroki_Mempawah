<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$nama_baptis = $_POST['nama'];
$tanggal_lahir = $_POST['tgl_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$nama_orang_tua = $_POST['nama_orang_tua'];
$alamat = $_POST['alamat'];
$telp = $_POST['telepon'];
$tgl_baptis = $_POST['tgl_baptis'];
$katekumen = $_POST['katekumen'];

 
// menginput data ke database
mysqli_query($conn,"insert into jadwal values('','$nama_baptis','$tanggal_lahir','$tempat_lahir','$nama_orang_tua','$alamat','$telp','$tgl_baptis','$katekumen')");
 
// mengalihkan halaman kembali ke index.php
echo "<script>alert('Data Berhasil Dimasukan'); window.location.href='../index.php?p=form_jadwal'</script>";
 
?>  
<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$jenis_baptis = 'bayi';
$nama_baptis = $_POST['nama'];
$tanggal_lahir = $_POST['tgl_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$nama_orang_tua = $_POST['nama_ortu'];
$alamat = $_POST['alamat'];
$telp = $_POST['telepon'];
 
// menginput data ke database
mysqli_query($conn,"insert into baptis values('','$jenis_baptis','$nama_baptis','$tanggal_lahir','$tempat_lahir','$nama_orang_tua', '$alamat', '$telp','','')");
 
// mengalihkan halaman kembali ke form baptis bayi.php
echo "<script>alert('Pendaftaran berhasil disimpan'); window.location.href='../index.php?p=baptis_bayi'</script>";

 
?>  
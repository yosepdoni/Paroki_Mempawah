<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_user = $_POST['id_user'];
$nama_baptis = $_POST['nama'];
$tanggal_lahir = $_POST['tgl_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$alamat = $_POST['alamat'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$telp = $_POST['telepon'];
// $akta = $_POST['akta'];
// $surat_nikah = $_POST['surat_nikah'];


// Mengambil data file gambar
$gambar = $_FILES['gambar'];
$gambarName = $gambar['name'];
$gambarTmpName = $gambar['tmp_name'];

// Direktori penyimpanan gambar
$uploadDir = '../uploads/';

// Memindahkan gambar ke direktori penyimpanan
move_uploaded_file($gambarTmpName, $uploadDir . $gambarName);


 
// menginput data ke database
mysqli_query($conn,"insert into baptis values('','$id_user','$nama_baptis','$tanggal_lahir','$tempat_lahir','$alamat','$nama_ayah','$nama_ibu','$telp','$gambarName','')");
 
// mengalihkan halaman kembali ke form baptis bayi.php
echo "<script>alert('Pendaftaran berhasil disimpan'); window.location.href='../index.php?p=baptis_bayi'</script>";

 
?>  
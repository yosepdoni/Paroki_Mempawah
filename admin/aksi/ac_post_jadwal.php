<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$hari = $_POST['hari'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$perayaan = $_POST['perayaan'];
$keterangan = $_POST['ket'];

 
// menginput data ke database
mysqli_query($conn,"insert into jadwal values('','$hari','$tanggal','$waktu','$perayaan','$keterangan')");
 
// mengalihkan halaman kembali ke index.php
echo "<script>alert('Data Berhasil Dimasukan'); window.location.href='../index.php?p=form_jadwal'</script>";
 
?>  
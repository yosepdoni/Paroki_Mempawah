<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$hari = $_POST['hari'];
$tgl = $_POST['tgl'];
$waktu = $_POST['waktu'];
$tempat = $_POST['tempat'];
$perayaan = $_POST['perayaan'];
$pastor = $_POST['pastor'];

 
// menginput data ke database
mysqli_query($conn,"insert into jadwal values('','$hari','$tgl','$waktu','$tempat','$perayaan','$pastor')");
 
// mengalihkan halaman kembali ke index.php
echo "<script>alert('Data Berhasil Dimasukan'); window.location.href='../index.php?p=form_jadwal'</script>";
 
?>  
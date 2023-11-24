<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$hari = $_POST['hari'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$perayaan = $_POST['perayaan'];
$keterangan = $_POST['ket'];

// update data ke database
mysqli_query($conn,"UPDATE jadwal SET hari='$hari', tgl='$tanggal', waktu='$waktu', perayaan='$perayaan', ket='$keterangan' where id='$id'");

echo "<script>alert('Data berhasil diupdate'); window.location.href='../index.php?p=jadwal'</script>";
?>
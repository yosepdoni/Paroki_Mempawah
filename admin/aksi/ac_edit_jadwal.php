<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id_jadwal = $_POST['id_jadwal'];
$hari = $_POST['hari'];
$tanggal = $_POST['tgl'];
$waktu = $_POST['waktu'];
$tempat = $_POST['tempat'];
$perayaan = $_POST['perayaan'];
$pastor = $_POST['pastor'];

// update data ke database
mysqli_query($conn,"UPDATE jadwal SET hari='$hari', tgl='$tanggal', waktu='$waktu', tempat='$tempat', perayaan='$perayaan', pastor='$pastor' 
where id_jadwal='$id_jadwal'");

echo "<script>alert('Data berhasil diupdate'); window.location.href='../index.php?p=jadwal'</script>";
?>
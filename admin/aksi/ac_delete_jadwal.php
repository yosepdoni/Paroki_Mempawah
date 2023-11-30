
<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$result = $_GET['id'];

// menghapus data dari database
mysqli_query($conn,"delete from jadwal where id_jadwal='$result'");

echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php?p=jadwal'</script>";
 
?>
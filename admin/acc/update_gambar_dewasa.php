<?php
// koneksi database
include '../koneksi.php';

// Menangkap data yang dikirim dari form
$id_user = $_POST['id_user'];

$gambar = $_FILES['gambar'];
$gambarName = $gambar['name'];
$gambarTmpName = $gambar['tmp_name'];
$gambarSize = $gambar['size'];
$gambarType = $gambar['type'];

// Direktori penyimpanan gambar
$uploadDir = '../../uploads/';

// Memeriksa tipe file yang diizinkan (misalnya, hanya gambar)
$allowedExtensions = array("jpg", "jpeg", "png", "gif");
$fileExtension = strtolower(pathinfo($gambarName, PATHINFO_EXTENSION));

if (!in_array($fileExtension, $allowedExtensions)) {
    echo "<script>alert('Hanya file gambar yang diizinkan!'); window.location.href='../index.php?p=acc_baptis_dewasa'</script>";
    exit(); // Hentikan eksekusi skrip jika tipe file tidak sesuai
}

// Memeriksa ukuran file gambar (misalnya, maksimum 5MB)
$maxFileSize = 5 * 1024 * 1024; // 5MB dalam bytes

if ($gambarSize > $maxFileSize) {
    echo "<script>alert('Ukuran file terlalu besar! Maksimum 5MB.'); window.location.href='../index.php?p=acc_baptis_dewasa'</script>";
    exit(); // Hentikan eksekusi skrip jika ukuran file terlalu besar
}

// Memindahkan gambar ke direktori penyimpanan jika lolos validasi
move_uploaded_file($gambarTmpName, $uploadDir . $gambarName);

// Perbarui data gambar pada tabel baptis_dewasa
// Anda perlu menentukan kondisi WHERE untuk menentukan baris mana yang ingin diperbarui
// Saya menggunakan contoh dengan kolom id_user sebagai acuan untuk memperbarui data
mysqli_query($conn, "UPDATE baptis_dewasa SET dokumentasi = '$gambarName' WHERE id_user = '$id_user'");

echo "<script>alert('Data gambar berhasil diperbarui'); window.location.href='../index.php?p=acc_baptis_dewasa'</script>";

?>
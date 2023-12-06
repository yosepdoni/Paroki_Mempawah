<?php
// Koneksi database
include '../koneksi.php';

// Menangkap data yang dikirim dari form
$id_user = $_POST['id_user'];

// Periksa apakah id_user sudah ada dalam tabel baptis_dewasa
$check_query_dewasa = mysqli_query($conn, "SELECT id_user FROM baptis_dewasa WHERE id_user = '$id_user'");

if (mysqli_num_rows($check_query_dewasa) > 0) {
    // id_user sudah ada di tabel baptis_dewasa
    echo "<script>alert('Anda sudah terdaftar pada baptis dewasa! Tidak bisa melakukan pendaftaran baptis bayi.'); window.location.href='../index.php?p=baptis_bayi'</script>";
} else {
    // id_user belum ada di tabel baptis_dewasa, lanjutkan untuk mengecek tabel baptis_bayi
    $check_query_bayi = mysqli_query($conn, "SELECT id_user FROM baptis_bayi WHERE id_user = '$id_user'");

    if (mysqli_num_rows($check_query_bayi) > 0) {
        // id_user sudah ada di tabel baptis_bayi
        echo "<script>alert('Anda sudah terdaftar pada baptis bayi!'); window.location.href='../index.php?p=baptis_bayi'</script>";
    } else {
        // id_user belum ada di tabel baptis_bayi, lanjutkan untuk menambahkan data baru ke tabel baptis_bayi
        // ... (kode selanjutnya untuk input ke tabel baptis_bayi)
        // Pastikan untuk melanjutkan dengan bagian pengisian ke tabel baptis_bayi di sini
        // ...

        // Contoh bagian berikut adalah bagian dari kode sebelumnya untuk input ke tabel baptis_bayi
        $nama_baptis = $_POST['nama'];
        $tanggal_lahir = $_POST['tgl_lahir'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $alamat = $_POST['alamat'];
        $nama_ayah = $_POST['nama_ayah'];
        $nama_ibu = $_POST['nama_ibu'];
        $telp = $_POST['telepon'];
        $status = 'Belum dikonfirmasi';
        $keterangan = 'Belum dikonfirmasi';
        $akta = $_FILES['akta'];
        $aktaName = $akta['name'];
        $aktaTmpName = $akta['tmp_name'];
        $gambar = $_FILES['gambar'];
        $gambarName = $gambar['name'];
        $gambarTmpName = $gambar['tmp_name'];
        
        // ... (bagian kode lainnya untuk proses pengiriman data ke tabel baptis_bayi)
    }
}
?>

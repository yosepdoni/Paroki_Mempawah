<?php
// koneksi database
include '../koneksi.php';

// Menangkap data yang dikirim dari form
$id_user = $_POST['id_user'];

// Periksa apakah id_user sudah ada dalam tabel
$check_query = mysqli_query($conn, "SELECT id_user FROM baptis_dewasa WHERE id_user = '$id_user'");

if (mysqli_num_rows($check_query) > 0) {
    // id_user sudah ada, lakukan penanganan atau tampilkan pesan kesalahan
    echo "<script>alert('Anda sudah terdaftar!'); window.location.href='../index.php?p=baptis_dewasa'</script>";
} else {
    // id_user belum ada, lanjutkan untuk menambahkan data baru
    $nama_baptis = $_POST['nama'];
    $tanggal_lahir = $_POST['tgl_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telepon'];
    $status = 'Belum dikonfirmasi';
    $keterangan = 'Belum dikonfirmasi';
    // $akta = $_POST['akta'];

    $gambar = $_FILES['gambar'];
    $gambarName = $gambar['name'];
    $gambarTmpName = $gambar['tmp_name'];
    $gambarSize = $gambar['size'];
    $gambarType = $gambar['type'];

    // Direktori penyimpanan gambar
    $uploadDir = '../uploads/';

    // Memeriksa tipe file yang diizinkan (misalnya, hanya gambar)
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $fileExtension = strtolower(pathinfo($gambarName, PATHINFO_EXTENSION));

    if (!in_array($fileExtension, $allowedExtensions)) {
        echo "<script>alert('Hanya file gambar yang diizinkan!'); window.location.href='../index.php?p=baptis_dewasa'</script>";
        exit(); // Hentikan eksekusi skrip jika tipe file tidak sesuai
    }

    // Memeriksa ukuran file gambar (misalnya, maksimum 5MB)
    $maxFileSize = 5 * 1024 * 1024; // 5MB dalam bytes

    if ($gambarSize > $maxFileSize) {
        echo "<script>alert('Ukuran file terlalu besar! Maksimum 5MB.'); window.location.href='../index.php?p=baptis_dewasa'</script>";
        exit(); // Hentikan eksekusi skrip jika ukuran file terlalu besar
    }

    // Memindahkan gambar ke direktori penyimpanan jika lolos validasi
    move_uploaded_file($gambarTmpName, $uploadDir . $gambarName);

    // Menyimpan data ke dalam database
    mysqli_query($conn, "INSERT INTO baptis_dewasa VALUES ('','$id_user','$nama_baptis','$tanggal_lahir','$tempat_lahir','$alamat','$telp','$gambarName','$status','$keterangan')");

    echo "<script>alert('Pendaftaran berhasil disimpan'); window.location.href='../index.php?p=baptis_dewasa'</script>";
}


// Memasukkan data ke database
// <!-- mysqli_query($conn,"insert into baptis_dewasa values('','$id_user','$nama_baptis','$tanggal_lahir','$tempat_lahir','$alamat','$telp')"); -->

// echo $id_user;
// echo $nama_baptis;
// echo $tanggal_lahir;
// echo $tempat_lahir;
// echo $alamat;
// echo $telp;

// Mengalihkan halaman kembali ke index.php
// <!-- echo "<script>alert('Pendaftaran berhasil disimpan'); window.location.href='../index.php?p=baptis_dewasa'</script>";
?>


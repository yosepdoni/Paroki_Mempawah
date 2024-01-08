<?php
// Koneksi database
include '../koneksi.php';

// Menangkap data yang dikirim dari form
$id_user = $_POST['id_user'];

$check_query_dewasa = mysqli_query($conn, "SELECT id_user FROM baptis_dewasa WHERE id_user = '$id_user'");
// Periksa apakah id_user sudah ada dalam tabel
if (mysqli_num_rows($check_query_dewasa) > 0) {
    // id_user ada dalam tabel baptis_dewasa, gagalkan input data
    echo "<script>alert('Maaf, Anda sudah terdaftar sebagai dewasa!'); window.location.href='../index.php?p=baptis_bayi'</script>";
} else {
    $check_query = mysqli_query($conn, "SELECT id_user FROM baptis_bayi WHERE id_user = '$id_user'");
if (mysqli_num_rows($check_query) > 0) {
    // id_user sudah ada, lakukan penanganan atau tampilkan pesan kesalahan
    echo "<script>alert('Anda sudah terdaftar!'); window.location.href='../index.php?p=baptis_bayi'</script>";
} else {
    // id_user belum ada, lanjutkan untuk menambahkan data baru
    $nama_baptis = $_POST['nama'];
    $tanggal_lahir = $_POST['tgl_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $alamat = $_POST['alamat'];
    $nama_ayah = $_POST['nama_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $telp =  "+62" . $_POST['telepon'];
    $status = 'Belum dikonfirmasi';
    $keterangan = 'Belum dikonfirmasi';
    $tgl_baptis = '';
    $dokumentasi = '';

    $akta = $_FILES['akta'];
    $aktaName = $akta['name'];
    $aktaTmpName = $akta['tmp_name'];
    $aktaType = $akta['type'];

    $gambar = $_FILES['gambar'];
    $gambarName = $gambar['name'];
    $gambarTmpName = $gambar['tmp_name'];
    $gambarType = $gambar['type'];

    // Direktori penyimpanan gambar
    $uploadDir = '../uploads/';

    // Memeriksa tipe file yang diizinkan (hanya gambar)
    $allowedImageTypes = ['image/jpeg', 'image/png', 'image/gif'];
    
    if (!in_array($aktaType, $allowedImageTypes) || !in_array($gambarType, $allowedImageTypes)) {
        echo "<script>alert('Hanya file gambar yang diizinkan!'); window.location.href='../index.php?p=baptis_bayi'</script>";
        exit(); // Hentikan eksekusi skrip jika tipe file tidak sesuai
    }if (!preg_match("/^\+628[1-9][0-9]+$/", $telp) || strlen($telp) < 14 || strlen($telp) > 15) {
        echo "<script>alert('Nomor telepon tidak valid');window.location.href='../index.php?p=baptis_bayi'</script>"; 
    }else{

    
    // Memindahkan berkas ke direktori penyimpanan
    move_uploaded_file($aktaTmpName, $uploadDir . $aktaName);
    move_uploaded_file($gambarTmpName, $uploadDir . $gambarName);
    
    // Melakukan input data ke dalam database
    mysqli_query($conn, "INSERT INTO baptis_bayi VALUES ('','$id_user','$nama_baptis','$tanggal_lahir','$tempat_lahir','$alamat','$nama_ayah','$nama_ibu','$telp','$aktaName','$gambarName','$status','$keterangan','$tgl_baptis','$dokumentasi')");
    
    echo "<script>alert('Pendaftaran berhasil disimpan'); window.location.href='../index.php?p=baptis_bayi'</script>";
}
}
}
?>

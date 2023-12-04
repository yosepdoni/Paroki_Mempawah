<?php
// koneksi database
include '../koneksi.php';

// Menangkap data yang dikirim dari form
$id_user = $_POST['id_user'];

// Periksa apakah id_user sudah ada dalam tabel
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
    $telp = $_POST['telepon'];
    $status = 'Belum dikonfirmasi';
    $keterangan = 'Belum dikonfirmasi';

    $akta = $_FILES['akta'];
    $aktaName = $akta['name'];
    $aktaTmpName = $akta['tmp_name'];

    $gambar = $_FILES['gambar'];
    $gambarName = $gambar['name'];
    $gambarTmpName = $gambar['tmp_name'];


    // Direktori penyimpanan gambar
    $uploadDir = '../uploads/';

    // Memindahkan gambar ke direktori penyimpanan
    move_uploaded_file($aktaTmpName, $uploadDir . $aktaName);
    move_uploaded_file($gambarTmpName, $uploadDir . $gambarName);


    mysqli_query($conn, "INSERT INTO baptis_bayi VALUES ('','$id_user','$nama_baptis','$tanggal_lahir','$tempat_lahir','$alamat','$nama_ayah','$nama_ibu','$telp','$aktaName','$gambarName','$status','$keterangan')");

    // echo $id_user;
    // echo $nama_baptis;
    // echo $tanggal_lahir;
    // echo $tempat_lahir;
    // echo $alamat;
    // echo $nama_ayah;
    // echo $nama_ibu;
    // echo $telp;

    echo "<script>alert('Pendaftaran berhasil disimpan'); window.location.href='../index.php?p=baptis_bayi'</script>";
}

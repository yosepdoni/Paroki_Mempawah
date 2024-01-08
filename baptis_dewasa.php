<!DOCTYPE html>
<html>

<head>
    <title>Form Pendaftaran Sakramen Baptis</title>
    <!-- Tautan ke file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
    include 'session.php';
    ?>

    <div class="container p-5 mt-5">
        <h1 class="text-center">Form Pendaftaran Sakramen Baptis Dewasa </h1>


        <?php
// Pastikan session dimulai sebelumnya

// Periksa apakah session 'id_user' telah diatur
if (isset($_SESSION['id_user'])) {
    $userId = $_SESSION['id_user'];

    // Lakukan kueri untuk mendapatkan data user berdasarkan id_user
    $query = mysqli_prepare($conn, "SELECT * FROM katekumen WHERE id_user = ?");
    mysqli_stmt_bind_param($query, 'i', $userId);
    mysqli_stmt_execute($query);
    $result = mysqli_stmt_get_result($query);

    // Periksa apakah hasil kueri tidak kosong
    if ($result && $data = mysqli_fetch_assoc($result)) {
        ?>
        <form action="./aksi/post_dewasa.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama_baptis">Nama Calon Baptis:</label>
                <input type="hidden" class="form-control" name="id_user" value="<?php echo $userId; ?>" required>
                <input type="text" class="form-control" id="nama_baptis" name="nama" value="<?php echo $data['nama']; ?>" required readonly>
            </div>
            <!-- Tambahkan tombol submit atau elemen lainnya jika diperlukan -->
 

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" required readonly>
            </div>

            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>" required readonly>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data['alamat']; ?>" required readonly>
            </div>

            <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon:</label>
                <input type="tel" class="form-control" id="nomor_telepon" name="telepon" value="<?php echo $data['telepon']; ?>" required readonly>
            </div>

            <div class="form-group">
                <label for="akta">Upload Akta:</label>
                <input type="file" name="gambar" id="akta" required>
                <!-- <input type="submit" value="Unggah Gambar" name="submit"> -->
            </div>
            <?php
// Misalkan Anda memiliki variabel $conn yang merupakan koneksi ke database
$UserId = $_SESSION['id_user']; // Pastikan id_user sudah tersedia di session

// Lakukan query untuk menghitung jumlah presensi
$queryPresensi = mysqli_query($conn, "SELECT SUM(jumlah_presensi) AS total_presensi FROM presensi WHERE id_user='$UserId'");

// Periksa apakah query berhasil dieksekusi
if ($queryPresensi) {
    // Ambil data jumlah presensi dari hasil query
    $dataPresensi = mysqli_fetch_assoc($queryPresensi);
    $jumlahPresensi = $dataPresensi['total_presensi'];
} else {
    // Handle jika query tidak berhasil dieksekusi
    echo "Terjadi kesalahan saat mengambil data presensi.";
}

// Tentukan batas jumlah presensi untuk men-disable button
$minPresensi = 20;

// Tentukan apakah button harus di-disable atau tidak berdasarkan jumlah presensi
$isButtonDisabled = ($jumlahPresensi >= $minPresensi) ? false : true;
?>
<h4>Jumlah Presensi: <?php echo $jumlahPresensi; ?></h4>


            <div class="text-right">
                <button type="submit" class="btn btn-primary" <?php if ($isButtonDisabled) echo 'disabled'; ?>>
                    <?php echo ($isButtonDisabled) ? 'Presensi belum terpenuhi!' : 'Daftar'; ?>
                </button>
            </div>

            <div class="col mt-5">
                <h5>Persyaratan Baptis Dewasa</h5>
                <ul>
                    <li>Calon baptis dewasa harus menjalani masa katekumen yang mencakup pendalaman iman dan ajaran Gereja Katolik.</li>
                    <li>Calon baptis dewasa diharapkan untuk memiliki pemahaman yang kuat tentang ajaran Katolik dan kesiapan untuk menerima sakramen baptis.</li>
                    <li>Calon baptis dewasa harus melakukan katekese bersama pastor paroki atau seorang pembimbing rohani.</li>
                    <li>Calon baptis dewasa perlu menjalani retret spiritual sebagai persiapan akhir sebelum menerima sakramen baptis.</li>
                </ul>
            </div>
        </form>
        <?php
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "Session 'id_user' tidak diatur.";
}
?> 
    </div>

    <!-- Tautan ke file JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
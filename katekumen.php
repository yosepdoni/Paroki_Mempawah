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
        <h1 class="text-center">Form Pendaftaran Katekumen</h1>


        <form action="./aksi/post_katekumen.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
    <label for="nama_katekumen">Nama Calon Katekumen:</label>
    <?php
    // Periksa apakah session 'email' sudah di-set
    if (isset($_SESSION['email'])) {
        // Ambil email dari session
        $userId = $_SESSION['id_user'];

         // Lakukan kueri untuk mendapatkan data user berdasarkan id_user
    $query = mysqli_prepare($conn, "SELECT * FROM user WHERE id_user = ?");
    mysqli_stmt_bind_param($query, 'i', $userId);
    mysqli_stmt_execute($query);
    $result = mysqli_stmt_get_result($query);

    // Periksa apakah hasil kueri tidak kosong
    if ($result && $data = mysqli_fetch_assoc($result)) {
        ?>
            <input type="hidden" class="form-control" name="id_user" value="<?php echo $userId ?>" required>
            <input type="text" class="form-control" id="nama_katekumen" name="nama" value="<?php echo $data['nama']; ?>" required>
            <?php
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "Session 'id_user' tidak diatur.";
}
?> 
</div>


            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tgl_lahir" required>
            </div>

            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>

            <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon:</label>
                <input type="tel" class="form-control" id="nomor_telepon" name="telepon" required>
            </div>

            <!-- <div class="form-group">
                <label for="paroki">Paroki:</label>
                <input type="text" class="form-control" id="paroki" name="paroki" required>
            </div>

            <div class="form-group">
                <label for="pastor_paroki">Pastor Paroki:</label>
                <input type="text" class="form-control" id="pastor_paroki" name="pastor_paroki" required>
            </div> -->

            <!-- <div class="form-group">
                <label for="gambar">Upload bukti katekumen:</label>
                <input type="file" name="gambar" name="gambar" id="gambar">
            </div> -->
                    
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Daftar</button>
            </div>

        <div class="col mt-5">
        <h5>Persyaratan Calon Katekumen</h5>
            <li>Calon Katekumen harus menghadiri kelas katekumen yang diadakan oleh gereja atau paroki setempat.</li>
            <li>Calon Katekumen harus memiliki niat dan tekad untuk menerima ajaran Gereja Katolik dan mengikuti ajaran tersebut dalam kehidupan sehari-hari.</li>
            <li>Calon Katekumen diharapkan untuk menghadiri Misa secara teratur dan menjadi bagian dari komunitas gereja setempat.</li>
            <li>Pemberkatan dan dukungan dari sponsor atau pembimbing katekumen sangat dianjurkan.</li>
        </div>
        </div>

    <!-- Tautan ke file JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
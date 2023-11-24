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
        <h1 class="text-center">Form Pendaftaran Sakramen Baptis Dewasa</h1>
        <form action="./aksi/post_dewasa.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama_baptis">Nama Calon Baptis:</label>
                <!-- <input type="hidden" class="form-control" name="jenis_baptis" required> -->
                <input type="text" class="form-control" id="nama_baptis" name="nama" required>
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
            
            <div class="form-group">
            <label for="gambar">Upload bukti katekumen:</label>
            <input type="file" name="gambar" name="gambar" id="gambar">
            <!-- <input type="submit" value="Unggah Gambar" name="submit"> -->
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Daftar</button>
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
            </div>

    <!-- Tautan ke file JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

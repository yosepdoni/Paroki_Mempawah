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
        <h1 class="text-center">Form Pendaftaran Sakramen Baptis Bayi</h1>
        <form action="./aksi/post_bayi.php" method="POST">
            <div class="form-group">
                <label for="nama_baptis">Nama Calon Baptis:</label>
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
                <label for="nama_orang_tua">Nama Orang Tua:</label>
                <input type="text" class="form-control" id="nama_orang_tua" name="nama_ortu" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>

            <div class="form-group">
                <label for="telepon">telepon:</label>
                <input type="number" class="form-control" id="telepon" name="telepon" required>
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
                <label for="tanggal_baptis">Tanggal Baptis (jika sudah ditentukan):</label>
                <input type="date" class="form-control" id="tanggal_baptis" name="tanggal_baptis">
            </div> -->

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
            <div class="col mt-5">
                <h5>Persyaratan Baptis Bayi</h5>
                <ul>
                    <li>Orang tua atau wali dari bayi yang akan dibaptis harus menjadi anggota aktif dari gereja atau paroki yang bersangkutan.</li>
                    <li>Orang tua atau wali harus menghadiri kelas persiapan baptis untuk memahami makna dan tugas yang berkaitan dengan baptis bayi.</li>
                    <li>Orang tua atau wali harus memilih wali baptis yang akan mendampingi bayi dalam sakramen baptis.</li>
                    <li>Dokumen resmi seperti akta kelahiran bayi harus diserahkan kepada gereja atau paroki untuk proses administratif.</li>
                </ul>
            </div>
        </form>
    </div>

    <!-- Tautan ke file JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

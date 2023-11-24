<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Katekumen</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php
include 'session.php';
?>
    <div class="container mt-4">
        <h2 class="mb-4">Jadwal Katekumen</h2>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Tempat</th>
                        <th>Pembimbing</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data jadwal katekumen dapat diisi dinamis dari database -->
                    <tr>
                        <td>Sabtu</td>
                        <td>09:00 WIB</td>
                        <td>Ruang Katekese</td>
                        <td>Pak Adi</td>
                    </tr>
                    <!-- Tambahkan baris lain sesuai dengan data yang ada -->
                </tbody>
            </table>
        </div>
        <div class="row mt-5">
            <div class="col">
                <h5>Persyaratan Katekumen</h5>
                <ul>
                    <li>Calon Katekumen harus menghadiri kelas katekumen yang diadakan oleh gereja atau paroki setempat.</li>
                    <li>Calon Katekumen harus memiliki niat dan tekad untuk menerima ajaran Gereja Katolik dan mengikuti ajaran tersebut dalam kehidupan sehari-hari.</li>
                    <li>Calon Katekumen diharapkan untuk menghadiri Misa secara teratur dan menjadi bagian dari komunitas gereja setempat.</li>
                    <li>Pemberkatan dan dukungan dari sponsor atau pembimbing katekumen sangat dianjurkan.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS dan Popper.js (Diperlukan untuk beberapa fitur Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>

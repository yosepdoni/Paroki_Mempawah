<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

<div class="col-md-12 mt-5">
    <div class="container">
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <div class="table-responsive">
        <table id="tabel-data" class="table table-striped table-bordered" width="100%">
    <thead class="thead-light">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Presensi</th>
            <th scope="col">Jumlah Presensi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../koneksi.php';
        $id = $_GET['id'];
        $result = mysqli_query($conn, "SELECT p.tgl_presensi, p.jumlah_presensi, u.nama FROM presensi p JOIN user u ON p.id_user = u.id_user WHERE p.id_user='$id' AND p.jumlah_presensi != 0");
        $no = 1;
        while ($data = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= date('d F Y', strtotime($data['tgl_presensi'])); ?></td>
                <td><?= $data['jumlah_presensi']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

            <script>
                $(document).ready(function() {
                    $('#tabel-data').DataTable();
                });
            </script>
        </div>
    </div>
</div>
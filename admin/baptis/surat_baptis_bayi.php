<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cetak Surat Baptis Bayi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="box box-info">
                                <!-- /.box-header -->

                                <div class="box-body">
                                    <?php
                                    include '../koneksi.php';
                                    if (isset($_POST['id_user'])) {
                                        $UserId = $_POST['id_user'];
                                        $status = $_POST['status'];
                                        $keterangan = $_POST['keterangan'];
                                        $tgl_baptis = $_POST['tgl_baptis'];

                                        // Use UPDATE statement to modify existing record
                                        $query = "UPDATE baptis_bayi SET status='$status', keterangan='$keterangan', tgl_baptis='$tgl_baptis' WHERE id_user='$UserId'";

                                        // Execute the query
                                        $result = mysqli_query($conn, $query);

                                        if ($result) {
                                            echo "<script>alert('Konfirmasi berhasil!'); window.location.href='index.php?p=baptis_bayi'</script>";
                                        } else {
                                            echo "<script>alert('Gagal melakukan update. Error: " . mysqli_error($conn) . "');</script>";
                                        }
                                    }
                                    $id = $_GET['id'];
                                    $data = mysqli_query($conn, "SELECT * FROM baptis_bayi WHERE id_user='$id'");
                                    while ($da = mysqli_fetch_array($data)) {
                                    ?>
                                        <form class="form-horizontal" method="GET" action="../admin/cetak/cetak_surat_baptis.php">
                                            <div class="box-body">
                                                <input type="hidden" name="id_user" value="<?= $da['id_user']; ?>">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Nama</th>
                                                            <td>:</td>
                                                            <td> <?= $da['nama']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tanggal Lahir</th>
                                                            <td>:</td>
                                                            <td><?php echo date('d F Y', strtotime($da['tgl_lahir'])); ?></td>
                                                            <!-- <td><?php echo date("d/m/Y", strtotime($da['tanggal_lahir'])); ?></td> -->
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tempat Lahir</th>
                                                            <td>:</td>
                                                            <td> <?= $da['tempat_lahir']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Alamat</th>
                                                            <td>:</td>
                                                            <td> <?= $da['alamat']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Nama Ayah</th>
                                                            <td>:</td>
                                                            <td> <?= $da['nama_ayah']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Nama Ibu</th>
                                                            <td>:</td>
                                                            <td> <?= $da['nama_ibu']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Telepon</th>
                                                            <td>:</td>
                                                            <td> <?= $da['telepon']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Pembaptis</th>
                                                            <td>:</td>
                                                            <td><input type="text" class="form-control" id="pembaptis" name="pembaptis" placeholder="Nama Pastor yang membaptis" required></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Wali Baptis</th>
                                                            <td>:</td>
                                                            <td><input type="text" class="form-control" id="wali_baptis" name="wali_baptis" placeholder="Nama Wali Baptis" required></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="box-footer">
                                                <button type="submit" class="btn btn-info float-right"> Cetak Surat Baptis</button>
                                                </div>
                                        </form>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <!-- /.card -->

                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
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
                            <h3 class="card-title">Detail Baptis Dewasa</h3>
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
                          
                                      // Use UPDATE statement to modify existing record
                                      $query = "UPDATE baptis_dewasa SET status='$status', keterangan='$keterangan' WHERE id_user='$UserId'";
                          
                                      // Execute the query
                                      $result = mysqli_query($conn, $query);
                          
                                      if ($result) {
                                        echo "<script>alert('Konfirmasi berhasil!'); window.location.href='index.php?p=baptis_dewasa'</script>";
                                      } else {
                                        echo "<script>alert('Gagal melakukan update. Error: " . mysqli_error($conn) . "');</script>";
                                      }
                                    }
                                    $id = $_GET['id'];
                                    $data = mysqli_query($conn, "SELECT * FROM baptis_dewasa WHERE id_user='$id'");
                                    while ($da = mysqli_fetch_array($data)) {
                                    ?>
                                        <form class="form-horizontal" method="POST" action="">
                                            <div class="box-body">
                                            <!-- <input type="hidden" name="id_user" value="<?= $result['id_user']; ?>"> -->
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
                                                            <th scope="row">Telepon</th>
                                                            <td>:</td>
                                                            <td> <?= $da['telepon']; ?></td>
                                                        </tr>
                                                        <!-- <tr>
                                                        <th scope="row">Bukti Pembayaran</th>
                                                        <td>:</td>
                                                        <td> <img src="../assets/image/<?= $da['bukti_bayar']; ?>" alt="gambar" width="70" height="70"> </td>
                                                    </tr> -->
                                                        <tr>
                                                            <th scope="row">Status</th>
                                                            <td>:</td>
                                                            <td>
                                                                <select class="form-select mb-1" id="validationCustom04" name="status" required>
                                                                    <option selected disabled value="">Pilih</option>
                                                                    <option> Diterima </option>
                                                                    <option> Ditolak </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Keterangan</th>
                                                            <td>:</td>
                                                            <td> <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan" placeholder="Keterangan"></textarea> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="box-footer">
                                                    <button type="submit" name="konfirmasi" class="btn btn-info float-right"> Konfirmasi</button>
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
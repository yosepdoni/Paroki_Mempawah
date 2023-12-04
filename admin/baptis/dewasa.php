<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />




<div class="col-md-12 mt-5">
  <div class="container">
    <!-- <a class="btn btn-primary mt-3 mb-2" href="index.php?p=form_jadwal"><i class="fa fa-plus"></i> Tambah Baptis-->
    </a>
    <!-- Formulir pencarian berdasarkan tanggal -->
    <form action="../admin/cetak/cetak_tgl_dewasa.php" method="get" class="mb-3">
      <div class="row">
        <div class="col-md-2">
          <label for="start_date" class="form-label">Dari Tanggal</label>
          <input type="date" class="form-control" id="start_date" name="start_date">
        </div>
        <div class="col-md-2">
          <label for="end_date" class="form-label">Sampai Tanggal</label>
          <input type="date" class="form-control" id="end_date" name="end_date">
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-info text-dark mt-4">Cetak</button>
        </div>
      </div>
    </form>
    <!-- end -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <div class="table-responsive">
      <table id="tabel-data" class="table table-striped table-bordered" width="100%">
        <thead class="thead-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Alamat</th>
            <th scope="col">Telepon</th>
            <!-- <th scope="col">Bukti Katekumen</th> -->
            <!-- <th scope="col">Akta</th> -->
            <!-- <th scope="col">Keterangan</th> -->
            <th scope="col">Konfirmasi</th>
            <th scope="col">Aksi</th>

          </tr>
        </thead>
        <tbody>
          <?php
          include "../koneksi.php";

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


          // include "../koneksi.php";
          $data = mysqli_query($conn, "select * from baptis_dewasa");
          $no = 1;
          while ($result = mysqli_fetch_array($data)) {
          ?>
            <tr>
              <form method="POST">
                <td><?= $no++; ?></td>
                <input type="hidden" name="id_user" value="<?= $result['id_user']; ?>">
                <p hidden>
                  <?php $UserId = $result['id_user'] ?>
                </p>

                <?php
                $query = mysqli_query($conn, "SELECT * FROM user where id_user='$UserId'");
                while ($da = mysqli_fetch_array($query)) {
                ?>
                  <td><?php echo $da['nama']; ?></td>

                <?php }
                ?>
                <td><?php echo date('d F Y', strtotime($result['tgl_lahir'])); ?></td>
                <td><?php echo $result['tempat_lahir']; ?></td>
                <td><?php echo $result['alamat']; ?></td>
                <td><?php echo $result['telepon']; ?></td>
                <!-- <td><?php echo $result['akta']; ?></td> -->
              
                <td>
                <select class="form-select mb-1" id="validationCustom04" name="status" required>
                    <option selected disabled value="">Pilih</option>
                    <option> Diterima </option>
                    <option> Ditolak </option>
                  </select>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan" placeholder="Keterangan"></textarea>
                </td>
                <td>
                <a class="btn btn-warning btn-sm" href="index.php?p=detail_dewasa&id=<?= $result['id_user']; ?>">Detail</a>
                  <!-- <button type="submit" name="konfirmasi" class="btn btn-info fa fa-forward"></button> -->
                </td>
              </form>
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
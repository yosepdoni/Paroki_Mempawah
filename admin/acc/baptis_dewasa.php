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
    <!-- <form action="../admin/cetak/cetak_tgl_dewasa.php" method="get" class="mb-3">
      <div class="row">
        <div class="col-md-2">
          <label for="start_date" class="form-label">Dari Tanggal</label>
          <input type="date" class="form-control" id="start_date" name="start_date" required>
        </div>
        <div class="col-md-2">
          <label for="end_date" class="form-label">Sampai Tanggal</label>
          <input type="date" class="form-control" id="end_date" name="end_date" required>
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-info text-dark mt-4">Cetak</button>
        </div>
      </div>
    </form> -->
    <!-- Formulir pencarian berdasarkan tanggal -->
<form action="../admin/cetak/cetak_tgl_bayi.php" method="get" class="mb-3">
  <div class="row">
    <div class="col-md-2">
      <label for="start_date" class="form-label">Dari Tanggal</label>
      <input type="date" class="form-control" id="start_date" name="start_date" required>
    </div>
    <div class="col-md-2">
      <label for="end_date" class="form-label">Sampai Tanggal</label>
      <input type="date" class="form-control" id="end_date" name="end_date" required>
    </div>
    <div class="col-md-2">
      <label for="baptis_type" class="form-label">Jenis Baptis</label>
      <select class="form-select" id="baptis_type" name="baptis_type" required>
        <option value="paskah">Baptis Paskah</option>
        <option value="natal">Baptis Natal</option>
      </select>
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
            <!-- <th scope="col">Status</th> -->
            <th scope="col">Dokumentasi</th>
            <th scope="col">Aksi</th>

          </tr>
        </thead>
        <tbody>
          <?php
          include "../koneksi.php";
          $data = mysqli_query($conn, "select * from baptis_dewasa where status='diterima'");
          $no = 1;
          while ($result = mysqli_fetch_array($data)) {
          ?>
            <tr>
              <form method="POST" action="acc/update_gambar_dewasa.php"  enctype="multipart/form-data">
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
                <!-- <td><?php echo $result['status']; ?></td> -->
                <td>
                  <center>
                  <a href="../uploads/<?= $result['dokumentasi']; ?>" target="_blank">
                  <img src="../uploads/<?= $result['dokumentasi']; ?>" alt="gambar" width="80" height="80">
                  </a>
                  </center>
                </td>
                <td>
                <?php if (empty($result['dokumentasi'])) : ?>
                  <div class="form-group">
                      <form action="proses_upload.php" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="id_user" value="<?= $result['id_user']; ?>">
                          <input type="file" name="gambar" id="akta" required>
                          <input type="submit" value="Kirim" name="submit">
                      </form>
                  </div>
                  <?php else : ?>
                      <a class="btn btn-info btn-sm" href="index.php?p=surat_baptis_dewasa&id=<?= $result['id_user']; ?>">Baptis</a>
                  <?php endif; ?>

                <!-- <a class="btn btn-info btn-sm" href="index.php?p=surat_baptis_dewasa&id=<?= $result['id_user']; ?>">Baptis</a> -->

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





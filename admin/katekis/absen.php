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
            <th scope="col">Jumlah Presensi</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "../koneksi.php";
          if (isset($_POST['id_user'])) {
            $UserId = $_POST['id_user'];

            // Mendapatkan tanggal presensi
            $tanggalPresensi = date('Y-m-d'); // Mendapatkan tanggal saat ini
            $jumlahPresensi = '1';

            // Memasukkan data ke tabel presensi tanpa mengubah jumlah_presensi yang ada

            mysqli_query($conn, "insert into presensi values('','$UserId','$tanggalPresensi','$jumlahPresensi')");
            echo "<script>alert('Presensi berhasil ditambahkan'); window.location.href='index.php?p=absen'</script>";
          }


          $data = mysqli_query($conn, "SELECT p.id_user, u.nama, p.tgl_presensi, SUM(p.jumlah_presensi) as total_presensi 
    FROM presensi p
    JOIN user u ON p.id_user = u.id_user 
    GROUP BY p.id_user");
          $no = 1;

          while ($result = mysqli_fetch_array($data)) {
          ?>
            <tr>

              <form method="POST">
                <td><?= $no++; ?></td>
                <input type="hidden" name="id_user" value="<?= $result['id_user']; ?>">
                <input type="hidden" name="tgl_presensi">
                <input type="hidden" name="jumlah_presensi">
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

                <td><?= $result['total_presensi']; ?></td>
                <td>
                  <button type="submit" name="tambah" class="btn btn-info btn-sm"> <i class="fa fa-plus"></i> </button>
                  <?php if ($result['total_presensi'] > 0) : ?>
                    <a class="btn btn-warning btn-sm" href="index.php?p=detail_absen&id=<?= $result['id_user']; ?>">Detail</a>
                  <?php else : ?>
                    <a class="btn btn-warning btn-sm" href="javascript:void(0);" disabled>Detail</a>
                  <?php endif; ?>
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
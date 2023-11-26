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
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Alamat</th>
            <th scope="col">Telepon</th>
            <th scope="col">Tanggal Baptis</th>
            <th scope="col">Katekumen</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php

          include "../koneksi.php";
          $data = mysqli_query($conn, "select * from baptis where jenis_baptis='dewasa'");
          $no = 1;
          while ($result = mysqli_fetch_array($data)) {
          ?>
            <?php
            if (isset($_POST['tambah']) && $_POST['add_absen'] == $d['id_user']) {
              // Perform the database update
              $IdUser = $d['id_user'];
              $updateQuery = "UPDATE absen SET kehadiran='+ 1' WHERE id_user = '$IdUser'";
              $result = mysqli_query($conn, $updateQuery);
              if ($result) {
                $d['kehadiran'] = '1';
                echo "<script>window.location.href='index.php?p=absen'</script>";
                exit;
              } else {
                echo "Gagal update status: ";
              }
            }
            ?>
            <tr>
              <form method="POST">
                <td><?= $no++; ?></td>
                <input type="hidden" name="add_absen" value="<?= $d['id_pesanan']; ?>">
                <td><?php echo $result['nama']; ?></td>
                <td><?php echo date('d F Y', strtotime($result['tgl_lahir'])); ?></td>
                <td><?php echo $result['tempat_lahir']; ?></td>
                <td><?php echo $result['alamat']; ?></td>
                <td><?php echo $result['telepon']; ?></td>
                <td><?php echo date('d F Y', strtotime($result['tgl_baptis'])); ?></td>
                <td><?php echo $result['katekumen']; ?></td>
                <!-- <td>
                  <a href="index.php?p=edit_jadwal&id=<?= $result['id']; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>&nbsp;
                  <a onclick="return confirm('apakah anda yakin? ');" href="index.php?p=ac_delete_jadwal&id=<?= $result['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash">&nbsp;</i></a>
                </td> -->
                <td>
                      <button type="submit" class="btn btn-info btn-sm"> <i class="fa fa-arrow-right"></i> </button>
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
<section id="pengumuman">
  <main class="p-5 mt-5 text-dark">
    <h1 class="text-center"> Pengumuman Baptis </h1>
</main>
  <main class="container" data-aos="zoom-in">
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Status</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Tanggal Baptis</th>
          </tr>
        </thead>
        <tbody>

          <?php
          include 'session.php';
          $userId = $_SESSION['id_user'];

          // Check if id_user exists in baptis_dewasa table
          $queryDewasa = mysqli_prepare($conn, "SELECT * FROM baptis_dewasa WHERE id_user = ?");
          mysqli_stmt_bind_param($queryDewasa, 'i', $userId);
          mysqli_stmt_execute($queryDewasa);
          $resultDewasa = mysqli_stmt_get_result($queryDewasa);

          if ($resultDewasa && $dataDewasa = mysqli_fetch_assoc($resultDewasa)) {
            // Display data from baptis_dewasa table
          ?>
            <tr>
              <td><?php echo $dataDewasa['nama']; ?></td>
              <td><?php echo $dataDewasa['status']; ?></td>
              <td><?php echo $dataDewasa['keterangan']; ?></td>
              <td><?php echo $dataDewasa['tgl_baptis']; ?></td>
            </tr>
            <?php
          } else {
            // id_user not found in baptis_dewasa table, retrieve data from baptis_bayi table
            $queryBayi = mysqli_prepare($conn, "SELECT * FROM baptis_bayi WHERE id_user = ?");
            mysqli_stmt_bind_param($queryBayi, 'i', $userId);
            mysqli_stmt_execute($queryBayi);
            $resultBayi = mysqli_stmt_get_result($queryBayi);

            if ($resultBayi && $dataBayi = mysqli_fetch_assoc($resultBayi)) {
              // Display data from baptis_bayi table
            ?>
              <tr>
                <td><?php echo $dataBayi['nama']; ?></td>
                <td><?php echo $dataBayi['status']; ?></td>
                <td><?php echo $dataBayi['keterangan']; ?></td>
                <td><?php echo $dataBayi['tgl_baptis']; ?></td>
              </tr>
          <?php
            } else {
              // Both tables do not have data for the specified id_user
              echo "<tr><td colspan='3'><p class='text-center'>Data Tidak Ada!</p></td></tr>";
            }
          }
          ?>

        </tbody>
      </table>
    </div>
</section>
</main>
<!-- akhir pengumuman -->
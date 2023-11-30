 <!-- jadwal -->
 <section id="jadwal">
<header class="text-center my-3 text-light">
      <h5>
      <?php
      include 'time.php';
        // echo date("d")." ".month(date("n"))." ".date("Y");
        echo "Jadwal Ibadah Bulan&nbsp;".month(date("n"));
        ?>
        </h5>
      </header>
      <main class="container bg-light p-5" data-aos="zoom-in">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="thead-light">
              <tr>
                <th scope="col">Hari</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Waktu</th>
                <th scope="col">Tempat</th>
                <th scope="col">Perayaan</th>
                <th scope="col">Pastor</th>
              </tr>
            </thead>
            <tbody>
            <?php
                  
                  include "admin/koneksi.php";
                  $data = mysqli_query($conn, "select * from jadwal");
                  while($result = mysqli_fetch_array($data)){
                ?>
              <tr>
                <td><?php echo $result['hari']; ?></td>
                <td><?php echo date('d F Y', strtotime($result['tgl'])); ?></td>
                <td><?php echo $result['waktu']; ?></td>
                <td><?php echo $result['tempat']; ?></td>
                <td><?php echo $result['perayaan']; ?></td>
                <td><?php echo $result['pastor']; ?></td>
              </tr>
              <?php
                  
                }
              ?>
            </tbody>
          </table>
        </div>
    </section>
    </main>
    <!-- akhir jadwal -->
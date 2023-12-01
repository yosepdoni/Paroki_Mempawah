 <!-- pengumuman -->
 <section id="pengumuman">
<header class="text-center my-3 text-light">
      <h5 class="text-center"> Pengumuman Baptis </h5>
      </header>
      <main class="container bg-light p-5" data-aos="zoom-in">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="thead-light">
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">Status</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
            <?php
                  
                  include "admin/koneksi.php";
                  $data = mysqli_query($conn, "select * from baptis_bayi");
                  while($result = mysqli_fetch_array($data)){
                ?>
              <tr>
                <td><?php echo $result['nama']; ?></td>
              </tr>
              <?php
                  
                }
              ?>
            </tbody>
          </table>
        </div>
    </section>
    </main>
    <!-- akhir pengumuman -->
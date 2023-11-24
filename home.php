<!-- header -->
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/gereja.jpg" height="600px" class="d-block w-100" alt="...">
        <div class="position-absolute top-50 start-50 translate-middle text-white display-5 fw-bold" data-aos="zoom-in"
          style="font-family: monospace;">
          St. FX Paroki Mempawah
          <a href="index.php?p=sejarah" class="btn btn-primary active" aria-current="page">Klik</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/dalam_gereja.jpg" height="600px" class="d-block w-100" alt="...">
        <div class="position-absolute top-50 start-50 translate-middle text-light display-6 fw-bold" data-aos="zoom-in"
          style="font-family: monospace;">
          Selamat Datang di Website Gereja Paroki Mempawah
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- akhir header -->

  <!-- jadwal -->
<!-- <section id="jadwal">
<header class="text-center my-3 text-dark">
      <h5>
      <?php
      include 'time.php';
        // echo date("d")." ".month(date("n"))." ".date("Y");
        echo "Jadwal Misa Bulan&nbsp;".month(date("n"));
        ?>
        </h5>
      </header>
      <main class="container bg-light" data-aos="zoom-in">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="thead-light">
              <tr>
                <th scope="col">Hari</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Waktu</th>
                <th scope="col">Perayaan</th>
                <th scope="col">Keterangan</th>
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
                <td><?php echo $result['perayaan']; ?></td>
                <td><?php echo $result['ket']; ?></td>
              </tr>
              <?php
                  
                }
              ?>
            </tbody>
          </table>
        </div>
    </section>
    </main> -->
    <!-- akhir jadwal -->

    <!-- profi pastor -->
    <!-- Tautan ke file CSS Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h5 class="text-center">Profil Pastor Paroki</h5>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="images/uskup.jpg" class="card-img-top" alt="Foto Pastor 1">
                    <div class="card-body">
                        <h5 class="card-title">Nama Pastor Paroki: RD Anton Silvinus</h5>
                        <p class="card-text">Deskripsi Pastor: Pastor John Doe adalah pastor paroki Gereja Santo Fransiskus Xaverius Mempawah. Beliau telah melayani gereja ini selama 10 tahun dan memiliki pengalaman yang luas dalam membimbing umat. Beliau sangat peduli terhadap perkembangan rohani umat paroki ini.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <img src="images/uskup.jpg" class="card-img-top" alt="Foto Pastor 2">
                    <div class="card-body">
                        <h5 class="card-title">Nama Pastor Paroki: RD Alexander Mardalis</h5>
                        <p class="card-text">Deskripsi Pastor: Pastor Jane Smith adalah pastor paroki Gereja Santo Fransiskus Xaverius Mempawah. Beliau memiliki semangat yang tinggi dalam melayani umat dan selalu siap membantu dalam kebutuhan rohani dan spiritual umat paroki.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tautan ke file JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
    <!-- akhir profil pastor -->

    <!-- alamat -->
    <section id="alamat">
      <div class="container text-dark text-center my-3">
        <h5>Lokasi</h5>
        <div class="row justify-content-center my-3 text-center" data-aos="zoom-in">
          <div class="col">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.950777249913!2d108.9606928!3d0.3642499!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e2f19ab656bd27%3A0x7108f2721c5ddae!2sGereja%20Katolik%20Santo%20Fransiskus%20Xaverius%20Paroki%20Mempawah%20Hilir!5e0!3m2!1sid!2sid!4v1698823478773!5m2!1sid!2sid"              width="100%" height="500" style="border: 1px;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- akhir alamat -->

    <!-- kolekte -->
    <header class="text-dark text-center py-2">
      <h5>Kolekte Untuk Gereja Paroki Santo Fransiskus Xaverius Mempawah</h5>
    </header>
    <main class="container my-1">
      <div class="row">
        <div class="col-md-6">
          <div data-aos="fade-up">
            <div class="card mb-4">
              <div class="card-body">
                <h3 class="card-title">Bank KALBAR</h3>
                <p class="card-text">No. Rekening: 5225020631</p>
                <p class="card-text">a.n. Gereja Santo Serenus Bangkam</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div data-aos="fade-up">
            <div class="card mb-4">
              <div class="card-body">
                <h3 class="card-title">Bank BRI</h3>
                <p class="card-text">No. Rekening: 3859-01-025477-53-5</p>
                <p class="card-text">a.n. Panitia Renovasi Gereja Stasi St. Serenus Bangkam</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- akhir kolekte -->
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- link css -->
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

  <!-- link css utk animasi -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <title>Gereja Katolik Santo Fransiskus Xaverius Mempawah</title>
</head>

<body id="home">





  <head>
    <!-- Tambahkan link ke file CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>

  <body id="home">
    <?php
    
     session_start();
    include "navbar.php";
    ?>
    <!-- Main content -->
    <section class="content">
      <?php



      $page = $_GET['p'];

      if ($page == "" || $page == "home") {
        include "home.php";
      }

      if ($page == "home") {
        include "home.php";
      } else if ($page == "jadwal") {
        include "jadwal.php";
      } else if ($page == "kontak") {
        include "kontak.php";
      } else if ($page == "sejarah") {
        include "sejarah.php";
      } else if ($page == "baptis_dewasa") {
        include "baptis_dewasa.php";
      } else if ($page == "baptis_bayi") {
        include "baptis_bayi.php";
      } else if ($page == "katekumen") {
        include "katekumen.php";
      } else if ($page == "persyaratan") {
        include "persyaratan.php";
      }
      ?>
    </section>

    <?php
    include "footer.php"
    // header("location: home.php", true, 301);

    // exit();
    ?>

  </body>

</html>
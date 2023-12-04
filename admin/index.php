<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- link css -->
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

  <!-- link css utk animasi -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <title>Sekretariat Paroki Mempawah</title>
</head>

<body class="bg-ligth">
  

  


  <head>
    <!-- Tambahkan link ke file CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
      
  <body>
  <?php
    include "../koneksi.php";
    session_start();
    include "navbar.php";

  ?>
    <!-- Main content -->
    <section class="content">
    <?php
      
        error_reporting(0);
        $page = $_GET['p'];

        if ($page == "" || $page == "dashboard"){
          include "dashboard.php";
        }

        if($page=="test"){
            include "test.php";
        }
        else if($page=="dashboard"){
            include "dashboard.php";
        }
        else if($page=="jadwal"){
            include "jadwal.php";
        }
        else if($page=="absen"){
          include "katekis/absen.php";
        }
        else if($page=="detail_absen"){
          include "katekis/detail_absen.php";
        }
        else if($page=="baptis_dewasa"){
          include "baptis/dewasa.php";
        }
        else if($page=="detail_dewasa"){
          include "baptis/detail_dewasa.php";
        }
        else if($page=="baptis_bayi"){
          include "baptis/bayi.php";
        }
        else if($page=="detail_bayi"){
          include "baptis/detail_bayi.php";
        }
        else if($page=="katekumen"){
          include "baptis/katekumen.php";
        }
        else if($page=="form_jadwal"){
          include "form_jadwal.php";
        } 
        else if($page=="ac_delete_jadwal"){
        include "aksi/ac_delete_jadwal.php";
        }
        else if($page=="edit_jadwal"){
          include "edit_jadwal.php";
          }
        else if($page=="sejarah"){
            include "sejarah.php";   
        }
         ?>
    </section>

    <?php
    // include "footer.php"
    // header("location: home.php", true, 301);

    // exit();
    ?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>

</html>
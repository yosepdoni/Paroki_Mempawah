<?php
include '../session.php';
?>
<nav class="navbar navbar-expand-lg bg-info navbar-light ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Sekretariat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php
        // Check if the user is logged in and has the appropriate level
        $userLevel = isset($_SESSION["level"]) ? $_SESSION["level"] : "";

        // Display "Produk" only if logged in and not as "Admin"
        if (!empty($_SESSION['email']) && $userLevel === "admin") {
          echo '    
            <li class="nav-item">
                    <a class="nav-link active text-light fs-6" aria-current="page" href="./">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light fs-6" href="index.php?p=jadwal">Jadwal</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                  Pendaftaran
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="index.php?p=katekumen">Katekumen</a></li>
                  <li><a class="dropdown-item" href="index.php?p=baptis_dewasa">Calon Baptis Dewasa</a></li>
                  <li><a class="dropdown-item" href="index.php?p=baptis_bayi">Calon Baptis Bayi</a></li>
                </ul>
              </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                  Sakramen Baptis
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="index.php?p=acc_baptis_bayi">Baptis Bayi</a></li>
                  <li><a class="dropdown-item" href="index.php?p=acc_baptis_dewasa">Baptis Dewasa</a></li>
                </ul>
              </li>
            </ul>';
        }else {
            echo '
            <li class="nav-item">
                    <a class="nav-link active text-light fs-6" aria-current="page" href="./">Dashboard</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active text-light fs-6" aria-current="page" href="index.php?p=absen">Presensi</a>
            </li>
                </ul>';
        }
            
                
                if (isset($_SESSION['email'])) {
                    echo '
                    <span class="navbar-text">
                    <b>' . $_SESSION['email'] . '</b>
                    </span>';
                } else {
                }
                ?>
           
        </div>
    </div>
</nav>
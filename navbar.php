<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand py-0" href="#">
      <img src="images/logo.png" alt="Logo" height="50" class="me-2">
    </a>

    <!-- Navbar Toggler for small screens -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> Menu
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- Menu on the right side -->
      <ul class="navbar-nav ms-auto"> <!-- Add ms-auto class to align menu to the right -->
        <li class="nav-item">
          <a class="nav-link text-light" href="./#home">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="index.php?p=galeri">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="index.php?p=kontak">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="index.php?p=sejarah">Sejarah</a>
        </li>

        <?php
        // Check if the user is logged in and has the appropriate level
        $userLevel = isset($_SESSION["level"]) ? $_SESSION["level"] : "";

        // Display "Produk" only if logged in and not as "Admin"
        if (!empty($_SESSION['email']) && $userLevel !== "admin") {
          echo '
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                      Sakramen
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="index.php?p=katekumen">Katekumen</a></li>
                      <li><a class="dropdown-item" href="index.php?p=baptis_dewasa">Baptis Dewasa</a></li>
                      <li><a class="dropdown-item" href="index.php?p=baptis_bayi">Baptis Bayi</a></li>
                    </ul>
                  </li>
                    ';
        } else {
          // If logged in, display the user's email
          echo  '<li class="nav-item">
          <a class="nav-link text-light" href="login.php">Login</a>
        </li>';
        }

        // Check if the user is logged in
        if (isset($_SESSION['email'])) {
          echo '<li class="nav-item">
          <a class="nav-link text-light">' . $_SESSION['email'] . '</a>
        </li>;
        <li class="nav-item">
                            <a class="nav-link text-light" href="logout.php">Logout</a>
                          </li>';
        } else {
    
        }
        ?>


      </ul>
    </div>
  </div>
</nav>
<!-- akhir navbar -->
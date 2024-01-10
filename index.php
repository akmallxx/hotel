<?php
include './.config/db.php';
?>
<html lang="id">

<head>
  <title>Home -
    <?php echo $webname ?>
  </title>
  <link rel="icon" type="image/png" href="./.media/logo.png">

  <!-- bootstrap v5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap"
    rel="stylesheet">

  <!-- <link rel="stylesheet" href="./css/style.css"> -->
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }
    .h-font {
      font-family: 'Merienda', cursive;
    }

    body {
      background-color: white;
    }

    .header {
      background: url('./.media/hotel/exterior.jpg') center/cover no-repeat;
      color: #fff;
      text-align: center;
      padding: 80px 0;
      position: relative;
    }

    .header-content {
      position: absolute;
      top: 60%;
      /* Tempatkan elemen vertikal */
      left: 50%;
      /* Tempatkan elemen di tengah horizontal */
      transform: translate(-50%, -50%);
      /* Geser elemen ke tengah */
      text-align: center;
    }

    .header-content h1 {
      font-size: 50px;
      margin-bottom: 10px;
    }

    .header-content p {
      font-size: 20px;
    }
  </style>
</head>

<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold fs-3 h-font" href="./#">
      Sriwijaya Hotel
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#home">
            Beranda
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">
            Fasilitas
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            Hubungi Kami
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">
            Reservasi
          </a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">

        </li>
        <li class="nav-item">

        </li>
        <li class="nav-item">
          <a href="#" style="text-decoration: none;">
          <button type="button" class="btn btn-outline-secondary">Login</button>
          </a>
          <a href="#" style="text-decoration: none;">
          <button type="button" class="btn btn-outline-secondary">Register</button>
          </a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Table List
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <?php
            $query = "SHOW TABLES";
            $result = $conn->query($query);

            while ($row = $result->fetch_row()) {
              echo "<li><a class='dropdown-item' href='user/" . $row[0] . ".php'>" . $row[0] . "</a></li>";
            }
            ?>
          </ul>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<!-- Header -->
<header class="header" id="home">
  <div class="header-content">
  </div>
</header>
<!-- End Header -->

<!-- Content -->
<div id="about" class="container-fluid text-center" style="padding: 40px 150px">
  <h1 style="border-bottom: 3px solid brown; display: inline;">HOTEL TERTUA DI JAKARTA</h1><br><br><br>
  <p>
    Menurut Catatan sejarah dari Negeri Belanda dan sesuai dengan Catatan yang ada dari Koninklijk voor Tall, Land en
    Volkenkunde Royal Institute of Linguistics and Anthropology di Leiden-Belanda, hotel yang sekarang bernama Hotel
    Sriwijaya berdiri pada tahun 1810. <br><br>

    Sejarah awal Hotel Sriwijaya di mulai pada tahun 1810 hotel ini sudah berdiri dan namanya tidak tercatat dalam
    sejarah. Kemudian sejak 1863, gedung utama dari hotel ini pada waktu itu digunakan sebagai restoran, perusahaan
    konfeksi dan toko C.A.W Cavadino yang pada zamannya sangat terkenal untuk para pendatang yang memiliki keinginan
    untuk menikmati cokelat, roti, cerutu Belanda, Havana, Manila, comestibles dan anggur dengan kualitias terbaik.
  </p>
</div>
<!-- End Content -->

</html>
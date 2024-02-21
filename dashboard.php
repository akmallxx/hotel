<?php
// session_start();
// if (!isset($_SESSION['username'])) {
//     header("Location: index.php");
//     exit();
// }



include './.config/db.php';
$pageName = ucfirst(basename(__FILE__, ".php"));
?>
<html lang="id">

<head>
  <title>
    <?php echo $webname ?>
  </title>
  <?php include 'header.php'; ?>
</head>

<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold fs-3 h-font" href="./#">
      Sriwijaya Hotel
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#home">
            Beranda
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#fasilitas">
            Fasilitas
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#kontak">
            Hubungi Kami
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#reservasi">
            Reservasi
          </a>
        </li>
      </ul>
      <ul class="navbar-nav">
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
        <li class="nav-item">
          <button type="button" class="btn btn-outline-light">
            Keluar

            
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<!-- Banner -->
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" id='home'>
  <h1 class="text-white" style="font-size: 60px;"><b>SRIWIJAYA HOTEL</b></h1>
</div>

<!-- Main Content -->
<div id="about" class="container-fluid text-center" style="padding: 40px 150px">
  <h1 style="border-bottom: 3px solid red; display: inline;">HOTEL TERTUA DI JAKARTA</h1><br><br><br>
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
<!-- End Main Content -->

<!-- Footer -->
<footer
          id="kontak"
          class="text-center text-lg-start text-white"
          style="background-color: #1c2331"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4"
             style="background-color: rgba(0, 0, 0, 0.2)"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="#" class="text-white me-4">
        <i class="bi bi-facebook"></i>
        </a>
        <a href="#" class="text-white me-4">
          <i class="bi bi-twitter-x"></i>
        </a>
        <a href="#" class="text-white me-4">
          <i class="bi bi-instagram"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Company name</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              Here you can use rows and columns to organize your footer
              content. Lorem ipsum dolor sit amet, consectetur adipisicing
              elit.
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> Jl. Veteran No.1, Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Bali 10110</p>
            <p><i class="fas fa-envelope mr-3"></i> cs@sriwijayahotel.com</p>
            <p><i class="fas fa-phone mr-3"></i> +62 817 7363 7362</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2024 Copyright: <b class="text-white">Sriwijaya Hotel</b>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

<script src="./js/bootstrap.bundle.min.js"></script>
<script>
  var nav = document.querySelector('nav');

  window.addEventListener('scroll', function () {
    if (window.pageYOffset > 100) {
      nav.classList.add('bg-dark', 'shadow')
    } else {
      nav.classList.remove('bg-dark', 'shadow')
    }
  })
</script>

</html>
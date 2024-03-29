<?php
include './.config/db.php';
$pageName = ucfirst(basename(__FILE__, ".php"));
?>
<html lang="id">
<head>
<title><?php echo $webname ?>  </title>
  <?php include 'header.php'; ?>
</head>

<!-- Login Modal -->
<div class="modal fade" id="login-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Halaman Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="user/login.php" id="login-form" name="login-form">
          <div>
            <div class="mb-3">
              <label for="inputEmail" class="form-label">Email</label>
              <input type="email" class="form-control" name="login-email" required>
            </div>
            <div class="mb-3">
              <label for="inputPassword" class="form-label">Password</label>
              <input type="password" class="form-control" name="login-password" id="login-password" required>
            </div>


            <!-- Button Modal -->
            <div class="mb-3 text-center">
              <br>
              <button type="submit" class="btn btn-success">
                Login
              </button>
              <br>
              Belum punya akun? <a data-bs-dismiss="modal" data-bs-toggle="modal" href="#register-modal">Register</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Login Modal -->

<!-- Register Modal -->
<div class="modal fade" id="register-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5);">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Halaman Registrasi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="user/register.php" id="registration-form" name="registration-form">
          <div>
            <div class="mb-3">
              <label for="inputFullname" class="form-label">Nama Lengkap <b style="color: red;">*</b></label>
              <input type="text" class="form-control" name="fullname" required>
            </div>
            <div class="mb-3">
              <label for="inputUsername" class="form-label">Nama Pengguna <b style="color: red;">*</b></label>
              <input type="text" class="form-control" name="username" id="inputUsername" required>
              <div id="passwordHelp" class="form-text"><b style="color: red;">*</b> Hanya huruf kecil, titik, garis
                bawah, dan tidak boleh ada spasi.</div>
            </div>
            <div class="mb-3">
              <label for="inputId" class="form-label">No. Telepon <b style="color: red;">*</b></label>
              <input type="number" class="form-control" name="telepon" required>
            </div>
            <div class="mb-3">
              <label for="inputEmail" class="form-label">Alamat Email <b style="color: red;">*</b></label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
              <label for="inputAlamat" class="form-label">Alamat Rumah <b style="color: red;">*</b></label>
              <textarea name="alamat" class="form-control" cols="30" rows="4" required></textarea>
            </div>
            <div class="mb-3">
              <label for="inputPassword" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password" required>
              <div id="passwordHelp" class="form-text"><b style="color: red;">*</b> Password harus lebih dari 8 karakter
              </div>
            </div>
            <div class="mb-3">
              <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
              <input type="password" id="confirm-password" class="form-control" name="confirm-password" required>
              <div id="passwordHelp" class="form-text"><b style="color: red;">*</b> Password harus lebih dari 8 karakter
              </div>
            </div>

            <script>
              document.getElementById('registration-form').addEventListener('submit', function (event) {
                // Username Checker
                var username = document.getElementById('inputUsername').value;

                // Regular expression to allow only lowercase alphabets, dots, underscores, and no spaces
                var usernameRegex = /^[a-z._]+$/;

                if (!usernameRegex.test(username)) {
                  alert('Nama Pengguna tidak valid! Hanya huruf kecil, titik, garis bawah, dan tidak boleh ada spasi.');
                  event.preventDefault(); // Prevent form submission
                } else if (username.length > 30) {
                  alert('Nama Pengguna terlalu panjang! buatlah nama pengguna maksimal 30 karakter.');
                  event.preventDefault(); // Prevent form submission
                }

                // Username Availability Checker


                // Password Checker
                var password = document.getElementById('password').value;
                var confirmPassword = document.getElementById('confirm-password').value;

                if (password.length < 8) {
                  alert('Password harus memiliki setidaknya 8 karakter.');
                  event.preventDefault(); // Prevent form submission
                } else if (password !== confirmPassword) {
                  alert('Password tidak cocok! Harap periksa kembali.');
                  event.preventDefault(); // Prevent form submission
                }
              });
            </script>


            <!-- Button Modal -->
            <div class="mb-3 text-center">
              <br>
              <button type="submit" class="btn btn-success btn-lg" name="submit-register">
                Registrasi
              </button>
              <br>
              Sudah punya akun? <a data-bs-dismiss="modal" data-bs-toggle="modal" href="#login-modal">Login</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Register Modal -->

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
          <a class="nav-link" href="#" onclick="notLogged()">
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
          <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#login-modal">
            Login
          </button>
          <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#register-modal">
            Register
          </button>
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

<script>
  const myModal = document.getElementById('myModal')
  const myInput = document.getElementById('myInput')

  myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
  })

  function notLogged() {
    alert('Harap login terlebih dahulu!')
  }
</script>

</html>
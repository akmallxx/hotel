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
        <form method="post" action="db/login.php" id="registration-form" name="registration-form">
          <div>
          <div class="mb-3">
              <label for="inputEmail" class="form-label">Alamat Email <b style="color: red;">*</b></label>
              <input type="text" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
              <label for="inputPassword" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password" required>
            </div>


            <!-- Button Modal -->
            <div class="mb-3">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                Batal
              </button>
              <button type="submit" class="btn btn-success">
                Simpan
              </button>
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
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Halaman Registrasi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="db/register.php" id="registration-form" name="registration-form">
          <div>
            <div class="mb-3">
              <label for="inputFullname" class="form-label">Nama Lengkap <b style="color: red;">*</b></label>
              <input type="text" class="form-control" name="fullname" required>
            </div>
            <div class="mb-3">
              <label for="inputUsername" class="form-label">Nama Pengguna <b style="color: red;">*</b></label>
              <input type="text" class="form-control" name="username" id="inputUsername" required>
              <div id="passwordHelp" class="form-text"><b style="color: red;">*</b> Hanya huruf kecil, titik, garis bawah, dan tidak boleh ada spasi.</div>
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
              <label for="inputAlamat" class="form-label">Alamat Rumah <p style="font-size: 12px;">opsional</p></label>
              <textarea name="alamat" class="form-control" cols="30" rows="4"></textarea>
            </div>
            <div class="mb-3">
              <label for="inputPassword" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password" required>
              <div id="passwordHelp" class="form-text"><b style="color: red;">*</b> Password harus lebih dari 8 karakter</div>
            </div>
            <div class="mb-3">
              <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
              <input type="password" id="confirm-password" class="form-control" name="confirm-password" required>
              <div id="passwordHelp" class="form-text"><b style="color: red;">*</b> Password harus lebih dari 8 karakter</div>
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
            <div class="mb-3">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                Batal
              </button>
              <button type="submit" class="btn btn-success">
                Simpan
              </button>
              Sudah punya akun? <a data-bs-toggle="modal"
            data-bs-target="#login-modal">Login</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Register Modal -->

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
        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
            data-bs-target="#login-modal">
            Login
          </button>
          <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
            data-bs-target="#register-modal">
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

<script>
  const myModal = document.getElementById('myModal')
  const myInput = document.getElementById('myInput')

  myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
  })

  function showAlert(title, text) {
    Swal.fire({
      title: title,
      text: text,
    })
  }
</script>

</html>
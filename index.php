<?php
include './.config/db.php';
?>
<html lang="id">

<head>
    <title>Home - <?php echo $webname ?></title>
    <link rel="icon" type="image/png" href="https://hotelsriwijaya.com/wp-content/uploads/2022/06/logo_hotel-removebg-preview.png">
    <link rel="stylesheet" href="./.css/style.css">

    <!-- bootstrap v5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white">
  <div class="container-fluid">
    <a class="navbar-brand" href="./">
      <img src="https://hotelsriwijaya.com/wp-content/uploads/2022/06/cropped-logo-hotel-48x48.jpg" alt="sriwijaya logo">
      <?php echo $webname ?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Table List
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <?php
            $query = "SHOW TABLES";
            $result = $conn->query($query);

            while ($row = $result->fetch_row()) {
              echo "<li><a class='dropdown-item' href=" . $row[0] . ">" . $row[0]. "</a></li>";
            }
            ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<!-- Content -->
<div class="container-fluid text-center">
  <!-- Slideshow -->
   
  <!-- End Slideshow -->

  <h3>alok geming</h3>
  <p>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste eum voluptas accusantium a earum consequatur corporis pariatur delectus, libero fugit debitis exercitationem saepe possimus culpa voluptatum ratione iure sunt ipsum.
  </p>
</div>
<!-- End Content -->
</html>